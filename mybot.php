<?php



ob_start();

if (empty(getenv('BOT_TOKEN'))){
$token = "API_Token";
} else {
$token = getenv('BOT_TOKEN');
}
if (empty(getenv('ADMIN'))){
$ADMIN = "ID_ADMIN";
} else {
$ADMIN = getenv('ADMIN');
}
if (empty(getenv('Channel_ID'))){
$Channel_ID = "Channel_ID";
} else {
$Channel_ID = getenv('Channel_ID');
}


define('API_KEY',$token);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

include "messages.php";
include "Telegram.php";


$telegram = new Telegram($token);
$input = file_get_contents('php://input');
$update = json_decode($input);
$message = $update->message;
$chat_id = $message->chat->id;
$user_id = $message->from->id;
$message_id = $message->message_id;
$text = $message->text;
$type = $message->chat->type;
$user = $message->from->username;
$reply= $message->reply_to_message->text;
$replyid = $message->reply_to_message->from->id;
$replyname = $message->reply_to_message->from->first_name;
$title = $message->chat->title;

$call = $update->callback_query;
$mes = $call->message;
$dataa = $call->data;
$qid = $call->id;
$callcid = $message->chat->id;
$message_re_id = $message->message_id;
$callfrid = $call->from->id;
$calluser = $mes->chat->username;
$callfname = $call->from->first_name;

$new = $message->new_chat_member;
$new_id = $new->id;
$new_name = $new->first_name;
$left = $message->left_chat_member;

$soat = date("H:i:s", strtotime("2 hour"));
$sana = date("d.m.y", strtotime("2 hour"));

$message_text = $update ->message->text;
$from_id = $message->from->id;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
$firstname = $update->callback_query->from->first_name;
$usernames = $update->callback_query->from->username;
$chatid = $update->callback_query->message->chat->id;
$fromid = $update->callback_query->from->id;
$membercall = $update->callback_query->id;
$reply = $update->message->reply_to_message->forward_from->id;
$data = $update->callback_query->data;
$dataa = $update->callback_query->data;
$messageid = $update->callback_query->message->message_id;
$chat_type = $update->message->chat->type;
$gpname = $update->callback_query->message->chat->title;
$namegroup = $update->message->chat->title;
$text_inline = $update->inline_query->query;
$inline_query_id = $update->inline_query->id;
$new_chat_member_id = $update->message->new_chat_member->id;
$newchatmemberu = $update->message->new_chat_member->username;
$rt = $update->message->reply_to_message;
$replyid = $update->message->reply_to_message->message_id;
$tedadmsg = $update->message->message_id;
$edit = $update->edited_message->text;
$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$re_name = $update->message->reply_to_message->from->first_name;
$re_msgid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$message_edit_id = $update->edited_message->message_id;
$chat_edit_id = $update->edited_message->chat->id;
$edit_for_id = $update->edited_message->from->id;
$edit_chatid = $update->callback_query->edited_message->chat->id;
$text = $update->message->text;
$mid = $update->message->message_id;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
$textmassage = $message->text;
$firstname = $update->callback_query->from->first_name;
$usernames = $update->callback_query->from->username;
$chatid = $update->callback_query->message->chat->id;
$fromid = $update->callback_query->from->id;
$alretcall = $update->callback_query->id;
$forward_from_chat = $update->message->forward_from_chat;
$from_chat_id = $forward_from_chat->id;
$messageid = $update->callback_query->message->message_id;
$tc = $update->message->chat->type;
$forward_from = $update->message->forward_from;
$forward_from_id = $forward_from->id;
$forward_from_username = $forward_from->username;
$reply = $update->message->reply_to_message->forward_from->id;
$caption = $update->message->caption;
$re = $update->message->reply_to_message;

$rre = $update->message->reply_to_message;

$from_id = $message->from->id;
$is_bot = $message->new_chat_member->is_bot;
$time = strtotime("+5 minutes");
$count = $us->result;
$day = date('d-M Y',strtotime('0 hour'));
$clock = date('H:i', strtotime('0 hour'));
$new_time = date("Y-m-d H:i:s", strtotime('+0 hours'));
$channel = "";
$random_msg_top = array("Share the bot with your frinds :)","invite your friends 🧡","If you linked tell us 💛");
$Random = $random_msg_top[array_rand($random_msg_top,1)];


$caption = $message->caption;
$document = $message->document; 
$animation = $message->animation;
$photo = $message->photo;
$video = $message->video;
$sticker = $message->sticker;
$file = $message->document;
$audio = $message->audio;
$voice = $message->voice;
$photo_id = $message->photo[0]->file_id;
$video_id= $message->video->file_id;
$sticker_id = $message->sticker->file_id;
$file_id = $message->document->file_id;
$music_id = $message->audio->file_id;
$voice_id = $message->voice->file_id;
$forward = $message->forward_from_chat;
$forward_id = $message->forward_from_chat->id;
$title = $message->chat->title;
$mention = "<a href='tg://user?id=$from_id'>$first_name</a>";
$url_count = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMembersCount?chat_id=$chat_id"),true);
$count_members = $url_count ['result'];
$lang = $message->from->language_code;
$owner = "1987049771";
$Channel_ID = "-1001368631428";
$banneddd = array("1622270145", "21279152", "575505287", "154021101", "2126768633", "5367656309", "5310401468"); 
$bannedd = array("-1001368631428", "65662627"); 
$chats = array("-1001274832363", "-1001159296830"); 
$estry = array("1136071279", "-1001159296830"); 
$id = $message->from->id;
$chat_id = $message->chat->id;
$user_id = $message->from->id;
$text = $message->text;
$namee = $update->callback_query->from->first_name;
$user = $message->from->username;
if(isset($update->callback_query)){
  $chat_id = $update->callback_query->message->chat->id;
  $message_ID = $update->callback_query->message->message_id;
  $data  = $update->callback_query->data;
 $user = $update->callback_query->from->username;
}
$replyid = $message->reply_to_message->from->id;
$replyname = $message->reply_to_message->from->first_name;
$pm = "<a href='tg://user?id=$replyid'>$replyname</a>";
$message_id = $message->message_id;
$type = $message->chat->type;
$first_name = $message->from->first_name;
$text_inline = $update->inline_qurey->qurey;
$id_inline = $update->inline_query->id;
$title = $message->chat->title;
$caption = $update->message->caption;


$cn = json_encode([
           'inline_keyboard'=>[
           [['text'=>'Chinese Website 🇨🇳','url'=>'http://website.vmos.cn/vmospro/website/index'],
           ['text'=>'Update in PM','url'=>'http://t.me/Black_Widow_Robot?start=update']],
           [['text'=>'Delete 🗑','callback_data'=>'Delete']]]]);


$welcome_key = json_encode([
           'inline_keyboard'=>[
           [['text'=>'My Group 💬','url'=>'https://t.me/+WSXAm6DJiKw2MDVk'],
           ['text'=>'Read This 📚','url'=>'https://t.me/+WSXAm6DJiKw2MDVk']],
           [['text'=>'Games 🎮','callback_data'=>'Games'],
           ['text'=>'Apps 📲','callback_data'=>'Apps']]]]);

$join_key = json_encode([
           'inline_keyboard'=>[
           [['text'=>'Join to Community & Ideas 💻🧠','url'=>'https://t.me/+WSXAm6DJiKw2MDVk'],
           ['text'=>'Dev 👩‍💻','url'=>'tg://openmessage?user_id=1987049771']],
           [['text'=>'Share 🔗','url'=>'https://telegram.me/share/url?url=&text=This%20bot%20has%20been%20development%20by%20OwO%20%F0%9F%A6%8B%20Misa%20Amane%20%F0%9F%A6%8B%20UwU%0AIf%20you%20like%20it%2C%20share%20it%20%3A%29%0Ahttps%3A%2F%2Ft.me%2FCommunity_Ideas_Robot']]]]);

if($type == 'group' or $type == 'supergroup' && !in_array($chat_id,$chats)){
$telegram->typing($chat_id, $action = 'typing');
sleep(2);
$pin_not = $telegram->sendMessage($chat_id, $text = $leave, $replyMarkup = $join_key)->result->message_id;
sleep(3);
$telegram->pin($chat_id, $message_id = $pin_not);
$telegram->leaveChat($chat_id);
return false;}


$sorry = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$owner);
if($type == 'group' or $type == 'supergroup' && (strpos($sorry,'"status":"left"') or strpos($sorry,'"Bad Request: USER_ID_INVALID"') or strpos($sorry,'"status":"kicked"'))!== false){
$telegram->typing($chat_id, $action = 'typing');
sleep(2);
$pin_not = $telegram->sendMessage($chat_id, $text = $leave, $replyMarkup = $join_key)->result->message_id;
sleep(3);
$telegram->pin($chat_id, $message_id = $pin_not);
$telegram->leaveChat($chat_id);
return false;}

$join = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=-1001368631428&user_id=989174330");
if($text == '/start' && $type == 'private' && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
$telegram->typing($chat_id, $action = 'typing');
sleep(2);
$telegram->sendMessage($chat_id, $text = $welcome_first, $replyMarkup = $join_key)->result->message_id;
return false;}

if($text =="/start" && $type == 'private' && in_array($from_id,$banned)){
$sticker_banned = $telegram->sendsticker($chat_id, $sticker = "CAACAgIAAxkBAAIDIWKorznfoLyO45g2HdbHWG-aYa5VAAKjAQACEBptIkfOxfML2NdjJAQ", $replyMarkup = null)->result->message_id;
$banned_first = $telegram->sendMessage($chat_id, $text = "Well, you're a stupid person 🙂", $replyMarkup = $null)->result->message_id;
sleep(4);
$banned_edit = $telegram->editMessageText($chat_id, $message_id = $banned_first, $text = "Do you know why?", $replyMarkup = null)->result->message_id;
sleep(4);
$banned_second = $telegram->editMessageText($chat_id, $message_id = $banned_edit, $text = "Because you think you're smart but you're an idiot :)\nAnyway If you think otherwise, contact the originating developer OwO 🦋 Misa Amane 🦋 UwU", $replyMarkup = null)->result->message_id;
sleep(4);
$telegram->Delete($chat_id, $message_id = $banned_second);
$telegram->Delete($chat_id, $message_id = $sticker_banned);
$telegram->sendMessage($chat_id = '1987049771', $text = "User: $mention\nID: $from_id\n$new_time", $replyMarkup = null);
}
elseif($text =="/start" && $type == 'private'){
$telegram->forwardMessage($from = $user_id, $to = $owner, $message_id);
$telegram->typing($chat_id, $action = 'typing');
sleep(2);
$telegram->unpin($chat_id);
sleep(2);
$wl = $telegram->sendMessage($chat_id, $text = "Well, since you've joined, let's get started 🙂", $replyMarkup = null)->result->message_id;
sleep(3);
$telegram->typing($chat_id, $action = 'typing');
$welcome_edit = $telegram->editMessageText($chat_id, $message_id = $wl, $text = $welcome_first, $replyMarkup = $welcome_key)->result->message_id;
sleep(2);
$pin = $telegram->editMessageText($chat_id, $message_id = $wl, $text = $welcome_join, $replyMarkup = $welcome_key)->result->message_id;
$telegram->pin($chat_id, $message_id = $pin);
}

if($update->message && in_array($from_id, $estry)){
$n = $telegram->sendMessage($chat_id, $text = $Random , $replyMarkup = null)->result->message_id;
sleep(3);
$telegram->Delete($chat_id, $message_id = $n);
}

switch ($text)
{
    case "memo":
$telegram->sendDocument($chat_id = $chatid, $document = "https://t.me/VMOS_Apks/10", $caption = null, $replyMarkup = null);
    break;
    case "memo":
$telegram->sendMessage($chat_id, $text = "No way", $replyMarkup = null);
    break;
    case "memo":
$telegram->sendMessage($chat_id, $text = "Ok", $replyMarkup = null);
    break;
}

if($new){
$telegram->Mute_New_Chat_Members($chat_id, $new_chat_member_id, $time);}

$pm = "Please <a href='tg://user?id=$user_id'>$first_name</a> click here";

if(isset($update) && $data == "Games"){
$games = json_encode([
           'inline_keyboard'=>[
           [["text"=>"Strategy Games","callback_data"=>"Strategy"],
           ["text"=>"Android 11 and less","callback_data"=>"om"]],
           [["text"=>"Share 🗑","url"=>"https://telegram.me/share/url?url=&text=This%20bot%20has%20been%20development%20by%20OwO%20%F0%9F%A6%8B%20Misa%20Amane%20%F0%9F%A6%8B%20UwU%0AIf%20you%20like%20it%2C%20share%20it%20%3A%29%0Ahttps%3A%2F%2Ft.me%2FCommunity_Ideas_Robot"],
           ["text"=>"Delete","callback_data"=>"Delete"]]]]);

$telegram->alret($alretcall, $text = "new version of public games 🎮", $showAlert = false);
$telegram->sendMessage($chat_id = $chatid, $text = "Please Choice your game", $replyMarkup = $games);
}


if(isset($update) && $data == "Apps"){
$apps = json_encode([
           'inline_keyboard'=>[
           [["text"=>"Communications 💬","callback_data"=>"Architectural"],
           ["text"=>"Stories Makers 📹","callback_data"=>"Stories Makers"]],
           [["text"=>"VPN Apps 📲","callback_data"=>"vpn"],
           ["text"=>"Tools 🛠","callback_data"=>"Tools"]],
           [["text"=>"Share 🔗","url"=>"https://telegram.me/share/url?url=&text=This%20bot%20has%20been%20development%20by%20OwO%20%F0%9F%A6%8B%20Misa%20Amane%20%F0%9F%A6%8B%20UwU%0AIf%20you%20like%20it%2C%20share%20it%20%3A%29%0Ahttps%3A%2F%2Ft.me%2FCommunity_Ideas_Robot"],
           ["text"=>"Delete","callback_data"=>"Delete"]]]]);

$telegram->alret($alretcall, $text = "Apps 📲", $showAlert = false);
sleep(4);
$telegram->alret($alretcall, $text = $Random, $showAlert = false);
$telegram->sendMessage($chat_id = $chatid, $text = "Please Choice your apps", $replyMarkup = $apps);
}

if(isset($update) && $data == "Architectural"){
$arm = json_encode([
           'inline_keyboard'=>[
           [["text"=>"ARMv7","callback_data"=>"Communications ARMv7"],
           ["text"=>"ARMv8","callback_data"=>"Communications ARMv8"]],
           [["text"=>"No Arch","callback_data"=>"Communications No Arch"]]]]);

$telegram->alret($alretcall, $text = "ARM Versions 🆚️", $showAlert = false);
$telegram->editMessageText($chat_id = $chatid, $message_id = $messageid, $text = "The ARMv7 architecture is the basis for all current 32-bit ARM Cortex™ processors, including the Cortex-A15 and Cortex-A9 processors. The ARMv8 architecture is the first ARM architecture that includes 64-bit execution, enabling processors based on the architecture to combine 64-bit execution with 32-bit execution.\nNote: No Arch means\nA universal APK contains code and resources for all ABIs in a single APK. The default value is false . Note that this option is only available in the splits.", $replyMarkup = $arm);
}

if(isset($update) && $data == "Strategy"){
$pubg = json_encode([
           'inline_keyboard'=>[
           [['text'=>'Check PUBG','callback_data'=>'RSSPUBG']]]]);

$telegram->sendDocument($chat_id = $chatid, $document = "BQACAgEAAxkBAAKWY2LiMLlNkT5wq4DZmbHLxXuDUtI1AALbAgACj6CwRsbSRt9KXetYKQQ", $caption = "PUBG Mobile from the official website\nBy: $firstname\nTime: $new_time", $replyMarkup = $pubg);
$telegram->sendDocument($chat_id = $chatid, $document = "BQACAgQAAxkBAAIEZmKpGHJhtqjpo0s-FvYNjvux9T5_AAL_DwACG6BJUVwO6MIaypcdJAQ", $caption = "Clash Of Clans: 14.555.11-1473\nAndroid +5: (arm64-v8a,armeabi-v7a)(nodpi)\nBy: $firstname\nTime: $new_time", $replyMarkup = $games);}
$url1 = 'https://www.apkmirror.com/apk/supercell/clash-of-clans/feed/';
  $rss = simplexml_load_file($url1);
foreach ($rss->channel->item as $item){
  $PUBGRSS = $item->title;
  break;}  
if($data=="RSSPUBG"){
  $telegram->alret($alretcall, $text = $PUBGRSS, $showAlert = true);
}

if(isset($update) && $data == "Communications ARMv7"){
$media = [[
       'type' => 'document', 'media' => 'BQACAgQAAxkBAAIGc2Kw6FqrV_nmB-qHuEmpfQABU7vAhAAC1w4AApAjiFGu9Yc42t-zSCgE', 'caption'=>"TikTok ARMv7 + [TikTok Plugin 2.4.6](https://xfiletolinkpro.herokuapp.com/28264/TikTok_Plugin_2.4.6.apk)", 'parse_mode'=>'markdown'],
      ['type' => 'document', 'media' => 'BQACAgQAAxkBAAICR2KohiIdT0c3I94r2xW6Pq614yivAAIrDQACNSxAUVS8IIV0q625JAQ', 'caption'=>"$facebook", 'parse_mode'=>'HTML'],
      ['type' => 'document', 'media' => 'BQACAgQAAxkBAAICgGKomIRUB4FjHc9_n_yMouV6AAGX5wACPQ0AAjUsQFFhiC22T6XB4CQE', 'caption'=>"Instagram: 239.0.0.14.111-363904704\nAndroid 5: minAPI21(armeabi-v7a)(nodpi)\n<a href='https://www.apkmirror.com/apk/instagram/instagram-instagram/'>Instagram APKMirror Update</a>", 'parse_mode'=>'HTML'],
      ['type' => 'document', 'media' => 'BQACAgQAAxkBAAIChmKom0vFXJUndnl2bnhwM40VNB5rAAI_DQACNSxAURirzSWFBBHuJAQ', 'caption'=>"AeroInsta V19.0.4 Clone DEFAULT Hazar\n<a href='https://aeroinsta.com/'>Areo Instagram</a>", 'parse_mode'=>'HTML'],
      ['type' => 'document', 'media' => 'BQACAgQAAxkBAAICsGKoo3e5CWEV33ml_eC5O0Mek0_qAAK5DQACrvcAAVGQOIKF11YWHyQE', 'caption'=>"Version: 2.0.0\nMinimum OS: 5.0\nBase: 8.7.4\n<a href='https://telegra.ph/OwlGram---List-of-Features-03-04'>Features</a>\n#armv7 #stable", 'parse_mode'=>'HTML']];
$telegram->alret($alretcall, $text = "Apps for ARMv7 Devices :) 🍸", $showAlert = false);
$telegram->sendMediaGroup($chat_id = $chatid, $media, $disable_notification = null, $reply_to_message_id = $message_id);}

if(isset($update) && $data == "Communications ARMv8"){
$media = [[
       'type' => 'document', 'media' => 'BQACAgQAAxkBAAIBpmKoaTGvi0Lu3tKIx3meK8NH_fYcAAIZDQACNSxAUamx7TTqo-3jJAQ', 'caption'=>"$facebook_messanger", 'parse_mode'=>'HTML'],
      ['type' => 'document', 'media' => 'BQACAgQAAxkBAAIGcmKw6Fq82CV0HuJHPxhq3YMwfDXNAALWDgACkCOIUcuzMSpPNDkUKAQ', 'caption'=>"TikTok ARMv8 24.9.3 + [TikTok Plugin 2.4.6](https://xfiletolinkpro.herokuapp.com/28264/TikTok_Plugin_2.4.6.apk)", 'parse_mode'=>'markdown'],
      ['type' => 'document', 'media' => 'BQACAgQAAxkBAAICTWKoiCODzEDPTky5cHNNb2pW5WhSAAIuDQACNSxAUYAUEWEGn6tFJAQ', 'caption'=>"$facebook_armv8", 'parse_mode'=>'HTML'],
      ['type' => 'document', 'media' => 'BQACAgQAAxkBAAICg2KomhQAAVYRlhpU04PUIylzSl4E-QACPg0AAjUsQFFD2kjQwCt9MSQE', 'caption'=>"Instagram: 239.0.0.14.111-363904658\nAndroid 6: MinAPI23(arm64-v8a)(nodpi)\n<a href='https://www.apkmirror.com/apk/instagram/instagram-instagram/'>Instagram APKMirror Update</a>", 'parse_mode'=>'HTML'],
      ['type' => 'document', 'media' => 'BQACAgQAAxkBAAICr2Koo3dekbK8VNTgiJo10nDhLi6eAAK4DQACrvcAAVHGWchEHTMv1CQE', 'caption'=>"Version: 2.0.0\nMinimum OS: 5.0\nBase: 8.7.4\n<a href='https://telegra.ph/OwlGram---List-of-Features-03-04'>Features</a>\n#arm64 #stable", 'parse_mode'=>'HTML']];
$telegram->alret($alretcall, $text = "Apps for ARMv8 Devices :) 📲", $showAlert = false);
$telegram->sendMediaGroup($chat_id = $chatid, $media, $disable_notification = null, $reply_to_message_id = $message_id);}

if(isset($update) && $data == "Communications No Arch"){
$media = [[
       'type' => 'document', 'media' => 'BQACAgQAAxkBAAIBo2KoZXdK1QdN5mJtueLgtwLxgDrxAAIXDQACNSxAUYwQOgib4QjRJAQ', 'caption'=>"$whatsapp", 'parse_mode'=>'HTML'],
      ['type' => 'document', 'media' => 'BQACAgQAAxkBAAICrmKoo3eKIARpz34_KRLLcJD_aJzrAAK3DQACrvcAAVGM1Jg_KmX_9yQE', 'caption'=>"Version: 2.0.0\nMinimum OS: 5.0\nBase: 8.7.4\n<a href='https://telegra.ph/OwlGram---List-of-Features-03-04'>Features</a>\n#universal #stable", 'parse_mode'=>'HTML'],
      ['type' => 'document', 'media' => 'BQACAgQAAxkBAAIDsWKovEUUtIgOCjCekQ14gs4avtBKAAJnDgACNSxIUWrfYDsR_LzXJAQ', 'caption'=>"App: Discord\nVersion: 126.15 - Stable (126015)\narm64-v8a + armeabi + armeabi-v7a + mips + mips64 + x86 + x86_64 (nodpi)\nRequired Android +5", 'parse_mode'=>'HTML']];
$telegram->alret($alretcall, $text = "There's no Arch means those apks works on all devices", $showAlert = false);
$telegram->sendMediaGroup($chat_id = $chatid, $media, $disable_notification = null, $reply_to_message_id = $message_id);}

if(isset($update) && $data == "Stories Makers"){
$media = [[
       'type' => 'document', 'media' => 'BQACAgQAAxkBAAICX2KojxvXEsFka-Bmif5xVldwN3rnAAJQDQACLlNAUQEnoItABHkEJAQ', 'caption'=>"INSTORIES: INSTA STORIES MAKER V4.3.0 [PRO]", 'parse_mode'=>'HTML'],
      ['type' => 'document', 'media' => 'BQACAgQAAxkBAAICYmKoj6ABqfdj4uyJ6vthpv-dbD2HAAJTDQACLlNAUdkjntzhNoe6JAQ', 'caption'=>"INSPIRY - INSTA STORY TEMPLATES V5.3 [PRO]", 'parse_mode'=>'markdown']];
$telegram->sendMediaGroup($chat_id = $chatid, $media, $disable_notification = null, $reply_to_message_id = $message_id);}

if(isset($update) && $data == "vpn"){
$media = [[
       'type' => 'document', 'media' => 'BQACAgQAAxkBAAIC6GKoqa19RzabO6Wd3Cn_BVHgrt89AAKPDQACLlNAUa1-l0x-RLLwJAQ', 'caption'=>"Power VPN Fast Secure Unlimited VPN PRO v1.99 build 318 AOSP No", 'parse_mode'=>'HTML'],
      ['type' => 'document', 'media' => 'BQACAgQAAxkBAAICaGKokReLWZ4x6ytzqu4thIlMoZIOAAJWDQACLlNAUdi0KyLItU-3JAQ', 'caption'=>"VPNHUB: UNLIMITED & SECURE V3.16.12 [PRO] [MOD]", 'parse_mode'=>'markdown'],
      ['type' => 'document', 'media' => 'BQACAgQAAxkBAAICa2Koka0dBvXKu9_Yq0UgMoBzDL7VAAJXDQACLlNAUa8vIVThl8v3JAQ', 'caption'=>"Go VPN 1.9.4 Mod", 'parse_mode'=>'HTML']];
$telegram->alret($alretcall, $text = "Best VPN Apps 🍸🥳", $showAlert = false);
$telegram->sendMediaGroup($chat_id = $chatid, $media, $disable_notification = null, $reply_to_message_id = $message_id);}


if($text == "/file"){
$media = [[
       'type' => 'document', 'media' => 'https://t.me/', 'caption'=>'Caption'],
      ['type' => 'document', 'media' => 'https://t.me/', 'caption'=>'Caption']];
$telegram->sendMediaGroup($chat_id, $media, $disable_notification = null, $reply_to_message_id = null);}
                            
if($data == "11"){
$telegram->alret($alretcall, $text = "For Android devices 📱", $showAlert = false);
$telegram->sendDocument($chat_id = $chatid, $document = "https://t.me/VMOS_Apks/10", $caption = $vmos_pro, $replyMarkup = $os);}



if($text == '/vmos' || $text == '/vmos@Community_Ideas_Robot'){
$telegram->typing($chat_id, $action = 'typing');
sleep(2);
$telegram->sendMessage($chat_id, $text = $pm, $replyMarkup = $cn);}

elseif(preg_match("/(last|update)/", $text) && $type =='private'){
$telegram->typing($chat_id, $action = 'document');
sleep(2);
$telegram->sendDocument($chat_id, $document = "https://t.me/VMOS_Apks/11", $caption = $caption, $replyMarkup = null);
$telegram->sendsticker($chat_id, $sticker="CAACAgQAAxkBAAEQSq9ip0h8-pJzKJyI2rtaYY1c_2J75wAC_gEAAg8joS_fWZ-AqhWQhiQE", $replyMarkup = null);}

if($data == "Delete"){
$telegram->alret($alretcall, $text = "OK Delete 🗑", $showAlert = false);
$telegram->Delete($chat_id = $chatid, $message_id = $messageid);}


if($text =='/json' and $re){
$telegram->jsonData($chat_id, $text = json_encode($update, 448));}

if($text == "/members"){
        $telegram->sendMessage($chat_id, $text = "The number of group members: $count_members", $replyMarkup = $key);}


if($text == "/member"){
$st = $telegram->getChatMember($chat_id, $user_id);
	if($st->result->status == 'creator' || $st -> result -> status == 'administrator'){
        $telegram->sendMessage($chat_id, $text = "The number of group members: $count_members", $replyMarkup = $key);}}

if(in_array($st->result->status??"",["administrator","creator"])){
if($text == "/check"){
  $telegram->sendMessage($chat_id, $text = 'Hello');
}}

if($text == '/key'){
$telegram->sendMessageInlineKeyboard($chat_id, $text = "$day $clock $new_time", $replyMarkup = null);}

$cpu_info = json_encode([
           'inline_keyboard'=>[
           [["text"=>"CPU Info ℹ️","callback_data"=>"Info CPU"],
           ["text"=>"APKs","callback_data"=>"Architectural"]]]]);


if(preg_match("/(TikTok|tiktok|TIKTOK)/", $text) && $type =='private'){
$telegram->typing($chat_id, $action = 'typing');
sleep(2);
$telegram->sendMessage($chat_id, $text = "By this you can download the mod version of TikTok :)", $replyMarkup = $cpu_info);}

if(isset($update) && $data == "Info CPU"){

$telegram->sendDocument($chat_id = $chatid, $document = "BQACAgQAAxkBAAIG-2KzqcMriS2YLbJ0nVKN0hCpQTPVAAI1CwACCj7hUZbMdzITxrxbKQQ", $caption = "To know if your phone support Armv8a or Armv7a you need to download this app and check the photos", $replyMarkup = null);
$pic1 = $telegram->sendPhoto($chat_id = $chatid, $photo = "AgACAgQAAxkBAAIG_2Kzqr6A8ik7g2BJ5PWWvHEoO9M-AALfuzEbFmyhUUieXS2MM-VKAQADAgADeQADKQQ", $caption = "Click on <U>CPU</U>\nYou will see like this means your phone support Armv8a 64-bit", $replyMarkup = null)->result->message_id;
$pic2 = $telegram->sendPhoto($chat_id = $chatid, $photo = "AgACAgQAAxkBAAIG_mKzqmSPhIBOXuiPzvncCdJjr5BGAALeuzEbFmyhUQAB9bP942HoIwEAAwIAA3kAAykE", $caption = "Click on <U>CPU</U>\nYou will see like this means your phone support Armv7a 32-bit", $replyMarkup = $cpu_info)->result->message_id;
sleep(12);
$telegram->Delete($chat_id, $message_id = $pic1);
$telegram->Delete($chat_id, $message_id = $pic2);
}

if(isset($update) && $data == "TikTok"){
$telegram->alret($alretcall, $text = "By this button you can know information ℹ️ about your arch if support 64-bit or 32-bit", $showAlert = true);
}





if($text_inline = 'How To Use'){
    bot('answerInlineQuery', 
        [
            'inline_query_id' => $id_inline,
            'cache_time'=>'150', 
            'results' => json_encode(
            [[
                'type' => 'article',
                'id' =>'1',
                'thumb_url'=>"https://telegra.ph/file/643f15e9f34f59e7cea10.jpg",
                'title' => "Example ?",
                'description'=>"Just a small Example how to use me",
                'url'=> "https://t.me/TAndroidAPK",
                'input_message_content' => ['parse_mode' => 'HTML', 'message_text' => "/send https://t.me/TAndroidAPK/149"],
            ],
  [
            'type'=> 'photo',
            'id'=> '2',
            'photo_url'=> "https://st.depositphotos.com/1010683/1389/i/450/depositphotos_13895290-stock-photo-giant-panda-bear-eating-bamboo.jpg",
            'photo_width' => 600,
            'photo_height' => 400,
            'title'=> "Ochko'z panda 2022",
            'caption'=> "Pandani rasmi 29.05.22",
            'parse_mode'=> "HTML",
            'description' => 'Pandachani rasmchasi',
            'thumb_url' => 'https://st.depositphotos.com/1010683/1389/i/450/depositphotos_13895290-stock-photo-giant-panda-bear-eating-bamboo.jpg',
            'reply_markup' => [
                'inline_keyboard' => [
                    [
                        ['text' => "Do'stlarga ulashish", 'switch_inline_query' => "chatbot"]
                    ],
                    [
                        ['text' => "Barcha videolarni ko'rish", 'switch_inline_query_current_chat' => "videolar"]
                    ]
                ]
            ]
        ],
[
            'type'=> 'video',
            'id'=>'3',
            'video_url'=> "https://mproweb.uz/YTless/tgramApi/myvideo.mp4",
            'mime_type'=> "video/mp4",
            'title'=> "Test video",
            'caption'=> "inlinebotdan video",
            'parse_mode'=> "HTML",
            'description' => 'qiziqarli video',

            'thumb_url' => 'https://itiq.ps/wp-content/uploads/2021/10/youtube-video-titles.jpg',
            'reply_markup' => [
                'inline_keyboard' => [
                    [
                        ['text' => "Do'stlarga ulashish", 'switch_inline_query' => "chatbot"]
                    ],
                    [
                        ['text' => "Barcha videolarni ko'rish", 'switch_inline_query_current_chat' => "videolar"]
                    ]
                ]
            ]
        ],
        [
            'type'=> 'audio',
            'id'=>'4',
            'audio_url'=> "https://mproweb.uz/YTless/tgramApi/audio.mp3",
            'title'=> "Test audio",
            'caption'=> "inlinebotdan audio",
            'parse_mode'=> "HTML",
            'performer' => 'Katta hofiz',

            'reply_markup' => [
                'inline_keyboard' => [
                    [
                        ['text' => "Do'stlarga ulashish", 'switch_inline_query' => "chatbot"]
                    ],
                    [
                        ['text' => "Barcha videolarni ko'rish", 'switch_inline_query_current_chat' => "videolar"]
                    ]
                ]
            ]
        ],
        [
            'type'=> 'document',
            'id'=>'5',
            'document_url'=> "https://mproweb.uz/YTless/tgramApi/file.pdf",
            'title'=> "Test document",
            'caption'=> "inlinebotdan document",
            'parse_mode'=> "HTML",
            'mime_type' => 'application/pdf',
            'description' => 'May oyi hisobotlari',
        ],        

[
                'type' => 'article',
                'id' =>'6',
                'thumb_url'=>"https://telegra.ph/file/8e7dbef60b2ec4d1490cf.jpg",
                'title' => "Copy any message in your group",
                'description'=>"Resend a message with protection feature",
                'url'=> "https://telegra.ph/file/8e7dbef60b2ec4d1490cf.jpg",
                'input_message_content' => ['parse_mode' => 'HTML', 'message_text' => "Just reply to any user with the message ID number for the file like /copy 353325"],
            ]]
            )
        ]
    );
}



if($text =="/startt" and $type == 'private'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"Hello $first_name, through the bot, you can send a file from a public channel with the protection feature in your group just use this <code>/send File_link</code>
Only for groups also only admins can use it",
'reply_to_message_id'=>$update->message->message_id,
'parse_mode'=>"HTML",
'reply_markup' => json_encode([
            'inline_keyboard' => [
[['text' => "Add Me ➕️", 'url' =>"http://t.me/Re_Send_File_Bot?startgroup=start"],
['text' => "Dev 👩‍💻", 'url' =>"tg://openmessage?user_id=1136071279"]],
[['text' => "Inline Information ℹ️", 'switch_inline_query_current_chat' =>"How To Use"]],

]]),
]);}



$s = str_replace('scan ','',$text);
     if($text == "scan $s"){
     if(preg_match("/^[0-9]+$/", $s)){
$ok = bot('getchat',['chat_id'=>$s])->ok;
     if($ok == "true"){
$get = bot('getchat',['chat_id'=>$s])->result;
$name = $get->first_name;
$user = $get->username;
$bio = $get->bio;
$photo = bot('getUserProfilePhotos',['user_id'=>$s])->result->photos[0][0]->file_id;
$type = bot('sendChatAction' , ['chat_id' =>$s,'action' => 'typing' ,])->ok;
      if($type != 1){
$true = "Banned ❗";
}else{
$true = "Unbanned 😁";
}
if($user == null){
$user = "No userName ❗";
}
if($bio == null){
$bio = "No Bio ❗";
}
     if($photo == null){
         bot('sendMessage', [
             'chat_id'=>$chat_id,
             'text'=>"
Sorry you don't have a profile pic
- Mention 🌸 :
[$name](tg://user?id=$s)
- User ID 🌸 :
$s
- UserName 🌸:
<code>@$user</code>
- UserBio 🌸:
$bio
- Status 🌸 : $true
",'parse_mode'=>"HTML",]);
}else{
bot('sendphoto', [
'chat_id'=>$chat_id,
'photo'=>$photo,
'caption'=>"
- Mention 🌸 :
[$name](tg://user?id=$s)
- IDUser 🌸 :
$s
- UserName 🌸 :
*$user*
- UsetBio 🌸 :
[$bio]()
- Status 🌸 :
$true
",'parse_mode'=>"MarkDown",]);}
}else{
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
Sorry Can't find the user
",'parse_mode'=>"MarkDown",]);}}}

if($text == "/web"){
$hi_text = "Welcome web menu!";
bot('sendmessage', [
'chat_id' => $chat_id,
'text' => $hi_text, 'parse_mode' => 'HTML',
'reply_markup' => json_encode([
'inline_keyboard' => [[[
'text' => "Facebook 📖", 'web_app' => ['url' => 'https://www.facebook.com']], [ 'text' => "Youtube 🔥", 'web_app' => ['url' => 'https://m.youtube.com']]], ] ]) ]); }


if($text == "/s" and $type == 'private' ){
bot('sendDocument', [
'chat_id' => $chat_id,
 'document' =>new CURLFile("img.jpg"),
'caption' => "local yuborilgan document file",
'thumb' => new CURLFile("img.jpg"),
]);
}


if(isset($update->message->nnew_chat_member)){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text' => "How you got link for this group??",
'parse_mode' => 'HTML',
'reply_to_message_id'=>$message->message_id, 
'reply_markup' => json_encode([
'force_reply' => true,
'input_field_placeholder' =>
"Type Your Answer...",
'selective' => true,]) ]);}

if($text == "Hi"){
$telegram->ForceReply($chat_id, $text = "Hello how can you join to here", $message_id, $input = "Please Replay");}


 if($update->channel_post){
 $message = $update->channel_post;
 $message_id = $message->message_id;
   $chat_id = $message->chat->id;
   $text1 = $message->text;
   $user = $message->chat->username;
   $title = $message->chat->title;
   $name = $message->author_signature;
   $type = $message->chat->type;
 }

 
if($message->sender_chat->type == "channel"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('banChatSenderChat',[
'chat_id'=>$chat_id,
'sender_chat_id'=>$message->sender_chat->id
]);
}


if($update->channel_post){
  bot('editMessageCaption',[
  'chat_id'=>$chat_id,
  'message_id'=>$message_id,
  "caption"=>"ok",
  ]);
  }
  if($update->channel_post){
   bot('editMessageText',[
   'chat_id'=>$chat_id,
   'message_id'=>$message_id,
   "text"=>"$text \n ok",
   ]);
   }

?>
