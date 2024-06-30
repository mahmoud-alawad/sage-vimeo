<?php

namespace Mahmoud\SageVimeo;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class SageVimeoServiceProvider extends ServiceProvider
{
   /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(SageVimeo::class, function () {
            return new SageVimeo($this->config());
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }



    /**
     * Register Blade directives.
     *
     * @return void
     */
    protected function directives()
    {

        Blade::directive('vimeo', function ($expression) {
            return "<?php echo 'todo' ?>";
        });
    }

}
