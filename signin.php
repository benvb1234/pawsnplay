<!-- TCSS 445 : Autumn 2020 --> 
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
            <a class="navbar-brand" href="home.php">PawsN'Play</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria- 
                    controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation"> 
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
                    <li class="nav-item"> 
                        <a class="nav-link" href="feature2.php">Feature 2</a> 
                    </li> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="feature3.php">Feature 3</a> 
                    </li> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="signup.php">Sign Up!</a> 
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link active" href="signin.php">Sign In!</a> 
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0"> 
                    <input class="form-control mr-sm-2" type="text" placeholder="Search"> 
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button> 
                </form> 
            </div> 
        </nav> 
        <!-- END -- Add HTML code for the top menu section (navigation bar) --> 
        <form action="action_page.php" style="border:1px solid #ccc">
            <div class="login">
                <table cellspacing="2" align="center" cellpadding="8" border="0">
                    <tr>
                        <td align="right">Enter Username :</td>
                        <td><input type="text" placeholder="Enter Username here" class="tb" /></td>
                    </tr>
                    <tr>
                        <td align="right">Enter Password :</td>
                        <td><input type="password" placeholder="Enter Password here" class="tb" /></td>
                    </tr>
                    <tr>
                        <td></td>
                    <td>
                        <input type="reset" value="Clear Form" id="res" class="btn" />
                        <input type="submit" value="Sign in" class="btn" /></td>
                    </tr>
                </table>
            </div>  
        </form> 
    </body> 
</html> 