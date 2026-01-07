<?php
ob_start();
?>
<br>
<?php

ViewNews::ReadNews($n);

echo "<br>";
Controller::Comments($_GET['id']);

echo "<br>";
ViewCommetns::CommentsForm();


$content = ob_get_clean();
include_once 'view/layout.php';
?>
