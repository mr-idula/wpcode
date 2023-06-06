<html>
<head>
<title>home page</title>
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
        height: 350px;
        width: 500x; 
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
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm" style="font-family: Georgia;">
        <h5 class="my-0 mr-md-auto font-weight-normal" >Neighborhood Gems</h5>
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
        <h1 class="text-center">Welcome to Neighborhood Gems!</h1>
        <p> Discover local businesses in Atlanta & upload local businesses to the forum! </p> 
        <img id="img1" src="https://www.uschamber.com/assets/images/023107_tjd_commentary_smallbusinesssaturday_shopsmall_thanksgiving_atf.gif">
        </div>
    </div>
</div>
  </body>
