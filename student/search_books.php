<?php
    include "connection.php";
?>

<html>
    <head>
        <title>demo page</title>
        <link rel="stylesheet" href="search_books.css">
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

                        <div id="search">
                            <h4>Search Books</h4>

                            <div id="search box">
                            <form name="ss" method="POST">
                            <input type="text" name="key" placeholder="Enter keyword" required><br>
                            <button type="submit" name="sub">SEARCH</button>
                            </form>
                        </div>

                        <?php
                            if(isset($_POST["sub"]))
                            {
                                ?>
                                <div style="overflow-x:auto;">
                            <table>
                                <tr>

                                <?php
                                    $i=0;
                                    $qury="select * from books where name like ('%$_POST[key]%') && a_qty>0"  or die (mysqli_error());
                                    $result=mysqli_query($link,$qury);
                                    while($row=mysqli_fetch_array($result))
                                    {
                                        $a=$row["image"];
                                            $b="books_image/";
                                            $c=$b.$a;
    
                                        $i=$i+1;
                                        echo "<td>";?> <img src="<?php echo $c; ?>" height="100px" width="100px">  <?php 
                                        echo "<br><b>"; echo $row["name"]; echo "</b></br>";
                                        echo "<br><b>Available : "; echo $row["a_qty"]; echo "</b></br>";
                                        echo "</td>";

                                        if($i==4)
                                        {
                                            echo "</tr>";
                                            echo "<tr>";
                                        }

                                    }
                                ?>
                                </table>
                        </div>
                        
                        <?php
                            }
                            else{
                                ?>
                                <div style="overflow-x:auto;">
                            <table>
                                <tr>

                                <?php
                                    $i=0;
                                    $res=mysqli_query($link,"select * from books where a_qty>0");
                                    while($row=mysqli_fetch_array($res))
                                    {
                                        $a=$row["image"];
                                            $b="books_image/";
                                            $c=$b.$a;
    
                                        $i=$i+1;
                                        echo "<td>";?> <img src="<?php echo $c; ?>" height="100px" width="100px">  <?php 
                                        echo "<br><b>"; echo $row["name"]; echo "</b></br>";
                                        echo "<br><b>Available : "; echo $row["a_qty"]; echo "</b></br>";
                                        echo "</td>";

                                        if($i==4)
                                        {
                                            echo "</tr>";
                                            echo "<tr>";
                                        }

                                    }
                                ?>
                                </table>
                        </div>

                        <?php
                            }
                        ?>

                            
s
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