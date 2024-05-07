<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        /**
         * Macros? vi esto en liveWire documentation
         * https://laravel-livewire.com/screencasts/s7-search
         * Minuto 1:05
         * NOTA: esta version de LiveWire es la 3, por lo que en
         * show-post.blade.php necesitamos llamar a wire:model.live=""
         * en el <x-input/>
         */
        
        //  Builder::macro('search', function($field, $string){
        //     return $string ? $this->where($field, 'like', '%'.$string.'%'): $this;
        //  });
    }
}
