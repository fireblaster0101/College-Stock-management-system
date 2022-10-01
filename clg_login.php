<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Stock Management</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
</head>

<body style="background-color: rgb(218,218,218);">
    <main class="page hire-me-page">
        <section class="portfolio-block hire-me">
            <div class="container" style="margin-top: -80px;">
                <form style="margin-top: -46px;background-color: #ffffff;" method="post" action="clg_login.php">
                    <div class="text-center"><img src="assets/img/1.png"></div>
                    <div class="heading">
                        <h2>STOCK MANAGEMENT SYSTEM<br></br><br>College Login</br></h2>
                    </div>
                    <div class="form-group">
                        <label for="email">Username</label>
                        <input class="form-control" type="text" name="username" required="">
                    </div>
                    <div class="form-group">
                        <label for="message">Password</label>
                        <input class="form-control" type="password" name="password" required="">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block rounded" name="login_user" type="submit" style="background-color: rgb(51, 64, 255 );color: rgb(255,255,255);">Log In</button>
                    
                </form>
            </div>
        </section>
    </main>
    <footer class="page-footer" style="background-color: #ffffff;">
        <div class="container">
            <div class="links"><label>Copyright of Chiranth and Prajwal @ 2022</label></div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>