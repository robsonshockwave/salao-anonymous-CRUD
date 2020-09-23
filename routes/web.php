<?php

use Illuminate\Support\Facades\Route;

//Organizar as Rotas de Admin
//      ||
//      \/
Route::prefix('admin')
            ->namespace('Admin')
            ->group(function(){

    /**
     * Routes Products
     */
    Route::any('products/search', 'ACL\ProductController@search')->name('products.search');
    Route::resource('products', 'ACL\ProductController');

    /**
     * Routes Clients
     */
    Route::any('clients/search', 'ACL\ClientController@search')->name('clients.search');
    Route::resource('clients', 'ACL\ClientController');


    /**
     * Routes Profiles
     */
    //Filtrar Perfis
    //ESSA ROTA TEM Q SER ANTES DE RESOURCE
    Route::any('profiles/search', 'ACL\ProfileController@search')->name('profiles.search');

    // Listar os Perfils
    //AQUI UTILIZEI O RESOURCE, PORÉM ESSE É MAIS PRA API
    Route::resource('profiles', 'ACL\ProfileController');
    //Dps vai no terminar e digita
    // php artisan make:controller Admin\ACL\ProfileController --resource

    
    /**
     * Routes Details Plans
     */

    //Cadastrar Novo Detalhe Plano (ESTE TEM QUE VIR ANTES DO SHOW)
    Route::post('plans/{url}/details', 'DetailPlanController@store')->name('details.plan.store');
    Route::get('plans/{url}/details/create', 'DetailPlanController@create')->name('details.plan.create');

    //Deletar Detalhes do Plano
    Route::delete('plans/{url}/details/{idDetail}', 'DetailPlanController@destroy')->name('details.plan.destroy');
    Route::get('plans/{url}/details/{idDetail}', 'DetailPlanController@show')->name('details.plan.show');

    //Editar o Detalhe do Plano
    Route::put('plans/{url}/details/{idDetail}', 'DetailPlanController@update')->name('details.plan.update');
    Route::get('plans/{url}/details/{idDetail}/edit', 'DetailPlanController@edit')->name('details.plan.edit');

    //Listar os Detalhes do Plano
    Route::get('plans/{url}/details', 'DetailPlanController@index')->name('details.plan.index');

    /**
     * Routes Plans
     */

    //Organizar Rota e Preparar Listagem dos Planos
    //digite no terminal: php artisan make:controller PlanController 
    Route::get('plans', 'PlanController@index')->name('plans.index');

    Route::get('/', function () {
        return view('welcome');
    });

    //Cadastrando um novo plano -- esse tem que vir antes dos plans/{url}
    Route::get('plans/create', 'PlanController@create')->name('plans.create');
    //Rota para cadastrar
    Route::post('plans', 'PlanController@store')->name('plans.store');

    //Pesquisar um plano - Filtrar ---> OBSERVAÇÃO: ESSA ROTA PRECISA ESTAR SEMPRE ANTES DA SHOW
    Route::any('plans/search', 'PlanController@search')->name('plans.search');

    //Mostrar detalhes do plano ao clicar em VER
    Route::get('plans/{url}', 'PlanController@show')->name('plans.show');

    //Deletar um plano
    Route::delete('plans/{url}', 'PlanController@destroy')->name('plans.destroy');

    //Editando um plano
    Route::get('plans/{url}/edit', 'PlanController@edit')->name('plans.edit');
    Route::put('plans/{url}', 'PlanController@update')->name('plans.update');

    /**
     * Home Dashboard
     */

    //Breadcrumb - aquele negócio em cima
    Route::get('/', 'PlanController@index')->name('admin.index');

});





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/