<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = 'Mycustom404Ctrl';
$route['translate_uri_dashes'] = FALSE;


$route['auto/timeline'] = 'Auto/AutoInsert/InsertTimeline';

$route['tim-kiem'] = 'search/C_search/search';
$route['tim-kiem/album'] = 'search/C_search/searchAlbum';
$route['tim-kiem/tin-tuc'] = 'search/C_search/searchNews';

// detail
$route['trang-nhat/([a-zA-Z]+)'] = 'quan_tri/C_tin_tuc/chuyen_muc_tin';
$route['tin-tuc/([a-zA-Z]+)'] = 'quan_tri/C_tin_tuc/chuyen_muc_tin';
$route['post/([a-zA-Z]+)'] = 'quan_tri/C_tin_tuc/chuyen_muc_tin';
$route['album-hinh'] = 'quan_tri/C_tin_tuc/chuyen_muc_album';
$route['tin-tuc/([a-zA-Z0-9_-]+)/([0-9]+)'] = 'quan_tri/C_tin_tuc/chi_tiet_tin';
$route['privated/([a-zA-Z0-9_-]+)/([0-9]+)'] = 'quan_tri/C_tin_tuc/privated_chi_tiet_tin';

$route['tin-tuc/photo/([a-zA-Z0-9_-]+)/([0-9]+)'] = 'quan_tri/C_tin_tuc/chi_tiet_tin_photo';
$route['privated/photo/([a-zA-Z0-9_-]+)/([0-9]+)'] = 'quan_tri/C_tin_tuc/privated_chi_tiet_tin_photo';

$route['emagazine/([a-zA-Z0-9_-]+)/([0-9]+)'] = 'emegazine/C_emegazine_user/detail';
$route['privated/emagazine/([a-zA-Z0-9_-]+)/([0-9]+)'] = 'emegazine/C_emegazine_user/privated_detail';
$route['private/myletter'] = 'privated/C_letter';



$route['public'] = 'foldersystem/C_foldersystem/public_list';

$route['folder'] = 'foldersystem/C_foldersystem/readFolder';
$route['folder/delete'] = 'foldersystem/C_foldersystem/deletefolder';



$route['su-kien/create'] = 'su_kien/C_su_kien/create';
$route['su-kien/su-kien-cua-toi'] = 'su_kien/C_su_kien/myEvents';
$route['su-kien/su-kien-cua-toi/review/([0-9]+)'] = 'su_kien/C_su_kien/review';
$route['su-kien/su-kien-cua-toi/chinh-sua/([0-9]+)'] = 'su_kien/C_su_kien/edit';
$route['su-kien/hom-nay'] = 'su_kien/C_su_kien/evtToday';
$route['su-kien/su-kien-cua-toi/xoa/([0-9])+'] = 'su_kien/C_su_kien/delete';


$route['dang-xuat'] = 'nguoi_dung/User_authentication/logout';
$route['quen-mat-khau'] = 'nguoi_dung/C_nguoi_dung/forgetPasswordIndex';
$route['user-password-verify'] = 'nguoi_dung/C_nguoi_dung/resetPW';
$route['email-active-verify'] = 'nguoi_dung/C_nguoi_dung/changeEmailHandle';
$route['doi-mat-khau'] = 'nguoi_dung/C_nguoi_dung/changed_password';
$route['profile'] = 'nguoi_dung/C_nguoi_dung/profileIndex';
$route['profile/email'] = 'nguoi_dung/C_nguoi_dung/updateEmailHandle';
$route['profile/cap-nhat-thong-tin'] = 'nguoi_dung/C_nguoi_dung/profileUpdate';


$route['nknx'] = 'nhat_ky/C_nhat_ky/index';
$route['nknx/luu-but/([a-zA-Z0-9_-]+)/([0-9]+)'] = 'nhat_ky/C_nhat_ky/chi_tiet_tin';

$route['lucpham-profile'] = 'cv/C_cv';


$route['privated'] = 'privated/C_privated';
$route['private/album'] = 'privated/C_list_load/menu_tags_list';
$route['private/mytag'] = 'privated/C_list_load/menu_tags_list';

$route['private/timeline'] = 'privated/C_timeline';
$route['private/timeline/([a-zA-Z0-9_-]+)'] = 'privated/C_timeline/timelineDetail';


$route['quan-tri/user/list/this-month'] = 'quan_tri/C_user/listUserRegisterThisMonth';
$route['quan-tri/user/list/this-month/([0-9]+)'] = 'quan_tri/C_user/listUserRegisterThisMonth';
$route['quan-tri/user/list/([a-zA-Z]+)'] = 'quan_tri/C_user/listUserOderByLogDate';
$route['quan-tri/user/list/([a-zA-Z]+)/([0-9]+)'] = 'quan_tri/C_user/listUserOderByLogDate';
$route['quan-tri/register-manage'] = 'quan_tri/C_user/registerManageIndex';
$route['quan-tri/user/overview'] = 'quan_tri/C_user/overview';
$route['quan-tri/su-kien/tao-su-kien'] = 'quan_tri/C_su_kien/tao_su_kien';
$route['quan-tri/banner/update/([a-zA-Z]+)'] = 'quan_tri/C_banner_img/update';
$route['quan-tri/banner/banner-manager'] = 'quan_tri/C_banner_img/banner_manager_index';
$route['quan-tri/album/tao-album'] = 'quan_tri/C_tin_tuc/upload';
$route['quan-tri/album/update/([0-9]+)'] = 'quan_tri/C_tin_tuc/update_album';
$route['quan-tri/tin-tuc-photo/update/([0-9]+)'] = 'quan_tri/C_tin_tuc/update_album';
$route['quan-tri/album/danh-sach-album'] = 'quan_tri/C_tin_tuc/ds_album';
$route['quan-tri/album/danh-sach-album/([0-9]+)'] = 'quan_tri/C_tin_tuc/ds_album';
$route['quan-tri/cho-phe-duyet'] = 'quan_tri/C_tin_tuc/cho_phe_duyet';
$route['quan-tri/cho-phe-duyet/([0-9]+)'] = 'quan_tri/C_tin_tuc/cho_phe_duyet';
$route['quan-tri/album-cho-phe-duyet'] = 'quan_tri/C_tin_tuc/album_cho_phe_duyet';
$route['quan-tri/album-cho-phe-duyet/([0-9]+)'] = 'quan_tri/C_tin_tuc/album_cho_phe_duyet';

$route['quan-tri/privated/slide-system'] = 'privated/C_privated/slide_system';	


$route['quan-tri/timeline/editor'] = 'quan_tri/C_thu7/thu7Editor';
$route['quan-tri/timeline/update/([0-9]+)'] = 'quan_tri/C_thu7/update';
$route['quan-tri/timeline/record-list'] = 'quan_tri/C_thu7/recordList';
$route['quan-tri/timeline/record-list/([0-9]+)'] = 'quan_tri/C_thu7/recordList';


$route['quan-tri/cho-phe-duyet/([a-zA-Z0-9_-]+)/([0-9]+)'] = 'quan_tri/C_tin_tuc/chi_tiet_tin_cho_phe_duyet';

$route['quan-tri/cho-phe-duyet/photo/([a-zA-Z0-9_-]+)/([0-9]+)'] = 'quan_tri/C_tin_tuc/chi_tiet_tin_cho_phe_duyet_photo';
$route['album/([a-zA-Z0-9_-]+)/([0-9]+)'] = 'album/C_album/album_chi_tiet';

$route['privated/album/([a-zA-Z0-9_-]+)/([0-9]+)'] = 'album/C_album/privated_album_chi_tiet';



$route['register'] = 'nguoi_dung/C_nguoi_dung/dang_ky';
$route['quan-tri/cho-phe-duyet/emegazine/([a-zA-Z0-9_-]+)/([0-9]+)'] = 'emegazine/C_emegazine/chi_tiet_tin_cho_phe_duyet_Emegazine';
$route['emegazine/change/([0-9]+)'] = 'emegazine/C_emegazine/update';




$route['trang-nhat/([a-zA-Z0-9_-]+)/([0-9]+)'] = 'quan_tri/C_tin_tuc/chi_tiet_tin';
$route['hot/([a-zA-Z0-9_-]+)/([0-9]+)'] = 'quan_tri/C_tin_tuc/chi_tiet_tin';
$route['quan-tri/danh-muc-tin-tuc/([a-zA-z0-9]+)'] = 'quan_tri/C_tin_tuc/ds_tin_loai_tin';
$route['quan-tri/danh-muc-tin-tuc/([a-zA-Z0-9]+)/([0-9]+)'] = 'quan_tri/C_tin_tuc/ds_tin_loai_tin';

$route['quan-tri/su-kien/danh-sach-su-kien'] = 'quan_tri/C_su_kien/ds_su_kien';
$route['quan-tri/su-kien/danh-sach-su-kien/([0-9]+)'] = 'quan_tri/C_su_kien/ds_su_kien';
//quan-tri/list/'.$item['loai_tin'].'/update/'.$item['id']
$route['quan-tri/list/([a-zA-Z0-9_-]+)/edit/([0-9]+)'] = 'quan_tri/C_tin_tuc/chinh_sua_bai_viet';
$route['quan-tri/xuat-ban'] = 'quan_tri/C_tin_tuc/xuat_ban';
$route['quan-tri/emegazine/editor'] = 'emegazine/C_emegazine/editor';



$route['Administrator'] = 'quan_tri/C_tin_tuc/index';



$route['userTool'] = 'nguoi_dung/C_nguoi_dung/createUserTool';


