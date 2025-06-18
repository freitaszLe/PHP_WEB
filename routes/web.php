<?php

use App\Http\Controllers\SiteHerancaController;
use App\Http\Controllers\SiteComponenteController;
use Illuminate\Support\Facades\Route;



Route::get('site/heranca/home', [SiteHerancaController::class, 'home'])->name('site.heranca.home');
Route::get('site/heranca/portfolio', [SiteHerancaController::class, 'portfolio'])->name('site.heranca.portfolio');
Route::get('site/heranca/sobre', [SiteHerancaController::class, 'sobre'])->name('site.heranca.sobre');
Route::get('site/heranca/contato', [SiteHerancaController::class, 'contato'])->name('site.heranca.contato');

Route::get('site/componente/home', [SiteComponenteController::class, 'home'])->name('site.componente.home');
Route::get('site/componente/portfolio', [SiteComponenteController::class, 'portfolio'])->name('site.componente.portfolio');
Route::get('site/componente/sobre', [SiteComponenteController::class, 'sobre'])->name('site.componente.sobre');
Route::get('site/componente/contato', [SiteComponenteController::class, 'contato'])->name('site.componente.contato');


Route::get('/', function () {
    return view('index', [
        'paginacao' => true,
        'projetos' => [
            [
                'ativo' => true,
                'imagem' => 'cabin.png',
            ],
            [  
                 'ativo' => true,
                'imagem' => 'cake.png',
            ],
            [
                'ativo' => true,
                'imagem' => 'circus.png',
            ],
            [
                'ativo' => false,
                'imagem' => 'game.png',
            ],
            [
                'ativo' => true,
                'imagem' => 'safe.png',
            ],
            [
                'ativo' => true,
                'imagem' => 'submarine.png',
            ],
        ]
    ]);
});
