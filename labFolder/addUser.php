<?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $Nickname=$_POST["Nickname"];
        $Email=$_POST["Email"];
        $Password=$_POST["Password"];
        $file = 'users.txt';

        $perevirka = file_get_contents($file);

        $current = "$Nickname\t$Email\t$Password\n";

        // $a = strpos($perevirka, $Nickname);

        preg_match_all('/(.*)\t([a-z0-9_-]+\@[a-z0-9-_]+\.[a-z]+)\t(.*)\n/', $perevirka, $rows);

        if(!in_array($Nickname, $rows[1]) && !in_array($Email, $rows[2])) {
            file_put_contents($file, $current, FILE_APPEND | LOCK_EX);

        }
        // print_r($rows);





        // if(strpos($perevirka, $Nickname) === false || strpos($perevirka, $Email) === false){
        //     file_put_contents($file, $current, FILE_APPEND | LOCK_EX);
        // }
        else echo "This user is exist!";
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>PHP - Forms</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <meta name="theme-color" content="#563d7c">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form class="needs-validation" novalidate method="post">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="Nickname">Nickname</label>
                            <input type="text" class="form-control" id="Nickname" name="Nickname" placeholder="" value="">
                            <div class="invalid-feedback">
                                Valid Nickname is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="Email">Email</label>
                            <input type="email" class="form-control" id="Email" name="Email" placeholder="" value="">
                            <div class="invalid-feedback">
                                Valid Email is required.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                            <label for="Email">Password</label>
                            <input type="password" class="form-control" id="Password" name="Password" placeholder="" value="">
                            <div class="invalid-feedback">
                                Valid Password is required.
                            </div>
                        </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
                </form>
            </div>
        </div>
    <a href="/labFolder/index.php">Back to menu</a>

    </div>
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>