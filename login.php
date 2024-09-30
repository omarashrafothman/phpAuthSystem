<?php
session_start();
include("./inc/header.php");
include("./inc/nav.php");
?>


<div class="container">
    <div class="form-body w-50 mx-auto my-5">
        <div class="row">
            <div class="form-holder">
                <?php
                if (isset($_SESSION["errors"])):
                    foreach ($_SESSION["errors"] as $error): ?>
                        <div class="alert alert-danger text-center py-2" role="alert">
                            <?php echo $error ?>
                        </div>
                        <?php
                    endforeach;
                    unset($_SESSION["errors"]);
                endif;
                ?>
                <div class="form-content">
                    <div class="form-items">
                        <h3>Login Today</h3>
                        <p>Fill in the data below.</p>
                        <form class="requires-validation" method="POST" action="./handlers/handleLogin.php">
                            <div class="col-md-12 my-3">
                                <input class="form-control" type="email" name="email" placeholder="E-mail Address"
                                    required>
                                <div class="valid-feedback">Email field is valid!</div>
                                <div class="invalid-feedback">Email field cannot be blank!</div>
                            </div>

                            <div class="col-md-12 my-3">
                                <input class="form-control" type="password" name="password" placeholder="Password"
                                    required>
                                <div class="valid-feedback">Password field is valid!</div>
                                <div class="invalid-feedback">Password field cannot be blank!</div>
                            </div>

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>