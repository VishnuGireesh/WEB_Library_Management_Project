<?php
    include "connection.php";
    session_start();
?>

<html>
    <head>
        <title>Addbooks page</title>
        <link rel="stylesheet" href="add_books.css">
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
                        
                        

                        <div class="colum3">
                            <!-- Main area starts here -->
                            <div id="addbookbox">
                                <form method="POST" enctype='multipart/form-data'>
                                    <fieldset>
                                        <legend>ADD NEW BOOKS</legend>
                                       
                                        <input type="text" placeholder="Book Name" name="name" required><br>
                                        
                                        <label for="name"><b>Image</b></label><br>
                                        <input type="file" name="img" accept="image/jpeg" required>

                                        <input type="text" placeholder="Authour Name" name="author" required><br>

                                        <input type="text" placeholder="Publication Name" name="publication" required><br>
                                        
                                        <label for="name"><b>Purchase Date</b></label><br>
                                        <input type="date" name="pdate"><br>

                                       <input type="number" placeholder="Book Price" name="price" required><br>

                                       <input type="number" placeholder="Book Quantity" name="qty" required><br>

                                       <input type="number" placeholder="Available Quantity" name="aqty" required><br>

                                        <button type="submit" class="registerbtn" name="sub">ADD BOOKS</button>

                                        </fieldset>
                                </form>

                                <?php
                                 $name=$_SESSION['admin'];
                                    
                                 if(isset($_POST["sub"]))
                                    {
                                        if (is_uploaded_file($_FILES['img']['tmp_name'])) 
                                        {
                                            move_uploaded_file($_FILES['img']['tmp_name'],'books_image/'.$_FILES['img']['name']);
                                        }

                                        mysqli_query($link,"insert into books (name,author,publication,p_date,price,qty,a_qty,adm_name,image) values('$_POST[name]','$_POST[author]','$_POST[publication]','$_POST[pdate]',$_POST[price],$_POST[qty],$_POST[aqty],'$name','".$_FILES['img']['name']."')");

                                         ?>
                                <div class="alert" id="alert1">
                                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                    <strong>SUCCESS!</strong> you are registered successfully!!
                                </div>
                                
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