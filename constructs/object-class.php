<?php

namespace Object;

class Conversation {}

$obj = new Conversation();

echo $obj::class;

$type = match ($obj::class) {
    "Object\Conversation" => "started_conversation",
    "Reply" => "replied_to_conversation",
    "Comment" => "commented_on_lesson"
};

echo $type;