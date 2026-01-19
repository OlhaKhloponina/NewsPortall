<?php
class controllerAdminNews{

    //list News
    public static function NewsList(){

        $arr = modelAdminNews::getNewsList();
        include_once 'viewAdmin/newsList.php';
    }


    public static function newsAddForm()
{

// echo "second text";
// die;

    $arr = modelAdminCategory::getCategoryList();

    //var_dump ($arr);
    //die;

    include_once ('viewAdmin/newsAddForm.php');
}

public static function newsAddResult()
{
    $test = modelAdminNews::getNewsAdd();
    include_once ('viewAdmin/newsAddForm.php');
}

}//class
?>
