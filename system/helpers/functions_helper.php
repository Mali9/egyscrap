<?php
defined('BASEPATH') OR exit('No direct script access allowed');
function get_title($title) {
    echo $title;
}
function lang($phrase) {
      
    if($this->session->userdata('lang') == 'en'){
    static $en = array(
        'HOME' => 'Home',
        'CONTACT'=>'contact us',
        'GALLERY'=>'gallery',
        'ABOUT' => 'about us',
        'PANEL' => 'Cpanel',
        'LOGOUT' => 'logout',
    );
    echo  $en[$phrase];
    }
    else
    {
     static $ar = array(
        'HOME' => 'الصفحه الرئيسيه',
        'CONTACT'=>'تواصل معنا ',
        'GALLERY'=>'صور الرحلات ',
        'ABOUT' => 'عن الشركه',
        'controll Panel' => 'لوحه التحكم',
        'LOGOUT' => 'تسجيل الخروج',
        
    );
    echo  $ar[$phrase];
    }
}

?>