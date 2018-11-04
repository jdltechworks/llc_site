<?php
namespace React;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ReactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Blade::directive('css', function ($expression) {
            return "<?php echo app('" . ReactBladeDirective::class . "')->css($expression); ?>";
        });
        Blade::directive('js', function ($expression) {
            return "<?php echo app('" . ReactBladeDirective::class . "')->js($expression); ?>";
        });
    }
}
