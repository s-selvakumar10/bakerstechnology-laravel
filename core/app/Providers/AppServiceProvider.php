<?php

namespace App\Providers;

use App\Services\PdfService;
use App\Services\QrCodeService;
use App\Services\WhatsApp\TwilioService;
use App\Services\WhatsApp\WatiService;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(QrCodeService::class, function ($app) {
            return new QrCodeService();
        });
        $this->app->singleton(PdfService::class,function($app) {
            return new PdfService();
        });
        $this->app->singleton(TwilioService::class,function($app) {
            return new TwilioService();
        });
        
         $this->app->singleton(TwilioService::class,function($app) {
            return new WatiService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       Schema::defaultStringLength(191);
    }
}
