<?php

require "../../../bootstrap.php";

use app\classes\Mail;
use app\Validate\Validate;
use app\Validate\Sanitize;


if (!Validate::isEmpty() && Validate::validate(["name" => "s","email" => "e","subject" => "s","content" => "s"])) {

    $validate = Sanitize::sanitize([
        "name" => "s",
        "email" => "e",
        "subject" => "s",
        "content" => "s"
    ]);

    $data = [
        "from" => $validate->name,
        "to" => 'cadtreesa.suporte@gmail.com',
        "subject" => $validate->subject,
        "message" => $validate->content
    ];

    Mail::send($validate->email, $data);
    
} else {

    flash( "message" , "Verifique os campos preenchidos" );
}

