<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware'=>['auth']], function(){
    
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/profile', 'UserController@profileShow')->name('profileShow');
    Route::post('profile/update','UserController@profileUpdate')->name('profileUpdate');
    
    Route::get('/newsAdd','PostController@newsAdd')->name('newsAdd');
    Route::post('/newsAdd','PostController@newsAdd')->name('newsAdd');
    Route::get('/show/newsAdd', 'PostController@showNewsAdd')->name('showNewsAdd');

    
    Route::get('/show/dashboard', 'PostController@showDashboard')->name('showDashboard');
    
    Route::get('/show/myNews','PostController@showMyNews')->name('showMyNews');
    Route::get('news/editshow/{id}', 'PostController@newsEditShow')->name('newsEditShow');
    Route::post('news/delete', 'PostController@newsDelete')->name('newsDelete');
    
    Route::get('/show/customer','UserController@showCustomer')->name('showCustomer');
    Route::post('customer/delete', 'UserController@customerDelete')->name('customerDelete');

    Route::get('/show/orderlist','PostController@showOrderList')->name('showOrderList');
    Route::get('/show/orderDetail','PostController@showOrderDetail')->name('showOrderDetail');
    
    
    Route::post('/update', 'PostController@newsUpdate')->name('newsUpdate');
    Route::get('/product/addProduct','ProductController@showProductAdd')->name('showProductAdd');

    Route::get('/product/add/','ProductController@addProduct')->name('addProduct');
    Route::post('/product/add/show','ProductController@addProduct')->name('addProduct');
    Route::get('/show/myProduct','ProductController@showMyProduct')->name('showMyProduct');
    Route::post('/product/delete', 'ProductController@productDelete')->name('productDelete');  

    Route::get('prodcut/editshow/{id}', 'ProductController@productEditShow')->name('productEditShow');
    Route::post('/product/edit', 'ProductController@productUpdate')->name('productUpdate');

    Route::get('/product/smartphone', 'UserProductController@showSmartPhone')->name('showSmartPhone');
    Route::get('/product/tablet', 'UserProductController@showTablet')->name('showTablet');
    Route::get('/product/laptop', 'UserProductController@showLaptop')->name('showLaptop');
    Route::get('/product/detail/{id}', 'UserProductController@showProductDetail')->name('showProductDetail');
    
    Route::get('cart', 'UserProductController@showProductCart')->name('showProductCart');
    Route::get('pwishlist', 'UserProductController@prodwishlist')->name('prodwishlist');
    Route::patch('update-cart', 'UserProductController@update');
    Route::delete('remove-from-cart', 'UserProductController@remove');
  //Route::post('/wish', 'UserProductController@productwishlist')->name('productwishlist');
    Route::post('/product/cart', 'UserProductController@addToCart')->name('addToCart');
    Route::patch('update-cart', 'UserProductController@update');
    Route::delete('remove-from-cart', 'UserProductController@remove');
    
    Route::post('user/register', 'UserProductController@userthanku')->name('userthanku');
    Route::get('user/register', 'UserProductController@showUserForm')->name('showUserForm');
    Route::post('/wishlist', 'UserProductController@addwishlist')->name('addwishlist');
   // Route::get('/wishlist', 'UserProductController@addwishlist')->name('addwishlist');
    Route::post('/wish', 'UserProductController@showwishlist')->name('showwishlist');
    Route::get('/wish', 'UserProductController@showwishlist')->name('showwishlist');
    Route::get('/product/show/newslist', 'PostController@showNewsList')->name('showNewsList');

    Route::post('/news/detail', 'PostController@showNewsDetail')->name('showNewsDetail');
    
    Route::get('/home/contactus', 'UserProductController@contactUs')->name('contactUs');

 
});

