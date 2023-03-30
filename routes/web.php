<?php

use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HolyController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AboutfaController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\AboutcouController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FacultieController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\McqController;
use App\Http\Controllers\QuiController;
use App\Http\Controllers\ReservationController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

        Route::get('/login', function () {
            return view('auth.login');
        });
        Route::get('/register', function () {
            return view('auth.register');
        });


    Route::get('/', [UserController::class,'index_student'])->name('home');


    Route::get('/dash', function () {
        return view('pages.dashboard');
    })->middleware('auth','checklogin')->name('dashboard');


    Route::resource('profile',ProfileController::class)->middleware(['auth']);

    Route::get('/about', function () {
        return view('website.about');
    })->name('about');


    // holies
    Route::get('/dash/holies',[HolyController::class,'index'])->middleware('auth','checklogin','doctor')->name('holies.index');
    Route::get('/dash/show_holies',[HolyController::class,'show'])->middleware('auth','checklogin','hr')->name('holies.show');
    Route::get('/dash/delete_holies/{id}',[HolyController::class,'destroy_holies'])->middleware('auth','checklogin','hr')->name('holies.destroy');

    Route::get('delivered/{id}',[HolyController::class,'delivered']);


    Route::post('/dash/add_holies',[HolyController::class,'store_holy'])->middleware('auth','checklogin')->name('store.holy');


    // complaints 
    Route::get('complaints',[ComplaintController::class,'index'])->middleware('auth')->name('complaints');
    Route::get('dash/complaints',[ComplaintController::class,'dash_index'])->middleware('auth','checklogin','complain')->name('dash.complaint');
    Route::post('complaints/store',[ComplaintController::class,'store'])->name('complaint.store');


    // faculity
    Route::resource('/facultie',FacultieController::class)->middleware('auth');
    Route::resource('/classroom',ClassroomController::class)->middleware(['auth','checklogin']);
    Route::resource('/sections',SectionController::class)->middleware(['auth','checklogin']);
    Route::get('/classes/{id}', [SectionController::class,'getclasses'])->name('classes');


    // library
    Route::get('/dash/library',[LibraryController::class,'index'])->middleware(['auth','checklogin','library'])->name('dash.book');
    Route::get('/dash/show_books',[LibraryController::class,'show_books'])->middleware(['auth','checklogin','library'])->name('dash.show_books');
    Route::post('/dash/add_book',[LibraryController::class,'store'])->name('dash.store_book');
    Route::get('/library', [LibraryController::class,'index_books'])->middleware(['auth'])->name('library');
    Route::get('/dash/library/destroy/{id}', [LibraryController::class,'book_destroy'])->middleware(['auth','checklogin','library'])->name('book.destroy');
    Route::patch('/dash/library/{id}', [LibraryController::class,'update'])->name('library.update');


    // security
    Route::get('/dash/security', [SecurityController::class,'index'])->middleware(['auth','checklogin','security'])->name('dash.security');
    Route::post('/dash/security/add_secur', [SecurityController::class,'add_secur'])->middleware(['auth','checklogin','security'])->name('dash.add_secur');
    Route::get('/dash/security/destroy/{id}', [SecurityController::class,'security_destroy'])->middleware('auth','checklogin','security')->name('security.destroy');


    // security manager
    Route::get('/dash/security_manager', [SecurityController::class,'index_manager'])->middleware(['auth','checklogin','securityManager'])->name('dash.security_manager');



    Route::resource('/Dr', DoctorController::class)->middleware('doctor');

    
    //posts
    Route::get('/posts', [PostController::class,'index'])->middleware('auth','checklogin','doctor');
    Route::post('/add_post', [PostController::class,'store'])->middleware('auth','checklogin','doctor')->name('store.post');


    //schedule
    Route::get('/dash/Schedule', [ScheduleController::class,'index_schedule'])->middleware('auth','checklogin','learn');
    Route::post('/add_Schedule', [ScheduleController::class,'store_schedule'])->middleware('auth','checklogin','learn')->name('store.schedule');
    Route::get('/Schedule/since', [UserController::class,'show_schedule_since'])->middleware('auth')->name('show.schedule.since');
    Route::get('/Schedule/info', [UserController::class,'show_schedule_info'])->middleware('auth')->name('show.schedule.info');
    Route::get('/Schedule/manage', [UserController::class,'show_schedule_manage'])->middleware('auth')->name('show.schedule.manage');
    Route::get('/Schedule/build', [UserController::class,'show_schedule_build'])->middleware('auth')->name('show.schedule.build');
    Route::get('/Schedule/comu', [UserController::class,'show_schedule_comu'])->middleware('auth')->name('show.schedule.comu');



    //courses
    Route::get('/dash/courses', [CourseController::class,'index'])->middleware('auth','checklogin','course')->name('dash.course');
    Route::get('/dash/show_courses', [CourseController::class,'show_courses'])->middleware('auth','checklogin','course')->name('dash.show_course');
    Route::get('/dash/courses/{id}/edit', [CourseController::class,'course_edit'])->middleware('auth','checklogin','course')->name('course.edit');
    Route::patch('/dash/courses/{id}', [CourseController::class,'update'])->middleware('auth','checklogin','course')->name('course.update');
    Route::get('/dash/courses/destroy/{id}', [CourseController::class,'course_destroy'])->middleware('auth','checklogin','course')->name('course.destroy');
    Route::get('/courses', [UserController::class,'index_courses'])->name('courses');
    Route::post('/add_course', [CourseController::class,'store'])->name('store.course');
    Route::get('/show_courses_re', [CourseController::class,'show_courses_reservation'])->name('course.reserva');


    Route::resource('courses/reservation',ReservationController::class);



    // Students
    Route::resource('/student',StudentController::class)->middleware(['auth','checklogin']);
    Route::get('/student/Get_classrooms/{id}',[StudentController::class,'Get_classrooms']);
    Route::post('Upload_attachment', [StudentController::class ,'Upload_attachment'])->name('Upload_attachment');
    Route::post('Delete_attachment', [StudentController::class ,'Delete_attachment'])->name('Delete_attachment');
    Route::get('Download_attachment/{studentname}/{filename}',[StudentController::class ,'Download_attachment'])->name('Download_attachment');
    Route::resource('/Graduateds',GraduatedController::class);



    Route::get('/Get_classrooms/{id}', [AjaxController::class,'getClassrooms'])->name('Get_classrooms');
    Route::get('/Get_Sections/{id}', [AjaxController::class,'Get_Sections'])->name('Get_Sections');

    //users
    Route::get('/dash/all_users', [UserController::class,'get_users'])->name('all.users')->middleware('checklogin','auth');
    Route::get('/dash/update_users', [UserController::class,'update_users'])->name('update.users')->middleware('checklogin');
    Route::patch('/dash/update_users/{id}', [UserController::class,'update_users'])->name('update.users');
    Route::get('/dash/destroy_user/destroy/{id}', [UserController::class,'destroy_user'])->middleware('auth','checklogin')->name('user.destroy');



    //Aboutcou
    Route::get('/dash/aboutcou', [AboutcouController::class,'index'])->middleware('auth','checklogin','course')->name('dash.aboutcou');
    Route::get('/dash/show_aboutcou', [AboutcouController::class,'show_aboutcou'])->middleware('auth','checklogin','course')->name('dash.show_aboutcou');
    // Route::get('/dash/aboutcou/{id}/edit', [AboutcouController::class,'course_edit'])->middleware('auth','checklogin','course')->name('aboutcou.edit');
    Route::patch('/dash/aboutcou/{id}', [AboutcouController::class,'update'])->middleware('auth','checklogin','course')->name('aboutcou.update');
    Route::get('/dash/aboutcou/destroy/{id}', [AboutcouController::class,'aboutcou_destroy'])->middleware('auth','checklogin','course')->name('aboutcou.destroy');
    Route::get('/aboutcou', [UserController::class,'index_aboutcou'])->name('aboutcou');
    Route::post('/add_aboutcou', [AboutcouController::class,'store'])->name('store.aboutcou');



    //Aboutfa
    Route::get('/dash/aboutfa', [AboutfaController::class,'index'])->middleware('auth','checklogin','course')->name('dash.aboutfa');
    Route::get('/dash/show_aboutfa', [AboutfaController::class,'show_aboutfa'])->middleware('auth','checklogin','course')->name('dash.show_aboutfa');
    // Route::get('/dash/aboutfa/{id}/edit', [AboutfaController::class,'aboutfa_edit'])->middleware('auth','checklogin','course')->name('aboutcou.edit');
    Route::patch('/dash/aboutfa/{id}', [AboutfaController::class,'update'])->middleware('auth','checklogin','course')->name('aboutfa.update');
    Route::get('/dash/aboutfa/destroy/{id}', [AboutfaController::class,'aboutfa_destroy'])->middleware('auth','checklogin','course')->name('aboutfa.destroy');
    Route::get('/aboutfa', [UserController::class,'index_aboutfa'])->name('aboutfa');
    Route::post('/add_aboutfa', [AboutfaController::class,'store'])->name('store.aboutfa');


    Route::get('/dash/qui',[McqController::class,'index'])->name('dash.qui');
    Route::get('/dash/qui/show',[McqController::class,'index_qui'])->name('dash.qui.show');
    Route::post('/dash/add_qui',[McqController::class,'store'])->name('dash.store_qui');
    Route::get('/dash/category',[CategoryController::class,'index'])->name('dash.category');
    Route::post('/dash/add_category',[CategoryController::class,'store'])->name('dash.store_category');
    Route::post('/dash/add_exam',[ExamController::class,'store'])->name('dash.add_exam');

    // Promotion Student
        Route::resource('/promotion', PromotionController::class);
});
