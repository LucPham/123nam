<?php
class FormJs extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

    }
    public function getData()
    {
        $this->load->view('Test/index');
    }
    public function getJsData()
    {
       foreach ($_FILES['image']['tmp_name'] as $key=>$item) {

        var_dump($this->resize_image('./public/test/'.$_FILES['image']['name'][$key], 320, 320));
       // move_uploaded_file($_FILES['image']['tmp_name'][$key], );
       }
    }
    public function resize_image($file, $w, $h, $crop=FALSE)
    {
        list($width, $height) = getimagesize($file);
        $r = $width / $height;
        if ($crop) {
            if ($width > $height) {
                $width = ceil($width-($width*abs($r-$w/$h)));
            } else {
                $height = ceil($height-($height*abs($r-$w/$h)));
            }
            $newwidth = $w;
            $newheight = $h;
        } else {
            if ($w/$h > $r) {
                $newwidth = $h*$r;
                $newheight = $h;
            } else {
                $newheight = $w/$r;
                $newwidth = $w;
            }
        }
        $src = imagecreatefromjpeg($file);
        $dst = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

        return $dst;

    }
}
