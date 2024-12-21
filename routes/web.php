<?php

use App\Livewire\Pages\Articles\Article;
use App\Livewire\Pages\Articles\Articles;
use App\Livewire\Auth\EmailVerification;
use App\Livewire\Pages\Articles\Create;
use App\Livewire\Pages\Articles\Edit;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;

// Public Routes


// Protected Routes (Authenticated, Verified & Active Users Only)
Route::middleware(['active'])->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
        Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
            Route::view('', 'pages.profile.dashboard')->name('dashboard');
            Route::view('progress', 'pages.profile.progress')->name('progress');
        });
    });
    Route::view('', 'pages.home')->name('home');
    Route::view('contact', 'pages.contact')->name('contact');

// Public Quiz Routes
    Route::group(['prefix' => 'quiz', 'as' => 'quiz.'], function () {
        Route::get('/', Articles::class)->name('index');
        Route::get('/learn', Article::class)->name('take-quiz');

//        Route::get('/learn/{slug}', Article::class)->name('take-quiz');


        Route::view('results', 'pages.quiz.results')->name('results');
    });

// Public Learn Routes
    Route::group(['prefix' => 'learn', 'as' => 'learn.'], function () {
        Route::get('/', Articles::class)->name('index');
        Route::middleware(['admin'])->group(function () {
            Route::get('/create', Create::class)->name('create');
            Route::get('/{slug}/edit', Edit::class)->name('edit');
        });

        Route::get('article/{slug}', Article::class)->name('show');


        Route::view('sacraments', 'pages.learn.sacraments')->name('sacraments');
        Route::view('church-history', 'pages.learn.church-history')->name('church-history');
        Route::view('saints', 'pages.learn.saints')->name('saints');
        Route::view('prayers', 'pages.learn.prayers')->name('prayers');
    });
});


// Email Verification Routes
Route::middleware('auth')->group(function () {
    Route::get('/email/verify', EmailVerification::class)
        ->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();

        session()->flash('status', 'Your email has been verified and your account is now active!');
        return redirect()->intended(route('profile.dashboard'));
    })->middleware(['auth', 'signed'])->name('verification.verify');
});

