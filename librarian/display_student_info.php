<?php
    include "connection.php";
    session_start();
?>

<html>
    <head>
        <title>Student Aprooval</title>
        <link rel="stylesheet" href="demo.css">
        <script src="https://kit.fontawesome.com/8877312db4.js" crossorigin="anonymous"></script>
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
                            <?php
                                $res=mysqli_query($link,"select * from studreg");
                            ?>
                            <div style="overflow-x:auto;">
                            <table>
                                <tr>
                                <th>Name</th>
                                <th>UserName</th>
                                <th>Email</th>
                                <th>MobileNo</th>
                                <th>Semester</th>
                                <th>EnrollementNo</th>
                                <th>Status</th>
                                <th colspan=2>Action</th>
                                </tr>

                                <?php
                                    while($row=mysqli_fetch_array($res))
                                    {
                                        echo "<tr>";
                                        echo "<td>";echo $row["name"];echo "</td>";
                                        echo "<td>";echo $row["uname"];echo "</td>";
                                        echo "<td>";echo $row["email"];echo "</td>";
                                        echo "<td>";echo $row["phone"];echo "</td>";
                                        echo "<td>";echo $row["sem"];echo "</td>";
                                        echo "<td>";echo $row["eno"];echo "</td>";
                                        echo "<td>";echo $row["status"];echo "</td>";
                                        echo "<td>";?><a href="aproove.php?id=<?php echo $row["id"]; ?>">Aproove</a><?php echo "</td>";
                                        echo "<td>";?><a href="reject.php?id=<?php echo $row["id"]; ?>">Reject</a><?php echo "</td>"; 
                                    }
                                ?>
                            </table>
                            </div>
                            <?php
                            ?>
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