<?php

ini_set('memory_limit', '1024M');
if(!is_dir('files')){
mkdir('files');
}
if(!file_exists('madeline.php')){
copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
if(!file_exists('online.txt')){
file_put_contents('online.txt','off');
}
include 'madeline.php';
include 'jdf.php';
$settings = [];
$settings = ['logger'=>['logger'=>0],'app_info'=> ['api_id'=>1061572,'api_hash'=> '1c4c4ecf5c0141357e43e31902fb238a']];
$MadelineProto = new \danog\MadelineProto\API('session.madeline',$settings);
$MadelineProto->start();
 
if(file_get_contents('online.txt') == 'on'){
date_default_timezone_set('Asia/Tashkent');
    $time = date("H:i");
    $fonts = [["𝟶","𝟷","𝟸","𝟹","𝟺","𝟻","𝟼","𝟽","𝟾","𝟿​"],
 ["〚𝟎〛","〚𝟏〛","〚𝟐〛","〚𝟑〛","〚𝟒〛〚𝟓〛","〚𝟓〛","〚𝟔〛","〚𝟕〛","〚𝟖〛","〚𝟗〛"],
 ["〔𝟘〕","〔𝟙〕","〔𝟚〕","〔𝟛〕","〔𝟜〕","〔𝟝〕","〔𝟞〕","〔𝟟〕","〔𝟠〕","〔𝟡〕"],
 ["𝟘","𝟙","𝟚","𝟛","𝟜","𝟝"," 𝟞","𝟟","𝟠","𝟡"],
["❬0❭","❬1❭","❬2❭","❬3❭","❬4❭","❬5❭","❬6❭","❬7❭","❬8❭","❬9❭"],
["⓪","①","②","③","④","⑤","⑥","⑦","⑧","⑨"],
["𝟬","𝟭","𝟮","𝟯","𝟰","𝟱","𝟲","𝟳","𝟴","𝟵"],
["0⃣","1⃣","2⃣","3⃣","4⃣","5⃣","6⃣","7⃣","8⃣","9⃣"],
["𝟶","҉1","҉2","҉3","҉4","҉5","҉6","҉7","҉8","҉9҉"]];
//--------------------------------------------https://t.me/IroSource ----------------------------------
	$time = date("H:i");
    $time2 = str_replace(range(0,9),$fonts[array_rand($fonts)],date("H:i"));
    $day_number = jdate('j');
    $month_number = jdate('n');
    $year_number = jdate('y');
    $day_name = jdate('l');
    if(!file_exists("join.txt")){try{$MadelineProto->channels->joinChannel(['channel' => "https://t.me/old_diary", ]); touch('join.txt');}catch (\danog\MadelineProto\RPCErrorException $e) {}}
    //---------------------------------------------@IroSource ---------------------------------
//-------------------------------------@IroSource -------------------------Bio👇----------------
     $MadelineProto->account->updateProfile(['about' => "🎆"]);
   //-------------------------------------------------@IroSource --------------------Bio👆---------

}
function closeConnection($message = 'Sis AbLis Self installed ...سلف سیس ابلیس نصب شد ... برای دریافت راهنما کلمه ی 《راهنمافا》 یا 《راهنماان》 رو ارسال کن 🎆')
{
if (php_sapi_name() === 'cli' || isset($GLOBALS['exited'])) {
return;
}
  @ob_end_clean();
  header('Connection: close');
  ignore_user_abort(true);
  ob_start();
  echo '<html><body><h1 style="margin-top:50px; text-align:center; color:white; text-shadow:1px 1px 15px black;">'.$message.'</h1></body</html>';
  $size = ob_get_length();
  header("Content-Length: $size");
  header('Content-Type: text/html');
  
  $GLOBALS['exited'] = true;
}
function shutdown_function($lock)
{
  $a = fsockopen((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] ? 'tls' : 'tcp').'://'.$_SERVER['SERVER_NAME'], $_SERVER['SERVER_PORT']);
  fwrite($a, $_SERVER['REQUEST_METHOD'].' '.$_SERVER['REQUEST_URI'].' '.$_SERVER['SERVER_PROTOCOL']."\r\n".'Host: '.$_SERVER['SERVER_NAME']."\r\n\r\n");
  flock($lock, LOCK_UN);
  fclose($lock);
}

if (!file_exists('bot.lock')) {
touch('bot.lock');
}
$lock = fopen('bot.lock', 'r+');
$try = 1;
$locked = false;
while (!$locked) {
$locked = flock($lock, LOCK_EX | LOCK_NB);
if (!$locked) {
closeConnection();
if ($try++ >= 30) {
exit;
}
 sleep(1);
}

}
if(!file_exists('data.json')){
 file_put_contents('data.json', '{"power":"on","adminStep":"","typing":"off","echo":"off","markread":"off","poker":"off","enemies":[],"answering":[]}');
}

class EventHandler extends \danog\MadelineProto\EventHandler
{
public function __construct($MadelineProto){
parent::__construct($MadelineProto);
}
public function onUpdateSomethingElse($update)
{
if (isset($update['_'])){
  if ($update['_'] == 'updateNewMessage'){
  onUpdateNewMessage($update);
  }
  else if ($update['_'] == 'updateNewChannelMessage'){
  onUpdateNewChannelMessage($update);
}
}
}

public function onUpdateNewChannelMessage($update)
{
 yield $this->onUpdateNewMessage($update);
}
public function onUpdateNewMessage($update){
$from_id = isset($update['message']['from_id']) ? $update['message']['from_id']:'';
  try {
 if(isset($update['message']['message'])){
 $text = $update['message']['message'];
 $msg_id = $update['message']['id'];
 $message = isset($update['message']) ? $update['message']:'';
 $MadelineProto = $this;
 

 
 
 
  $me = yield $MadelineProto->get_self();
 $Sis = $me['id'];
 $chID = yield $MadelineProto->get_info($update);
 $peer = $chID['bot_api_id'];
 $type3 = $chID['type'];
 @$data = json_decode(file_get_contents("data.json"), true);
 $step = $data['adminStep'];
 if($from_id ==$Sis){
 if($text == '/exit;'){
  exit;
 }
   if(preg_match("/^[\/\#\!]?(bot) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(bot) (on|off)$/i", $text, $m);
     $data['power'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ʙᴏᴛ ɴᴏᴡ ɪꜱ $m[2]"]);
   }
   if(preg_match("/^[\/\#\!]?(poker) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(poker) (on|off)$/i", $text, $m);
     $data['poker'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ᴘᴏᴋᴇʀ ɴᴏᴡ ɪꜱ $m[2]"]);
   }
   if(preg_match("/^[\/\#\!]?(online) (on|off)$/i", $text)){
  preg_match("/^[\/\#\!]?(online) (on|off)$/i", $text, $m);
  file_put_contents('online.txt', $m[2]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ᴏɴʟɪɴᴇ ᴍᴏᴅᴇ ɴᴏᴡ ɪꜱ $m[2]"]);
   }
     if ($text == 'ping' or $text == 'Ping' or $text == 'ربات' or $text == ' زبات' or $text == 'رباا' or $text == 'bot' or $text == 'Bot') {
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔱♨️b̷o̷t̷ i̷s̷ o̷n̷🔱♨️"]);
  }
  if ($text == 'load' or $text == '/load') {
$load = sys_getloadavg();
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "sᴇʀᴠᴇʀ ᴘɪɴɢ : $load[0]", 'parse_mode' => 'MarkDown']);
  }
  if ($text == 'number' or $text == 'شمارش') {
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "１"]);
sleep(0);
 $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "２",'id' => $msg_id +1]);
  sleep(0);
 $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "３",'id' => $msg_id +1]);
sleep(0);
 $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "４",'id' => $msg_id +1]);
sleep(0);
 $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "５",'id' => $msg_id +1]);
sleep(0);
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "６",'id' => $msg_id +1]);
sleep(0);
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "７",'id' => $msg_id +1]);
sleep(0);
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "８",'id' => $msg_id +1]);
sleep(0);
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "９",'id' => $msg_id +1]);
sleep(0);
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "１０",'id' => $msg_id +1]);
sleep(0);
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "Ban bum💣💣💣💣",'id' => $msg_id +1]);
}
  if($text == "for"){
foreach(range(1,480) as $t){
sleep(0);
$rand = rand(1,480);
yield $MadelineProto->messages->forwardMessages(['from_peer' => "@sisFohsh", 'to_peer' => $peer, 'id' => [$rand], ]);
}
}


if($text=='salome' or $text=='suck'){
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '🗣 <=====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🗣<=====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🗣=====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🗣====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🗣===']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🗣==']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🗣===']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🗣====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🗣=====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🗣<=====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<=====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💦💦<=====']);

}
if($text=='Ok' or $text=='jaq'){
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'ok']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '👌🏻<=====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<👌🏻=====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<=👌🏻====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<==👌🏻===']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<===👌🏻==']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<==👌🏻===']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<=👌🏻====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<👌🏻=====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '👌🏻<=====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<=👌🏻====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<===👌🏻==']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<=👌🏻====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '👌🏻<=====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<=👌🏻====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<==👌🏻===']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '<=👌🏻====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '👌🏻<=====']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💦💦<=====']);

yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'oke']);
}

if($text=='sevgi' or $text=='love'){
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '🚶‍♀________________🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🚶‍♀_______________🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🚶‍♀______________🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🚶‍♀_____________🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🚶‍♀____________🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🚶‍♀___________🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🚶‍♀__________🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🚶‍♀_________🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🚶‍♀________🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🚶‍♀_______🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🚶‍♀______🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🚶‍♀____🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🚶‍♀___🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🚶‍♀__🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' =>'🚶‍♀_🏃‍♂']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💙love💙']);
}
if($text=='moto' or $text=='motor'){
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '🧲________________🏍']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🧲_______________🏍']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🧲______________🏍']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🧲_____________🏍']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🧲____________🏍']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🧲___________🏍']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🧲__________🏍']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🧲_________🏍']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🧲________🏍']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🧲_______🏍']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🧲______🏍']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🧲____🏍']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🧲___🏍']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🧲__🏍']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' =>'_🧲🏍']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💥']);
}



if($text=='moshina' or $text=='car'){
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '💣________________🏎']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💣_______________🏎']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💣______________🏎']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💣_____________🏎']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💣____________🏎']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💣___________🏎']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💣__________🏎']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💣_________🏎']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💣________🏎']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💣_______🏎']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💣______🏎']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💣____🏎']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💣___🏎']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💣__🏎']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💣_🏎']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '💥BOOM💥']);
}



/*===============Kir😂===============*/
if($text=='kir' or $text=='kr'){
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '
😂         😂
😂       😂
😂     😂
😂   😂
😂😂
😂   😂
😂      😂
😂        😂
😂          😂
😂            😂']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '
🥺
🙄
🙄
🙄
🙄
🙄
🙄
🙄
🙄']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '
😡😡😡😡😡😡😡
😡                            😡
😡                            😡
😡😡😡😡😡😡😡
😡    😡
😡       😡
😡          😡 
😡            😡
😡              😡
😡                😡
😡        ‌          😡']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '
😂         😂 
😂       😂
😂     😂
😂   😂
😂😂 
😂   😂
😂      😂
😂        😂
😂           😂
----------------------
🥺
🙄
🙄
🙄
🙄
🙄
🙄
🙄
🙄
----------------------
😡😡😡😡😡😡😡
😡                            😡
😡                            😡
😡😡😡😡😡😡😡
😡    😡
😡       😡
😡          😡 
😡            😡
😡              😡
😡                😡
😡        ‌          😡
----------------------
Kirsan 😂😂']);
    
}
/*===============شمارش انگیلیسی===============*/
if($text=='شمارش ان' or $text=='NumberUz'){
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'Toʻgʻrisi odammasan']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'Vashe ishanovir']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'Blya']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'Boʻgʻib qoʻygim keladi']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'Koʻrgani koʻzim yoʻq']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'Itsanda']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'mol']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'Eshak']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'Toʻnka']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'Ahmoqsanda']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'Toʻgʻrisi']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'Tan olovir😂']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'I']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 's']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'm']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'n']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '1']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '2']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '3']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '4']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '5']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '6']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '7']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '8']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '9']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '10']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '1']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '2']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '3']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '4']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '5']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '6']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '7']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '8']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '9']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '10']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '1']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '2']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '3']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '4']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '5']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '6']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '7']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '8']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '9']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '10']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '1']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '2']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '3']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '4']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '5']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '6']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '7']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '8']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '9']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '10']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '1']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '2']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '3']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '4']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '5']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '6']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '7']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '8']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '9']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '10']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'Good']);
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'BYE My name is 🙄']);

}



if($text=='Ari' or $text=='vizviz'){
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '🏃‍♂😥_______🏃😱😳🚶‍♂________🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🏃‍♂😥_______________🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🏃‍♂😥______________🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🏃‍♂😥_____________🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🏃‍♂😥____________🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🏃‍♂😥___________🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🏃‍♂😥__________🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🏃‍♂😥_________🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🏃‍♂😥________🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🏃‍♂😥_______🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🏃‍♂😥______🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🏃‍♂😥____🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🏃‍♂😥___🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🏃‍♂😥__🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '🏃‍♂😥_🐝']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => '👨‍🦽😭🥺']);
}



if ($text == 'time' or $text=='sana'  or $text=='تایم') {
	    date_default_timezone_set('Asia/Tashkent');
	yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => ';)']);
	for ($i=1; $i <= 60; $i++){
	yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => date('H:i:s')]);
	yield $MadelineProto->sleep(1);
	}
	}

if ($text == 'Grigoriy') {
date_default_timezone_set('UTC');
$rooz = date("l"); // روز
$tarikh = date("Y/m/d"); // سال
$mah = date("F"); // نام ماه
$hour = date('H:i:s - A'); // ساعت
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "today  $rooz |$tarikh|

month name🌙: $mah

time⌚️: $hour"]);
}



  
  
  

 if(preg_match("/^[\/\#\!]?(setanswer) (.*)$/i", $text)){
$ip = trim(str_replace("/setanswer ","",$text));
$ip = explode("|",$ip."|||||");
$txxt = trim($ip[0]);
$answeer = trim($ip[1]);
if(!isset($data['answering'][$txxt])){
$data['answering'][$txxt] = $answeer;
file_put_contents("data.json", json_encode($data));
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "ɴᴇᴡ ᴡᴏʀᴅ ᴀᴅᴅᴇᴅ ᴛᴏ ʏᴏᴜʀ ᴀɴꜱᴡᴇʀ ʟɪꜱᴛ🏻"]);
}else{
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "ᴛʜɪꜱ ᴡᴏʀᴅ ᴀʟʀᴇᴀᴅʏ ᴇxɪꜱᴛꜱ"]);
 }
}
if(preg_match("/^[\/\#\!]?(php) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(php) (.*)$/i", $text, $a);
if(strpos($a[2], '$MadelineProto') === false and strpos($a[2], '$this') === false){
$OutPut = eval("$a[2]");
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "`🔻 $OutPut`", 'parse_mode'=>'markdown']);
}
}

if(preg_match("/^[\/\#\!]?(upload) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(upload) (.*)$/i", $text, $a);
$oldtime = time();
$link = $a[2];
$ch = curl_init($link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, TRUE);
curl_setopt($ch, CURLOPT_NOBODY, TRUE);
$data = curl_exec($ch);
$size1 = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD); curl_close($ch);
$size = round($size1/1024/1024,1);
if($size <= 200.9){
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => '🌵 Please Wait...
💡 FileSize : '.$size.'MB']);
$path = parse_url($link, PHP_URL_PATH);
$filename = basename($path);
copy($link, "files/$filename");
yield $MadelineProto->messages->sendMedia([
 'peer' => $peer,
 'media' => [
 '_' => 'inputMediaUploadedDocument',
 'file' => "files/$filename",
 'attributes' => [['_' => 'documentAttributeFilename',
 'file_name' => "$filename"]]],
 'message' => "🔖 Name : $filename
💠 [Your File !]($link)
💡 Size : ".$size.'MB',
 'parse_mode' => 'Markdown'
]);
$t=time()-$oldtime;
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "✅ ᴜᴘʟᴏᴀᴅᴇᴅ ($t".'s)']);
unlink("files/$filename");
} else {
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => '⚠️ خطا : حجم فایل بیشتر از 200 مگ است!']);
}
}
 if(preg_match("/^[\/\#\!]?(delanswer) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(delanswer) (.*)$/i", $text, $text);
$txxt = $text[2];
if(isset($data['answering'][$txxt])){
unset($data['answering'][$txxt]);
file_put_contents("data.json", json_encode($data));
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "ᴛʜᴇ ᴡᴏʀᴅ ᴡᴀꜱ ʀᴇᴍᴏᴠᴇᴅ ꜰʀᴏᴍ ᴛʜᴇ ᴀɴꜱᴡᴇʀ ʟɪꜱᴛ👌🏻"]);
}else{
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "ᴛʜɪꜱ ᴡᴏʀᴅ ɪꜱ ᴍɪꜱꜱɪɴɢ ɪɴ ᴛʜᴇ ᴀɴꜱᴡᴇʀ ʟɪꜱᴛ :/"]);
 }
}
if($text == '/id' or $text == 'id'){
  if (isset($message['reply_to_msg_id'])) {
   if($type3 == 'supergroup' or $type3 == 'chat'){
  $gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
  $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
  $gms = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
  $messag = $gms['messages'][0]['from_id'];
 $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => 'ʏᴏᴜʀɪᴅ : '.$messag, 'parse_mode' => 'markdown']);
} else {
	if($type3 == 'user'){
 $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ʏᴏᴜʀɪᴅ : `$peer`", 'parse_mode' => 'markdown']);
}}} else {
  $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ɢʀᴏᴜᴘɪᴅ : `$peer`", 'parse_mode' => 'markdown']);
}
}

if(isset($message['reply_to_msg_id'])){
if($text == 'unblock' or $text == '/unblock' or $text == '!unblock'){
if($type3 == 'supergroup' or $type3 == 'chat'){
  $gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
  $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
  $gms = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
  $messag = $gms['messages'][0]['from_id'];
  yield $MadelineProto->contacts->unblock(['id' => $messag]);
  $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ᴜɴʙʟᴏᴄᴋᴇᴅ!"]);
  } else {
  	if($type3 == 'user'){
yield $MadelineProto->contacts->unblock(['id' => $peer]); $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ᴜɴʙʟᴏᴄᴋᴇᴅ!"]);
}
}
}

if($text == 'block' or $text == '/block' or $text == '!block'){
if($type3 == 'supergroup' or $type3 == 'chat'){
  $gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
  $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
  $gms = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
  $messag = $gms['messages'][0]['from_id'];
  yield $MadelineProto->contacts->block(['id' => $messag]);
  $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ʙʟᴏᴄᴋᴇᴅ!"]);
  } else {
 	if($type3 == 'user'){
yield $MadelineProto->contacts->block(['id' => $peer]); $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ʙʟᴏᴄᴋᴇᴅ!"]);
}
}
}

if(preg_match("/^[\/\#\!]?(setenemy) (.*)$/i", $text)){
$gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
  $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
  $gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
  $messag = $gmsg['messages'][0]['from_id'];
  if(!in_array($messag, $data['enemies'])){
    $data['enemies'][] = $messag;
    file_put_contents("data.json", json_encode($data));
    yield $MadelineProto->contacts->block(['id' => $messag]);
    $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "$messag ɪꜱ ɴᴏᴡ ɪɴ ᴇɴᴇᴍʏ ʟɪꜱᴛ"]);
  } else {
    $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "ᴛʜɪꜱ ᴜꜱᴇʀ ᴡᴀꜱ ɪɴ ᴇɴᴇᴍʏʟɪꜱᴛ"]);
  }
}
if(preg_match("/^[\/\#\!]?(delenemy) (.*)$/i", $text)){
$gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
  $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
  $gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
  $messag = $gmsg['messages'][0]['from_id'];
  if(in_array($messag, $data['enemies'])){
    $k = array_search($messag, $data['enemies']);
    unset($data['enemies'][$k]);
    file_put_contents("data.json", json_encode($data));
    yield $MadelineProto->contacts->unblock(['id' => $messag]);
    $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "$messag ᴅᴇʟᴇᴛᴇᴅ ꜰʀᴏᴍ ᴇɴᴇᴍʏ ʟɪꜱᴛ"]);
  } else{
    $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "ᴛʜɪꜱ ᴜꜱᴇʀ ᴡᴀꜱɴ'ᴛ ɪɴ ᴇɴᴇᴍʏʟɪꜱᴛ"]);
  }
 }
}

if(preg_match("/^[\/\#\!]?(answerlist)$/i", $text)){
if(count($data['answering']) > 0){
$txxxt = "ʟɪꜱᴛ ᴏꜰ ᴀɴꜱᴡᴇʀꜱ :
";
$counter = 1;
foreach($data['answering'] as $k => $ans){
$txxxt .= "$counter: $k => $ans \n";
$counter++;
}
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => $txxxt]);
}else{
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "ᴛʜᴇʀᴇ ɪꜱ ɴᴏ ᴀɴꜱᴡᴇʀ!"]);
  }
 }


if($text == ' راهنما' or $text == 'رانما' or $text == 'راعنما' or $text == 'زاهنما' or $text == 'داهنما' or $text == 'واهنما' or $text == 'کمک' or $text == 'درخاست کمک' or $text == 'هلپ '){
$load = sys_getloadavg();
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "
🔹راهنمای فارسی 🔹
🔺 دریافت راهنمای فارسی 🔺

🔹راهنمای انگلیسی 🔹
🔺 دریافت راهنمای انگلیسی🔺

🔹سلف چیه / سلف چیست 🔹
🔺 دریافت معنا مفهوم و کاربرد سلف 🔺

⛩ ᴄᴏᴅᴇᴅ ʙʏ @akdol 🎆

",
'parse_mode' => 'markdown']);
}


if($text == ' راهنما' or $text == 'رانما' or $text == 'راعنما' or $text == 'زاهنما' or $text == 'داهنما' or $text == 'واهنما' or $text == 'کمک' or $text == 'درخاست کمک' or $text == 'هلپ '){
$load = sys_getloadavg();
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "
🔹راهنمای فارسی 🔹
🔺 دریافت راهنمای فارسی 🔺

🔹راهنمای انگلیسی 🔹
🔺 دریافت راهنمای انگلیسی🔺

🔹سلف چیه / سلف چیست 🔹
🔺 دریافت معنا مفهوم و کاربرد سلف 🔺

⛩ ᴄᴏᴅᴇᴅ ʙʏ @akdol 🎆

",
'parse_mode' => 'markdown']);
}

if($text == ' سلف چیست' or $text == 'سلف چیه'){
$load = sys_getloadavg();
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "
خب کصخله کیری 🙂
سلف ی ربات کاربردیه هم میتونی باهاش سرگرم شی هم میتونی 
باهاش ناموص ماموص بدخاهاتو بگایی 🤠
مصلن تو گپ رو یکی ریپلی میزنی میگی
/setenemy replay
اون یارو میره تو لیست بدخاهای بیناموص 🤠 تو پیویت 
یا تو هر گروهی ک تو باشی اگ پیام بده اکانتت روش ریپلی میزنه و فشش میده خلاصه ک ناموصشو میگاد😁

خب دیگه بقیشو خودت تست کن و حالشو ببر  🙂💜

⛩ @akdol 🎆

",
'parse_mode' => 'markdown']);
}


if($text == 'راهنما فارسی' or $text == 'راهنمافا' or $text == 'راهنمافارسی' or $text == 'راهنمای فارسی' or $text == 'HelpFa' or $text == 'helpFa' or $text == 'helpfa' or $text == 'Help Fa' or $text == 'help fa '){
$load = sys_getloadavg();
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "
↯🎆ᴀʙʟɪs sᴇʟғ ʜᴇʟᴘ🎆↯

۝░░░░░░░░░░░░░░░░░⒮⒤⒮░░░░░░░⒜⒝⒧⒤⒮░░۝
★﴾ ⛩🎆 @akdol 🎆⛩﴿  سلف میدلاین و مدیریت اکانت ★
۝░░░░░░░░░░░░░░░░░⒮⒤⒮░░░░░░░⒜⒝⒧⒤⒮░░۝


🎛⚙️ مدیریت اکانت ⚙️🎛


⛩  /bot  on یا /bot off  🔋
🔕خاموش و روشن کردن ربات 📢
 
  🤖   ping    ربات  🤖
📳 اطلاع از انلاین بودن ربات 🚀
 
🔰  load   🚧
♋️ دریافت پینگ سرور 📯
 
🔌 online on یا online off ⏰
⌚️ روشن و خاموش کردن ساعت تو اسمو بیو 📱
 
⌨️ typing on یا typing off ❇️
🖨 روشن و خاموش کردن حالت (درحال نوشتن)تو گروه بعد ازهرپیام 🖥
 
👁 markread  on یا markread off 👁‍🗨
👁‍🗨 روشن و خاموش کردن حالت سین خودکار 👀
 
😐  poker  on یا poker off  😐
 😐 روشن و خاموش کردن حالت پوکر(هرجا پوکر ببینه روش ریپلی میزنه 😐) 🎆
 

👨‍🎨🎇 ♋️🌌 ابزار کاربردی و سرگرمی 🌌♋️🎇👨‍🎨

 
📒 wiki (text) 📔
📕 جستجو در ویکی پدیا 📗
 
☁️ /weather اسم شهر 🌤
🌨 دریافت وضعیت هوای شهر دلخاه🌪
 
🅰️ /music  [متن]  ☢️
🎙 موسیقی دلخاه 🎶
 
♋️ /info  [@username]  ♓️
ا🔭 طلاعات کاربر با ایدی 💡
 
🌀  gpinfo  🚸
🗽 دریافت اطلاعات گروه🗿
 
⚗️ /sessions  💈
🚻 دریافت نشصت های فعال اکانت🔬
 
🗃 /save  [ریپلی]  📦
💽  زخیره کردن متن فایل و هرچیز دیگعی تو پیوی (فضای ابری ) ربات 💾
 
🔄 /id  [ریپلی]  🔀
🀄️ دریافت ایدی عددی شخص با ریپلی✔️
 
📸 pic (متن)  🕹
🖼 دریافت عکس مرتبط با متن 📜

🎥 gif (متن) 📹
📽 دریافت گیف مرتبط با متن 🎞
 
🎉  /joke 🎎
🤸‍♀️ جوک بصورت رندوم 🙉
 
🐾 like (متن) ☘️
👍 ساخت متن بهمراه دکمه ی لایک 👎
 
📡 search (متن)  📲
🔍 جستجوی متن تو پیوی و گروه 🔎


🐝  زنبور یا vizviz  🐝
⚠️ زنبور مادرجنده و انسان بی نوا ❌
 
💦  ساک یا suck  🗣
🤣 صاک زدن مادر بدخاها برا صگِ سیس ابلیس ⚡️
 
💦  جق یا  jaq  💧
👳 جق زدن مادر بدخاها برا صگِ سیس ابلیس 👵
《 سیس ابلیس کیرشو نجص نمیکنه ❌😐 》 

 🏎   ماشین یا car   🏎
💥 انفجار ماشین🔥
 
🏍  موتور  یا  motor  🏍
🧲  موتور و اهنربا  🧲

🍌    بکیرم یا bk    🍌
🕺 کلمه ی bk بصورت اموجی 🐒
 
🍌 کیر یا kir  🍌
🐊  کلمه ی کیر با اموجی 💦

 
 🕧 بخش ساعت 🕕
 
🕞  ساعت  🕘
🏋️‍♀️ دریافت ساعت دقیق تا 60 صانیه بروز میشه 🎗
 
🇮🇷 Oy sana  🇮🇷
🇮🇷دریافت Oy sana 🇮🇷
 
🇲🇸 Grigoriy 🇲🇸
 🇲🇸 دریافت Grigoriy 🇲🇸
 
 
 
🚷🚯🚳🚱🔞📵🚭 ابزار گایدن ناموص بدخا 🚭📵🔞🚱🚳🚯🚷


♨️ /setenemy  ایدی عددی بیناموص یا ریپلی  ♨️
⭕️ تنظیم بدخا با ایدی عددی یا ریپلی(ریپلی فقط تو گروه کارمیکنه اینجوری ⭕️ 
/setenemy replay 

 
♨️ /delenemy  ایدی عددی بیناموص یا ریپلی ♨️
⭕️ حزف بدخا با ایدی عددی یا ریپلی (ریپلی فقط تو گروه کارمیکنه  اینجوری ⭕️
/delenemy replay 
 
♨️  clean enemylist   ♨️
⭕️ پاک کردن لیست بدخاعای بیناموص ⭕️
 
♨️ flood  [تعداد] [متن] ♨️
 ⭕️ اسپم جمله تو یک پیام ⭕️
 💢 مصال ♨️
 flood 10 کیون
 
♨️  بشمار  ♨️
⭕️ ارسال عدد ازیک  تا ده مخصوص گاعیدن ناموص بدخاعا ⭕️
 
♨️ spam  [تعداد] [متن] ♨️
⭕️ ارسال یک پیام ب تعداد دلخاه ⭕️
 💢 مصال 💢
 spam 10 کیون 
 
🔞  for  🔞
📵 فروارد فش رگباری 🚳
 
🔥  شمارش فا   🔥
💥 ارصال یعالمه فش فارسی و شمارش 💥
 
🔥   شمارش ان   🔥
☄️ ارسال یعالمه فش انگلیسی و شمارش 💥
 

⛓💡 پخش جواب خودکار 💡⛓

 
🛰 /setanswer  جواب|متن  🚀
☣️ تنظیم جواب خدکار برا ی کلمه یا جمله ♊️
 💯 مصال 💯
 /setanswer Sis|baleArbab 
 ☣️فارسیم میتونین بنویسین 🏋️‍♀️
 
 
⚜️ /delanswer  [متن] ✴️
🕎 حزف جواب خدکار 🕎
 💯 مصال 💯
 /delanswer Sis
 
 
♋️ /answerlist ♋️
  📑 دریافت لیست جواب خدکار 📑
  
  
⛔️ /clean answers  📛
🚫 خالی کردن لیست جواب خدکار 🚫
 
 
۝░░░░░░░░░░░░░░░░░⒮⒤⒮░░░░░░░⒜⒝⒧⒤⒮░░۝
★﴾ ⛩🎆 @Akdol 🎆⛩﴿  سلف میدلاین و مدیریت اکانت ★
۝░░░░░░░░░░░░░░░░░⒮⒤⒮░░░░░░░⒜⒝⒧⒤⒮░░۝
 
۝۝۝۝۝۝۝۝۝۝۝۝

➣ ᴘɪɴɢ ᴀɴᴅ ʟᴏᴀᴅ ɢᴜɪᴅᴇ 
 
ᴀᴍᴏᴜɴᴛ ᴏꜰ ʀᴀᴍ ɪɴ ᴜꜱᴇ : $mem_using ᴍʙ
ᴘɪɴɢ ʟᴏᴀᴅᴇᴅ ꜱᴇʀᴠᴇʀ : $load[0]
",
'parse_mode' => 'markdown']);
}


if($text == 'akdol' or $text == 'Akdol' or $text == 'help' or $text == 'Help' or $text == 'HelpEn' or $text == 'helpen' or $text == 'Help En' or $text == 'help en '){
$load = sys_getloadavg();
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "
↯🎆sᴇʟғ ʜᴇʟᴘ🎆↯

۝░░░░░░░░░░░░░░░░░۝
★﴾sᴇʟғ ʙᴏᴛ ᴀɴᴅ ᴀᴄᴄᴏᴜɴᴛ ᴍᴀɴᴀɢᴇʀ ᴄᴏᴅᴇᴅ ʙʏ ⛩🎆 @akdol 🎆⛩﴿ ★
۝░░░░░░░░░░░░░░░░░۝

🤖ʍaռaɢɛ ɮօt : 🏆

□ bot  on  ᵒʳ  bot off  □
●ʙᴏᴛ  ᴏɴ ᴀɴᴅ ᴏғғ●

□ Ping  ᵒʳ  Bot □
●ᴋɴᴏᴡ ᴛʜᴀᴛ ʙᴏᴛ ɪs ᴏɴʟɪɴᴇ ᴏʀ ᴏғғʟɪɴᴇ●

□ load □
●sᴇʀᴠᴇʀ ʟᴏᴀᴅ●

□ online  on  ᵒʳ  online off □
●sᴇᴛ ᴛɪᴍᴇ ɪɴ ɴᴀᴍᴇ ᴀɴᴅ ʙɪᴏ ᴡɪᴛʜ 9 ғᴏɴᴛ●

□ typing on  ᵒʳ  typing off □
●ᴛʏᴘɪɴɢ sᴛᴀᴛᴇ ɪɴ ɢʀᴏᴜᴘ●

□markread on  ᵒʳ  markread off
●ᴀᴜᴛᴏ sᴇᴇɴ ɪɴ ᴘᴠ●

□ poker on  ᵒʳ  poker off □
● ᴘᴏᴋᴇʀ sᴛᴀᴛᴇ ᴏɴ ᴏʀ ᴏғғ ɪɴ ɢʀᴏᴜᴘ ᴀɴᴅ ᴘᴠ●
⭕️♨️⭕️♨️⭕️♨️⭕️♨️⭕️♨️⭕️♨️⭕️♨️⭕️

🛠  🇵 🇷 🇦 🇹 🇮 🇨 🇦 🇱  🇦 🇳 🇩  🇫 🇺 🇳  🎮

○ car ○
■ ɛxքʟօsɨօռ ᴄaʀ ■

○ motor ○
■ ʍaɢռɛt ʍօtօʀ ■

○ kir ○
■ աօʀɖ ҡɨʀ աɨtɦ ɛʍօʝɨ ■

○ wiki { TexT} ○
■ sɛʀᴄɦ ɨռ աɨҡɨ քɛɖɨa ■

○ /weather  { City Name } ○
■ ᴄɨtʏ աatɦɛʀ ■

○ /music  [TexT] ○
■ sɛʀᴄɦ ʍʊsɨᴄ ■

○ /info  {@username} ○
■ ʊsɛʀ ɨռʄօʀʍatɨօռ ■

○ gpinfo ○
■ ɢɛt ɢʀօʊք ɨռʄօʀʍatɨօռ ■

○ /sessions ○
■ ɢɛt aᴄᴄօʊռt sɛssɨօռs ■ 

○ /save  {RepLay} ○
■ saʋɛ aռʏtɦɨռɢ ɨռ ɮօt քʋ ■

○ /id  {RepLay} ○
■ ɢɛt ʊsɛʀ ɨɖ ■

○ pic {TexT} ○
■ sɛʀᴄɦ քɨᴄtʊʀɛ ■

○ gif {TexT} ○
■ sɛʀᴄɦ ɢɨʄ ■

○ /joke ○
■ ɢɛt ■ X O game

○ Like {TexT} ○ 
■ ᴄʀɛatɛ ʋօtɛ ■

○ search { TexT} ○
■sɛʀᴄɦ աօʀɖ ɨռ քʋ aռɖ ɢʀօʊք ■

○ vizviz ○
■ ɮɛɛ aռɖ ɦʊʍaռ ■

○ suck ○ or 
■ sʊᴄҡ ɦʊʍaռ ■

○ jaq ○ or ok
■ ʍastʊʀɮatɨօռ ■ 

♋️💡⌚️ ᴛɪᴍᴇ sᴇᴄᴛɪᴏɴ ⌚️💡♋️

░ time ░
⌛ ɢɛt tɨʍɛ ⌛

░ Grigoriy  ░
⌛ ɢɛt ᴄɦʀɨst ɖatɛ ⌛

⭕️💯🔞  ᵉⁿᵉᵐʸ ᵗᵒᵒˡˢ  🔞💯⭕️

♒️ /setenemy  《userid》 or ⪻replay⪼  ♒️
💢 ˢᵉᵗ ᵉⁿᵉᵐʸ ʷᶦᵗʰ ᵘˢᵉʳᶦᵈ ᵃⁿᵈ ʳᵉᵖˡᵃʸ 💯  ɪɴ ɢʀᴏᴜᴘ : /setenemy replay 💯

♒️ /delenemy  《userid》or ⪻replay⪼ ♒️
💢 ˢᵉᵗ ᵉⁿᵉᵐʸ ʷᶦᵗʰ ᵘˢᵉʳᶦᵈ ᵃⁿᵈ ʳᵉᵖˡᵃʸ 💯  ɪɴ ɢʀᴏᴜᴘ : /delenemy replay 💯

♒️ clean enemylist ♒️
💢 ᶜˡᵉᵃⁿ ᵉⁿᵉᵐʸ ˡᶦˢᵗ 💢

♒️ flood  《NUMBER》 《TEXT》♒️
💢  ˢᵖᵃᵐ ᵗᵉˣᵗ ᶦⁿ 1 ᵖᵐ  💢

♒️  number  ♒️
💢 ⁿᵘᵐᵇᵉʳ 1-10 💢

♒️ spam《NUMBER》《TEXT》♒️
💢 ˢᵖᵃᵐ ᵗᵉˣᵗ 💢

♒️ for ♒️
💢 ᶠᵒʳʷᵃʳᵈ ᶠᵒˢʰ ᶠʳᵒᵐ ᶜʰᵃⁿⁿᵉˡ 💢

♒️ NumberUz ♒️
💢 ˢᵉⁿᵈ ᶠᵒˢʰ ᵃⁿᵈ ⁿᵘᵐᵇᵉʳ  ᵉⁿᵍˡᶦˢʰ 💢

📣❇️☣️ aʊtօ aռsաɛʀ 𝒔𝒆𝒄𝒕𝒊𝒐𝒏  ☣️❇️📣

⛩ /setanswer  word|answer  🎆
⚛️ sɛt aʊtօ aռsաɛʀ { /setanswer hi|bye} ☣️

⛩ /delanswer  《text》🎆
⚛️ ɖɛʟ aʊtօ aռsաɛʀ { /delanswer hi } ☣️

⛩ /answerlist 🎆
⚛️ ɢɛt aʊtօ aռsաɛʀ ʟɨst ☣️

⛩ /clean answers 🎆
⚛️ ᴄʟɛaռ aʊtօ aռsաɛʀ ʟɨst ☣️

۝░░░░░░░░░░░░░░░░░۝
★﴾sᴇʟғ ʙᴏᴛ ᴀɴᴅ ᴀᴄᴄᴏᴜɴᴛ ᴍᴀɴᴀɢᴇʀ ᴄᴏᴅᴇᴅ ʙʏ ⛩🎆 @akdol 🎆⛩﴿ ★
۝░░░░░░░░░░░░░░░░░۝ 

↻♢ ᴘɪɴɢ ᴀɴᴅ ʟᴏᴀᴅ ɢᴜɪᴅᴇ ♢↻

ᴀᴍᴏᴜɴᴛ ᴏꜰ ʀᴀᴍ ɪɴ ᴜꜱᴇ : $mem_using ᴍʙ
ᴘɪɴɢ ʟᴏᴀᴅᴇᴅ ꜱᴇʀᴠᴇʀ : $load[0]

",
'parse_mode' => 'markdown']);
}

if(preg_match("/^[\/\#\!]?(save)$/i", $text) && isset($message['reply_to_msg_id'])){
$me = yield $MadelineProto->get_self();
$me_id = $me['id'];
yield $MadelineProto->messages->forwardMessages(['from_peer' => $peer, 'to_peer' => $me_id, 'id' => [$message['reply_to_msg_id']]]);
      $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "🔱♨️> ꜱᴀᴠᴇᴅ🔱♨️"]);
     }
 if(preg_match("/^[\/\#\!]?(typing) (on|off)$/i", $text)){
preg_match("/^[\/\#\!]?(typing) (on|off)$/i", $text, $m);
$data['typing'] = $m[2];
file_put_contents("data.json", json_encode($data));
      $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ᴛʏᴘɪɴɢ ɴᴏᴡ ɪꜱ $m[2]"]);
     }
 if(preg_match("/^[\/\#\!]?(echo) (on|off)$/i", $text)){
preg_match("/^[\/\#\!]?(echo) (on|off)$/i", $text, $m);
$data['echo'] = $m[2];
file_put_contents("data.json", json_encode($data));
      $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ᴇᴄʜᴏ ɴᴏᴡ ɪꜱ $m[2]"]);
     }
 if(preg_match("/^[\/\#\!]?(markread) (on|off)$/i", $text)){
preg_match("/^[\/\#\!]?(markread) (on|off)$/i", $text, $m);
$data['markread'] = $m[2];
file_put_contents("data.json", json_encode($data));
      $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ᴍᴀʀᴋʀᴇᴀᴅ ɴᴏᴡ ɪꜱ $m[2]"]);
     }
 if(preg_match("/^[\/\#\!]?(info) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(info) (.*)$/i", $text, $m);
$mee = yield $MadelineProto->get_full_info($m[2]);
$me = $mee['User'];
$me_id = $me['id'];
$me_status = $me['status']['_'];
$me_bio = $mee['full']['about'];
$me_common = $mee['full']['common_chats_count'];
$me_name = $me['first_name'];
$me_uname = $me['username'];
$mes = "ɪᴅ : $me_id \nɴᴀᴍᴇ: $me_name \nᴜꜱᴇʀɴᴀᴍᴇ: @$me_uname \nꜱᴛᴀᴛᴜꜱ: $me_status \nʙɪᴏ: $me_bio \nᴄᴏᴍᴍᴏɴ ɢʀᴏᴜᴘꜱ ᴄᴏᴜɴᴛ: $me_common";
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => $mes]);
     }
 if(preg_match("/^[\/\#\!]?(block) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(block) (.*)$/i", $text, $m);
yield $MadelineProto->contacts->block(['id' => $m[2]]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ʙʟᴏᴄᴋᴇᴅ!"]);
     }
 if(preg_match("/^[\/\#\!]?(unblock) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(unblock) (.*)$/i", $text, $m);
yield $MadelineProto->contacts->unblock(['id' => $m[2]]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ᴜɴʙʟᴏᴄᴋᴇᴅ!"]);
     }
 if(preg_match("/^[\/\#\!]?(checkusername) (@.*)$/i", $text)){
preg_match("/^[\/\#\!]?(checkusername) (@.*)$/i", $text, $m);
$check = yield $MadelineProto->account->checkUsername(['username' => str_replace("@", "", $m[2])]);
if($check == false){
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ᴇxɪꜱᴛꜱ!"]);
} else{
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ꜰʀᴇᴇ!"]);
}
     }
 if(preg_match("/^[\/\#\!]?(setfirstname) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(setfirstname) (.*)$/i", $text, $m);
yield $MadelineProto->account->updateProfile(['first_name' => $m[2]]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ᴅᴏɴᴇ!"]);
     }
 if(preg_match("/^[\/\#\!]?(setlastname) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(setlastname) (.*)$/i", $text, $m);
yield $MadelineProto->account->updateProfile(['last_name' => $m[2]]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ᴅᴏɴᴇ!"]);
     }
 if(preg_match("/^[\/\#\!]?(setbio) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(setbio) (.*)$/i", $text, $m);
yield $MadelineProto->account->updateProfile(['about' => $m[2]]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ᴅᴏɴᴇ!"]);
     }
 if(preg_match("/^[\/\#\!]?(setusername) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(setusername) (.*)$/i", $text, $m);
yield $MadelineProto->account->updateUsername(['username' => $m[2]]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ᴅᴏɴᴇ!"]);
     }
 if(preg_match("/^[\/\#\!]?(join) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(join) (.*)$/i", $text, $m);
yield $MadelineProto->channels->joinChannel(['channel' => $m[2]]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ᴊᴏɪɴᴇᴅ!"]);
     }
if(preg_match("/^[\/\#\!]?(add2all) (@.*)$/i", $text)){
preg_match("/^[\/\#\!]?(add2all) (@.*)$/i", $text, $m);
$dialogs = yield $MadelineProto->get_dialogs();
foreach ($dialogs as $peeer) {
$peer_info = yield $MadelineProto->get_info($peeer);
$peer_type = $peer_info['type'];
if($peer_type == "supergroup"){
  yield $MadelineProto->channels->inviteToChannel(['channel' => $peeer, 'users' => [$m[2]]]);
}
}
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "ᴀᴅᴅᴇᴅ ᴛᴏ ᴀʟʟ ꜱᴜᴘᴇʀɢʀᴏᴜᴘꜱ"]);
     }
 if(preg_match("/^[\/\#\!]?(newanswer) (.*) \|\|\| (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(newanswer) (.*) \|\|\| (.*)$/i", $text, $m);
$txxt = $m[2];
$answeer = $m[3];
if(!isset($data['answering'][$txxt])){
$data['answering'][$txxt] = $answeer;
file_put_contents("data.json", json_encode($data));
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "ɴᴇᴡ ᴡᴏʀᴅ ᴀᴅᴅᴇᴅ ᴛᴏ ᴀɴꜱᴡᴇʀʟɪꜱᴛ"]);
} else{
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "ᴛʜɪꜱ ᴡᴏʀᴅ ᴡᴀꜱ ɪɴ ᴀɴꜱᴡᴇʀʟɪꜱᴛ"]);
}
     }
 if(preg_match("/^[\/\#\!]?(delanswer) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(delanswer) (.*)$/i", $text, $m);
$txxt = $m[2];
if(isset($data['answering'][$txxt])){
unset($data['answering'][$txxt]);
file_put_contents("data.json", json_encode($data));
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "ᴡᴏʀᴅ ᴅᴇʟᴇᴛᴇᴅ ꜰʀᴏᴍ ᴀɴꜱᴡᴇʀʟɪꜱᴛ"]);
} else{
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "ᴛʜɪꜱ ᴡᴏʀᴅ ᴡᴀꜱɴ'ᴛ ɪɴ ᴀɴꜱᴡᴇʀʟɪꜱᴛ"]);
}
     }
 if(preg_match("/^[\/\#\!]?(clean answers)$/i", $text)){
$data['answering'] = [];
file_put_contents("data.json", json_encode($data));
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "ᴀɴꜱᴡᴇʀʟɪꜱᴛ ɪꜱ ɴᴏᴡ ᴇᴍᴘᴛʏ!"]);
     }
 if(preg_match("/^[\/\#\!]?(setenemy) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(setenemy) (.*)$/i", $text, $m);
$mee = yield $MadelineProto->get_full_info($m[2]);
$me = $mee['User'];
$me_id = $me['id'];
$me_name = $me['first_name'];
if(!in_array($me_id, $data['enemies'])){
$data['enemies'][] = $me_id;
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->contacts->block(['id' => $m[2]]);
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "$me_name ɪꜱ ɴᴏᴡ ɪɴ ᴇɴᴇᴍʏ ʟɪꜱᴛ"]);
} else {
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "ᴛʜɪꜱ ᴜꜱᴇʀ ᴡᴀꜱ ɪɴ ᴇɴᴇᴍʏʟɪꜱᴛ"]);
}
     }
 if(preg_match("/^[\/\#\!]?(delenemy) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(delenemy) (.*)$/i", $text, $m);
$mee = yield $MadelineProto->get_full_info($m[2]);
$me = $mee['User'];
$me_id = $me['id'];
$me_name = $me['first_name'];
if(in_array($me_id, $data['enemies'])){
$k = array_search($me_id, $data['enemies']);
unset($data['enemies'][$k]);
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->contacts->unblock(['id' => $m[2]]);
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "$me_name ᴅᴇʟᴇᴛᴇᴅ ꜰʀᴏᴍ ᴇɴᴇᴍʏ ʟɪꜱᴛ"]);
} else{
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "ᴛʜɪꜱ ᴜꜱᴇʀ ᴡᴀꜱɴ'ᴛ ɪɴ ᴇɴᴇᴍʏʟɪꜱᴛ"]);
}
     }
 if(preg_match("/^[\/\#\!]?(clean enemylist)$/i", $text)){
$data['enemies'] = [];
file_put_contents("data.json", json_encode($data));
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "ᴇɴᴇᴍʏʟɪꜱᴛ ɪꜱ ɴᴏᴡ ᴇᴍᴘᴛʏ!"]);
     }
 if(preg_match("/^[\/\#\!]?(enemylist)$/i", $text)){
if(count($data['enemies']) > 0){
$txxxt = "ᴇɴᴇᴍʏʟɪꜱᴛ :
";
$counter = 1;
foreach($data['enemies'] as $ene){
  $mee = yield $MadelineProto->get_full_info($ene);
  $me = $mee['User'];
  $me_name = $me['first_name'];
  $txxxt .= "$counter: $me_name \n";
  $counter++;
}
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => $txxxt]);
} else{
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "ɴᴏ ᴇɴᴇᴍʏ!"]);
}
     }
 if(preg_match("/^[\/\#\!]?(inv) (@.*)$/i", $text) && $update['_'] == "updateNewChannelMessage"){
preg_match("/^[\/\#\!]?(inv) (@.*)$/i", $text, $m);
$peer_info = yield $MadelineProto->get_info($message['to_id']);
$peer_type = $peer_info['type'];
if($peer_type == "supergroup"){
yield $MadelineProto->channels->inviteToChannel(['channel' => $message['to_id'], 'users' => [$m[2]]]);
} else{
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "ᴊᴜꜱᴛ ꜱᴜᴘᴇʀɢʀᴏᴜᴘꜱ"]);
}
     }
   
     
 if(preg_match("/^[\/\#\!]?(leave)$/i", $text)){
 	$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "Leave"]);
yield $MadelineProto->channels->leaveChannel(['channel' => $message['to_id']]);
     }
 if(preg_match("/^[\/\#\!]?(flood) ([0-9]+) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(flood) ([0-9]+) (.*)$/i", $text, $m);
$count = $m[2];
$txt = $m[3];
$spm = "";
for($i=1; $i <= $count; $i++){
$spm .= " $txt \n";
}
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => $spm]);
     }
 if(preg_match("/^[\/\#\!]?(spam) ([0-9]+) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(spam) ([0-9]+) (.*)$/i", $text, $m);
$count = $m[2];
$txt = $m[3];
for($i=1; $i <= $count; $i++){
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => " $txt "]);
}
     }
 if(preg_match("/^[\/\#\!]?(music) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(music) (.*)$/i", $text, $m);
$mu = $m[2];
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@vkmusic_bot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
 if(preg_match("/^[\/\#\!]?(wiki) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(wiki) (.*)$/i", $text, $m);
$mu = $m[2];
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@wiki", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
 if(preg_match("/^[\/\#\!]?(youtube) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(youtube) (.*)$/i", $text, $m);
$mu = $m[2];
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@uVidBot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
 if(preg_match("/^[\/\#\!]?(pic) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(pic) (.*)$/i", $text, $m);
$mu = $m[2];
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@pic", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
 if(preg_match("/^[\/\#\!]?(gif) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(gif) (.*)$/i", $text, $m);
$mu = $m[2];
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@gif", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
 if(preg_match("/^[\/\#\!]?(google) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(google) (.*)$/i", $text, $m);
$mu = $m[2];
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@GoogleDEBot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
 if(preg_match("/^[\/\#\!]?(joke)$/i", $text)){
preg_match("/^[\/\#\!]?(joke)$/i", $text, $m);
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@function_robot", 'peer' => $peer, 'query' => '', 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][0]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
 if(preg_match("/^[\/\#\!]?(aasab)$/i", $text)){
preg_match("/^[\/\#\!]?(aasab)$/i", $text, $m);
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@function_robot", 'peer' => $peer, 'query' => '', 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][1]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
 if(preg_match("/^[\/\#\!]?(like) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(like) (.*)$/i", $text, $m);
$mu = $m[2];
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@like", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][0]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
 if(preg_match("/^[\/\#\!]?(search) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(search) (.*)$/i", $text, $m);
$q = $m[2];
$res_search = yield $MadelineProto->messages->search(['peer' => $peer, 'q' => $q, 'filter' => ['_' => 'inputMessagesFilterEmpty'], 'min_date' => 0, 'max_date' => time(), 'offset_id' => 0, 'add_offset' => 0, 'limit' => 50, 'max_id' => $message['id'], 'min_id' => 1]);
$texts_count = count($res_search['messages']);
$users_count = count($res_search['users']);
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "Msgs Found: $texts_count \nFrom Users Count: $users_count"]);
foreach($res_search['messages'] as $text){
$textid = $text['id'];
yield $MadelineProto->messages->forwardMessages(['from_peer' => $text, 'to_peer' => $peer, 'id' => [$textid]]);
 }
}
 else if(preg_match("/^[\/\#\!]?(weather) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(weather) (.*)$/i", $text, $m);
$query = $m[2];
$url = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".$query."&appid=eedbc05ba060c787ab0614cad1f2e12b&units=metric"), true);
$city = $url["name"];
$deg = $url["main"]["temp"];
$type1 = $url["weather"][0]["main"];
if($type1 == "Clear"){
		$tpp = 'Quyoshli☀';
		file_put_contents('type.txt',$tpp);
	}
	elseif($type1 == "Clouds"){
		$tpp = 'Bulutli ☁☁';
		file_put_contents('type.txt',$tpp);
	}
	elseif($type1 == "Rain"){
		 $tpp = 'Yomgʻir ☔';
file_put_contents('type.txt',$tpp);
	}
	elseif($type1 == "Thunderstorm"){
		$tpp = 'Boʻron ☔☔☔☔';
file_put_contents('type.txt',$tpp);
	}
	elseif($type1 == "Mist"){
		$tpp = 'Tuman 💨';
file_put_contents('type.txt',$tpp);
	}
  if($city != ''){
$ziro = file_get_contents('type.txt');
  $txt = "Hozir $city shaxar harorati $deg °C

Hozirgi ob-havo: $ziro";
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => $txt]);
unlink('type.txt');
}else{
 $txt = "⚠️Shahar topilmadi";
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => $txt]);
 }
}
  else if(preg_match("/^[\/\#\!]?(sessions)$/i", $text)){
$authorizations = yield $MadelineProto->account->getAuthorizations();
$txxt="";
foreach($authorizations['authorizations'] as $authorization){
$txxt .="
هش: ".$authorization['hash']."
مدل دستگاه: ".$authorization['device_model']."
سیستم عامل: ".$authorization['platform']."
ورژن سیستم: ".$authorization['system_version']."
api_id: ".$authorization['api_id']."
app_name: ".$authorization['app_name']."
نسخه برنامه: ".$authorization['app_version']."
تاریخ ایجاد: ".date("Y-m-d H:i:s",$authorization['date_active'])."
تاریخ فعال: ".date("Y-m-d H:i:s",$authorization['date_active'])."
آی‌پی: ".$authorization['ip']."
کشور: ".$authorization['country']."
منطقه: ".$authorization['region']."
====================";
}
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => $txxt]);
     }
 if(preg_match("/^[\/\#\!]?(gpinfo)$/i", $text)){
$peer_inf = yield $MadelineProto->get_full_info($message['to_id']);
$peer_info = $peer_inf['Chat'];
$peer_id = $peer_info['id'];
$peer_title = $peer_info['title'];
$peer_type = $peer_inf['type'];
$peer_count = $peer_inf['full']['participants_count'];
$des = $peer_inf['full']['about'];
$mes = "ID: $peer_id \nTitle: $peer_title \nType: $peer_type \nMembers Count: $peer_count \nBio: $des";
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => $mes]);
     }
   }
 if($data['power'] == "on"){
   if ($from_id !=$Sis) {
   if($message && $data['typing'] == "on" && $update['_'] == "updateNewChannelMessage"){
$sendMessageTypingAction = ['_' => 'sendMessageTypingAction'];
yield $MadelineProto->messages->setTyping(['peer' => $peer, 'action' => $sendMessageTypingAction]);
     }
     if($message && $data['echo'] == "on"){
yield $MadelineProto->messages->forwardMessages(['from_peer' => $peer, 'to_peer' => $peer, 'id' => [$message['id']]]);
     }
     if($message && $data['markread'] == "on"){
if(intval($peer) < 0){
yield $MadelineProto->channels->readHistory(['channel' => $peer, 'max_id' => $message['id']]);
yield $MadelineProto->channels->readMessageContents(['channel' => $peer, 'id' => [$message['id']] ]);
} else{
yield $MadelineProto->messages->readHistory(['peer' => $peer, 'max_id' => $message['id']]);
}
     }
     if(strpos($text, '😐') !== false and $data['poker'] == "on"){
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => '😐', 'reply_to_msg_id' => $message['id']]);
     }
     
  $fohsh = [
 "Yana yozyapsanmi ey 🤦🏻‍♂","Tree, kimiding o‘zi, sakra-sakra qilma","Dinay quy","Bolajon, siyib kelib uxla hop?","Jinnihonadan qochganmisan","Nima dvong, qaytarchi","On nine sky (inglizchani bilasanmi?)","Asab ekansan boru, yoqol","Lichkaga sakrachi qani","Sani hamma yomon ko‘radi, Magazinchi G‘aybulla ham","Tomdan yiqilganga o‘xshaysan","Charchadingmi deyman?","Rosa zerikarli odam ekansaney","Men sizni tanimayman","Man bilan gaplashganda yerga qara 😂😂😂","Nasafiyni ukasi yo singlisi emasmisan a?","Yoshligingda asfaltga kalla otgansanov","Yana o‘sha gapmi","Farosating noyobmi deyman, gapga tushunasanmi","Alloh seni asrasin","Onangga aytib beraman seni","Katta bo‘lsang gaplashamiz","Kusto hayratda 😱","Tug‘ilgan kuning bilan megajin","Ha erkak, erkak","Biz bilgandik, biz kutgandik","Voy mani, voy mani, ukahonimey","Seni Asalhoney bilan ko‘rgandim, o‘shamisan","Dardingni dasturhon qilma hammaga","Seni mantajchi desam g‘irt shantajchi ekansanu","Sen ruxiy sog‘lom emassan, seni davolashadi","Nortoy","San nonni nanna deb yurganingda nonvoyhonani mendan qarzi bor edi","Voy bilat birad","Mushuni ruschasi ekansan","Aqlingni maximal darajada ishlatib keyin yoz","Avjiga chiqyapsan boru, avjiga","Sharapat","Qara kimdir seni chaqiryapti, qizim deb","Men seni ko'rishni xohlamayman","O‘lmas kashshe 😂😂","R ni Y deb aytasan yana bidir-bidir qilishingni qara","Basharaga g‘isht tushib ketganmi, to‘g‘risini ayt 😄","Siz ruhiy kasal bo'lib qoldingiz","Men sizni ruhiy holatga keltirdim"," Siz zolimsiz ","Voy jallloood", "Bojaaaaallaaaar","Og‘irroq bo‘ling","Burningni hamma joyga suqaverarkansan","Ko‘nglimdaqasidakamasakansan, buncha qiyin so‘z ekansan","Tasavvur qil, ma’nosi o‘ta kuchli gap aytdim","Ahmoqsan, avval ham aytishganmi?","Ey xudoyim, bunga qara","Nima chekib olgansan 😂"
  ];
if(in_array($from_id, $data['enemies'])){
  $f = $fohsh[rand(0, count($fohsh)-1)];
  $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => $f, 'reply_to_msg_id' => $msg_id]);
}
if(isset($data['answering'][$text])){
  $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => $data['answering'][$text] , 'reply_to_msg_id' => $msg_id]);
    }
   }
  }
 }
} catch(\Exception $e){}	catch(\danog\MadelineProto\RPCErrorException $e){}
 }
}

// Madeline Tools
register_shutdown_function('shutdown_function', $lock);
closeConnection();
$MadelineProto->async(true);
$MadelineProto->loop(function () use ($MadelineProto) {
  yield $MadelineProto->setEventHandler('\EventHandler');
});
$MadelineProto->loop();
?>
