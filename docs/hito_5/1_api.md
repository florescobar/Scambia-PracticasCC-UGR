
# Hito 5

#### Diseño en general del API.
------------

Laravel es un framework de PHP que trabaja con el patrón MVC. Por lo tanto los recursos creados lo definiremos en la carpeta Controllers, los modelos de las base de datos lo definiremos dentro de la carpeta Model.

Para crear el modelo, ejecutaremos el comando, ahi definiremos las relaciones con las otras tablas.
```
php artisan make:model Currency
```
Como mencionamos en hitos anteriores, Eloquent es el ORM que viene integrado en el framework de laravel, por lo que nos permite interactuar con bases de datos simplifica el acceso, ademas de brindar distintas funcionalidades predefinidas para realizar operaciones sobre estas.


Para definir las rutas, se tienen que configurar en el archivo [routes/api.php](https://github.com/florescobar/Scambia-PracticasCC-UGR/blob/main/scambia-api/routes/api.php). Todos los recursos de nuestro sitio seran configurados en este archivo ya que estas representan todas las operaciones de nuestro API Restful.


```
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('currencyrate','App\Http\Controllers\CurrencyRateController@getAll');
Route::get('currencyrate/{idCurrencyRate}','App\Http\Controllers\CurrencyRateController@getById');
Route::get('currencyrate/active/{active?}','App\Http\Controllers\CurrencyRateController@getActive');
Route::post('currencyrate/calculate','App\Http\Controllers\CurrencyRateController@calculateExchange');
```

Para probar nuestras API's hemos utilizando Postman, realizando las peticiones correspondientes a los recursos HTTP creados.

![](https://raw.githubusercontent.com/florescobar/Scambia-PracticasCC-UGR/main/docs/img/hito5_1.png).

![](https://raw.githubusercontent.com/florescobar/Scambia-PracticasCC-UGR/main/docs/img/hito5_2.png).