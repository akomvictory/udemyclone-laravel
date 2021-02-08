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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

    Route::group(['middleware' => ['dashboardadmin']], function () {

        //Admin Dashboard 
        Route::get('/Admin/dashboard-control', 'Admin\DashboardController@index')->name('dashboard_home');
        // Resource Route
        Route::resource('instructor', 'Admin\InstructorController');
        Route::resource('video', 'Admin\VideoController');
        Route::resource('curriculum', 'Admin\CurriculumController');
        Route::resource('course', 'Admin\CoursesController');
        Route::resource('category', 'Admin\CourseCategoryController');
        Route::resource('creviews', 'Admin\CourseReviewController'); // dealing with course reviews
        Route::resource('ireviews', 'Admin\InstructorReviewController'); // dealing with instructor reviews
        Route::resource('notifications', 'Admin\NotificationController'); // dealing with instructor reviews
        Route::resource('role', 'Admin\RolesController'); // dealing with user roles 
        
            }); // group route close

//instructor extended route 
Route::get('/instructor/profile/{id}', 'Admin\InstructorController@profile');
Route::get('/application/become-instructor', 'Admin\InstructorController@apply');
Route::get('like-course', 'HomeController@like');

//Admin Courses Route
Route::get('/learning/{category}/view-courses', 'Admin\CoursesController@show')->name('show-courses');
Route::get('/learning/{category}/view-course/{id}/detail', 'Admin\CoursesController@course_detail')->name('course_detail');
Route::get('/learning/{category}/view-course/{id}/videos', 'Admin\CoursesController@video')->name('video');

Route::get('search/', 'Admin\CoursesController@search');
Route::get('/learning/paid-courses', 'Admin\CoursesController@paid_courses');
Route::get('/learning/free-courses', 'Admin\CoursesController@free_courses');
Route::get('/learning/view-all-courses', 'Admin\CoursesController@index')->name('all_courses');


//cart controller
Route::get('/bouquet/add-to-cart/{id}', 'Admin\CartController@addToCart')->name('addItem');
Route::get('/bouquet/course/{id}', 'Admin\CartController@singleItem');
Route::patch('update-cart', 'Admin\CartController@update');
Route::delete('remove-from-cart', 'Admin\CartController@remove');
Route::get('/bouquet/cart', 'Admin\CartController@cart');

//Admin Category Route
//Route::get('/create-new-category', 'Admin\CourseCategoryController@create')->name('create-new-category-form');
//Route::post('/create-new-category', 'Admin\CourseCategoryController@store')->name('create-new-category');

// Courses Route
Route::get('/learning/all-courses', 'Admin\CoursesController@all_courses');


// Laravel  5.1.17 and above (PAYSTACK)
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');