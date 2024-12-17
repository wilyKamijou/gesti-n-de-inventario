<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetalleVentaController;
Route::get('/hola', function () {
    return 'welcome';
});
route::get('/',[DetalleVentaController::class,'index']);
/*Route::resource('clientes', ClienteController::class);
Route::resource('proveedores', ProveedorController::class);
Route::resource('categorias', CategoriaController::class);
Route::resource('tipoEmpleados', TipoEmpleadoController::class);
Route::resource('logins', LoginController::class);
Route::resource('almacens', AlmacenController::class);
Route::resource('empleados', EmpleadoController::class);
Route::resource('productos', ProductoController::class);
Route::resource('ventas', VentaController::class);
Route::resource('compras', CompraController::class);
Route::resource('detalleAlmacens', DetalleAlmacenController::class);
Route::resource('detalleCompras', DetalleCompraController::class);
Route::resource('detalleVentas', DetalleVentaController::class);

Route::resource('informes', InformeController::class);*/
