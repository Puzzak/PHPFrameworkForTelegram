<?php 
//message
    $message=$update["message"];
    
    $Message[id]=$message['message_id'];
    $Message[from]=$message['from'];//User object
        $User[id]=$message['from']['id'];
        $User[bot]=$message['from']['is_bot'];
        $User[fname]=$message['from']['first_name'];
        $User[lname]=$message['from']['last_name'];
        $User[username]=$message['from']['username'];
        $User[lang]=$message['from']['language_code'];
        $User[canjoin]=$message['from']['can_join_groups'];
        $User[canread]=$message['from']['can_read_all_group_messages'];
        $User[queries]=$message['from']['supports_inline_queries'];
    $Message[date]=$message['date'];
    $Message[chat]=$message['chat'];//Chat object
        $Chat[id]=$message['chat']['id'];
        $Chat[type]=$message['chat']['type'];
        $Chat[title]=$message['chat']['title'];
        $Chat[username]=$message['chat']['username'];
        $Chat[fname]=$message['chat']['first_name'];
        $Chat[lname]=$message['chat']['last_name'];
        $Chat[photo]=$message['chat']['photo'];//ChatPhoto object
            $Avatar[smallid]=$message['chat']['small_file_id'];
            $Avatar[smalluid]=$message['chat']['small_file_unique_id'];
            $Avatar[bigid]=$message['chat']['big_file_id'];
            $Avatar[biguid]=$message['chat']['big_file_unique_id'];
        $Chat[description]=$message['chat']['description'];
        $Chat[invite]=$message['chat']['invite_link'];
        $Chat[pinned]=$message['chat']['pinned_message'];//Message object - avoid recursions!
            $PUser[id]=$message['pinned_message']['from']['id'];
            $PUser[bot]=$message['pinned_message']['from']['is_bot'];
            $PUser[fname]=$message['pinned_message']['from']['first_name'];
            $PUser[lname]=$message['pinned_message']['from']['last_name'];
            $PUser[username]=$message['pinned_message']['from']['username'];
            $PUser[lang]=$message['pinned_message']['from']['language_code'];
            $Pinned[caption]=$message['pinned_message']['caption'];
            $Pinned[text]=$message['pinned_message']['text'];
            //etc, i'm too lazy to write them all. 
            //If you need them, sry, bro - you are mad genius)
            //You see how I did those, make your own SHIT.
        $Chat[permissions]=$message['chat']['permissions'];//ChatPermissions object
            $Permission[text]=$message['chat']['permissions']['can_send_messages'];
            $Permission[media]=$message['chat']['permissions']['can_send_media_messages'];
            $Permission[poll]=$message['chat']['permissions']['can_send_polls'];
            $Permission[other]=$message['chat']['permissions']['can_send_other_messages'];
            $Permission[preview]=$message['chat']['permissions']['can_add_web_page_previews'];
            $Permission[edit]=$message['chat']['permissions']['can_change_info'];
            $Permission[invite]=$message['chat']['permissions']['can_invite_users'];
            $Permission[pin]=$message['chat']['permissions']['can_pin_messages'];
        $Chat[delay]=$message['chat']['slow_mode_delay'];
        $Chat[stickerset]=$message['chat']['sticker_set_name'];
        $Chat[cansetstickers]=$message['chat']['can_set_sticker_set'];
    $Message[fuser]=$message['forward_from'];//User object    
        $FUser[id]=$message['forward_from']['id'];
        $FUser[bot]=$message['forward_from']['is_bot'];
        $FUser[fname]=$message['forward_from']['first_name'];
        $FUser[lname]=$message['forward_from']['last_name'];
        $FUser[username]=$message['forward_from']['username'];
        $FUser[lang]=$message['forward_from']['language_code'];
    $Message[fchat]=$message['forward_from_chat'];//Chat object
        $FChat[id]=$message['chat']['id'];
        $FChat[type]=$message['chat']['type'];
        $FChat[title]=$message['chat']['title'];
        $FChat[username]=$message['chat']['username'];
        $FChat[fname]=$message['chat']['first_name'];
        $FChat[lname]=$message['chat']['last_name'];
    $Message[originalid]=$message['forward_from_message_id'];
    $Message[author]=$message['forward_signature'];
    $Message[fname]=$message['forward_sender_name'];
    $Message[originaldate]=$message['forward_date'];
    $Message[reply]=$message['reply_to_message'];//Message object
        $RUser[id]=$message['reply_to_message']['from']['id'];
        $RUser[bot]=$message['reply_to_message']['from']['is_bot'];
        $RUser[fname]=$message['reply_to_message']['from']['first_name'];
        $RUser[lname]=$message['reply_to_message']['from']['last_name'];
        $RUser[username]=$message['reply_to_message']['from']['username'];
        $RUser[lang]=$message['reply_to_message']['from']['language_code'];
        $Reply[caption]=$message['reply_to_message']['caption'];
        $Reply[text]=$message['reply_to_message']['text'];
        //same - too many parameters - here is most userfull  
    $Message[bot]=$message['via_bot'];//User object
        $User[id]=$message['via_bot']['id'];
        $User[fname]=$message['via_bot']['first_name'];
        $User[username]=$message['via_bot']['username'];
        //what? Smthng else?
    
    $Message[caption]=$message['caption'];
    $Message[text]=$message['text'];
    
    $Sticker[id]=$message['sticker']['file_id'];
    $Sticker[uid]=$message['sticker']['file_unique_id'];
    $Sticker[width]=$message['sticker']['width'];
    $Sticker[height]=$message['sticker']['height'];
    $Sticker[animated]=$message['sticker']['is_animated'];
    $Sticker[thumb]=$message['sticker']['thumb'];//PhotoSize objects array
    $Sticker[emoji]=$message['sticker']['emoji'];
    $Sticker[set]=$message['sticker']['set_name'];
    $Sticker[mask_position]=$message['sticker']['mask_position'];//MaskPosition object
        $Mask[point]=$message['sticker']['mask_position']['point'];
        $Mask[xshift]=$message['sticker']['mask_position']['x_shift'];
        $Mask[yshift]=$message['sticker']['mask_position']['y_shift'];
        $Mask[scale]=$message['sticker']['mask_position']['scale'];
    
    $RepliedMessageText=$message['reply_to_message']['text'];
    $RepliedMessageId=$message['reply_to_message']['message_id'];
    $RepliedMessageSenderId = $message['reply_to_message']['from']['id'];
    $ChatName=$message['chat']['username'];
    $SenderName=$message['from']['username'];
    $Replied=$message['reply_to_message']['from']['username'];
    $newinchat=$message['new_chat_members'];
//inline
/*
    $query=$update["inline_query"];
    $id=$query[id];
    $userid=$query[from][id];
    $is_bot=$query[from][is_bot];
    $fname=$query[from][first_name];
    $lname=$query[from][last_name];
    if(isset($lname)){
        $user_name ="$fname $lname";
    }else{
        $user_name=$fname;
    }
    $username=$query[from][username];
    $language=$query[from][language_code];
    $text=$query[query];
    $offset=$query[offset];
//callback
    $callback=$update["callback_query"];
    $fname=$callback['message']['chat']['first_name'];//string
    $lname=$callback['message']['chat']['last_name'];//string
    if(isset($lname)){
        $user_name ="$fname $lname";
    }else{
        $user_name=$fname;
    }
    $chat_id=$callback['from']['id'];
    $data=$callback['data'];
    $message_id=$callback['message']['message_id'];
    $message_text=$callback['message']['text'];
    $chat_id=$callback['message']['chat']['id'];
    $username=$callback['message']['chat']['username'];
    $id=$callback['id'];*/
?>