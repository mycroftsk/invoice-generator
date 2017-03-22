<?php

session_start();

require('../vendor/autoload.php');

$error = null;

if(isset($_POST['submit']) && $_POST['submit'] == 'login') {
    // auth

    $dbh = \Mlynek\DB::connect();
    $sql = "SELECT * from users WHERE username = :username LIMIT 1";

    $stm = $dbh->prepare($sql);
    $result = $stm->execute([
        ':username' => trim($_POST['username']),
    ]);

    if($result === true) {
        $user = $stm->fetch(\PDO::FETCH_ASSOC);

        if(password_verify($_POST['password'], $user['password'])) {
            $_SESSION['logged_in'] = true;
            $_SESSION['name'] = $user['name'];
            \Mlynek\Helpers::redirect('dashboard.php');
        } else {
            $error = [
                'message' => 'Zle meno alebo heslo'
            ];
        }
    } else {
        $error = [
            'message' => 'Error 1'
        ];
    }
}

?>

<!doctype html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/dist/css/styles.min.css">
    <title>Prihlásiť sa</title>
</head>
<body>
<div class="container">
    <div class="wrapper">
        <form action="#" method="post" name="Login_Form" class="form-signin">
            <h3 class="form-signin-heading">Prosím prihláste sa</h3>
            <hr class="colorgraph">
            <br>
            <?php

            if($error != null) {
                echo '<div class="alert alert-danger" role="alert">'. $error['message'] .'</div>';
            }

            ?>
            <input type="text" class="form-control" name="username" placeholder="Prihlasovacie meno" required="" autofocus=""/>
            <input type="password" class="form-control" name="password" placeholder="Heslo" required=""/>

            <button class="btn btn-lg btn-primary btn-block" name="submit" value="login" type="submit">Prihlásiť sa</button>
        </form>
    </div>
</div>
</body>
</html>