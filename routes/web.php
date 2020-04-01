<?php

use Illuminate\Support\Facades\Route;

auth()->loginUsingId(2);

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

Route::view('/', 'welcome');

Route::get('/reports', function () {
    return 'Top Secret Reports <hr> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias nostrum necessitatibus sapiente est? Quos, nemo. Neque recusandae, omnis, totam rem, nemo ad labore dolore non quaerat magni doloribus sunt eveniet!';
})->middleware('can:view_reports');

Route::get('/conversations', ['as' => 'conversations', 'uses' => 'ConversationController@index']);
Route::get('/conversations/{conversation}', ['as' => 'conversations.show', 'uses' => 'ConversationController@show'])->middleware('can:view,conversation');

Route::post('/best-replies/{reply}', ['as' => 'best-replies.store', 'uses' => 'ConversationBestReplyController@store']);

Auth::routes();
