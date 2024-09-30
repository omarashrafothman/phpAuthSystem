<?php
session_start();
include("./inc/header.php");
include("./inc/nav.php");





?>


<div class="container">
    <div class="form-body w-50 mx-auto my-5">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
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
                    <div class="form-items">
                        <h3>Register Today</h3>
                        <p>Fill in the data below.</p>
                        <form class="requires-validation" method="POST" action="./handlers/handleRegister.php">

                            <div class="col-md-12 my-3">
                                <input class="form-control" type="text" name="name" placeholder="Full Name">
                                <div class="valid-feedback">Username field is valid!</div>
                                <div class="invalid-feedback">Username field cannot be blank!</div>
                            </div>

                            <div class="col-md-12 my-3">
                                <input class="form-control" type="email" name="email" placeholder="E-mail Address">
                                <div class="valid-feedback">Email field is valid!</div>
                                <div class="invalid-feedback">Email field cannot be blank!</div>
                            </div>

                            <div class="col-md-12 my-3">
                                <select class="form-select mt-3" name="position">
                                    <option selected disabled value="">Position</option>
                                    <option value="jweb">Junior Web Developer</option>
                                    <option value="sweb">Senior Web Developer</option>
                                    <option value="pmanager">Project Manager</option>
                                </select>
                                <div class="valid-feedback">You selected a position!</div>
                                <div class="invalid-feedback">Please select a position!</div>
                            </div>


                            <div class="col-md-12 my-3">
                                <input class="form-control" type="password" name="password" placeholder="Password">
                                <div class="valid-feedback">Password field is valid!</div>
                                <div class="invalid-feedback">Password field cannot be blank!</div>
                            </div>


                            <div class="col-md-12 mt-3">
                                <label class="mb-3 mr-1" for="gender">Gender: </label>
                                <input type="radio" class="btn-check" name="gender" id="male" value="male">
                                <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>
                                <input type="radio" class="btn-check" name="gender" id="female" value="female">
                                <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>
                                <input type="radio" class="btn-check" name="gender" id="secret" value="secret">
                                <label class="btn btn-sm btn-outline-secondary" for="secret">Secret</label>
                                <div class="valid-feedback mv-up">You selected a gender!</div>
                                <div class="invalid-feedback mv-up">Please select a gender!</div>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="invalidCheck" name="confirm">
                                <label class="form-check-label">I confirm that all data are correct</label>
                                <div class="invalid-feedback">Please confirm that the entered data are all correct!
                                </div>
                            </div>


                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>