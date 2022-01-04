<?php
include '../layout/header.php';
require '../systems/log/account.php';
require '../systems/log/user.php';
require '../lib/functions.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'): //When user presses the add button
    //variable declaration
    $firstname;
    $last_name;
    $password;
    $username;
    $email;


    //Account Creation

    isset($_POST['username'])   ? $username = $_POST['username'] : $username = '';
    isset($_POST['email'])      ? $email = $_POST['email']       : $email = '';
    isset($_POST['password'])   ? $password = $_POST['password'] : $password = '';
    $newAccount = new Account($username, $password, $email);
    set_account($newAccount->username, $newAccount->password, $newAccount->email);

//User Creation
isset($_POST['firstname'])       ? $firstname = $_POST['firstname'] : $firstname = '';
isset($_POST['lastname'])   ? $last_name = $_POST['lastname'] : $last_name = '';


$newUser = new User($firstname, $last_name);
set_user($newUser->first_name, $newUser->last_name);
?>
<?php
endif;



if($_SERVER['REQUEST_METHOD'] == 'GET'):
?>
    <body>
    <div class="container col-sm-12" id="mainform">
        <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Sign Up</div>
                    <div style="float:right; font-size: 85%; position: relative; top:-10px">GO TO LOGIN PAGE</a></div>
                </div>
                <div class="panel-body" >
                    <form class="form-horizontal" role="form" method="post" action="register.php">

                        <div id="signupalert" style="display:none" class="alert alert-danger">
                            <p>Error:</p>
                            <span></span>
                        </div>
                        <div class="form-group">
                            <label for="first_name" class="col-md-3 control-label">First Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="firstname" placeholder="First Name" id="firstname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="surname" class="col-md-3 control-label">lastname</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="lastname" placeholder="lastname" id="lastname">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="firstname" class="col-md-3 control-label">Email</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="email" placeholder="email.." id="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-md-3 control-label">User Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="username" placeholder="User Name" id="username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-3 control-label">Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="password" placeholder="Password" id="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <!-- Button -->
                            <div class="col-md-offset-3 col-md-9">

                                <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>

                            </div>
                        </div>




                    </form>
                </div>
            </div>


        </div>
    </div>

    </body>










<?php
endif;
require '../layout/footer.php';
?>