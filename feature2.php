<?php require_once('config.php'); ?>
<!-- TCSS 445 : Winter 2021
Author: Ben Valdebenito
This file creates the menu option for project and output certan information about given options.
-->
<!-- Assignment 4 Template -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Assignment 4 Demo</title>
        <!-- add a reference to the external stylesheet -->
        <link rel="stylesheet" href="https://bootswatch.com/4/solar/bootstrap.min.css">
    </head>

    <body>
        <!-- START -- Add HTML code for the top menu section (navigation bar) -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="home.php">PawsN'Play</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav mr-auto"> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="home.php">Home 
                            <span class="sr-only">(current)</span> 
                        </a> 
                    </li> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="feature1.php">Feature 1</a> 
                    </li> 
                    <li class="nav-item active"> 
                        <a class="nav-link" href="feature2.php">Feature 2</a> 
                    </li> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="feature3.php">Feature 3</a> 
                    </li> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="signup.php">Sign Up!</a> 
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="signin.php">Sign In!</a> 
                    </li>
                </ul>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- END -- Add HTML code for the top menu section (navigation bar) -->

        <div class="jumbotron">
            <p class="lead">Select a department's name</p>
            <hr class="my-4">
            <form method="GET" action="department.php">
                <select name="dept" onchange='this.form.submit()'>
                    <option selected>Select a name</option>

                    <?php
                    $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
                    if ( mysqli_connect_errno() )
                    {
                        die( mysqli_connect_error() );
                    }
                    // Select the department name to display as menu option
                    $sql = "select Dname, Dnumber from DEPARTMENT";
                    if ($result = mysqli_query($connection, $sql))
                    {
                        // loop through the data
                        while($row = mysqli_fetch_assoc($result))
                        {
                            echo '<option value="' . $row['Dnumber'] . '">';
                            echo $row['Dname'];
                            echo "</option>";
                        }
                        // release the memory used by the result set
                        mysqli_free_result($result);
                    }
                    ?>
                </select>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "GET")
                {
                    if (isset($_GET['dept']) )
                    {
                ?>
                <p>&nbsp;</p>
                <table class="table table-hover">
                    <thead>
                        <tr class="table-success">
                            <th scope="col">Last Name</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Supervisor's Last Name</th>
                            <th scope="col">Supervisor's First Name</th>
                        </tr>
                    </thead>
                    <?php
                        if ( mysqli_connect_errno() )
                        {
                            die( mysqli_connect_error() );
                        }
                        // Grab everything when our Dnumber matches and so does department Id. I struggled here
                        // when i tried setting the GET command to the literal name of the department. I think the issue was
                        // me not making it a string literal with quotes
                        $sql = "  SELECT *
                            FROM EMPLOYEE, DEPARTMENT
                            WHERE Dnumber = {$_GET['dept']}  AND
                                  EMPLOYEE.Dno = DEPARTMENT.Dnumber";

                        if ($result = mysqli_query($connection, $sql))
                        {
                            while($row = mysqli_fetch_assoc($result))
                            {
                                $sql2 = "  SELECT * FROM EMPLOYEE WHERE EMPLOYEE.Ssn = {$row['Super_ssn']}";
                                $result2 = mysqli_query($connection, $sql2);
                                $row2 = mysqli_fetch_assoc($result2);

                    ?>
                    <tr>
                        <td><?php echo $row['Lname'] ?></td>
                        <td><?php echo $row['Fname'] ?></td>
                        <td><?php echo $row2['Lname'] ?></td>
                        <td><?php echo $row2['Fname'] ?></td>
                    </tr>
                    <?php
                            }
                            // release the memory used by the result set
                            mysqli_free_result($result);
                        }
                    } // end if (isset)
                } // end if ($_SERVER)
                    ?>
                </table>
            </form>
        </div>
    </body>
</html>