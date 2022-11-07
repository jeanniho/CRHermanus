<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\AppointmentBookingController;
use App\Http\Controllers\AppFormController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\CartController;

use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;

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

// Home
Route::get('/', [HomeController::class, 'getHomePage'])->name('home');

// Appointment booking
Route::get('/appointment-booking', [AppointmentBookingController::class, 'getAppointmentBookingPage'])->name('appointment_booking');
Route::post('/appointment-booking', [AppointmentBookingController::class, 'sendAppointmentBookingEmail']);

// About us
Route::get('/about-us', function () {
    return view('about_us.company_info');
})->name('about_us');

Route::get('/frequently-asked-questions', function () {
    return view('about_us.faq');
})->name('faq');

Route::get('/customer-privacy-notice', function () {
    return view('about_us.customer_privacy_notice');
})->name('customer_privacy_notice');

Route::get('/terms-and-conditions', function () {
    return view('about_us.terms_and_conditions');
})->name('terms_and_conditions');

// Services
Route::get('/debt-mediation', [ServicesController::class, 'getDebtMediationPage'])->name('debt_mediation');
Route::post('/debt-mediation', [ServicesController::class, 'sendDebtMediationEmail']);


Route::get('/debt-counselling', [ServicesController::class, 'getDebtCounsellingPage'])->name('debt_counselling');
Route::post('/debt-counselling', [ServicesController::class, 'sendDebtCounsellingEmail']);


Route::get('/debt-consolidation', [ServicesController::class, 'getDebtConsolidationPage'])->name('debt_consolidation');
Route::post('/debt-consolidation', [ServicesController::class, 'sendDebtConsolidationEmail']);


Route::get('/debt-review-services', [ServicesController::class, 'getDebtReviewServicesPage'])->name('debt_review_services');
Route::post('/debt-review-services', [ServicesController::class, 'sendDebtReviewServicesEmail']);


Route::get('/debt-review-removal', [ServicesController::class, 'getDebtReviewRemovalPage'])->name('debt_review_removal');
Route::post('/debt-review-removal', [ServicesController::class, 'sendDebtReviewRemovalEmail']);


Route::get('/garnishee-removals', [ServicesController::class, 'getGarnisheeRemovalsPage'])->name('garnishee_removals');
Route::post('/garnishee-removals', [ServicesController::class, 'sendGarnisheeRemovalsEmail']);


Route::get('/administration-removals', [ServicesController::class, 'getAdministrationRemovalsPage'])->name('administration_removals');
Route::post('/administration-removals', [ServicesController::class, 'sendAdministrationRemovalsEmail']);

// Contact us
Route::get('/contact-us', [ContactUsController::class, 'getContactUsPage'])->name('contact_us');
Route::post('/contact-us', [ContactUsController::class, 'sendContactUsEmail']);

// Appointment form
Route::get('/app-form', [AppFormController::class, 'getAppFormPage'])->name('app_form');
Route::post('/app-form', [AppFormController::class, 'sendAppFormEmail']);


// lifestyle products
Route::get('/life-products', [CartController::class, 'getLifeStyleProductsPage'])->name('our_products');


Route::get('/cart', [CartController::class, 'getCartProductsPage'])->name('cart');
Route::post('/cart', [CartController::class, 'addProductToCart']);
Route::post('/cart/quantity-update', [CartController::class, 'updateProductQuantityFromCart'])->name('cart_quantity_update');
Route::delete('/cart', [CartController::class, 'deleteProductFromCart']);


Route::get('/checkout', [CartController::class, 'getCheckoutPage'])->name('checkout');
Route::post('/checkout', [CartController::class, 'placeOrder']);


Route::get('/product/family-assist-plan', function () {
    return view('lifestyle_products.family_assist_plan');
})->name('family_assist_plan');

Route::get('/product/income-protector', function () {
    return view('lifestyle_products.income_protector');
})->name('income_protector');

Route::get('/product/medical-assist-plan-m-a-p', function () {
    return view('lifestyle_products.medical_assist_plan');
})->name('medical_assist_plan');

Route::get('/product/provident-fund', function () {
    return view('lifestyle_products.provident_fund');
})->name('provident_fund');

Route::get('/scheme-rules', function () {
    return view('lifestyle_products.scheme_rules');
})->name('scheme_rules');

// Admin section
Route::get('/admin', [AdminController::class, 'getAdminLogin'])->name('admin');
Route::post('/admin', [AdminController::class, 'adminLogin']);
Route::get('/admin-signup', [AdminController::class, 'getAdminSignUp'])->middleware(['auth'])->name('admin_sign_up');
Route::post('/admin-signup', [AdminController::class, 'createAdmin'])->middleware(['auth']);
Route::post('/admin-logout', [AdminController::class, 'adminLogout'])->middleware(['auth'])->name('admin_logout');

Route::get('/admin-list-admins', [AdminController::class, 'displayAdmins'])->middleware(['auth'])->name('list_admins');
Route::post('/admin-users-search', [AdminController::class, 'adminSearch'])->middleware(['auth'])->name('admin_search');
Route::post('/admin-users-manipulation', [AdminController::class, 'adminUsersManipulation'])->middleware(['auth'])->name('admin_users_manipulation');

Route::get('/admin-my-user-profile', [AdminController::class, 'getMyAdminUserProfile'])->middleware(['auth'])->name('admin_my_user_profile');
Route::post('/admin-my-user-profile', [AdminController::class, 'manipulateMyAdminUserProfile'])->middleware(['auth']);

// forgot password
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('/dashboard', [DashboardController::class, 'getDashboardPage'])->name("dashboard");
Route::post('/dashboard/order-manipulation', [DashboardController::class, 'orderManipulation'])->name("order_manipulation");
Route::post('/dashboard/order-search', [DashboardController::class, 'orderSearch'])->name("order_search");

Route::get('/dashboard/open-orders', [DashboardController::class, 'openOrders'])->name("open_orders");
Route::get('/dashboard/complete-orders', [DashboardController::class, 'completeOrders'])->name("complete_orders");
Route::get('/dashboard/pending-orders', [DashboardController::class, 'pendingOrders'])->name("pending_orders");
Route::get('/dashboard/cancelled-orders', [DashboardController::class, 'cancelledOrders'])->name("cancelled_orders");



// testing section
Route::get('/testing', [CartController::class, 'generateBarcodeNumber']);

// emails
Route::get('send-mail', function () {
    $details = [

        'title' => 'Mail from ItSolutionStuff.com',

        'body' => 'This is for testing email using smtp'

    ];

    \Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\MyTestMail($details));

    dd("Email is Sent.");

});

Route::get('sendbasicemail', [MailController::class, 'basic_email']);
Route::get('sendhtmlemail', [MailController::class, 'html_email']);
Route::get('sendattachmentemail', [MailController::class, 'attachment_email']);

// TODO: NOTES
/*
1. App Form => confirm with uncle
*/

