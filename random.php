<?php
ob_start();

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$idbot=bot("getme")->result->id;
$name = $message->from->first_name;
$user = $message->from->username;
$type = $message->chat->type;
$message_id=$message->message_id;
$admin= "1987049771";
function save($array){
    file_put_contents('info.json', json_encode($array));
}
$Baageel="%00D%00e%00v%00e%00l%00o%00p%00m%00e%00n%00t%00%20%00b%00y%00%20%00M%00o%00l%00o%00t%00o%00v";
$info = json_decode(file_get_contents('info.json'),1);
$startMassage="
Welcome to the bot reminder
This bot sends a message every ".$info["counts"]." Message in the group";
function send($text="لا يوجد نص",$list=null){
 global $chat_id;
 $list=str_replace("\n","",$list);
    $ex = explode("&", $list);
    foreach ($ex as $sater) {
        $exx = explode ("#", $sater);
        foreach ($exx as $key) {
            $keyboard[] = $key;
        }
        $result[]=$keyboard;
        unset($keyboard);
     }
     return bot("sendmessage",[
     "chat_id"=>$chat_id,
     "text"=>$text,
     "parse_mode"=>"HTML",
      "disable_web_page_preview"=>true,
      "reply_markup"=>json_encode([
      "keyboard"=>
      $result,
      "resize_keyboard"=>true  
      ])
     ])->result;
}
if($info["counter"]==null){
	$info["counter"]=1;
	save($info);
}
if($chat_id==$admin){
	if($text=="/start" or $text =="رجوع"){
		send("اهلا عزيزي المطور اختار الامر الذي تريده من الكيبورد",
        "اضافة ذكر#حذف ذكر&معرفة الذكر عن طريق ايدي الذكر&الاحصائيات&اذاعة قروبات#اذاعة اعضاء&وضع عدد للرسائل"
        );
        $info["admin"]=null;
        save($info);
	}elseif($text == "اضافة ذكر"){
		send("قم بارسال الذكر","رجوع");
		$info["admin"]="add";
		save($info);
	}elseif($text && $info["admin"]=="add"){
		$info["admin"]=null;
		for($i=1;$i<=$info["counter"];$i++){
			if($info["athkar"][$i]==null){
				$info["athkar"][$i]=$text;
				if($i==$info["counter"]) $info["counter"]+=1;
				save($info);
				break;
			}
		}
		send("تمت الاضافة \nايدي الذكر في حالة اردت حذفه هو \n$i","رجوع");
	}elseif($text == "حذف ذكر"){
		send("قم بارسال ايدي الذكر","رجوع");
		$info["admin"]="del";
		save($info);
	}elseif($text && $info["admin"]=="del"){
		if($info["athkar"][$text]==null){
			send ("لا يوجد ذكر بهذا الايدي قم بارسال الايدي مره اخرى ","رجوع");
		}else{
			send("جاري الحذف");
			unset($info["athkar"][$text]);
			$info["admin"]=null;
			save($info);
			send("تم الحذف بنجاح","رجوع");
		}
	} elseif ($text =="الاحصائيات"){
        $groups = count($info["ids"]["groups"]);
        $memb  = count($info["ids"]["member"]);
        send("عدد القروبات المشتركة في البوت : $groups \nعدد الاعضاء المستخدمين للبوت : $memb","رجوع");
	} elseif ($text =="معرفة الذكر عن طريق ايدي الذكر"){
		send("قم بارسال ايدي الذكر","رجوع");
		$info["admin"]="infobyid";
		save($info);
	}elseif($text && $info["admin"]=="infobyid"){
		if($info["athkar"][$text]==null){
			send("لايوجد ذكر بهذا الايدي يرجاء ارسال الايدي مره اخرى او اضغط رجوع","رجوع");
		}else{
			send($info["athkar"][$text],"رجوع");
			$info["admin"]=null;
			save($info);
		}
	}elseif($text =="وضع عدد للرسائل"){
		send("قم بارسال العدد الذي تريد البوت ان يرسل ذكر بعد ان يوصل عدد الرسائل له","رجوع");
		$info["admin"]="howmany";
		save($info);
	}elseif($text && $info["admin"]=="howmany"){
		if(is_numeric($text)){
			$info["counts"]=$text;
			save($info);
			send("تم الحفظ","رجوع");
		}else{
			send("قم بارسال رقم وليس نص","رجوع");
		}
	}elseif($text == "اذاعة اعضاء"){
		$info["admin"]="sendmember";
		save($info);
		send("قم بارسال الرسالة التي تريد ارسالها للاعضاء","رجوع");
	}elseif($message && $info["admin"]=="sendmember"){
		foreach ($info["ids"]["member"] as $id){
			bot("copymessage",["chat_id"=>$id,"message_id"=>$message_id,"from_chat_id"=>$chat_id]);
		}
		$info["admin"]=null;
		save($info);
		send("تم الارسال","رجوع");
	}elseif($text=="اذاعة قروبات"){
		$info["admin"]="sendgroups";
		save($info);
		send("قم بارسال الرسالة التي تريد ارسالها للقروبات","رجوع");
	}elseif($message && $info["admin"]=="sendgroups"){
		foreach ($info["ids"]["groups"] as $id){
			bot("copymessage",["chat_id"=>$id,"message_id"=>$message_id,"from_chat_id"=>$chat_id]);
		}
		$info["admin"]=null;
		save($info);
		send("تم الارسال","رجوع");
	}
	
	
}else{
    if($type=="private"){
    	if($message && !in_array($chat_id,$info["ids"]["member"])){
    	    $info["ids"]["member"][]=$chat_id;
            save($info);
    	}
        if($text =="/random" || $text=="رجوع"){
        	send($startMassage,"احصائيات البوت&فريق تطوير البوت");
        }
        if(urlencode($text)==$Baageel){
        	send(urldecode($team),"رجوع");
        }
        if($text == "احصائيات البوت"){
        	$groups = count($info["ids"]["groups"]);
            $memb  = count($info["ids"]["member"]);
            send("
The number of groups shared in the bot : $groups
The number of members using the bot : $memb","رجوع");
        }
    } else {
          if($message && !in_array($chat_id,$info["ids"]["groups"])){
    	    $info["ids"]["groups"][]=$chat_id;
            save($info);
    	}
        if($info["count"][$chat_id]==null){
        	$info["count"][$chat_id]=0;
            save($info);
        }
        if($info["counts"]==null){
        	$info["counts"]=10;
            save($info);
        }
        if($message->new_chat_member->id==$idbot){
        	send($startMassage);
        }
        if($message && in_array($chat_id,$info["ids"]["groups"])){
        	$info["count"][$chat_id]+=1;
        	if($info["count"][$chat_id]>=$info["counts"]){
        	    //امر الارسال
             for($i=1;$i<10;$i++){
             	$rand=rand(1,$info["counter"]);
                 if($info["athkar"][$rand]==null){ continue;}
                 else {
                 	send($info["athkar"][$rand]);
                     break;
                 }
             }
             $info["count"][$chat_id]=0;
            }
            save($info);
        }
    }
}



