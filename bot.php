<?php
$content = file_get_contents("php://input");
$update = json_decode($content, true);

include "core/process.php";
include "methods/index.php";

Method("sendMessage");
To($chat_id);//required
Message("`Shit`");//required
Parse("MarkdownV2");
NoPreview(true);
NoSound(true);
Reply($message_id);

include "core/request.php";
?>