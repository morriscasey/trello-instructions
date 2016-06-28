
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Trello</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/trelloStyle.css" />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1>Trello Tutorials</h1>
        </div>
        <div id="content" class="col-sm-8">
          <hr>
          <div id="create"><!-- Create Trello board-->
            <h2 class="text-center">Initial setup of a team trello board and adding team members</h2>
            <hr>
            <h3>Purpose</h3>
            <p>The purpose of this instruction is to walk a new user through creating a Trello team, adding members to the team, and creating a board to store your product and sprint backlog.</p>
            
            <h3>What is Trello.com</h3>
            <p>Trello.com is a process management site using visual elements to help organize your projects.</p>
           
            <h3>Step-By-Step Instructions</h3>
            <h4>Create a new team</h4>
            <ol>
              <li>Go to <a href"https://trello.com" target="_blank">https://trello.com</a> and login</li>
              <li>Click Create a new team</li>
              <img src="images/create_image1.png" alt="Create a new Team">
              <li>Enter the name of your team</li>
              <li>Click Create</li>
              <img src="images/create_image2.png" alt="Image of Entering a team name">
              <li>You  should  now see something similar</li>
              <img src="images/create_image3.png" alt="IMage of Team screen in Trello">
            </ol>
            <hr>
            <h4>Adding team members to your new team</h4>
            <ol>
              <li>Click Members</li>
              <img src="images/add_image1.png" alt="Image showing where to find member button">
              <li>On the left of the page, click Add Members</li>
              <img src="images/add_image2.png" alt="Image showing where to find Add Members button">
              <li>In the input field type the email address of your team member and select your team member found</li>
              <img src="images/add_image3.png" alt="Image showing how to search with email addres and selecting the found team member">
              <p>
                <i><strong>Note:</strong> You can look  up  a user  by  name  but easier  to  find  using email address</i>
              </p>
              <li>Here is what you will see once team member added</li>
              <img src="images/add_image4.png" alt="Image of complete list of members">
              <li>Repeat steps until all your team members are added to your Trello team</li>
            </ol>
            <hr>
            <h4>Create a board for your backlogs</h4>
            

            <ol>
              <p><i><strong>Note:</strong> Your trello board holds your product backlog, sprint backlog, and the lifecycle(beginning and end) of each sprint. Additional detail is discussed in additional tutorials.</i></p>
              <li>Click Create new board</li>
              <li>Enter title for new board</li>
              <li>Click Create</li>  
              <img src="images/create_image4.png" alt="Image of first Trello board being created">
              <li>This is where your product and sprint backlog will go</li>
              <img src="images/create_image5.png" alt="Image of first Trello board">
            </ol>
            <hr>
            <h4>Organize Trello Board</h4>
            <ol>
              <li>Click Add a list</li>
              <img src="images/create_image6.png" alt="Image of where to click Add a list">
              <li>Enter the name of the list  as “Product  Backlog”</li>
              <li>Click Save</li>
              <img src="images/create_image7.png" alt="Image of creating a list called Product Backlog">
              <p><i><strong>Note:</strong>The Product Backlog list  is  where your user stories start</i></p>

            <h5>Create 5 more lists:</h5>
            <ul>
              <li>Current Sprint Backlog</li>
              <li>In Progress</li>
              <li>Review</li>
              <li>Done</li>
              <li>Additional Resources</li>
            </ul>
            </ol>
            <nav>
              <h3 class="text-center"><a href="backlogPlanning.html">Next: Creating a Product Backlog</a></h3>
            </nav>
          </div><!--End of Create Trello Board -->
        </div>
        <div class="col-sm-3 col-sm-offset-1">
          <nav id="pageBar">
            <h4>Table of Contents</h4>
            <ul>
              <li><a href="index.php">Initial setup of a team trello board and adding team members</a></li>
              <li><a href="backlogPlanning.html">Creating a Product Backlog</a></li>
              <li><a href="sprintPlanning.html">Creating a Sprint Backlog</a></li>
              <li><a href="sprintLifecycle.html">Tracking user stories through Sprint Cycle</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script type='text/javascript' src='js/dynamicpage.js'></script>

  </body>
</html>