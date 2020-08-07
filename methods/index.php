<?php
function Method($name){global $method;$method=$name;}
//sendMessage
function To($chat){global $former;$former[chat_id]=$chat;}
function Message($text){global $former;$former[text]=$text;}
function Parse($mode){global $former;$former[parse_mode]=$mode;}
function NoPreview($bool){global $former;$former[disable_web_page_preview]=$bool;}
function NoSound($bool){global $former;$former[disable_notification]=$bool;}
function Reply($toid){global $former;$former[reply_to_message_id]=$toid;}
?>