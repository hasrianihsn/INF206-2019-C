<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> -->
    <!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
    <!--===============================================================================================-->

    <style>
        html {
            background: url(https://i.imgur.com/lXBFbV8.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        h1 {
            font-size: 80px;
            font-style: italic;
        }

        .btn {
            width: 80px;
        }

        .isi {
            color: #fff;
            position: fixed;
            bottom: 60px;
            width: 100%;
            text-align: center;
            font-family: 'Chewy', cursive;
        }
    </style>
</head>

<body>
    <div class="isi">
        <h1>Fish List</h1>
        <a href="<?= base_url('Auth/Userlogin'); ?>"><button type="submit" class="btn btn-secondary">START</button></a>

    </div>





    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>