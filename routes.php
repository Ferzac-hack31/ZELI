<?php 

use Routes\Zumito;

Zumito::get("/","IndexController@index");
//Zumito::post("/donate","DonateController@index");
Zumito::get("/Category/{}","CategoryController@index");
Zumito::get("/login","LoginController@verify");


Zumito::LoadRoute($_SERVER['REQUEST_URI']);

