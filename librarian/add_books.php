<?php
    include "connection.php";
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
                                <form method="POST">
                                    <fieldset>
                                        <legend>ADD NEW BOOKS</legend>
                                       
                                        <input type="text" placeholder="Book Name" name="name" required><br>
                                        
                                        <label for="name"><b>Image</b></label><br>
                                        <input type="file" placeholder="Book Image" name="name" required><br>

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
                                    if(isset($_POST["sub"]))
                                    {
                                        echo "hello";
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