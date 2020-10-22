<?php


namespace Anisa\Report;



use Anisa\Report\Middleware\AcessReport;
use Illuminate\Support\ServiceProvider;

class ReportProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind("report",function (){
            return new Report;
        });

        $this->mergeConfigFrom(__DIR__.'/Configs/main.php','report');
    }

    public function boot()
    {
        require __DIR__."\Http\\route.php";

        $this->loadViewsFrom(__DIR__.'/Views','repo');

        $this->publishes([
            __DIR__.'/Configs/main.php'=>config_path("report.php"),
            __DIR__.'/Views'=>base_path('resources/views/report'),
            __DIR__.'/Migrations'=>database_path('/migrations')
        ]);

        $this->app(['router'])->middleware("reportmid",AcessReport::class);

    }
}
