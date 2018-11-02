<?php
session_start();

class C_thumbnail_handle extends CI_Controller
{
	protected $userid;
	public $image;
	public $image_type;
	public $isImage;
	public function __construct()
 	{
 		parent::__construct();
		$this->load->model('nguoi_dung/M_nguoi_dung');
		$this->load->model('privated/M_privated');
		$this->load->model('privated/Timeline/M_timeline_index');
		$this->load->model('privated/Timeline/M_getdata_interface');
		$this->load->model('privated/Timeline/M_votes');
		$this->load->model('Auth/Lover');
		$this->load->model('Auth/Admin');
		$this->load->library('session');
		$this->userid = $this->issetCookie();
 	}
    public function issetCookie()
	{
		$user = null;
		if (isset($_COOKIE['verifyAuthID']) && !$this->session->userdata('id')) {

			$userArr = $this->M_nguoi_dung->getUserFromTokenId($_COOKIE['verifyAuthID']);
			$user = $userArr['id'];
		} else
			$user = $this->session->userdata('id');

		return $user;
	}
	/**
	 * @calsNewSizeWidth
	 *
	 * */
	public function calsNewSizeWidth()
    {
        $width = imagesx($this->image);
        $height = imagesy($this->image);
        $ratios = $width/$height;
        $newSize = array();
        if ($width > 720)
        {
            $width = 720;
            $height = ceil($width/$ratios);
            $newSize['width'] = $width;
            $newSize['height'] = $height;
            return $newSize;
        } elseif ($width > 320 && $width <= 720) {
            $newSize['width'] = $width;
            $newSize['height'] = $height;
            return $newSize;
        } elseif ($width < 320) {
            echo $width;
        }
    }
    /**
     *@isImag
     * check file upload is image format
     */
    public function isImage($file, $size, $sizeAllow)
    {
        $fileTypeAllow = array('image/jpeg', 'image/png', 'image/jpg', 'image/gif');
        $image_info = getimagesize($file);
        if (in_array($image_info['mime'], $fileTypeAllow) == true)
        {
            return true;
        } else return false;
    }
    /**
     * @@load
     */
    public function load($filename)
    {
        $image_info = getimagesize($filename);

        $this->image_type = $image_info['mime'];

        if ($this->image_type == 'image/jpeg')
        {
            $this->image = imagecreatefromjpeg($filename);
        } elseif ($this->image_type == 'image/png'){
            $this->image = imagecreatefrompng($filename);
        } elseif ($this->image_type == 'image/gif') {
            $this->image = imagecreatefromgif($filename);
        }
    }
    /**
    @getWidth
     */
    public function getWidth()
    {
        return imagesx($this->image);
    }
    /**
    @getHeight
     */
    public function getHeight()
    {
        return imagesy($this->image);
    }
    /**
     * @resize
     */
    public function resize($width, $height)
    {
        $newimage = imagecreatetruecolor($width,$height);
        imagecopyresampled($newimage, $this->image, 0, 0,0,0, $width, $height, $this->getWidth(), $this->getHeight());
        $this->image = $newimage;
    }
    /**
     * @resizeToWidth
     */
    public function resizeToWidth($width)
    {
        $ratio = $width/$this->getWidth();
        $height = $this->getHeight()*$ratio;
        $this->resize($width,$height);
    }
    /**
     * @resizeToHeight
     */
    public function resizeToHeight($height)
    {
        $ratio = $height/$this->getHeight();
        $width = $this->getWidth()*$ratio;
        $this->resize($width, $height);
    }
    /**
     * @save
     */
    public function save($path, $filename, $compression=75, $permission=null)
    {
        $image_info = getimagesize($filename);
        $this->image_type = $image_info['mime'];
        if ($this->image_type == 'image/jpeg')
        {
            imagejpeg($this->image, $path, $compression);
        } elseif ($this->image_type == 'image/png'){
            imagepng($this->image, $path, $compression);
        } elseif ($this->image_type == 'image/gif') {
            imagegif($this->image, $path);
        }
        if ($permission != null)
        {
            chmod($filename, $permission);
        }
    }
}