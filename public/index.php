<?php

ini_set('display_errors', 1);
ini_set('display_startup_error', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

session_start();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ .'/..');
$dotenv->load();

use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;
/* use App\Controller\IndexController;

$in= new IndexController(); 

TAMBIEN SE PUEDE AGREGANDO LA RUTA Y AL FINAL UTILIZAR LA VARIABLE EN EL CONTROLLER!!
*/

$capsule = new Capsule;
$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => getenv('DB_HOST'),
    'database'  => getenv('DB_NAME'),
    'username'  => getenv('DB_USER'),
    'password'  => getenv('DB_PASS'),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);


// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

/* $route = $_GET['route'] ?? '/';

if($route=='/'){
    require '../index.php';
}elseif($route=='addJob'){
    require '../addJob.php';
} */

$base = '/cursophp';
$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();
$map->get('index', $base . '/', [
    'controller' => 'App\Controller\IndexController',
    'action' => 'indexAction'
]);
$map->get('addJobs', $base . '/jobs/add', [
    'controller' => 'App\Controller\JobsController',
    'action' => 'getAddJobAction'
]);
$map->post('saveJobs', $base . '/jobs/add', [
    'controller' => 'App\Controller\JobsController',
    'action' => 'getAddJobAction'
]);
$map->get('addUsers', $base . '/users/add', [
    'controller' => 'App\Controller\UsersController',
    'action' => 'getAddUserAction'
]);
$map->post('saveUsers', $base . '/users/add', [
    'controller' => 'App\Controller\UsersController',
    'action' => 'getAddUserAction'
]);
$map->get('loginForm', $base . '/login', [
    'controller' => 'App\Controller\AuthController',
    'action' => 'getLogin'
]);

$map->get('logout', $base . '/logout', [
    'controller' => 'App\Controller\AuthController',
    'action' => 'getLogout'
]);

$map->post('auth', $base . '/auth', [
    'controller' => 'App\Controller\AuthController',
    'action' => 'postLogin'
]);

$map->get('admin', $base . '/admin', [
    'controller' => 'App\Controller\AdminController',
    'action' => 'getIndex',
    'auth' => true
]);

$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);

function printElement($jobs)
{

    echo '<li class="work-position">';
    echo '<h5>' . $jobs->title . '</h5>';
    echo '<p>' . $jobs->description . '</p>';
    echo '<p>' . $jobs->getDurationAsString() . '<p>';
    //echo '<p>' . $totalMoths . '<p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
}



if (!$route) {
    echo 'No route ';
} else {

    $handlerData = $route->handler;
    $controllerName = $handlerData['controller'];
    $actionName = $handlerData['action'];
    $needsAuth = $handlerData['auth'] ?? false;

    $sessionUserid = $_SESSION['userid'] ?? null;

    if ($needsAuth && !$sessionUserid) {
        echo 'Protected route';
        die;
    }


    $controller = new $controllerName;
    $response = $controller->$actionName($request);

    foreach ($response->getHeaders() as $name => $values) {
        foreach ($values as $value) {
            header(sprintf('%s: %s', $name, $value), false);
        }
    }

    http_response_code($response->getStatusCode());
    echo $response->getBody();
    //$controller->var_dump($route->handler);
}
//var_dump($route->handler);


//var_dump($request->getUri()->getPath());
