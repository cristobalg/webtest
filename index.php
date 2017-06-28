<?php
include __DIR__.'/model.php';
require_once __DIR__.'/vendor/autoload.php';


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$response = new Response();

$map = array(
    '/' => __DIR__.'/views/home.php',
    '/contact'   => __DIR__.'/views/contact.php',
    '/addcontact' => __DIR__.'/views/addcontact.php',
);

$abspath = $request->getBasePath();
$path = $request->getPathInfo();
// var_dump($request);
if (isset($map[$path])) {
    ob_start();
    $m = new Model();
    if ($path == '/') {
        $m->loadCourses();
        $courses = $m->getCourses();
    } else if ($path == '/addcontact') {
        $m->addContact($request->request->get('name'), $request->request->get('email'),
            $request->request->get('subject'), $request->request->get('comment'));
    }
    $m->loadMenu();
    $menu = $m->getMenu();
    include $map[$path];
    $response->setContent(ob_get_clean());
} else {
    $response->setStatusCode(404);
    $response->setContent('Not Found');
}

$response->send();

?>