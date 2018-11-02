<?php

require_once(APPPATH.'controllers/privated/TimelineIndexHandle/C_thumbnail_handle.php');

class C_timeline extends C_thumbnail_handle
 {
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
	{
        if ($this->Lover->isLover($this->userid,'user') === true) {
            try {
                $data['title'] = 'Timeline';
                $data['path'] = 'layout/privated/timeline';
                $data['style'] = array(
                    'public/css/private/time_line_css.css',
                    'public/css/font-awesome.min.css'
                );
                $data['script'] = array(
                    'layout/ajax/TimelineIndexShowmore'
                );
                /**@Pagination */
                $data['timelineData'] = $this->M_timeline_index->getTimeline('timeline');
                $data['isAvailable'] = $this->isAvailable(9, 9, 'timeline') ? ($this->isAvailable(10, 9, 'timeline') != false) : '';
                $this->load->view('layout/privated/layout', $data);
            } catch (Exception $e) {
                die('Not index');
            }
        } else {
            $data['title'] = 'Errors'; $this->load->view('errors/index',$data);
        }
	}
	public function showmoreTimelineIndexAjax()
    {
        if (isset($_POST['_page'])) {
            $page =  $_POST['_page'];
            $limit = 9;
            $start = $limit*($page-1);
            $tablename = 'timeline';
            $jsonData = array();
            if ($this->isAvailable($start, $limit, $tablename) === true) {
                $data = $this->M_timeline_index->getTimelineLimit($start, $limit, $tablename);
                $jsonData['data'] = $data;
                /**@Page @next*/
                $pagenext = $page+1;
                $startnext = $limit*($pagenext - 1);
                if ($this->isAvailable($startnext, $limit, $tablename) === true) {
                    $jsonData['next'] = true;
                } else $jsonData['next'] = false;
                $jsonData['success'] = true;
            } else $jsonData['success'] = 'Not available!';
        }
        echo json_encode($jsonData);
    }
	public function timelineDetail()
	{
	    if ($this->Lover->isLover($this->userid,'user') === true) {
            if ($this->uri->segment(3)) {
                $id = end(explode("-", $this->uri->segment(3)));
            } else die('Not found uri for this place!');

            /*UPLOAD THUMBNAIL*/
            if (isset($_POST['uploadBtn'])) {
                //var_dump($this->Admin->isBoss(11, 'user'));
                foreach ($_FILES['files']['tmp_name'] as $key => $file) {
                   if ($this->isImage($_FILES['files']['tmp_name'][$key], $_FILES['files']['size'][$key], 5242880) == true) {
                        $this->isImage = false;
                    } else {
                        die('Only can upload be image file format!');
                        break;
                    };
                    $this->load($_FILES['files']['tmp_name'][$key]);
                    $newSize = $this->calsNewSizeWidth();
                    $this->resizeToWidth($newSize['width']);
                    $this->resizeToHeight($newSize['height']);
                    $_FILES['files']['name'][$key] = time() . '-' . $key . '.' . end(explode(".", $_FILES['files']['name'][$key]));
                    $dataThumbnail['place_id'] = $id;
                    $dataThumbnail['image_name'] = $_FILES['files']['name'][$key];
                    $dataThumbnail['user'] = $this->userid;
                    $dataThumbnail['date_create'] = date("Y-m-d h:i:s");
                    $this->save('./public/privated/Timeline/Thumbnail/' . $dataThumbnail['image_name'], $_FILES['files']['tmp_name'][$key]);

                    if ($this->M_privated->insert('tl_thumbnail', $dataThumbnail)) {

                    } else {
                        die("Insert database is errors!");
                    }
                }
            } /*IF*/
            /*---------INTERFACE----------------*/
            $data['timelineData'] = $this->M_getdata_interface->getRowTimeline('timeline', $id);
            $data['thumbnailData'] = $this->M_getdata_interface->getThumbnail($id, 'tl_thumbnail');
            $data['score'] = $this->M_votes->getAverageScore($id, 'tl_total_score_vote');

            $keyword = str_replace(', ', ',', $data['timelineData']['keysearch']);
            $keyword = ltrim($keyword);
            $data['relativePostNews'] = $this->M_getdata_interface->postRelative('tin_tuc', $keyword);
            $data['relativeAlbum'] = $this->M_getdata_interface->postRelative('album', $keyword);
            $data['title'] = $data['timelineData']['places_title'] . ' | Timeline | 123NAM';
            $data['style'] = array(
                'public/css/bootstrap.min.css',
                'public/css/font-awesome.min.css',
                'public/css/private/timelineDetail.css',
                'public/css/private/votes_comp.css',
                'public/css/private/time_line_post_relative.css',
                'public/css/font-awesome.min.css',
                'public/css/private/rank.timeline.css',
                'public/css/private/thumbnail.timeline.css'
            );
            $data['script'] = array(
                'public/js/jquery-1.12.3.min.js',
                'public/js/bootstrap.min.js',
                'public/js/private/timeline/jsmenu.min.js',
                'public/js/private/timeline/jsvote.min.js',
                'public/js/private/timeline/PrivateUploadFile.js'
            );
            $data['ajaxPhp'] = array(
                'layout/ajax/tl_votes_ajax'
            );
            $this->load->view('layout/privated/timeline/index', $data);
        } else {
            $data['title'] = 'Errors'; $this->load->view('errors/index',$data);
        }
	}
	public function votesAjax()
    {
       if (isset($_POST['_score']) && $_POST['place_id']) {
          $score = $_POST['_score'];
          $place_id = $_POST['place_id'];
       }
       if (is_nan($place_id) === false && is_nan($score) === false) {
           $jsonData = array();
           if ($this->M_votes->isVoted($this->userid, $place_id, 'tl_votes') === false)
           {
              /*Not yet voted*/
              /**@insert*/
              $dataInsertVote = array();
              $dataInsertVote['place_id'] = $place_id;
              $dataInsertVote['user'] = $this->userid;
              $dataInsertVote['score'] = $score;
              $dataInsertVote['date_vote'] = date("Y-m-d h:s:i");
              if ($this->M_votes->insertVotes($dataInsertVote, 'tl_votes') === true) {
                  $jsonData['success'] = true;
                  $average = $this->calScoreAverage($place_id, 'tl_votes', 'tl_total_score_vote');
                  $jsonData['averageScore'] = $average;
              } else $jsonData['success'] = false;
           } else {
               /*Voted*/
               /**@update*/
               $dataUpdateVote = array();
               $dataUpdateVote['place_id'] = $place_id;
               $dataUpdateVote['user'] = $this->userid;
               $dataUpdateVote['score'] = $score;
               $dataUpdateVote['date_vote'] = date("Y-m-d h:s:i");
               if ($this->M_votes->updateVotes($place_id, $this->userid, $dataUpdateVote, 'tl_votes')) {
                  $jsonData['success'] = true;
                  $average = $this->calScoreAverage($place_id, 'tl_votes', 'tl_total_score_vote');
                  $jsonData['averageScore'] = $average;
               } else $jsonData['success'] =false;
           }
           echo json_encode($jsonData);

       } /*IF*/
    } /**@*/
    /**@FUNCTION @EXTENTION*/
    public function calScoreAverage($place_id, $tablenameScore, $tablenameAverage)
    {
       $scoreResult = $this->M_votes->getScorePlace($place_id, $tablenameScore);
       if (!empty($scoreResult)) {
           $totalVote = 0;
           $scoreVote = 0;
           $average = 0;
           foreach ($scoreResult as $key=>$score) {
               $totalVote = $key+1;
               $scoreVote += $score['score'];
           }
           $average = $scoreVote/$totalVote;

           if ($this->M_votes->checkIssetScoreAverage($place_id,$tablenameAverage) === true) {
               /**@Update*/
               $dataVote['total_score'] = $average;
               $this->M_votes->updateAverageVoteScore($place_id, $tablenameAverage, $dataVote);

           } else {
               /**@Insert*/
               $dataVote['place_id'] = $place_id;
               $dataVote['total_score'] = $average;
               $this->M_votes->insertVotes($dataVote, $tablenameAverage);
           }
       } /**@if*/

       return $average;
    }
    public function isAvailable($start, $limit, $tablename)
    {
        if ($this->M_timeline_index->getTimelineLimit($start, $limit, $tablename) != false) {
            return true;
        } else return false;
    }

 }
 ?>