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

/*Route::get('/', function () {
    return view('welcome');
});*/

switch ( env( 'APP_ENV' ) ) {
	case 'staging':
		$learn = 'learn.qa.tutorials4every.one';
		$teach = 'teach.qa.tutorials4every.one';
		$admin = 'admin.qa.tutorials4every.one';
		$guest = 'qa.tutorials4every.one';
		break;
	case 'local':
		$learn = 'localhost';
		$teach = 'localhost';
		$admin = 'localhost';
		$guest = 'localhost';
		break;
	case 'prod':
	default:
		$learn = 'learn.tutorials4every.one';
		$teach = 'teach.tutorials4every.one';
		$admin = 'admin.tutorials4every.one';
		$guest = 'tutorials4every.one';
}

Route::domain( $learn )->group( function () {
	Route::prefix( 'learn' )->group( function () {
		Route::get( '/', function () {
			return 'learn';
		} );
	} );
} );

Route::domain( $teach )->group( function () {
	Route::prefix( 'teach' )->group( function () {
		Route::get( '/', function () {
			return 'teach';
		} );
	} );
} );

Route::domain( $admin )->group( function () {
	Route::prefix( 'admin' )->group( function () {
		Route::get( '/', function () {
			return 'admin';
		} );
		Route::get('upload', function() {
			$files = Storage::disk('spaces')->files('uploads');

			return view('upload', compact('files'));
		});

		Route::post('upload', function() {
			Storage::disk('spaces')->putFile('uploads', request()->file, 'public');

			return redirect()->back();
		});

		Route::get('list', function() {
			return Storage::disk('spaces')->files('.');
		});
	} );
} );

Route::domain( $guest )->group( function () {
	Route::get( '/', function () {
		/*return [
			'prod'         => is_prod(),
			'qa'           => is_qa(),
			'local'        => is_local(),
			'qa/local=dev' => is_dev(),
		];*/
		return view('learning.guest.home');
	} )->name('guest.home');
} );

// Authentication routes, as in Auth::routes(), with prefix
Route::prefix( 'auth' )->group( function () {
	$this->get( 'login', 'Auth\LoginController@showLoginForm' )->name( 'login' );
	$this->post( 'login', 'Auth\LoginController@login' );
	//$this->post( 'logout', 'Auth\LoginController@logout' )->name( 'logout' );
	$this->get( 'logout', 'Auth\LoginController@logout' )->name( 'logout' );

	// Registration Routes...
	$this->get( 'register', 'Auth\RegisterController@showRegistrationForm' )->name( 'register' );
	$this->post( 'register', 'Auth\RegisterController@register' );

	// Password Reset Routes...
	$this->get( 'password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm' )->name( 'password.request' );
	$this->post( 'password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail' )->name( 'password.email' );
	$this->get( 'password/reset/{token}', 'Auth\ResetPasswordController@showResetForm' )->name( 'password.reset' );
	$this->post( 'password/reset', 'Auth\ResetPasswordController@reset' );
} );

//Route::get( '/home', 'HomeController@index' )->name( 'home' );
