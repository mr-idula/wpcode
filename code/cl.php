<html>
<head>
<title>Checklist</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
    #entire{
        margin: 50px;
    }
    .title{
       font-family: Georgia; 
       font-size: 11pt;
    }
    #body{
        text-align: center;
        background-color: lavender;
        font-family: Georgia;
    }
    #img1{
        height: 200px;
        width: 200px; 
    }
    .container{
        background-color: white;
         width: 10000px;
        height: 600px;
        font-family: Georgia;
    }
</style>
</head>

<body>
<div id="entire">
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm"style="font-family: Georgia;">
        <h5 class="my-0 mr-md-auto font-weight-normal">Neighborhood Gems</h5>
        <nav class="my-2 my-md-0 mr-md-3">
          <a class="p-2 text-dark" href="home.php">Home</a>
          <a class="p-2 text-dark" href="about.php">About</a>
          <a class="p-2 text-dark" href="qa.php">Q & A</a>
          <a class="p-2 text-dark" href="cl.php">Checklist</a>
        </nav>
        <a href="login.php" class="btn btn-outline-info mr-1" role="button">Login</a>
      </div>
    <div class="container">
    <div id= body class="jumbotron">
      <h1> Checklist </h1>
      <div class="card .d-flex ">
        <div class="card-body" style="background-color: lightblue;">
            <form action="/action_page.php">
                <input type="checkbox" id="feature1" name="feature1" value="Database">
                <label for="feature1"> I used Phpmyadmin for the database to store the Login Information</label><br>
                <input type="checkbox" id="feature2" name="feature2" value="Ajax">
              <label for="feature2"> The Forum page utilizes ajax. When you add a comment, the page won't refresh.</label><br>
                <input type="checkbox" id="feature3" name="feature3" value="Theme">
                <label for="feature3"> All pages in the website have the same lavender background, light blue cards, and the same nav bar. </label><br>
                <input type="checkbox" id="feature4" name="feature4" value="New Library Usage">
                <label for="feature4"> For the new library usage requirement, I utilized Google Maps API to provide a visual for the locations of each local $
                <input type="checkbox" id="feature5" name="feature5" value="Javascript">
                <label for="feature5"> In order to place markers on the google map and add locations to it, I had write functions using Javascript. </label><$
                <input type="checkbox" id="feature6" name="feature6" value="Membership Area">
                <label for="feature6"> The membership requirement is satisified by redirecting successful login to a new page with access to all of the local$
                <input type="checkbox" id="feature7" name="feature7" value="General user">
                <label for="feature7"> For the general user requirement, I created a login page. The username is demoUser and the password is ThisIsForWPClas$
              </form>
        </div>
         </div>
    </div>
</div>
</body>
