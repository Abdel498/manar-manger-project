<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// الصفحة الرئيسية
Route::get('/', function () {
    return view('welcome');
})->name('home');

// --- روابط الضيوف (فقط لمن لم يسجل دخوله) ---
Route::middleware(['guest'])->group(function () {
    // التسجيل
    Route::get('/register', [SessionsController::class, 'create'])->name('register');
    Route::post('/register', [SessionsController::class, 'store']);

    // تسجيل الدخول
    Route::get('/login', [SessionsController::class, 'createLogin'])->name('login');
    Route::post('/login', [SessionsController::class, 'login']);
});

// --- روابط الأعضاء (يجب تسجيل الدخول للوصول إليها) ---
Route::middleware(['auth'])->group(function () {
    
    // تسجيل الخروج
    Route::post('/logout', [SessionsController::class, 'destroy'])->name('logout');

    // إدارة المهام (Resources)
    Route::resource('task', TaskController::class);

    // عمليات إضافية للمهام
    Route::patch('/task/{task}/completed', [TaskController::class, 'completed'])->name('task.completed');
    Route::post('/task/{task}/comment', [CommentController::class, 'store'])->name('task.comment');
    Route::get('/task/{task}/notify', [TaskController::class, 'notifyUser'])->name('task.notify');

    // لوحة تحكم المستخدم (User Dashboard)
    Route::get('user/{user}/dashboard', [UserController::class, 'userDashboard'])->name('user.dashboard');

    // --- رابط الملف الشخصي الجديد ---
    Route::get('/profile', [UserController::class, 'show'])->name('profile.show');
});

// --- روابط الإدارة (Admin Only) ---
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [UserController::class, 'adminDashboard'])->name('admin.dashboard');
});

