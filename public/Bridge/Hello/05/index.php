<?php

require 'Hello.php';
require 'Korean.php';
require 'English.php';

require 'Language.php';

require 'Message.php';

if (isset($language) === true && $language === 'Korean') {
    $obj = new Message(new Korean);
} else {
    $obj = new Message(new English);
}

echo $obj->greeting();