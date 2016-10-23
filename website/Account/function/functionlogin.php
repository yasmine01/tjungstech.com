<?php
function tbl_acount($user, $pass) //function for login
{
    $query = "SELECT username,password,loginas,user_id FROM tbl_account WHERE username='$user' AND password='$pass'";
    $result = mysql_query($query);
    return $result;
}
function updateLoginDate($userId)
{
    date_default_timezone_set("Asia/Kathmandu");
    $time = date('H:i:s');
    $date = date('Y-m-d');
    $query ="UPDATE tbl_account SET lastlogindate='$date', lastlogintime='$time' where userid='$userId'";
    mysql_query($query);
}
?>