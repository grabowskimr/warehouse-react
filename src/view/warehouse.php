<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&amp;subset=latin-ext" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    $username = $_SESSION['username'];
?>

<!-- Content -->
<div style="text-align: right"><a href="logout.php">Logout</a></div>

<?php
if(!isset($_SESSION['username'])) {
    header("location:index.php");
}
?>
</body>
</html>