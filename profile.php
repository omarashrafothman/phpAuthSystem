<?php
session_start();
include("./inc/header.php");
include("./inc/nav.php");



if (!isset($_SESSION["auth"])) {
    header("location:register.php");
}
?>


<div class="">

    <div class="container">
        <div class="row">

            <div class="col-8 mx-auto p-2 my-5">

                <div class="alert alert-success">
                    name:
                    <?php echo $_SESSION["auth"][0]; ?>
                </div>
                <div class="alert alert-primary">
                    gmail:
                    <?php echo $_SESSION["auth"][1]; ?>
                </div>
                <div class="alert alert-success">
                    gender:
                    <?php echo $_SESSION["auth"][2]; ?>
                </div>
                <div class="alert alert-primary">
                    position:
                    <?php echo $_SESSION["auth"][3]; ?>
                </div>

            </div>

        </div>

    </div>

</div>