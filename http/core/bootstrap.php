<?php
App::bind('database', require './config/database.php');
App::bind('general', require './config/general.php');

App::bind('query', new QueryBuilder(Connection::make(
    App::get('database')['connections']['mysql']
)));

Router::load('config/router.php')->direct(
    Request::uri(),
    Request::method()
)
;

function view($path, $aData = [])
{
    extract($aData);
    return require_once "./views/$path.php";
}


function redirect($path) {
    header("Location: ./$path");
}
