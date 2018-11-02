<?php

class AutoInsert extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auto/AutoDb');
    }
    public function InsertTimeline()
    {
        $data['places_title'] = 'Binh Thuan';
        $data['url'] = 'binh-thuan';
        $data['date'] = '2017-6-20';
        $data['keysearch'] = 'binh thuan, ke ga, 2017-6-20';
        $data['cover_img'] = '1512093621-cover.jpg';
        $data['avatar_img'] = '1512093621-ava.jpg';
        $data['description'] = 'n the search field, start typing the search string. As you type, the matching occurrences are highlighted in the editor, and a Replace pop-up dialog box opens at the first occurrence, suggesting to replace the current occurrence, or all of them, with an empty string.';
        $data['create'] = date("Y-m-d h:i:s");
        $data['update'] = date("Y-m-d h:i:s");
        $data['user'] = 10;
        for ($i = 0; $i < 101; $i ++) {
            $this->AutoDb->TimelineInsert('timeline', $data);
        }
    }
    public function TestKeySearch()
    {

        $keyword = ' pham luc, yen tuyet';

        $keyword = str_replace(', ',',', $keyword);
        $keyword = ltrim($keyword);
        $data = $this->AutoDb->getKeySearch('tin_tuc', $keyword);

        var_dump($keyword);
    }
}