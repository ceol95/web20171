<?php

Route::auth();
Route::get('/user', 'HomeController@index');
Route::get('/user/edit', 'HomeController@edit');

// admin route 
Route::get('admin/login', ['as'  => 'getlogin', 'uses' =>'Admin\AuthController@showLoginForm']);
Route::post('admin/login', ['as'  => 'postlogin', 'uses' =>'Admin\AuthController@login']);
Route::get('admin/password/reset', ['as'  => 'getreser', 'uses' =>'Admin\AuthController@email']);

Route::get('admin/logout', ['as'  => 'getlogin', 'uses' =>'Admin\AuthController@logout']);
Route::get('getChildMenu/{id}', ['as'  => 'getMenuChild', 'uses' =>'PagesController@getMenuChild']);
Route::get('/', ['as'  => 'index', 'uses' =>'PagesController@index']);
// cart - oder
Route::get('gio-hang', ['as'  => 'getcart', 'uses' =>'PagesController@getcart']);
// them vao gio hang
Route::get('gio-hang/addcart/{id}', ['as'  => 'getcartadd', 'uses' =>'PagesController@addcart']);
Route::get('gio-hang/update/{id}/{qty}-{dk}', ['as'  => 'getupdatecart', 'uses' =>'PagesController@getupdatecart']);
Route::get('gio-hang/delete/{id}', ['as'  => 'getdeletecart', 'uses' =>'PagesController@getdeletecart']);
Route::get('gio-hang/xoa', ['as'  => 'getempty', 'uses' =>'PagesController@xoa']);

// tien hanh dat hang
Route::get('dat-hang', ['as'  => 'getoder', 'uses' =>'PagesController@getoder']);
Route::post('dat-hang', ['as'  => 'postoder', 'uses' =>'PagesController@postoder']);
// category
Route::get('/{cat}', ['as'  => 'getcate', 'uses' =>'PagesController@getcate']);
Route::get('/{cat}/{id}-{slug}', ['as'  => 'getdetail', 'uses' =>'PagesController@detail']);

Route::resource('payment', 'PayMentController');


// --------------------------------cac cong viec trong admin (back-end)--------------------------------------- 
Route::group(['middleware' => 'admin'], function () {
      Route::group(['prefix' => 'admin'], function() {
        
       	Route::get('/home', function() {         
         return view('back-ends.home');       	
       });
       // -------------------- quan ly danh muc----------------------
       	Route::group(['prefix' => 'danhmuc'], function() {
           Route::get('add',['as'        =>'getaddcat','uses' => 'CategoryController@getadd']);
           Route::post('add',['as'       =>'postaddcat','uses' => 'CategoryController@postadd']);

           Route::get('/',['as'       =>'getcat','uses' => 'CategoryController@getlist']);
           Route::get('del/{id}',['as'   =>'getdellcat','uses' => 'CategoryController@getdel'])->where('id','[0-9]+');
           
           Route::get('edit/{id}',['as'  =>'geteditcat','uses' => 'CategoryController@getedit'])->where('id','[0-9]+');
           Route::post('edit/{id}',['as' =>'posteditcat','uses' => 'CategoryController@postedit'])->where('id','[0-9]+');

    	});
        // -------------------- quan ly nhan hieu----------------------
        Route::group(['prefix' => 'nhanhieu'], function() {
           Route::get('add',['as'        =>'getaddbrand','uses' => 'BrandsController@getadd']);
           Route::post('add',['as'       =>'postaddbrand','uses' => 'BrandsController@postadd']);

           Route::get('loadAll',['as'        =>'getAll','uses' => 'BrandsController@getaddall']);
           Route::get('/',['as'       =>'getbrand','uses' => 'BrandsController@getlist']);
           Route::post('find',['as'       =>'postbrand','uses' => 'BrandsController@findlist']);
           Route::post('list',['as'       =>'postlistbrand','uses' => 'BrandsController@getlistjson']);
          
           //Route::get('del/{id}',['as'   =>'getdellbrand','uses' => 'BrandsController@getdel'])->where('id','[0-9]+');
           Route::get('del',['as'   =>'getdellbrand','uses' => 'BrandsController@getdel']);
           
           Route::get('edit/{id}',['as'  =>'geteditbrand','uses' => 'BrandsController@getedit'])->where('id','[0-9]+');
           //Route::post('edit/{id}',['as' =>'posteditbrand','uses' => 'BrandsController@postedit'])->where('id','[0-9]+');
           Route::post('edit',['as' =>'posteditbrandjson','uses' => 'BrandsController@postedit']);
           //Route::post('edit',['as' =>'posteditbrandjson','uses' => 'BrandsController@postedit']);
      });
        // -------------------- quan ly nha cung cap----------------------
        Route::group(['prefix' => 'nhacungcap'], function() {
           Route::get('add',['as'        =>'getaddsupp','uses' => 'SupplierController@getadd']);
           Route::post('add',['as'       =>'postaddsupp','uses' => 'SupplierController@postadd']);

           Route::get('loadAll',['as'       =>'getsuppall','uses' => 'SupplierController@getlistall']);
           Route::get('/',['as'       =>'getsupp','uses' => 'SupplierController@getlist']);
           Route::get('all',['as'       =>'getsuppjson','uses' => 'SupplierController@getlistjson']);
           Route::get('del',['as'   =>'getdellsupp','uses' => 'SupplierController@getdel']);
           
           Route::get('edit/{id}',['as'  =>'geteditsupp','uses' => 'SupplierController@getedit'])->where('id','[0-9]+');
           Route::post('edit',['as' =>'posteditsupp','uses' => 'SupplierController@postedit']);
      });
         // -------------------- quan ly sản phẩm--------------------
        Route::group(['prefix' => '/sanpham'], function() {
           //Route::get('/{loai}/add',['as'        =>'getaddpro','uses' => 'ProductsController@getadd']);
           //Route::post('/{loai}/add',['as'       =>'postaddpro','uses' => 'ProductsController@postadd']);

           Route::get('add',['as'        =>'getaddpro','uses' => 'ProductsController@getAddForm']);
           //Route::get('addPC',['as'        =>'getaddpro','uses' => 'ProductsController@getaddPhone']);
           Route::post('add',['as'       =>'postaddpro','uses' => 'ProductsController@postadd']);

           Route::get('loadAll',['as'       =>'getAllpro','uses' => 'ProductsController@getAllpro']);
           Route::get('/{loai}',['as'       =>'getpro','uses' => 'ProductsController@getlistpro']);
           
           Route::get('/del/{id}',['as'   =>'getdellpro','uses' => 'ProductsController@getdel'])->where('id','[0-9]+');
           
           Route::get('/{loai}/edit/{id}',['as'  =>'geteditpro','uses' => 'ProductsController@getedit'])->where('id','[0-9]+');
           Route::post('/{loai}/edit/{id}',['as' =>'posteditpro','uses' => 'ProductsController@postedit'])->where('id','[0-9]+');
      });
       // -------------------- quan ly tin tức-----------------------------
        Route::group(['prefix' => '/news'], function() {
           Route::get('/add',['as'        =>'getaddnews','uses' => 'NewsController@getadd']);
           Route::post('/add',['as'       =>'postaddnews','uses' => 'NewsController@postadd']);

           Route::get('loadAll',['as'       =>'getAllnews','uses' => 'NewsController@getAllnews']);
           Route::get('/',['as'       =>'getnews','uses' => 'NewsController@getlist']);
           Route::get('/del/{id}',['as'   =>'getdellnews','uses' => 'NewsController@getdel'])->where('id','[0-9]+');
           
           Route::get('/edit/{id}',['as'  =>'geteditnews','uses' => 'NewsController@getedit'])->where('id','[0-9]+');
           Route::post('/edit/{id}',['as' =>'posteditnews','uses' => 'NewsController@postedit'])->where('id','[0-9]+');
      });
        // -------------------- quan ly đơn đặt hàng--------------------
        Route::group(['prefix' => '/donhang'], function() {;

           Route::get('',['as'       =>'getpro','uses' => 'OdersController@getlist']);
           Route::get('/del/{id}',['as'   =>'getdeloder','uses' => 'OdersController@getdel'])->where('id','[0-9]+');
           
           Route::get('/detail/{id}',['as'  =>'getdetail','uses' => 'OdersController@getdetail'])->where('id','[0-9]+');
           Route::post('/detail/{id}',['as' =>'postdetail','uses' => 'OdersController@postdetail'])->where('id','[0-9]+');
      });
        // -------------------- quan ly thong tin khach hang--------------------
        Route::group(['prefix' => '/khachhang'], function() {;

           Route::get('',['as'  =>'getmem','uses' => 'UsersController@getlist']);
           Route::get('loadAll',['as'  =>'getAll','uses' => 'UsersController@getAll']);

           Route::get('del',['as'   =>'getdelmem','uses' => 'UsersController@getdel']);
           
           Route::get('/edit/{id}',['as'  =>'geteditmem','uses' => 'UsersController@getedit'])->where('id','[0-9]+');
           Route::post('edit',['as' =>'posteditmem','uses' => 'UsersController@postedit']);
      });
       // -------------------- quan ly thong nhan vien--------------------
        Route::group(['prefix' => '/nhanvien'], function() {;

           Route::get('',['as'       =>'getnv','uses' => 'Admin_usersController@getlist']);
           Route::get('loadAll',['as'       =>'loadAllemploy','uses' => 'Admin_usersController@loadAll']);
           Route::get('del',['as'   =>'getdelnv','uses' => 'Admin_usersController@getdel']);
           
           Route::post('edit',['as'  =>'posteditnv','uses' => 'Admin_usersController@postedit']);
           Route::post('add',['as' =>'postaddnv','uses' => 'Admin_usersController@postadd']);
      });
      // ---------------van de khac ----------------------
    });     
});