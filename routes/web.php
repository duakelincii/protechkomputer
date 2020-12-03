<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\CustomerController;
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


Route::get('/',[MainController::class,'index']);
Route::get('about',[MainController::class,'about']);
Route::get('product',[MainController::class,'product']);
Route::get('contact',[ContactController::class,'index']);
Route::post('contact',[ContactController::class,'storeContactForm'])->name('contact.store');
Route::get('product-detail/{id}',[ProductDetailController::class,'displayProduct']);


Route::get('admin',function()
{
    return view('admin/login');
});
Route::group(['middleware' => ['CheckSession']], function () {
    //admin dashboard
    Route::get('admin/dashboard',[AdminController::class,'dashboard']);

    //admin table test
    Route::get('admin/table',[AdminController::class,'table']);

    //admin contact us message
    Route::get('admin/contact',[ContactController::class,'viewContact']);

    //admin carousel
    Route::get('admin/carousel',[CarouselController::class,'index']);
    Route::get('admin/new-carousel',[CarouselController::class,'create']);     //admin new carousel
    Route::get('admin/edit-carousel/{id}',[CarouselController::class,'editCarousel']);     //admin edit carousel
    Route::get('admin/edit-carousel-image/{id}',[CarouselController::class,'editCarouselImage']);     //admin edit carousel image
    Route::get('admin/delete-carousel/{id}',[CarouselController::class,'deleteCarousel']);

    //admin edit profile
    Route::get('admin/editprofile',[AdminController::class,'editprofile']);
    Route::get('admin/editpassword',[AdminController::class,'editPassword']);

    //admin client
    Route::get('admin/client',[ClientController::class,'index']);
    Route::get('admin/new-client',[ClientController::class,'create']);     //admin new client
    Route::get('admin/edit-client/{id}',[ClientController::class,'editClient']);     //admin edit client
    Route::get('admin/edit-client-image/{id}',[ClientController::class,'editClientImage']);     //admin edit client image
    Route::get('admin/delete-client/{id}',[ClientController::class,'deleteClient']);
    
    //admin customer
    Route::get('admin/customer',[CustomerController::class,'index']);
    Route::get('admin/new-customer',[CustomerController::class,'create']);     //admin new client
    Route::get('admin/edit-customer/{id}',[CustomerController::class,'editCustomer']);     //admin edit client
    Route::get('admin/edit-customer-image/{id}',[CustomerController::class,'editCustomerImage']);     //admin edit client image
    Route::get('admin/delete-customer/{id}',[CustomerController::class,'deleteCustomer']);

    //admin about home page
    Route::get('admin/about-home',[AboutController::class,'viewAboutHome']);
    Route::get('admin/edit-about-home-text/{id}',[AboutController::class,'editAboutHome']);
    Route::get('admin/edit-about-home-image/{id}',[AboutController::class,'editAboutHomeImage']);

    //admin about us page
    Route::get('admin/about-text',[AboutController::class,'index']);
    Route::get('admin/edit-about-text/{id}',[AboutController::class,'editAbout']);
    Route::get('admin/edit-about-image/{id}',[AboutController::class,'editAboutImage']);
    //Vision
    Route::get('admin/vision',[AboutController::class,'viewVision']);
    Route::get('admin/new-vision',[AboutController::class,'createVision']);
    Route::get('admin/edit-vision/{id}',[AboutController::class,'editVision']);
    Route::get('admin/delete-vision/{id}',[AboutController::class,'deleteVision']);

    //Mission
    Route::get('admin/mission',[AboutController::class,'viewMission']);
    Route::get('admin/new-mission',[AboutController::class,'createMission']);
    Route::get('admin/edit-mission/{id}',[AboutController::class,'editMission']);
    Route::get('admin/delete-mission/{id}',[AboutController::class,'deleteMission']);

    //Product
    Route::get('admin/product',[ProductController::class,'index']);
    Route::get('admin/new-product',[ProductController::class,'create']);     //admin new client
    Route::get('admin/edit-product/{id}',[ProductController::class,'editProduct']);     //admin edit client
    Route::get('admin/edit-product-image/{id}',[ProductController::class,'editProductImage']);     //admin edit client image
    Route::get('admin/delete-product/{id}',[ProductController::class,'deleteProduct']);
    
    //Category
    Route::get('admin/category',[CategoryController::class,'index']);
    Route::get('admin/new-category',[CategoryController::class,'createCategory']);
    Route::get('admin/edit-category/{id}',[CategoryController::class,'editCategory']);

});

Route::post('/admin',[AdminController::class,'loginAdmin']);

//Carousel post data
Route::post('admin/new-carousel',[CarouselController::class,'store']);
Route::post('/admin/edit-carousel',[CarouselController::class,'updateCarousel'])->name('carousel.update');
Route::post('/admin/edit-carousel-image',[CarouselController::class,'updateCarouselImage'])->name('carousel.image');

//Client post data
Route::post('admin/new-client',[ClientController::class,'store']);
Route::post('/admin/edit-client',[ClientController::class,'updateClient'])->name('client.update');
Route::post('/admin/edit-client-image',[ClientController::class,'updateClientImage'])->name('client.image');

//Customer post data
Route::post('admin/new-customer',[CustomerController::class,'store']);
Route::post('/admin/edit-customer',[CustomerController::class,'updateCustomer'])->name('customer.update');
Route::post('/admin/edit-customer-image',[CustomerController::class,'updateCustomerImage'])->name('customer.image');

//About 
Route::post('/admin/edit-about-text',[AboutController::class,'updateAbout'])->name('about.update');
Route::post('/admin/edit-about-image',[AboutController::class,'updateAboutImage'])->name('about.image');

//About Home
Route::post('/admin/edit-about-home-text',[AboutController::class,'updateAboutHome'])->name('abouthome.update');
Route::post('/admin/edit-about-home-image',[AboutController::class,'updateAboutHomeImage'])->name('abouthome.image');
//Vision
Route::post('admin/new-vision',[AboutController::class,'newVision']);
Route::post('admin/edit-vision',[AboutController::class,'updateVision'])->name('vision.update');

//Mission
Route::post('admin/new-mission',[AboutController::class,'newMission']);
Route::post('admin/edit-mission',[AboutController::class,'updateMission'])->name('mission.update');

//Product post data
Route::post('admin/new-product',[ProductController::class,'store']);
Route::post('/admin/edit-product',[ProductController::class,'updateProduct'])->name('product.update');
Route::post('/admin/edit-product-image',[ProductController::class,'updateProductImage'])->name('product.image');

//Category
Route::post('admin/new-category',[CategoryController::class,'store']);
Route::post('/admin/edit-category',[CategoryController::class,'updateCategory'])->name('category.update');

//Update Profile
Route::put('admin/editprofile',[AdminController::class,'updateProfile'])->name('profile.update');
Route::put('admin/editpassword',[AdminController::class,'updatePassword'])->name('password.update');
Route::get('/logout', function(){
    Session::forget('admin');
    return redirect('admin');
});


Route::view('admin/register','admin/register');
route::POST('admin/register',[AdminController::class,'registerAdmin']);