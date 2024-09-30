<?php
session_start();

include("./inc/header.php");
include("./inc/nav.php");
?>



<div class="w-100">


    <div class="container d-flex align-items-center justify-content-center">

        <div class="text-center border rounded-4 mx-auto my-5 w-50 p-4 border-primary">
            <?php if (isset($_SESSION['auth'])): ?>

                <h1 class="text-center ">Welcome <?php echo $_SESSION['auth'][0]; ?> to the Authentication System</h1>
            <?php else: ?>
                <h1 class="text-center ">Welcome to the Authentication System</h1>
            <?php endif; ?>
        </div>

    </div>


</div>