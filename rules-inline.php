<?php 
Request(
    "sendMessage",
    array(
        'chat_id' => $userid,
        "text" => $text
    )
);
?>