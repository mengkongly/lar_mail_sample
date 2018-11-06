<?php

use Illuminate\Support\Facades\Mail;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-mail',function(){

    $data   =   [
                'title'=>'Hi everybody, this is my title of email.',
                'content'=>'This is my testing email with laravel using mailgun service.'
    ];

    Mail::send('emails.testmail',$data,function($message){

        $message->to('example@gmail.com','MK Gmail')->subject('Hello this is testing mail');

    });

});
