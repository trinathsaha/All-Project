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

Route::get('/404', 'ErrorHandleController@error404');

Route::get('/405', 'ErrorHandleController@error405');

Route::get('/', [
    'uses' => 'Projectcontroller@index',
    'as' => '/'
]);


Auth::routes();
/*admin*/
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['checkadminlogin']], function () {

    Route::get('/news/add-news', [
        'uses' => 'NewsController@addNews',
        'as' => 'add-news'
    ]);

    Route::post('/news/new-news', [
        'uses' => 'NewsController@newNews',
        'as' => 'new-news'
    ]);

    Route::get('/news/manage-news', [
        'uses' => 'NewsController@manageNews',
        'as' => 'manage-news'
    ]);

    Route::get('/news/edit-news/{id}', [
        'uses' => 'NewsController@editNews',
        'as' => 'edit-news'
    ]);

    Route::post('/news/update-news', [
        'uses' => 'NewsController@updateNews',
        'as' => 'update-news'
    ]);

    Route::post('/news/delete-news', [
        'uses' => 'NewsController@deleteNews',
        'as' => 'delete-news'
    ]);

    Route::get('/news/add-subcategories', [
        'uses' => 'SubcategoriesController@addSubcategories',
        'as' => 'add-subcategories'
    ]);

    Route::post('/news/new-subcategories', [
        'uses' => 'SubcategoriesController@newSubcategories',
        'as' => 'new-subcategories'
    ]);

    Route::get('/news/manage-subcategories', [
        'uses' => 'SubcategoriesController@manageSubcategories',
        'as' => 'manage-subcategories'
    ]);

    Route::get('/news/edit-subcategory/{id}', [
        'uses' => 'SubcategoriesController@editSubcategories',
        'as' => 'edit-subcategories'
    ]);
    Route::post('/news/update-Subcategories', [
        'uses' => 'SubcategoriesController@updateSubcategories',
        'as' => 'update-subcategories'
    ]);

    Route::post('/news/delete-Subcategories', [
        'uses' => 'SubcategoriesController@deleteSubcategories',
        'as' => 'delete-Subcategories'
    ]);
    /* blog */
    Route::get('/blog/add-blog', [
        'uses' => 'BlogController@addBlog',
        'as' => 'add-blog'
    ]);
    Route::get('/blog/add-blog/fetch', [
        'uses' => 'BlogController@fetch',
        'as' => 'add-blog/fetch'
    ]);
    Route::get('/blog/edit-blog/fetch', [
        'uses' => 'BlogController@front',
        'as' => 'edit-blog/fetch'
    ]);

    Route::post('/blog/new-blog', [
        'uses' => 'BlogController@newBlog',
        'as' => 'new-blog'
    ]);

    Route::get('/blog/manage-blog', [
        'uses' => 'BlogController@manageBlog',
        'as' => 'manage-blog'
    ]);

    Route::post('/blog/delete-blog', [
        'uses' => 'BlogController@deleteBlog',
        'as' => 'delete-blog'
    ]);

    Route::get('/blog/edit-blog/{id}', [
        'uses' => 'BlogController@editBlog',
        'as' => 'edit-blog'
    ]);

    Route::post('/blog/update-blog', [
        'uses' => 'BlogController@updateBlog',
        'as' => 'update-blog'
    ]);

    Route::get('/add-reporter', [
        'uses' => 'HomeController@Addreporter',
        'as' => 'add-reporter'
    ]);

    Route::get('/manage-user', [
        'uses' => 'HomeController@Manageuser',
        'as' => 'manage-user'
    ]);

    Route::post('/manage-user/new-user', [
        'uses' => 'HomeController@newUser',
        'as' => 'new-user'
    ]);

    Route::get('/gallery/add-video', [
        'uses' => 'GalleryController@addVideo',
        'as' => 'add-video'
    ]);

    Route::post('/gallery/new-video', [
        'uses' => 'GalleryController@newVideo',
        'as' => 'new-video'
    ]);
});


Route::get('/category-blog/{id}/{name}', [
    'uses' => 'Projectcontroller@categoryBlog',
    'as' => 'category-blog'
]);

Route::get('/subcategory-blog/{id}/{name}', [
    'uses' => 'Projectcontroller@subcategoryBlog',
    'as' => 'subcategory-blog'
]);

Route::get('/blog-details/{id}', [
    'uses' => 'Projectcontroller@blogDetails',
    'as' => 'blog-details'
]);

Route::get('/visitor-login', [
    'uses' => 'SignUpController@Login',
    'as' => 'visitor-login'
]);

Route::get('/sign-up', [
    'uses' => 'SignUpController@Signup',
    'as' => 'sign-up'
]);

Route::post('/new-visitor', [
    'uses' => 'SignUpController@NewVisitor',
    'as' => 'new-visitor'
]);

Route::post('/visitor-signin', [
    'uses' => 'SignUpController@VisitorSignin',
    'as' => 'visitor-signin'
]);

Route::post('/visitor-logout', [
    'uses' => 'SignUpController@VisitorLogout',
    'as' => 'visitor-logout'
]);

Route::post('/new-comment', [
    'uses' => 'CommentController@NewComment',
    'as' => 'new-comment'
]);


