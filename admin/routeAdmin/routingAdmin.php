<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host)[$num];

if ($path == '' OR $path == 'index.php')
{
    // Главная страница
    $response = controllerAdmin::formLoginSite();
}
// ВХОД
elseif ($path == 'login')
{
    // Форма входа
    $response = controllerAdmin::loginAction();
}
elseif ($path == 'logout')
{
    // Выход
    $response = controllerAdmin::logoutAction();
}

elseif ($path == 'newsAdmin') {
    $response = controllerAdminNews::NewsList();
}

//-----------------------------add news
elseif($path=="newsAdd"){
 //   echo "hello world";
  //  die;
    $response=controllerAdminNews::newsAddForm();
}

elseif($path=="newsAddResult"){
    $response = controllerAdminNews::newsAddResult();
}

// ----------- edit news
elseif ($path == 'newsEdit' && isset($_GET['id'])) {

//echo "hello world";
//die;
    $response = controllerAdminNews::newsEditForm($_GET['id']);
}

elseif ($path == 'newsEditResult' && isset($_GET['id'])) {



    $response = controllerAdminNews::newsEditResult($_GET['id']);
    //var_dump ($response);
    //die;

}



else
{
    // Страница не существует
    $response = controllerAdmin::error404();
}

