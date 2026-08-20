<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Default welcome page (homepage)
Route::get('/', function () {
    return view('welcome');
})->name('home'); 

Route::get('/about-us', [PageController::class, 'about_us'])
    ->name('other.pages.about.us'); // Using a descriptive name

Route::get('/contact-us', [PageController::class, 'contact_us'])
    ->name('other.pages.contact.us'); // Using a descriptive name

Route::get('/memberships-and-recognitions', [PageController::class, 'memberships'])
    ->name('other.pages.memberships'); // Using a descriptive name


// Services Pages route    
Route::get('/services/accreditations', [PageController::class, 'services_accreditations'])
    ->name('services.services.accreditations');

Route::get('/services/curriculum-design', [PageController::class, 'services_curriculum_design'])
    ->name('services.services.curriculum.design');

Route::get('/services/institution-building', [PageController::class, 'services_institution_building'])
    ->name('services.services.institution.building');

Route::get('/services/ipr', [PageController::class, 'services_ipr'])
    ->name('services.services.ipr');

Route::get('/services/legal-advisory', [PageController::class, 'services_legal_advisory'])
    ->name('services.services.legal.advisory');

Route::get('/services/nep-implementation', [PageController::class, 'services_nep_implementation'])
    ->name('services.services.nep.implementation');

Route::get('/services/quality-assurance', [PageController::class, 'services_quality_assurance'])
    ->name('services.services.quality.assurance');

Route::get('/services/strategic-planning', [PageController::class, 'services_strategic_planning'])
    ->name('services.services.strategic.planning');