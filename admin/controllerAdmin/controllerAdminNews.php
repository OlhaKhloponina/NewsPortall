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


// ----------- edit
public static function newsEditForm($id)
{
    
    $arr = modelAdminCategory::getCategoryList();

 
    $detail = modelAdminNews::getNewsDetail($id);

       //die;

    //var_dump ($detail);

    include_once('viewAdmin/newsEditForm.php');
}

public static function newsEditResult($id)
{
    $test = modelAdminNews::getNewsEdit($id);
    include_once('viewAdmin/newsEditForm.php');
}


}//class
?>
