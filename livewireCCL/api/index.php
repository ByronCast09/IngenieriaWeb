<?php

// Punto de entrada para Vercel: demo con SQLite temporal y datos de muestra

use Illuminate\Contracts\Console\Kernel as ConsoleKernel;
use Illuminate\Contracts\Http\Kernel as HttpKernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

$_SERVER['HTTPS'] = 'on';

require __DIR__ . '/../vendor/autoload.php';

// La primera petición de cada instancia crea la base y carga los datos de muestra
$baseDatos = getenv('DB_DATABASE') ?: '/tmp/ccl-demo.sqlite';
if (!file_exists($baseDatos)) {
    touch($baseDatos);
    $consola = (require __DIR__ . '/../bootstrap/app.php')->make(ConsoleKernel::class);
    $consola->call('migrate', ['--force' => true]);
    $consola->call('db:seed', ['--class' => 'Database\Seeders\DemoSeeder', '--force' => true]);
}

$app = require __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(HttpKernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
