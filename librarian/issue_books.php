<?php
include "connection.php";
?>

<html>
    <head>
        <title>demo page</title>
        <link rel="stylesheet" href="issue_books.css">
    </head>
    <body>
        <div id="container">
            <div class="row">
                
            <!-- Side bar navigation here -->

                <?php
                    include "sidebar.php";
                ?>

                <div class="column2">
                    <div class="row">

                        <!--  Top portion starts here -->

                        <?php
                            include "topbar.php";
                        ?>
                        
                        <!-- Main area starts here -->

                        <div class="colum3">
                            <div id="formbox">
                                <form name="f1" method="post">
                                    <select name="enoo" id="ee">
                                        <option>--Choose--</option>
                                        <?php
                                            $res=mysqli_query($link,"select eno from studreg");
                                            while($row=mysqli_fetch_array($res))
                                            {
                                                echo "<option>";
                                                echo $row["eno"];
                                                echo"</option>";
                                            }
                                        ?>
                                    </select>
                                <button type="submit" name="sub">Login</button>

                                </form>
    
                            </div>
                        <div id="issuebox">
                            <?php
                                if(isset($_POST["sub"]))
                                {

                                   $res=mysqli_query($link,"select * from studreg where eno=$_POST[enoo]");


                                   while($rows=mysqli_fetch_array($res))
                                   {
                                       $name=$rows["name"];
                                       $sem=$rows["sem"];
                                       $phone=$rows["phone"];
                                       $mail=$rows["email"];
                                       $uname=$rows["uname"];
                                   }
                                    ?>

                                    <form name="sform" action="insert.php" method="post">

                                                <input type="text" placeholder="Enrollement no" name="enumber" value="<?php echo $_POST["enoo"]; ?>" readonly><br>

                                                <input type="text" placeholder="studentname" name="names" value="<?php echo $name; ?>" ><br>

                                                <input type="text" placeholder="studentsem" name="sems" value="<?php echo $sem; ?>" ><br>

                                                <input type="text" placeholder="studentcontact" name="phones" value="<?php echo $phone; ?>" ><br>

                                                <input type="text" placeholder="studentemail" name="emails" value="<?php echo $mail; ?>"><br>
                                                
                                                <input type="text" placeholder="studentemail" name="unames" value="<?php echo $uname; ?>"><br>

                                                <select name="book" id="ee">
                                                    <option>--choose--</option>
                                                    <?php
                                                        $m=mysqli_query($link,"select name from books where a_qty>0");
                                                        while($r=mysqli_fetch_array($m))
                                                        {
                                                            echo "<option>";
                                                            echo $r["name"];
                                                            echo"</option>";
                                                        }
                                                    ?>

                                                </select><br>

                                                <input type="date" placeholder="bookissuedate" name="idate" value="<?php echo date('Y-m-d'); ?>"><br>

                                                <button type="submit" name="sub2">ISSUE BOOK</button>

                                                

                                        </form>
                                    
                                   <?php

                                        }
                                 ?>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
            
           <!-- footer starts -->

            <?php
                include "footer.php";
            ?>
        </div>
    </body>
</html>