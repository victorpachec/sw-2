<?php
    header("content-type: application/json");

    $usuarios = [

        ["id" => 1, "nome" => "maria", "email" => "aaaaaaaaaa@gmail.com"],
        ["id" => 2, "nome" => "maria", "email" => "agggggggggga@gmail.com"]
    

    ];

    echo json_encode($usuarios);




?>