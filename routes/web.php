<?php

use Illuminate\Support\Facades\Route;

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
    return view('front.comingsoon');
});

Route::get('/login', function () {

    return view('front.login');
});
Route::post('login', [\App\Http\Controllers\frontController::class, 'login']);
Route::get('logout', [\App\Http\Controllers\frontController::class, 'logout']);

Route::post('registerUser', [\App\Http\Controllers\frontController::class, 'registerUser']);
Route::post('registerSeller', [\App\Http\Controllers\frontController::class, 'registerSeller']);

Route::get('register', [\App\Http\Controllers\frontController::class, 'register']);
Route::get('stores', [\App\Http\Controllers\frontController::class, 'stores']);
Route::get('storesSearch', [\App\Http\Controllers\frontController::class, 'storesSearch']);

Route::get('store/{id}', [\App\Http\Controllers\frontController::class, 'store']);
Route::get('Search', [\App\Http\Controllers\frontController::class, 'Search']);
Route::get('Hot-Deals', [\App\Http\Controllers\frontController::class, 'HotDeals']);
Route::get('Contact', [\App\Http\Controllers\frontController::class, 'Contact']);
Route::get('Page/{id}', [\App\Http\Controllers\frontController::class, 'Page']);

Route::get('/Admin/Login', function () {
    return view('auth.login');
});


Route::group(['middleware' => ['admin']], function () {
//employee settings
    Route::get('Dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('Admin_setting', [\App\Http\Controllers\Admin\AdminController::class, 'index']);
    Route::get('Admin_datatable', [\App\Http\Controllers\Admin\AdminController::class, 'datatable'])->name('Admin.datatable.data');
    Route::get('delete-Admin', [\App\Http\Controllers\Admin\AdminController::class, 'destroy']);
    Route::post('store-Admin', [\App\Http\Controllers\Admin\AdminController::class, 'store']);
    Route::get('Admin-edit/{id}', [\App\Http\Controllers\Admin\AdminController::class, 'edit']);
    Route::post('update-Admin', [\App\Http\Controllers\Admin\AdminController::class, 'update']);
    Route::get('/add-button-Admin', function () {
        return view('admin/Admin/button');
    });
//employee settings
    Route::get('User_setting', [\App\Http\Controllers\Admin\UsersController::class, 'index']);
    Route::get('User_datatable', [\App\Http\Controllers\Admin\UsersController::class, 'datatable'])->name('User.datatable.data');
    Route::get('delete-User', [\App\Http\Controllers\Admin\UsersController::class, 'destroy']);
    Route::post('store-User', [\App\Http\Controllers\Admin\UsersController::class, 'store']);
    Route::get('User-edit/{id}', [\App\Http\Controllers\Admin\UsersController::class, 'edit']);
    Route::post('update-User', [\App\Http\Controllers\Admin\UsersController::class, 'update']);
    Route::get('/add-button-user', function () {
        return view('admin/User/button');
    });

//Sellers_setting
    Route::get('Sellers_setting', [\App\Http\Controllers\Admin\SellerController::class, 'index']);

    Route::get('SendMail/{id}', [\App\Http\Controllers\Admin\SellerController::class, 'SendMail']);

    Route::get('Seller_datatable', [\App\Http\Controllers\Admin\SellerController::class, 'datatable'])->name('Seller.datatable.data');
    Route::get('delete-Seller', [\App\Http\Controllers\Admin\SellerController::class, 'destroy']);
    Route::post('store-Seller', [\App\Http\Controllers\Admin\SellerController::class, 'store']);
    Route::get('Seller-edit/{id}', [\App\Http\Controllers\Admin\SellerController::class, 'edit']);
    Route::post('update-Seller', [\App\Http\Controllers\Admin\SellerController::class, 'update']);
    Route::get('/add-button-Seller', function () {
        return view('admin/Seller/button');
    });


    Route::get('Categories_Setting', [\App\Http\Controllers\Admin\CategoriesController::class, 'index']);
    Route::get('Categories_datatable', [\App\Http\Controllers\Admin\CategoriesController::class, 'datatable'])->name('Categories.datatable.data');
    Route::get('delete-Categories', [\App\Http\Controllers\Admin\CategoriesController::class, 'destroy']);
    Route::post('store-Categories', [\App\Http\Controllers\Admin\CategoriesController::class, 'store']);
    Route::get('Categories-edit/{id}', [\App\Http\Controllers\Admin\CategoriesController::class, 'edit']);
    Route::post('update-Categories', [\App\Http\Controllers\Admin\CategoriesController::class, 'update']);
    Route::get('/add-button-Categories', function () {
        return view('admin/Categories/button');
    });

    Route::get('Country_Setting', [\App\Http\Controllers\Admin\CountryController::class, 'index']);
    Route::get('Country_datatable', [\App\Http\Controllers\Admin\CountryController::class, 'datatable'])->name('Country.datatable.data');
    Route::get('delete-Country', [\App\Http\Controllers\Admin\CountryController::class, 'destroy']);
    Route::post('store-Country', [\App\Http\Controllers\Admin\CountryController::class, 'store']);
    Route::get('Country-edit/{id}', [\App\Http\Controllers\Admin\CountryController::class, 'edit']);
    Route::post('update-Country', [\App\Http\Controllers\Admin\CountryController::class, 'update']);
    Route::get('/add-button-Country', function () {
        return view('admin/Country/button');
    });


    Route::get('Page_Setting', [\App\Http\Controllers\Admin\PageController::class, 'index']);
    Route::get('Page_datatable', [\App\Http\Controllers\Admin\PageController::class, 'datatable'])->name('Page.datatable.data');
    Route::get('delete-Page', [\App\Http\Controllers\Admin\PageController::class, 'destroy']);
    Route::post('store-Page', [\App\Http\Controllers\Admin\PageController::class, 'store']);
    Route::get('Page-edit/{id}', [\App\Http\Controllers\Admin\PageController::class, 'edit']);
    Route::post('update-Page', [\App\Http\Controllers\Admin\PageController::class, 'update']);
    Route::get('/add-button-Page', function () {
        return view('admin/Page/button');
    });


    Route::get('Slider_Setting', [\App\Http\Controllers\Admin\SliderController::class, 'index']);
    Route::get('Slider_datatable', [\App\Http\Controllers\Admin\SliderController::class, 'datatable'])->name('Slider.datatable.data');
    Route::get('delete-Slider', [\App\Http\Controllers\Admin\SliderController::class, 'destroy']);
    Route::post('store-Slider', [\App\Http\Controllers\Admin\SliderController::class, 'store']);
    Route::get('Slider-edit/{id}', [\App\Http\Controllers\Admin\SliderController::class, 'edit']);
    Route::post('update-Slider', [\App\Http\Controllers\Admin\SliderController::class, 'update']);
    Route::get('/add-button-Slider', function () {
        return view('admin/Slider/button');
    });

    Route::get('Product_Setting', [\App\Http\Controllers\Admin\ProductController::class, 'index']);
    Route::get('Product_datatable', [\App\Http\Controllers\Admin\ProductController::class, 'datatable'])->name('Product.datatable.data');
    Route::get('delete-Product', [\App\Http\Controllers\Admin\ProductController::class, 'destroy']);
    Route::post('store-Product', [\App\Http\Controllers\Admin\ProductController::class, 'store']);
    Route::get('Product-edit/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'edit']);
    Route::post('update-Product', [\App\Http\Controllers\Admin\ProductController::class, 'update']);
    Route::get('/add-button-Product', function () {
        return view('admin/Product/button');
    });




    Route::get('General_Setting', [\App\Http\Controllers\Admin\SettingController::class, 'index']);
    Route::post('edit_setting', [\App\Http\Controllers\Admin\SettingController::class, 'update']);

});

Route::group(['middleware' => ['seller']], function () {

    Route::get('Profile', [\App\Http\Controllers\Admin\SellerController::class, 'Profile']);
    Route::post('update-Seller', [\App\Http\Controllers\Admin\SellerController::class, 'update']);

    Route::get('Product_Setting', [\App\Http\Controllers\Admin\ProductController::class, 'index']);
    Route::get('Product_datatable', [\App\Http\Controllers\Admin\ProductController::class, 'datatable'])->name('Product.datatable.data');
    Route::get('delete-Product', [\App\Http\Controllers\Admin\ProductController::class, 'destroy']);
    Route::post('store-Product', [\App\Http\Controllers\Admin\ProductController::class, 'store']);
    Route::get('Product-edit/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'edit']);
    Route::post('update-Product', [\App\Http\Controllers\Admin\ProductController::class, 'update']);
    Route::get('/add-button-Product', function () {
        return view('admin/Product/button');
    });

    Route::get('ProductImages/{id}', [\App\Http\Controllers\Admin\ProductImagesController::class, 'index']);
    Route::get('ProductImages_datatable', [\App\Http\Controllers\Admin\ProductImagesController::class, 'datatable'])->name('ProductImages.datatable.data');
    Route::get('delete-ProductImages', [\App\Http\Controllers\Admin\ProductImagesController::class, 'destroy']);
    Route::post('store-ProductImages', [\App\Http\Controllers\Admin\ProductImagesController::class, 'store']);
    Route::get('/add-button-ProductImages/{id}', function ($id) {
        return view('admin/ProductImages/button', compact('id'));
    });
    Route::get('Dashboard_Seller', function () {
        return view('admin.Dashboard_Seller');
    });

});
Route::get('lang/{lang}', function ($lang) {

    if (session()->has('lang')) {
        session()->forget('lang');
    }
    if ($lang == 'en') {
        session()->put('lang', 'en');
    } else {
        session()->put('lang', 'ar');
    }


    return back();
});

Route::post('ImportSellers', [\App\Http\Controllers\Admin\SellerController::class, 'ImportSeller'])->name('ImportSellersExcel');
