<?php

use Illuminate\Support\Facades\Route;
use Minasyans\Installer\Controllers\AccountController;
use Minasyans\Installer\Controllers\DatabaseController;
use Minasyans\Installer\Controllers\EnvironmentController;
use Minasyans\Installer\Controllers\FinalController;
use Minasyans\Installer\Controllers\PermissionsController;
use Minasyans\Installer\Controllers\RequirementsController;
use Minasyans\Installer\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Laravel Installer Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'install', 'as' => 'Installer::', 'namespace' => 'Minasyans\Installer\Controllers', 'middleware' => ['web', 'install']], function () {
    Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');

    Route::get('requirements', [RequirementsController::class, 'requirements'])->name('requirements');

    Route::get('permissions', [PermissionsController::class, 'permissions'])->name('permissions')->middleware('checkRequirements');

    Route::middleware('checkPermissions')->group(function () {
        Route::get('environment', [EnvironmentController::class, 'environmentMenu'])->name('environment');
        Route::get('environment/wizard', [EnvironmentController::class, 'environmentWizard'])->name('environmentWizard');
        Route::get('environment/classic', [EnvironmentController::class, 'environmentClassic'])->name('environmentClassic');
    });

    Route::post('environment/saveWizard', [EnvironmentController::class, 'saveWizard'])->name('environmentSaveWizard');
    Route::post('environment/saveClassic', [EnvironmentController::class, 'saveClassic'])->name('environmentSaveClassic');

    Route::get('database', [DatabaseController::class, 'database'])->name('database');
    Route::get('account', [AccountController::class, 'account'])->name('account');
//    Route::get('final', [FinalController::class, 'finish'])->name('finish');

    Route::get('final', [
        'as' => 'final',
        'uses' => 'FinalController@finish',
    ]);
});

Route::group(['prefix' => 'update', 'as' => 'Updater::', 'namespace' => 'Minasyans\Installer\Controllers', 'middleware' => 'web'], function () {
    Route::group(['middleware' => 'update'], function () {
        Route::get('/', [
            'as' => 'welcome',
            'uses' => 'UpdateController@welcome',
        ]);

        Route::get('overview', [
            'as' => 'overview',
            'uses' => 'UpdateController@overview',
        ]);

        Route::get('database', [
            'as' => 'database',
            'uses' => 'UpdateController@database',
        ]);
    });

    // This needs to be out of the middleware because right after the migration has been
    // run, the middleware sends a 404.
    Route::get('final', [
        'as' => 'final',
        'uses' => 'UpdateController@finish',
    ]);
});
