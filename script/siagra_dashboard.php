<?php
include 'script/dbConnection.php';
 ?>

<?php
session_start();
if(isset($_SESSION['login'])){
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>SIAGRA Dashboard</title>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="bootstrap-css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap-css/bootstrap.css">
        <link rel="stylesheet" href="style/masterStyle.css">
        <link rel="stylesheet" href="style/formElement.css">
    </head>
    <body>
        <div class="">

        </div>
    </body>
</html>
<?php
} else {
    echo header("location:login.php?sessionOut");
}
 ?>
