<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// Test Session
$router->get('/test', function (\Illuminate\Http\Request $request) {

    $counter = $request->session()->get('counter') ?: 0;
    $request->session()->put('counter', ++$counter);

    return response()->json([
        'session.counter' => $request->session()->get('counter')
    ]);
});

// Test Timeline
$router->get('/timeline',  'TwitterController@getTimeline' );

// Test Blade
$router->get('/blade',  function (\Illuminate\Http\Request $request) {
	return view("timeline");
});
