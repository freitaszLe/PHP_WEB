<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View as ViewFacade;


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
        View::composer('components.layout', function($view){
            //buscar no banco de dados os itens do menu
             $itensMenu = [
                            [   'descricao' => 'Portfolio', 
                                'link' => route('site.componente.portfolio')
                            ],
                            [
                                'descricao' => 'Sobre', 
                                'link' => route('site.componente.sobre')
                            ],
                            [   
                                'descricao' => 'Contato', 
                                'link' => route('site.componente.contato')
                            ]
                        ];

            $view->with('itensMenu', $itensMenu);
        });
    }
}
