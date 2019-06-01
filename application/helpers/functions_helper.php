
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_lang')){
function get_lang($phrase) {
      $ci =& get_instance();
    if($ci->session->userdata('lang') == 'en'){
    static $en = array(
        'HOME' => 'Home',
        'CONTACT'=>'contact us',
        'GALLERY'=>'gallery',
        'ABOUT' => 'about us',
        'PANEL' => 'Cpanel',
        'LOGOUT' => 'logout',
        'SEND'=>'send',
        'ADDRESS'=>'address',
        'ABO'=>'about senyar company',
        'NAME'=>'senyar gulf marine services',
        'EMAIL'=>'email',
        'PASSWORD'=>'password',
        'LOGIN'=>'Login',
        'VIDEO'=>'videos'
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
        'PANEL' => 'setting',
        'LOGOUT' => 'تسجيل الخروج',
         'SEND'=>'ارسال',
         'ADDRESS'=>'العنوان',
         'ABO'=>'عن الشركه',
         'NAME'=>'شركه سنيار للخدمات البحريه',
         'EMAIL'=>'ايميل',
        'PASSWORD'=>'باسورد',
        'LOGIN'=>'تسجيل الدخول',
        'VIDEO'=>'فيديوهات'
    );
    echo  $ar[$phrase];
    }
}

}

?>