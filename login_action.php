<?php
session_start();

$url = "https://script.google.com/macros/s/AKfycbw4Wa2xjvGqE4gCuJeqHimuq4gPMssnGK7f_HvomSepddpRqfgdM5ZMGKpp0l3NwPT5/exec";
$postData = [
   "action" => "login",
   "email" => $_POST['email'],
   "password" => $_POST['password']
];

$ch = curl_init($url);
curl_setopt_array($ch, [
   CURLOPT_FOLLOWLOCATION => true,
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_POSTFIELDS => $postData
]);

$result = curl_exec($ch);
$result = json_decode($result, 1);

if($result['status'] == "success"){
   $_SESSION['user'] = $result['data'];
   header("location: main.php");
}else{
   $_SESSION['error'] = $result['message'];
   header("location: login.php");
}

