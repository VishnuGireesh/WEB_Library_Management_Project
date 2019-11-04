<?php
session_start();
include "connection.php";

?>

<html>
    <head>
        <title>librarian login</title>
        <link rel="stylesheet"  href="adminlogin.css">
    </head>
    <body>
        <div id="container">
        <div class="row" id="toppanel">
            <div class="column3">
                <div class=row>
                    <div class="column4">
                <img  id="book" src="images/openbook.jpeg" alt="error" height=55px><br>
                <span>Welcome to library</span>
                    </div>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="column">

                </div>
                <div class="column2">
                    <div id="loginbox">
                    <form  method="post">
                        <div class="imgcontainer">
                            <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
                        </div>

                        <div class="container">
                            <label for="uname"><b>Username</b></label>
                            <input type="text" name="un" placeholder="Enter Username" required>

                            <label for="psw"><b>Password</b></label>
                            <input type="password" name="pass" placeholder="Enter Password" required>
                                
                            <button type="submit" name="sub">Login</button>
                            
                        </div>

                    </form>

                    <?php
           
           if(isset($_POST["sub"]))
                {
                    $count=0;
                    $res=mysqli_query($link,"select * from admin where uname='$_POST[un]' && pass='$_POST[pass]'");
                    $count=mysqli_num_rows($res);

                    if($count==0)
                    {
                        ?>
                       
                       <div class="alert">
                             <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                             <strong>OOPS!</strong> Wrong Username or Password
                        </div>


                    <?php
                    }
                    else{
                        $_SESSION['admin']=$_POST["un"];
                 ?>

                        <script>
                            window.location="display_student_info.php";
                        </script>
                <?php
                    }
                }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>