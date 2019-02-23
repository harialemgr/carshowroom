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
Route::group(['middleware' => 'auth:web'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    //Route::get('createuser','Auth\RegisterController@showRegistrationForm');
    Route::resources([
        // 'package' => 'PackageController',
        // 'pcategory'=>'PcategoryController',
        // 'pagecategory'=>'pageCategoryController',
        'page'=>'pageController',
        'slide'=> 'sliderController',
        'messages'=>'messageController',
        // 'college'=>'collegeController',
        'seo'=>'seoController',
        'blogcategory' => 'BlogCategoryController',
        'blog' => 'blogController',
        'membercategory' =>'MemberCategoryController',
        'member' => 'MemberController',
        'notice' => 'NoticeController',
        'gallerycategory'=>'GalleryCategoryController',
        'gallery'=>'GalleryController',
        'quicklinks'=>'QuickLinksController',
        'download'=> 'DownloadController',
        'calendars'=>'CalendarController',
        'videos'=>'VideoController',
        'testimonial' => 'TestimonialController',
        'pricing' => 'PricingController',
        'branch' => 'BranchController',
        'ourservice' => 'OurServiceController',
        'adminprofile' => 'ProfileController'
    ]);

    Route::resource('customerquery', 'CustomerQueryController', ['except' => ['store']]);
    Route::resource('career', 'CareerController', ['except' => ['show']]);
    Route::get('/social-links', 'SocialLinkController@index')->name('social_links.index');
    Route::patch('/social-links/{id}', 'SocialLinkController@update')->name('social_links.update');
    Route::get('/applied-for-vacancies', 'ApplyForVacancyController@index')->name('appliedvacancy.index');
    Route::delete('/applied-for-vacancies/{id}', 'ApplyForVacancyController@destroy')->name('appliedvacancy.destroy');
    Route::get('/applied-for-vacancies/download/{filename}', 'ApplyForVacancyController@downloadCurriculumVitae')->name('appliedvacancy.download');
});

//customer routes
Route::post('/customerquery', 'CustomerQueryController@store')->name('customerquery.store');
Route::get('/career/{career}', 'CareerController@show')->name('career.show');
Route::post('/apply-for-vacancy/store', 'ApplyForVacancyController@store')->name('appliedvacancy.store');

Route::get('/', 'HomeController@index');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/prices', 'PagesController@price')->name('prices');
Route::get('/ourteam', 'HomeController@ourteam')->name('ourteam');
Route::get('/testimonials', 'HomeController@testimonials')->name('testimonials');
Route::get('/careers', 'HomeController@careers')->name('careers');
Route::get('/careershow', 'HomeController@careershow')->name('careershow');
Route::get('/blogs', 'HomeController@blog')->name('blogs');
Route::get('/blogview', 'HomeController@blogview')->name('blogview');
Route::get('/readmore', 'HomeController@aboutus')->name('readmore');
Route::get('/prices', 'PagesController@price')->name('prices');
Route::get('/ourteam', 'HomeController@ourteam')->name('ourteam');
Route::get('/testimonials', 'HomeController@testimonials')->name('testimonials');
Route::get('/careers', 'HomeController@careers')->name('careers');
Route::get('/careers/{slug}', 'HomeController@careershow')->name('career.show');
Route::get('/blogs', 'HomeController@blog')->name('blogs');
Route::get('/blogview', 'HomeController@blogview')->name('blogview');

Route::get('/testimonials', 'HomeController@testimonials')->name('testimonials');
Route::get('/blogs', 'HomeController@blog')->name('blogs');
Route::get('/blogs/{slug}', ['as' => 'frontend.blogview', 'uses' => 'HomeController@blogview'])->name('blogview');
// Route::get('/blogs/view', ['as' => 'frontend.blogview', 'uses' => 'HomeController@blogview1'])->name('blogviewn');
Route::get('/support/{slug}', 'HomeController@support')->name('support');

Route::get('/demo', 'HomeController@demo')->name('demo');
Route::get('/index', 'HomeController@index')->name('home');
