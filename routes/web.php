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



/**
 * -----------------------------
 * Super Admin Routes with prefix
 * -----------------------------
 */

Route::get('read_notification/{id}', 'HomeController@read_notification')->name('read_notification');

Auth::routes(['verify' => true]);

Route::group(['middleware'=>['auth','verified']], function () {
    Route::name('admin.')->prefix('admin')->middleware(['auth'])->group(function () {
        Route::get('/users/{user}', 'AdminController@users_list')->name('user_list');
        Route::get('/verification', 'AdminController@verification_list')->name('verification_list');
        Route::get('/tasks', 'AdminController@tasks_list')->name('task_list');
        Route::get('/consultation-requests', 'AdminController@consultation_requests')->name('consultation-requests');
        Route::post('/approve', 'AdminController@approve_user')->name('approve_user');
        Route::post('/approve_useraaa', 'AdminController@approve_useraaa')->name('approve_useraaa');
        Route::post('/delete/{id}', 'AdminController@delete_user')->name('delete_user');
        Route::get('/delete_user2/{id}', 'AdminController@delete_user2')->name('delete_user2');
        Route::get('/edit', 'UserController@update_profile')->name('edit');
        Route::get('/view/{id}', 'UserController@view_profile')->name('profile.view');
        Route::get('/viewDocs/{id}', 'UserController@view_docs')->name('profile.docs');
        Route::post('/get_user_detial', 'UserController@get_user_detial')->name('get_user_detial');
        Route::get('/report/{type}', 'ReportController@reports')->name('reported');
        Route::post('/report/resolve', 'ReportController@resolve')->name('report_resolve');
    });




    /**
     * -----------------------------
     * Company Routes with prefix
     * -----------------------------
     */

    Route::name('company.')->prefix('company')->middleware(['auth'])->group(function () {
        Route::name('profile.')->middleware(['auth'])->prefix('profile')->group(function () {
            Route::get('/edit', 'UserController@update_profile')->name('edit');
            Route::post('/submit', 'UserController@update_profile_submit')->name('edit_submit');
            Route::post('/change', 'UserController@password_change')->name('password_change');
            Route::get('/view/{id}', 'UserController@view_profile')->name('view');
            Route::post('/qualification/{id}', 'UserController@update_qualification')->name('qualification');
            Route::post('/portfolio', 'UserController@update_portfolio')->name('portfolio');
            Route::get('/portfolio/delete/{id}', 'UserController@portfolio_delete')->name('portfolio_delete');
            Route::get('/doc/delete/{id}', 'UserController@doc_delete')->name('doc_delete');
            Route::post('/review/add', 'UserReviewController@addReview')->name('review_add');
            Route::post('/verification', 'UserController@update_docs')->name('verification');
            Route::get('/view', 'UserController@view_profile_as')->name('view_as');
        });
        Route::get('/myCompleted/{id}', 'TaskController@myCompletedTasks')->name('user_completed');
        Route::get('/myBiddings/{id}', 'TaskController@getUserbiddings')->name('user_biddings');
        Route::post('/report', 'ReportController@addReport')->name('report');
        Route::get('comments', 'TaskCommentController@index');
        Route::post('store_comments', 'TaskCommentController@store')->name('comment.store');
        Route::get('/delete_comment/{id}', 'TaskCommentController@destroy')->name('comment.delete');
        Route::get('/task/show/{id}', 'TaskController@show')->name('show');
    });
    // Route::name('company.')->prefix('company')->group(function () {
    //     Route::get('/', 'MoneyController@index')->name('earn.index');
    // });
    Route::name('user.')->prefix('user')->middleware(['auth','isUser'])->group(function () {
        Route::name('task.')->prefix('task')->group(function () {
            Route::post('/submit', 'TaskController@store')->name('submit');
            // Route::get('/', 'TaskController@index')->name('index');
            Route::get('/edit/{id}', 'TaskController@edit')->name('edit');
            Route::post('/edit_submit', 'TaskController@update')->name('edit_submit');
            // Route::get('/show/{id}', 'TaskController@show')->name('show');
            Route::get('/delete/{id}', 'TaskController@destroy')->name('delete');
            Route::get('/mytask', 'TaskController@myTasks')->name('my_task');
            Route::get('/pendingtask', 'TaskController@getPendingTasks')->name('pending_task');
            Route::post('/bid', 'TaskController@bidOnTask')->name('bid_on_task');
            Route::get('/allBids/{id}', 'TaskController@getBiddings')->name('biddings');
            Route::post('/assign', 'TaskController@assignTasker')->name('assign_tasker');
            Route::get('/assignees/{id}', 'TaskController@getAssignees')->name('assignees');
            // Route::get('/myBiddings/{id}', 'TaskController@getUserbiddings')->name('user_biddings');
            // Route::get('/myCompleted/{id}', 'TaskController@myCompletedTasks')->name('user_completed');
            Route::get('/complete/{task_id}/{user_id}', 'TaskController@completeTask')->name('complete_task');
            Route::get('/completed_tasks', 'TaskController@completed_task')->name('completed_task');
            Route::get('/assignedTask/{id}', 'TaskController@getAssignedTasks')->name('assigned_task');
        });
        Route::post('/report', 'ReportController@addReport')->name('report');
        Route::get('comments', 'TaskCommentController@index');
        Route::post('store_comments', 'TaskCommentController@store')->name('comment.store');
        Route::get('/delete_comment/{id}', 'TaskCommentController@destroy')->name('comment.delete');
    });

    Route::group(['middleware' => ['auth']], function () {
        Route::get('/dashboard', 'RouteViewsController@user_dashboard')->name('dashboard');
        Route::get('/admin-dashboard', 'RouteViewsController@main_dashboard')->name('admin-dashboard');
        Route::get('/delete_user/{id}', 'UserController@delete_user')->name('delete_user');
        Route::get('user/{id}', 'UserController@show_user_details')->name('show_user_details');


        /**
         * ----------------------------
         * Skills Routes
         * ----------------------------
         **/
        Route::get('/add_skill', 'SkillController@skill')->name('skill');
        Route::post('/add_skill', 'SkillController@addskill')->name('add_skill');
        Route::get('/view_skill', 'SkillController@viewskill')->name('view_skill');
        Route::get('/view_skill/delete_skill/{id}', 'SkillController@deleteskill')->name('deleteskill');
        Route::post('/view_skill/edit_skill', 'SkillController@editskill')->name('edit_skill');
    });
    Route::view('/my_profile', 'account.my_profile');
    Route::get('count/{id}', 'TaskController@details')->name('details');
});
Route::get('/login', 'RouteViewsController@login_page')->name('login');
Route::get('/home', 'MainController@Home')->name('home');
Route::get('/', 'MainController@Home')->name('homepage');
Route::get('/about', 'MainController@About')->name('about');
Route::get('/tandt', 'MainController@tandt')->name('tandt');
Route::get('/pp', 'MainController@pp')->name('pp');
Route::get('/faqs', 'MainController@faqs')->name('faqs');
Route::get('/blogs', 'MainController@blogs')->name('blogs');
Route::get('/career', 'MainController@career')->name('career');
Route::get('/categories', 'MainController@categories')->name('categories');
Route::get('/privacy-policy', 'MainController@privacyPolicy')->name('privacy-policy');
Route::get('/terms-conditions', 'MainController@termsConditions')->name('terms-conditions');

Route::get('/contactus', 'MainController@contactus')->name('contactus');
Route::get('/howitworks', 'MainController@howitworks')->name('howitworks');
Route::name('company.')->prefix('earn')->group(function () {
    Route::get('/', 'MoneyController@index')->name('earn.index');
});
Route::get('/show/{id}', 'TaskController@show')->name('user.task.show');


Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');

Route::get('auth/facebook', 'Auth\FacebookController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\FacebookController@handleFacebookCallback');

Route::post('contact-form', 'ContactController@store');
Route::get('profile-deletion', function () {
    return view('main.profile-deletion');
});

Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');
