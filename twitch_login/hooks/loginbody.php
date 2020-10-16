<?php
if(count(get_included_files()) ==1) die(); //Direct Access Not Permitted
global $settings, $user, $db, $us_url_root, $abs_us_root;
if($settings->twlogin==1 && !$user->isLoggedIn()) {
    require_once $abs_us_root.$us_url_root.'usersc/plugins/twitch_login/assets/twitch_oauth.php';
}
?>
