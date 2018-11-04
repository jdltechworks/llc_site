<?php
namespace Asset;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AssetsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Blade::directive('css', function ($expression) {
            return "<?php echo app('" . AssetsBladeDirective::class . "')->css($expression); ?>";
        });
        Blade::directive('js', function ($expression) {
            return "<?php echo app('" . AssetsBladeDirective::class . "')->js($expression); ?>";
        });
    }
}
