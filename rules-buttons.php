<?php
    if($data=="init"){
        Request("deleteMessage", array('chat_id' => $chat_id, "message_id" => $message_id));
        Request(
            "sendSticker",
            array(
                'chat_id' => $chat_id,
                "sticker" => 'CAACAgIAAxkBAAMtXjKm4rjHrThW1GIY4d6M-n7qL0MAAgIAA_B_LiDKpq1PIGmzahgE'
            )
        );
    }
?>