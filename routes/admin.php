<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CharityController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\WhyChooseUsController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\FundraiserController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventTransactionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\ContactMailController; 
use App\Http\Controllers\SliderController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\FundraisingSourceController;
use App\Http\Controllers\Admin\EmailContentController;
use App\Http\Controllers\Admin\GivingLevelController;
use App\Http\Controllers\Admin\DonationTypeController;



/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::group(['prefix' =>'admin/', 'middleware' => ['auth', 'is_admin']], function(){
  
    Route::get('/dashboard', [HomeController::class, 'adminHome'])->name('admin.dashboard');
    //profile
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::put('profile/{id}', [AdminController::class, 'adminProfileUpdate']);
    Route::post('changepassword', [AdminController::class, 'changeAdminPassword']);
    Route::put('image/{id}', [AdminController::class, 'adminImageUpload']);
    //profile end
    //admin registration
    Route::get('register','App\Http\Controllers\Admin\AdminController@adminindex')->name('admin.registration');
    Route::post('register','App\Http\Controllers\Admin\AdminController@adminstore');
    Route::get('register/{id}/edit','App\Http\Controllers\Admin\AdminController@adminedit');
    Route::put('register/{id}','App\Http\Controllers\Admin\AdminController@adminupdate');
    Route::get('register/{id}', 'App\Http\Controllers\Admin\AdminController@admindestroy');
    //admin registration end

    //company details
    Route::resource('company-detail','App\Http\Controllers\Admin\CompanyDetailController');
    //company details end

    

    // donor
    Route::get('/donor', [UserController::class, 'getAllDonor'])->name('admin.alldonor');
    Route::post('/donor', [UserController::class, 'newDonorStore']);
    Route::get('/donor/{id}', [UserController::class, 'donorDelete']);
    
    // fundraiser profile
    Route::get('/fundraiser-profile/{id}', [UserController::class, 'fundraiserProfile'])->name('admin.fundraiserProfile');

    // fundraiser donation
    Route::get('/fundraiser-donation/{id}', [FundraiserController::class, 'fundraiserDonation'])->name('admin.fundraiserdonation');
    Route::get('/fundraiser-transaction/{id}', [FundraiserController::class, 'fundraiserTransaction'])->name('admin.fundraisertran');

    // active deactive fundraiser
    Route::get('active-donor', [UserController::class, 'activeDonor']);

    


    // sliders
    Route::get('/sliders', [SliderController::class, 'index'])->name('admin.sliders');
    Route::post('/sliders', [SliderController::class, 'store']);
    Route::get('/sliders/{id}/edit', [SliderController::class, 'edit']);
    Route::put('/sliders/{id}', [SliderController::class, 'update']);
    Route::get('/sliders/{id}', [SliderController::class, 'delete']);



    // contact mail 
    Route::get('/contact-mail', [ContactMailController::class, 'index'])->name('admin.contact-mail');
    Route::get('/contact-mail/{id}/edit', [ContactMailController::class, 'edit']);
    Route::put('/contact-mail/{id}', [ContactMailController::class, 'update'])->name('admin.contact.update');

    // why-choose-us
    Route::get('/why-choose-us', [WhyChooseUsController::class, 'index'])->name('admin.whychooseus');
    Route::post('/why-choose-us', [WhyChooseUsController::class, 'store']);
    Route::get('/why-choose-us/{id}/edit', [WhyChooseUsController::class, 'edit']);
    Route::put('/why-choose-us/{id}', [WhyChooseUsController::class, 'update']);
    Route::get('/why-choose-us/{id}', [WhyChooseUsController::class, 'delete']);
    
    // all-data
    Route::get('/all-data', [MasterController::class, 'index'])->name('admin.master');
    Route::post('/all-data', [MasterController::class, 'store']);
    Route::get('/all-data/{id}/edit', [MasterController::class, 'edit']);
    Route::put('/all-data/{id}', [MasterController::class, 'update']);
    
    // email-content
    Route::get('/email-content', [EmailContentController::class, 'index'])->name('admin.emailcontent');
    Route::post('/email-content', [EmailContentController::class, 'store']);
    Route::get('/email-content/{id}/edit', [EmailContentController::class, 'edit']);
    Route::put('/email-content/{id}', [EmailContentController::class, 'update']);
    Route::get('/email-content/{id}', [EmailContentController::class, 'delete']);

    // all-data
    Route::get('/home-top-section', [MasterController::class, 'homeTopSection'])->name('admin.hometopsection');
    Route::post('/home-top-section', [MasterController::class, 'homeTopSectionUpdate']);

    // payment
    Route::get('/fundraiser-pay/{id}', [TransactionController::class, 'fundraiserPay'])->name('admin.fundraiserPay');
    Route::post('/fundraiser-pay', [TransactionController::class, 'fundraiserPayStore'])->name('admin.fundraiserPaystore');


    
    // donation-type
    Route::get('/donation-type', [DonationTypeController::class, 'index'])->name('admin.donationtype');
    Route::get('/projects', [DonationTypeController::class, 'projects'])->name('admin.projects');
    Route::post('/donation-type', [DonationTypeController::class, 'store']);
    Route::get('/donation-type/{id}/edit', [DonationTypeController::class, 'edit']);
    Route::put('/donation-type/{id}', [DonationTypeController::class, 'update']);
    Route::get('/donation-type/{id}', [DonationTypeController::class, 'delete']);

    
    Route::get('/transaction-view/{id}', [TransactionController::class, 'viewTransactionByAdmin'])->name('admin.transactionView');


});
//admin part end