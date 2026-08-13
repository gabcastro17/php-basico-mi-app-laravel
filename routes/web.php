<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-path', function () {
    //VARIABLES
    $name = 'gaby castro'; //$ para variable
    $age = 18;
    $isLogin = false;
    $height = 0;

    //interpoblacion
    echo "<h1>hola hola, soy $name</h1>"; //echo es el print de php
    echo "<p>tengo $age años</p>";

    //arreglos 
    $names = [
        "gaby",
        "angie",
        "daniel",
        "juan",
        "martha",
        "laura"
    ];
    $jesus = [
        "name" => "jesus",
        "age" => 20,
        "heigth" => 1.79,
        "gender" => "male",
        "hobbies" => [
            "mma",
            "soccer",
            "motorcyle"
        ]
    ];

    foreach($names as $item) {
    echo "$item <br>";
    }

    echo validateAge(18);
    return "-------------";
});

function validateAge($age){
    if ($age <= 18) {
        return "soy mayor de edad";
}else{
    return "soy menor de edad";
}
}
