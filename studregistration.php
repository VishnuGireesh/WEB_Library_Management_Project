<?php
include "connection.php"

?>

<html>

<head>
    <title>student registration</title>
    <link rel="stylesheet" href="studentreg.css">
</head>

<body>
    <div id="container">
        <div class="row">
            <div class="column">

            </div>
        </div>
        <div class="row">
            <div class="column2">

            </div>
            <div class="column">
                <form method="POST">
                    <div id="formcontainer">
                        <fieldset id="bor">
                            <legend>USER REGISTRATION FORM</legend>
                            <label for="name"><b>Name</b></label><br>
                            <input type="text" placeholder="Enter Name" name="name" required><br>

                            <label for="uname"><b>User Name</b></label><br>
                            <input type="text" placeholder="Enter User Name" name="uname" required><br>

                            <label for="psw"><b>Password</b></label><br>
                            <input type="password" placeholder="Enter Password" name="psw" required><br>

                            <label for="email"><b>Email</b></label><br>
                            <input type="email" placeholder="Enter Email" name="email" required><br>

                            <label for="phone"><b>Mobile</b></label><br>
                            <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Mobile No" required><br>
                            <small>Format: 123-456-7890</small><br>

                            <label for="sem"><b>Semester</b></label><br>
                            <select id="sel" name="sem">
                                <option value=1>SEM 1</option>
                                <option value=2>SEM 2</option>
                                <option value=3>SEM 3</option>
                                <option value=4>SEM 4</option>
                              </select><br>
                        </fieldset>

                        <button type="submit" class="registerbtn" name="sub">Register</button>
                    </div>

                    <?php

                    if(isset($_POST["sub"]))
                    {
                        
                    }

                    ?>

                    <div id="container_signin">
                        <p>Already have an account? <a href="#">Sign in</a>.</p>
                    </div>
                </form>
            </div>
        </div>

</body>

</html>