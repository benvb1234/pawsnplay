<!-- TCSS 445 : Autumn 2020 --> 
<!-- Assignment 4 Template --> 
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Assignment 4 Demo</title> 
        <!-- add a reference to the external stylesheet --> 
        <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css"> 
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
                        <a class="nav-link" href="signin.php">Sign In</a> 
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
                PawsN’Play was created out of an idea to help people find games they might want to play while being stuck at home due to the recent global pandemic. 
                Ever since the initial outbreak of Covid-19 and the start of the global pandemic in early Spring 2020, many people have been holed up in their homes 
                much more frequently than the normal times before the pandemic. Due to the fact that people have been more frequently stuck at home, people have been
                showing an increased sign of boredom and our goal is to help those individuals find games to play to fill their time and satisfy their boredom. Without
                a source of interaction and entertainment at home, people may feel the desire to leave home and perhaps gather in large groups of people such as with their
                friends or other family members and gather in public places. This leaves them at a higher risk to contract Covid-19 from other people and sources which is a
                health risk. PawsN’Play is our solution to keep people at home to minimize the possibility of contracting Covid-19 while providing them with suggestions for
                interaction and entertainment in the form of digital games.
                </p> 
            <h3 class="display-5">Project Description</h3> 
                <p>
                With the increasing popularity of gaming in recent years due to the global pandemic, people start to use gaming as a way to entertain themselves during 
                difficult times. We realized that the process can be challenging for someone who is new to gaming and trying to get into it, so we decided to create 
                PawsN’Play to help ease the difficulty. The main goal of the project is to provide a place where people can discover new games based on their preferences. 
                Our service offers users the ability to create their own account, find new games that might interest them, and learn more about different types of games in
                general. At PawsN’Play, everyone is welcome because we believe that anyone can enjoy playing games no matter your age, or your background.In our time leading
                up to the start of this project, we dove deep into the few different sites that offer the basic functions that we aimed to achieve with our service. Although
                sites like GamesLikeFinder and TheGameGal have some good features that they offer, we felt that they all lacked things here and there. One site's strength
                was sometimes the others' lack. For example, something that we liked from GamesLikeFinder had a section where they had a short summary as well as a longer
                one if you wanted more info. Something we didn't like from their sites was their frontends. It was very difficult to find information about games as an
                insane amount of ads would also be displayed. On the other hand, TheGameGal had limited ads but was mainly geared towards physical in-person games whereas
                our goal was mainly video games. Therefore, our site had the end goal to combine the great features of all these sites into one service, PawsN’Play. 
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