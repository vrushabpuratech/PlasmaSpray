<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\DashboardsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardsController::class, 'home'])->name('dashboards.home');
Route::get('/about-us', [DashboardsController::class, 'companyprofile'])->name('about-us');
Route::get('/catalogue', [DashboardsController::class, 'catalogue'])->name('catalogue');
Route::get('/scope', [DashboardsController::class, 'scopeofservices'])->name('scope');
Route::get('/range-of-products', [DashboardsController::class, 'rangeofproducts'])->name('range-of-products');
Route::get('/plasma-spraying', [DashboardsController::class, 'plasmaspraying'])->name('plasma-spraying');
Route::get('/hvofs', [DashboardsController::class, 'hvofs'])->name('hvofs');
Route::get('/applications', [DashboardsController::class, 'applications'])->name('applications');
Route::get('/photo-gallery', [DashboardsController::class, 'photogallery'])->name('photo-gallery');
Route::get('/contact-us', [DashboardsController::class, 'contactus'])->name('contact-us');
Route::get('/enquiry', [DashboardsController::class, 'enquiry'])->name('enquiry');
Route::get('/sitemap', [DashboardsController::class, 'sitemap'])->name('sitemap');
Route::get('/privacy-policy', [DashboardsController::class, 'privacypolicy'])->name('privacy-policy');
Route::get('/terms-and-conditions', [DashboardsController::class, 'termsandconditions'])->name('terms-and-conditions');
Route::get('/contact-us', [DashboardsController::class, 'contactus'])->name('dashboards.contactus');
Route::get('/enquiry', [DashboardsController::class, 'enquiry'])->name('dashboards.enquiry');
Route::post('/saveform', [DashboardsController::class, 'saveform'])->name('save.form');
