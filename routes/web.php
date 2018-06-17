<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" a group. Now create something great!
|
*/

  /*vistas para el usuario*/
  Route::get('/', 'WelcomeController@slider');
  Route::get('/calendario', 'EventsController@show');
  Route::get('/contacto', function () {
      return view('main_menu.proximamente');
  });
  Route::get('/eventos/{id}', 'EventsController@show2');
  Route::get('/programa/{titulo}', 'ProgramaController@showMainMenu');
  Route::get('/programa', 'ProgramaController@showProgramas');
  Route::get('/sedesv',['as'=>'sedes.index','uses'=>'SedesController@index']);
  Route::get('/uploads', function () {
      return view('main_menu.notFound');
  });
  Route::get('/contacto', function () {
      return view('main_menu.proximamente');
  });
  Route::get('/nosotros', 'NosotrosController@index');
  Route::get('patrocinadores/show',['as'=>'patrocinadores.show','uses'=>'PatrocinadoresController@show']);

  /*rbac*/
   Auth::routes();
   Route::group(['a' => ['auth']], function() {
     Route::get('/sysdoq', 'SysdoqPanelController@index');
     Route::get('/sysdoq', 'HomeController@index');

  	/*root*/
  	Route::get('root',['as'=>'root.index','uses'=>'RootController@index','middleware' => ['permission:super_admin']]);
  	Route::get('root/{id}',['as'=>'root.show','uses'=>'RootController@show','middleware' => ['permission:super_admin']]);
  	Route::get('root/{id}/edit',['as'=>'root.edit','uses'=>'RootController@edit','middleware' => ['permission:super_admin']]);
  	Route::patch('root/{id}',['as'=>'root.update','uses'=>'RootController@update','middleware' => ['permission:super_admin']]);

  	/*Usuarios*/
   	Route::get('users',['as'=>'users.index','uses'=>'UserController@index','middleware' => ['permission:admin-users']]);
   	Route::get('users/create',['as'=>'users.create','uses'=>'UserController@create','middleware' => ['permission:admin-users']]);
    Route::post('users/create',['as'=>'users.store','uses'=>'UserController@store','middleware' => ['permission:admin-users']]);
   	Route::get('users/{id}',['as'=>'users.show','uses'=>'UserController@show','middleware' => ['permission:admin-users']]);
   	Route::get('users/{id}/edit',['as'=>'users.edit','uses'=>'UserController@edit','middleware' => ['permission:admin-users']]);
   	Route::patch('users/{id}',['as'=>'users.update','uses'=>'UserController@update','middleware' => ['permission:admin-users']]);
  	Route::delete('users/{id}',['as'=>'users.destroy','uses'=>'UserController@destroy','middleware' => ['permission:admin-users']]);

  	/*roles*/
  	Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:admin-roles']]);
  	Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:admin-roles']]);
  	Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:admin-roles']]);
  	Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show','middleware' => ['permission:admin-roles']]);
  	Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:admin-roles']]);
  	Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:admin-roles']]);
  	Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:admin-roles']]);

    /*Filtros*/
  	Route::get('filtros',['uses'=>'FiltroController@show','middleware' => ['permission:find-datasheet']]);

    /*Programas*/
    Route::get('programas',['as'=>'programa.index','uses'=>'ProgramaController@index','middleware' => ['permission:admin-programas']]);
    Route::get('programas/create',['as'=>'programa.create','uses'=>'ProgramaController@create','middleware' => ['permission:admin-programas']]);
    Route::post('programas/create',['as'=>'programa.store','uses'=>'ProgramaController@store','middleware' => ['permission:admin-programas']]);
    Route::get('programas/{id}',['as'=>'programa.show','uses'=>'ProgramaController@show','middleware' => ['permission:admin-programas']]);
    Route::get('programas/{id}/edit',['as'=>'programa.edit','uses'=>'ProgramaController@edit','middleware' => ['permission:admin-programas']]);
    Route::post('programas/{id}/edit',['as'=>'programa.update','uses'=>'ProgramaController@update','middleware' => ['permission:admin-programas']]);
    Route::patch('programas/{id}',['as'=>'programa.update','uses'=>'ProgramaController@update','middleware' => ['permission:admin-programas']]);
    Route::delete('programas/{id}',['as'=>'programa.destroy','uses'=>'ProgramaController@destroy','middleware' => ['permission:admin-programas']]);

    /* Sedes*/
    Route::get('/sedes',['as'=>'sedes.index','uses'=>'SedesController@panel','middleware' => ['permission:admin-sede']]);
    Route::get('sedes/create',['as'=>'sedes.create','uses'=>'SedesController@create','middleware' => ['permission:admin-sede']]);
    Route::post('sedes/create',['as'=>'sedes.store','uses'=>'SedesController@store','middleware' => ['permission:admin-sede']]);
    Route::get('sedes/{id}',['as'=>'sedes.show','uses'=>'SedesController@show','middleware' => ['permission:admin-sede']]);
    Route::get('sedes/{id}/edit',['as'=>'sedes.edit','uses'=>'SedesController@edit','middleware' => ['permission:admin-sede']]);
    Route::post('sedes/{id}/edit',['as'=>'sedes.update','uses'=>'SedesController@update','middleware' => ['permission:admin-sede']]);
    Route::patch('sedes/{id}',['as'=>'sedes.update','uses'=>'SedesController@update','middleware' => ['permission:admin-sede']]);
    Route::delete('sedes/{id}',['as'=>'sedes.destroy','uses'=>'SedesController@destroy','middleware' => ['permission:admin-sede']]);

    /*evento*/
    Route::get('evento',['as'=>'evento.index2','uses'=>'EventsController@index2','middleware' => ['permission:admin-events']]);
    Route::get('evento/create',['as'=>'evento.create','uses'=>'EventsController@create','middleware' => ['permission:admin-events']]);
    Route::post('evento/create',['as'=>'evento.store','uses'=>'EventsController@store','middleware' => ['permission:admin-events']]);
    Route::get('evento/{id}',['as'=>'evento.show','uses'=>'EventsController@show3','middleware' => ['permission:admin-events']]);
    Route::get('evento/{id}/edit',['as'=>'evento.edit','uses'=>'EventsController@edit','middleware' => ['permission:admin-events']]);
    Route::post('evento/{id}/edit',['as'=>'evento.update','uses'=>'EventsController@update','middleware' => ['permission:admin-events']]);
    Route::patch('evento/{id}',['as'=>'evento.update','uses'=>'EventsController@update','middleware' => ['permission:admin-events']]);
    Route::delete('evento/{id}',['as'=>'evento.destroy','uses'=>'EventsController@destroy','middleware' => ['permission:admin-events']]);

    /*funciones*/
    Route::get('funciones',['as'=>'funciones.index','uses'=>'FuncionController@index','middleware' => ['permission:admin-events']]);
    Route::get('funciones/create',['as'=>'funciones.create','uses'=>'FuncionController@create','middleware' => ['permission:admin-events']]);
    Route::post('funciones/create',['as'=>'funciones.store','uses'=>'FuncionController@store','middleware' => ['permission:admin-events']]);
    Route::get('funciones/{id}',['as'=>'funciones.show','uses'=>'FuncionController@show','middleware' => ['permission:admin-events']]);
    Route::get('funciones/{id}/edit',['as'=>'funciones.edit','uses'=>'FuncionController@edit','middleware' => ['permission:admin-events']]);
    Route::post('funciones/{id}/edit',['as'=>'funciones.update','uses'=>'FuncionController@update','middleware' => ['permission:admin-events']]);
    Route::delete('funciones/{id}',['as'=>'funciones.destroy','uses'=>'FuncionController@destroy','middleware' => ['permission:admin-events']]);

    /*slider*/
    Route::get('/sliderv',['as'=>'slider.display','uses'=>'SliderController@display','middleware' => ['permission:admin-slider']]);
    Route::get('/slider',['as'=>'slider.index','uses'=>'SliderController@index','middleware' => ['permission:admin-slider']]);
    Route::get('slider/create',['as'=>'slider.create','uses'=>'SliderController@create','middleware' => ['permission:admin-slider']]);
    Route::post('slider/create',['as'=>'slider.store','uses'=>'SliderController@store','middleware' => ['permission:admin-slider']]);
    Route::get('slider/{id}',['as'=>'slider.show','uses'=>'SliderController@show','middleware' => ['permission:admin-slider']]);
    Route::get('slider/{id}/edit',['as'=>'slider.edit','uses'=>'SliderController@edit','middleware' => ['permission:admin-slider']]);
    Route::post('slider/{id}/edit',['as'=>'slider.update','uses'=>'SliderController@update','middleware' => ['permission:admin-slider']]);
    Route::patch('slider/{id}',['as'=>'slider.update','uses'=>'SliderController@update','middleware' => ['permission:admin-slider']]);
    Route::delete('slider/{id}',['as'=>'slider.destroy','uses'=>'SliderController@destroy','middleware' => ['permission:admin-slider']]);

    /*Fichas tecnicas*/
  	Route::get('datasheet/create',['as'=>'datasheet.create','uses'=>'DatasheetsController@create','middleware' => ['permission:admin-datasheets']]);
    Route::get('datasheet/{id}/edit',['as'=>'datasheet.edit','uses'=>'DatasheetsController@edit','middleware' => ['permission:admin-datasheets']]);
    Route::post('datasheet/{id}/edit',['as'=>'datasheet.update','uses'=>'DatasheetsController@update','middleware' => ['permission:admin-datasheets']]);
  	Route::patch('datasheet/{id}',['as'=>'datasheet.update','uses'=>'ItemCRUD2Controller@update','middleware' => ['permission:admin-datasheets']]);
  	Route::get('datasheet',['as'=>'datasheet.index','uses'=>'DatasheetsController@index','middleware' => ['permission:admin-datasheets']]);
  	Route::get('datasheet/{id}',['as'=>'datasheet.show','uses'=>'DatasheetsController@show','middleware' => ['permission:admin-datasheets']]);
  	Route::delete('/datasheets/{id}', ['as'=>'datasheet.destroy','uses'=>'DatasheetsController@destroy','middleware' => ['permission:admin-datasheets']]);
  	Route::post('datasheet/create',['as'=>'datasheet.store','uses'=>'DatasheetsController@store','middleware' => ['permission:admin-datasheets']]);
  	Route::get('datasheet/create',['as'=>'datasheet.create','uses'=>'DatasheetsController@create','middleware' => ['permission:admin-datasheets']]);
    Route::get('datasheet/{id}/edit',['as'=>'datasheet.edit','uses'=>'DatasheetsController@edit','middleware' => ['permission:admin-datasheets']]);
    Route::post('datasheet/{id}/edit',['as'=>'datasheet.update','uses'=>'DatasheetsController@update','middleware' => ['permission:admin-datasheets']]);
  	Route::patch('datasheet/{id}',['as'=>'datasheet.update','uses'=>'ItemCRUD2Controller@update','middleware' => ['permission:admin-datasheets']]);
  	Route::get('datasheet',['as'=>'datasheet.index','uses'=>'DatasheetsController@index','middleware' => ['permission:admin-datasheets']]);
  	Route::get('datasheet/{id}',['as'=>'datasheet.show','uses'=>'DatasheetsController@show','middleware' => ['permission:admin-datasheets']]);
  	Route::delete('/datasheets/{id}', ['as'=>'datasheet.destroy','uses'=>'DatasheetsController@destroy','middleware' => ['permission:admin-datasheets']]);
  	Route::post('datasheet/create',['as'=>'datasheet.store','uses'=>'DatasheetsController@store','middleware' => ['permission:admin-datasheets']]);
    Route::get('datasheet/{id}',['as'=>'datasheet.ver','uses'=>'DatasheetsController@ver','middleware' => ['permission:admin-datasheets']]);

    /*patrocinadores*/
    Route::get('/patrocinadores',['as'=>'patrocinadores.index','uses'=>'PatrocinadoresController@index','middleware' => ['permission:admin-sponsors']]);
    Route::get('patrocinadores/create',['as'=>'patrocinadores.create','uses'=>'PatrocinadoresController@create','middleware' => ['permission:admin-sponsors']]);
    Route::post('patrocinadores/create',['as'=>'patrocinadores.store','uses'=>'PatrocinadoresController@store','middleware' => ['permission:admin-sponsors']]);
    Route::get('patrocinadores/{id}/edit',['as'=>'patrocinadores.edit','uses'=>'PatrocinadoresController@edit','middleware' => ['permission:admin-sponsors']]);
    Route::post('patrocinadores/{id}/edit',['as'=>'patrocinadores.update','uses'=>'PatrocinadoresController@update','middleware' => ['permission:admin-sponsors']]);
    Route::patch('patrocinadores/{id}',['as'=>'patrocinadores.update','uses'=>'PatrocinadoresController@update','middleware' => ['permission:admin-sponsors']]);
    Route::delete('patrocinadores/{id}',['as'=>'patrocinadores.destroy','uses'=>'PatrocinadoresController@destroy','middleware' => ['permission:admin-sponsors']]);

});
