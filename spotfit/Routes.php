<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json; charset=utf-8');
Route::set('api/getProducts', function(){
    echo json_encode("aaaaaaaaaaa");
});

Route::set('api/login', function(){
    echo json_encode("aaaaaaaaaaa");
});