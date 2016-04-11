<?php

// メッセージ受信
$json_string = file_get_contents('php://input');
$json_object = json_decode($json_string);
$content = $json_object->result{0}->content;
$text = $content->text;
$from = $content->from;
$message_id = $content->id;
$content_type = $content->contentType;

file_put_contents( "line.txt", $json_string);


?>
