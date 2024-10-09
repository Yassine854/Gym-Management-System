<?php
use App\Coach;
use App\Sport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EndController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\MemberEndController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MemberListController;
use App\Http\Controllers\ModalmemberController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MemberProfileController;
use App\Http\Controllers\MemberScheduleController;
use App\Http\Controllers\WelcomeController; // Import WelcomeController
use App\Http\Controllers\HomeController;
Route::get('/', [WelcomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);


Auth::routes(['register' => false]);

Route::get('/login/coach', [LoginController::class, 'showCoachLoginForm']);
Route::get('/login/member', [LoginController::class, 'showMemberLoginForm']);
Route::get('/register/member', [RegisterController::class, 'showMemberRegisterForm']);

Route::post('/login/coach', [LoginController::class, 'CoachLogin']);
Route::post('/login/member', [LoginController::class, 'MemberLogin']);
Route::post('/register/member', [RegisterController::class, 'createMember']);

// Admin Template Routes
Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('AdminTemp/sports', SportController::class);
    Route::resource('AdminTemp/coaches', CoachController::class);
    Route::resource('AdminTemp/members', MemberController::class);
    Route::resource('AdminTemp/subscriptions', SubscriptionController::class);
    Route::resource('AdminTemp/products', ProductController::class);
    Route::resource('AdminTemp/members/modalmembers', ModalmemberController::class);
    Route::resource('AdminTemp/users', UserController::class);
    Route::resource('/AdminTemp/subscription/end', EndController::class);
    Route::resource('/AdminTemp/tasks', TasksController::class);

    Route::get('Coachs/{id}', function ($id) {
        return [
            'coachs' => Coach::where('sports_id', $id)->get(),
            'sport' => Sport::find($id),
        ];
    });

    Route::get('Sports/{id}', function ($id) {
        return Sport::get('cost');
    });
});

// Coach Template Routes
Route::group(['middleware' => ['coach']], function () {
    Route::view('CoachTemp/layout/dashboard', 'CoachTemp/layout/dashboard');
    Route::resource('CoachTemp/layout/profile', ProfileController::class);
    Route::resource('CoachTemp/memberlist', MemberListController::class);
    Route::resource('AdminTemp/schedule', ScheduleController::class);
});

// Member Template Routes
Route::group(['middleware' => ['member']], function () {
    Route::view('MemberTemp/layout/dashboard', 'MemberTemp/layout/dashboard');
    Route::resource('MemberTemp/layout/memberprofile', MemberProfileController::class);
    Route::resource('MemberTemp/memberprofile/endsubscription', MemberEndController::class);
    Route::resource('MemberTemp/memberschedule', MemberScheduleController::class);
});
