<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS CDN  -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url('assets/styles/styles1.css'); ?>">


</head>


<body>
    <div id="app">
        <div class="main-wrapper container">
            <header>
                <a href="#"><img class="logo" src="<?php echo base_url('assets/element/Nothing.svg'); ?>"></a>
                <nav>
                    <ul class="links">
                        <li><a href="#">Tak</a></li>
                        <li><a href="#">DA</a></li>
                        <li><a href="#">Sepi</a></li>
                    </ul>
                </nav>
                <a class="cta" href="<?= site_url('Auth'); ?>"><button class="tombol">Login</button></a>
            </header>

            <!-- <?= $contents ?> -->

            <!-- laslsk -->
            <!-- <footer class="main-footer">

            </footer> -->
        </div>
    </div>


    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>