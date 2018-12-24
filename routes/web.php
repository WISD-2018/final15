<?php

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
    return view('index');
});
Route::get('home',['as'=>'main.home',function(){
    return view('index');
}]);

//使用者
Route::auth();

//訂單
Route::get('/orders', 'OrderController@index');
Route::post('/order', 'OrderController@store');

//顯示商品頁面
Route::get('shop/main', ['as' => 'main.shop', 'uses' => 'ShopController@index']);


Route::get('cart/{id}', ['as' => 'cart.add', 'uses' => 'CartController@index',function($id){

}]);

Route::get('cart', ['as' => 'cart.main', 'uses' => 'CartController@show',function(){
}]);

//顯示購物車頁面
Route::get('cart', ['as' => 'cart', 'uses' => 'CartController@index']);


//顯示商品詳細資訊頁面
Route::get('detail/{id}', ['as' => 'detail', 'uses' => 'ShopDetailController@index',function($id){

}]);

//價格排序
Route::get('shopprice/{type}', ['as' => 'sort.shop', 'uses' => 'ShopController@price',function($type){
}]);


//淨化能力篩選
Route::get('shopclean/up', ['as' => 'cleanup.shop', 'uses' => 'ShopController@cleanup',function(){
}]);
Route::get('shopclean/down', ['as' => 'cleandown.shop', 'uses' => 'ShopController@cleandown',function(){
}]);

//滯塵能力篩選
Route::get('shopdust/up', ['as' => 'dustup.shop', 'uses' => 'ShopController@dustup',function(){
}]);
Route::get('shopdust/down', ['as' => 'dustdown.shop', 'uses' => 'ShopController@dustdown',function(){
}]);

//聯絡我們
Route::get('contact', ['as' => 'main.contact', 'uses' => 'ContactController@index']);

//植物新聞
Route::get('news', ['as' => 'main.news', 'uses' => 'NewsController@index']);

//搜尋
Route::get('shop1/{search}', ['as' => 'search.shop', 'uses' => 'ShopController@search',function($search){

}]);

