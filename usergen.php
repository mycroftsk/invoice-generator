<?php

require('vendor/autoload.php');

$error = null;

if(isset($_POST['submit']) && $_POST['submit'] == 'create') {
    // auth

    $dbh = \Mlynek\DB::connect();
    $sql = "INSERT INTO users (username, password) VALUES(:username, :password)";

    $stm = $dbh->prepare($sql);
    $result = $stm->execute([
        ':username' => trim($_POST['username']),
        ':password' => password_hash(trim($_POST['password']), PASSWORD_DEFAULT),
    ]);

    if($result === true) {
       if($stm->rowCount() == 1) {
           echo "User pridany";
       }
    }
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="#" method="post">
    <input type="text" placeholder="username" name="username">
    <input type="password" placeholder="password" name="password">
    <input type="submit" name="submit" value="create">
</form>


</body>
</html>
