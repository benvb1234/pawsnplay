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
                        <a class="nav-link active" href="home.php">Home 
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
                        <a class="nav-link" href="signin.php">Sign In!</a> 
                    </li>
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
            <h2 class="display-5">Overview</h2> 
                <p>  
                    As a team, we wanted to address the needs of the everyday gamer, whether casual or competitive, to be able to expand their horizon and
                    try new games that they potentially havent heard of. We realized that as this pandemic has gone on, we have found ourselves with more time on our hands
                    but with less activites to do (now that we are stuck at home) to help destress from our everyday lives of constant school and work.
                </p> 
            <h3 class="display-5">Project Description</h3> 
                <p>
                This project was implemented using HTML, PHP, Google Cloud Platform and MySQL. The database contains a few different relations such as game_information which
                includes different piece of information such as the steam link to acces the game, a quick description of the game, and the total number of reviews (split into positive and negative).
                The genre table includes specific information about the genre since we allow games to hav eup to three different genres. The game table includes information
                regarding the game like the game title, publisher id, minimum age requierment needed to play and the release date of the game. Platform relation contains
                information about which OS the game is supported on. Developer relation has two attributes which describes the developers name as well as what country the
                HQ is in. Country relation contains the country name. The publisher relation specifies the name of the publisher and the country where their HQ is located in.
                Game_development contains the id of the developer. Lastly, our member relation contains information about the user such as their first name, last name, email,
                username, password, sal encryption and country id of the user.
                </p>

                <p>
                    For that reason, we have created this very useful search tool that can help find users games based on different things such as:
                    <ul>
                        <li>
                            <a class="nav-link" href="feature1.php">Based on user preferences</a>
                        </li>
                        <li>
                            <a class="nav-link" href="feature2.php">Filter games by favorite genre</a>
                        </li>
                        <li>
                            <a class="nav-link" href="feature3.php">Filter games by release dates</a>
                        </li>
                        <li>
                            <a class="nav-link" href="feature4.php">Filter games by publishers</a>
                        </li>
                        <p></p>
                        <li>And SO MUCH MORE</li>
                    </ul>
                </p>
            <h4 class="display-5">Member Contact Info</h4> 
                <ul>
                    <li>Ben Valdebenito: benvb123@uw.edu</li>
                    <li>Chau Vu: cvu1@uw.edu</li>
                    <li>Daniel Jiang: djiang7@uw.edu</li>
                    <li>Phucc Luu: pluu2@uw.edu</li>
                </ul>
                <br class="lead"> 
                    <a class="btn btn-primary btn-lg" href="signup.php" role="button">Are you ready to join?</a> 
                </br> 
        </div> 
    </body> 
</html> 