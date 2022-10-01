<?php require_once 'includes/header.php';
require_once 'bootstrap.php';
?>
<nav class="nav">
    <div class="container-fluid">
	<li class="nav-item" role="presentation"><a class="nav-link" href="../index.php?logout='1'" style="color: rgb(0,0,0);">Logout</a></li>
        <h1 class="text-center"> STOCK MANAGEMENT SYSTEM </h1>
    </div>
</nav><hr>
<div class="row">&nbsp;<br></div>
<div class="row">
    <div class="  col-md-6 col-sm-12 mx-auto col-md-offset-3">
        <div class=" jumbotron card card-body bg-light mt-5">
            <h2><br>Department</br>Login Panel</h2>

            <form action="<?php echo URLROOT; ?>/actions/__login.php" method="post">
                
                <div>
                <?php
                  //this will display any kind of error/success message
                  flash();
                ?>
                </div>
                <!--end flashing-->
                <div class="form-group">
                    <label for="id">ID: <sup>*</sup></label>
                    <input type="text" name="id" class="form-control form-control-lg" placeholder="Enter Your ID" required>
                </div>
                <div class="form-group">
                    <label for="password">Password: <sup>*</sup></label>
                    <input type="password" name="password" class="form-control form-control-lg"
                           placeholder=" Password" required>
                </div>
                <input type="hidden" name="token" value="<?php echo Token::generate();?>">
                <div class="form-group">
                     <input type="submit" name="submit" value="LOGIN" class="btn btn-success">
                </div>

              </form>
        </div>
    </div>
</div>

<?php require_once './includes/footer.php'; ?>





