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
//Shopcoza
Route::get('/', 'ShopcozaController@index')->name('shop.index');
Route::get('/lien-he', 'ShopcozaController@contact')->name('shop.contact');
Route::post('/lien-he', 'ShopcozaController@postContact')->name('shop.postContact');
Route::get('/tin-tuc', 'ShopcozaController@articles')->name('shop.articles');
Route::get('/gioi-thieu', 'ShopcozaController@about')->name('shop.about');
Route::get('/san-pham/{slug}', 'ShopcozaController@category')->name('shop.category');
Route::get('/chi-tiet-san-pham/{slug}_{id}', 'ShopcozaController@product')->name('shop.product');
//Route::get('/chi-tiet/{slug}','ShopcozaController@productdetails')->name('shop.productdetails');
// Lỗi 404 không tìm thấy trang
Route::get('/404', 'ShopcozaController@notfound')->name('shop.notfound');
//Tim kiem san pham
Route::get('/tim-kiem', 'ShopcozaController@search')->name('shop.search');

// Thêm sản phẩm vào giỏ hàng
Route::get('/gio-hang/them-sp-vao-gio-hang/{product_id}', 'CartController@addToCart')->name('shop.cart.add-to-cart');

//Giỏ hàng
Route::get('/gio-hang', 'CartController@cart')->name('shop.cart');

// Xóa SP khỏi giỏ hàng
Route::get('/gio-hang/xoa-sp-gio-hang/{id}', 'CartController@removeToCart')->name('shop.cart.remove-to-cart');
// Cập nhật giỏ hàng
Route::get('/gio-hang/cap-nhat-so-luong-sp', 'CartController@updateToCart')->name('shop.cart.update-to-cart');
// Hủy đơn đặt hàng
Route::get('/gio-hang/huy-don-hang', 'CartController@destroy')->name('shop.cart.destroy');

Route::get('/dat-hang', 'CartController@order')->name('shop.cart.order');
Route::post('/dat-hang', 'CartController@postOrder')->name('shop.cart.postOrder');
Route::get('/dat-hang/hoan-tat-dat-hang', 'CartController@completedOrder')->name('shop.cart.completedOrder');


//Route::get('/', 'ShopController@index')->name('shop.index');
//Route::get('/404', 'ShopController@notfound')->name('shop.notfound');
//Route::get('/lien-he', 'ShopController@contact')->name('shop.contact');
//Route::get('/gioi-thieu', 'ShopController@getArticles')->name('shop.articles');
//Route::get('/san-pham/{slug}', 'ShopController@category')->name('shop.category');
//Route::get('/chi-tiet-san-pham/{slug}', 'ShopController@product')->name('shop.product');
//Route::post('/lien-he', 'ShopController@postContact')->name('shop.postContact');


// Thêm sản phẩm vào giỏ hàng
//Route::get('/gio-hang/them-sp-vao-gio-hang/{product_id}', 'CartController@addToCart')->name('shop.cart.add-to-cart');
//Giỏ hàng
//Route::get('/gio-hang', 'ShopController@cart')->name('shop.cart');

//Tim kiem san pham
//Route::get('/tim-kiem', 'ShopController@search')->name('shop.search');
// php artisan route:list
route::get('/admin/login', 'AdminController@login')->name('admin.login');
Route::post('/admin/login', 'AdminController@postLogin')->name('admin.postLogin');
Route::get('/admin/logout', 'AdminController@logout')->name('admin.logout');
//Gom nhóm route
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'checkLogin'], function () {
    Route::resource('banner', 'BannerController');
    Route::resource('vendor', 'VendorController');
    Route::resource('category', 'CategoryController');
    Route::resource('product', 'ProductController');
    Route::resource('user', 'UserController');
    Route::resource('contact', 'ContactController');
    Route::resource('brand', 'BrandController');
    Route::resource('setting', 'SettingController');
    Route::resource('order', 'OrderController');
    Route::resource('article', 'ArticleController');
});


