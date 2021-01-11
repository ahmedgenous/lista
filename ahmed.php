php

ob_start();

$API_KEY = "1576689046:AAHB5zVo78Mk7iYbJxy_wg61yqcuBj-Ij5E";

define("API_KEY",$API_KEY);
function bot($method,$str=[]){
        $http_build_query = http_build_query($str);
        $api = "https://api.telegram.org/bot".API_KEY."/".$method."?$http_build_query";
        $http_build_query = file_get_contents($api);
        return json_decode($http_build_query);
}

$update = json_decode(file_get_contents("php://input"));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$message_id = $message->message_id;


if($text == "/start"){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
حياك الله في خدمة الباحث القرآني",

if($text == "video"){
bot("sendvideo",[
"chat_id"=$chat_id,
"video"=>"
https://t.me/EnglishCourses4Free/2235",

