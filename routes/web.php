<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('products', function () {
    return view('products');
});

Route::get('services', function () {
    return view('services');
});

Route::get('terms-and-conditions', function () {
    return view('terms');
});

Route::get('privacy-and-policy', function () {
    return view('privacy');
});

Route::get('request/product', function () {
    return view('request-product');
});

Route::post('product/request/submit', function (Request $request){

    $input = $request->all();

    $data = [
        'name' => $input['name'],
        'email' => $input['email'],
        'product' => $input['product'],
        'product_description' => $input['product_description'],
    ];

    Mail::send('emails.product-request', $data, static function ($message) use ($data) {
        $message->from($data['email'], $data['name']);
        $message->to('support@purehealthmedics.com');
        $message->replyTo(env('MAIL_FROM_ADDRESS'), env('app_name'));
        $message->subject('Request for '.$data['product']);
    });

//    Session::flash('success', 'Deleted');
    return redirect()->back()->with('success', 'Your request has been sent, our customer service representative will contact you via email');
});

Route::get('contact', function () {
    return view('contact');
});

Route::post('contact/submit', function (Request $request){

    $input = $request->all();

    $data = [
        'name' => $input['name'],
        'email' => $input['email'],
        'subject' => $input['subject'],
        'description' => $input['description'],
    ];

    Mail::send('emails.contact-form', $data, static function ($message) use ($data) {
        $message->from($data['email'], $data['name']);
        $message->to('support@purehealthmedics.com');
        $message->replyTo(env('MAIL_FROM_ADDRESS'), env('app_name'));
        $message->subject('Request for '.$data['product']);
    });

//    Session::flash('success', 'Deleted');
    return redirect()->back()->with('success', 'Your message has been sent, our customer representative will contact you via email');
});
