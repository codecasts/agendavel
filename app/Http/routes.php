<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$router->get('contact', function() {
    return 'A Lista de Contatos Irá aparecer aqui';
});

$router->get('contact/{id}', function($id) {
    return 'O contato de ID '. $id . ' irá aparecer aqui.';
});
