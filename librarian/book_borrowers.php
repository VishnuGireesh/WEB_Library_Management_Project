<?php
    include "connection.php";
    $b_name=$_GET["bname"];
?>

<html>
    <head>
        <title>demo page</title>
        <link rel="stylesheet" href="book_borrowers.css">
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

                        <div id="display">
                            <h4>Book Borrowers</h4>

                            <table>
                                <tr>
                                <th>Enrollement</th>
                                <th>Name</th>
                                <th>Sem</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Issue Date</th>
                                </tr>

                            <?php

                                $res=mysqli_query($link,"select * from issue_books where b_name='$b_name' && b_return_date=''");

                                while($row=mysqli_fetch_array($res))
                                                {
                                                    echo "<tr>";
                                                    echo "<td>"; echo $row["s_eno"]; echo "</td>";
                                                    echo "<td>"; echo $row["s_name"]; echo "</td>";
                                                    echo "<td>"; echo $row["s_sem"]; echo "</td>";
                                                    echo "<td>"; echo $row["s_contact"]; echo "</td>";
                                                    echo "<td>"; echo $row["s_email"]; echo "</td>";
                                                    echo "<td>"; echo $row["b_issue_date"]; echo "</td>";
                                                    echo "</tr>";

                                                }


                            ?>

                            </table>

                        </div>
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