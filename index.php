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
            <a class="navbar-brand" href="#">assign4</a> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria- 
                    controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation"> 
                <span class="navbar-toggler-icon"></span> 
            </button> 

            <div class="collapse navbar-collapse" id="navbarColor02"> 
                <ul class="navbar-nav mr-auto"> 
                    <li class="nav-item"> 
                        <a class="nav-link active" href="index.php">Home 
                            <span class="sr-only">(current)</span> 
                        </a> 
                    </li> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="employee.php">Employee</a> 
                    </li> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="department.php">Department</a> 
                    </li> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="project.php">Project</a> 
                    </li> 
                    <!--
<li class="nav-item dropdown"> 
<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria- 
haspopup="true" aria-expanded="false">Dropdown</a> 
<div class="dropdown-menu"> 
<a class="dropdown-item" href="#">Action</a> 
<a class="dropdown-item" href="#">Another action</a> 
<a class="dropdown-item" href="#">Something else here</a> 
<div class="dropdown-divider"></div> 
<a class="dropdown-item" href="#">Separated link</a> 
</div> 
</li> 
-->
                </ul> 
                <form class="form-inline my-2 my-lg-0"> 
                    <input class="form-control mr-sm-2" type="text" placeholder="Search"> 
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button> 
                </form> 
            </div> 
        </nav> 
        <!-- END -- Add HTML code for the top menu section (navigation bar) --> 
        <div class="jumbotron"> 
            <h1 class="display-3">Welcome to PawsN'Play</h1> 
            <p class="lead">The worlds best search tool to find info on games that will fit your needs.<p> 
            <img src="ConsolePanda.png" alt="Panda">
            <hr class="my-4"> 
            <p> Overview: </p>
            <p>  
                As a team, we wanted to address the needs of the everyday gamer, whether casual or competitive, to be able to expand their horizon and
                try new games that they potentially havent heard of. We realized that as this pandemic has gone on, we have found ourselves with more time on our hands
                but with less activites to do (now that we are stuck at home) to help destress from our everyday lives of constant school and work.
            </p> 
            <p> Project Description: </p>
            <p>
                For that reason, we have created this very useful search tool that can help find users games based on different things such as genres, developers, publishers
                and even based on what other users in their countries are playing.
            </p>
            <p> Members Contact Info: </p>
            <p>
                Phuc Luu, Daniel Jiang, Ben Valdebenito, Chau Vu
            </p>
            <p class="lead"> 
                <a class="btn btn-primary btn-lg" href="#" role="button">Are you ready to join?</a> 
            </p> 
        </div> 
    </body> 
</html> 