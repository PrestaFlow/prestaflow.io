<?php

use App\Http\Controllers\ShowDocumentationController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

# Temp
# End

Route::get('/', function () {
    return view('welcome.en');
});
Route::get('/{locale}/', function (string $locale) {
    if (! in_array($locale, ['en', 'fr'])) {
        $locale = 'en';
    }

    App::setLocale($locale);
    return view('welcome.'.$locale);
})->whereIn('locale', ['en', 'fr'])->name('welcome.locale');

Route::redirect('/docs/{version}/{page?}', '/docs/library/{version}/{page?}')
    ->where('page', '(.*)')
    ->where('version', '[0-9]+');

Route::get('/docs/{platform}/{version}/{page?}', ShowDocumentationController::class)
    ->where('page', '(.*)')
    ->where('platform', '[a-z]+')
    ->where('version', '[0-9]+');

// Forward unversioned requests to the latest version
Route::get('/docs/{page?}', function ($page = null) {
    $version = session('viewing_docs_version', '1');

    $referer = request()->header('referer');

    // If coming from elsewhere in the docs, match the current version being viewed
    if (
        ! session()->has('viewing_docs_version')
        && parse_url($referer, PHP_URL_HOST) === parse_url(url('/'), PHP_URL_HOST)
        && str($referer)->contains('/docs/')
    ) {
        $version = Str::before(ltrim(Str::after($referer, url('/docs/')), '/'), '/');
    }

    return redirect("/docs/{$version}/{$page}");
})->name('docs')->where('page', '.*');
