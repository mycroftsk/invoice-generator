<?php
session_start();

require_once('../vendor/autoload.php');

if (!\Mlynek\Auth::isLogged()) {
    \Mlynek\Helpers::redirect('login.php');
}

if (isset($_GET['page']) && strlen($_GET['page']) > 1) {
    $page = $_GET['page'];
} else {
    $_GET['page'] = '';
    $page = 'main';
}


?>

<!doctype html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../dist/css/styles.min.css">

    <title>Dashboard</title>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Pollo.sk</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="dashboard.php" class="active">Zoznam faktúr</a></li>
                <li><a href="#">Upraviť profil</a></li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        <?php echo $_SESSION['name']; ?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Odhlásiť sa</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!-- MAIN CONTENT -->

<main>
    <?php include(\Mlynek\Helpers::absPath() . 'pages/' . $page . '.php'); ?>
</main>
<!-- END OF MAIN CONTENT -->

<script src="../dist/js/scripts.min.js"></script>
</body>
</html>