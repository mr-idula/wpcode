<html>
<head>
<title>about page</title>
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
    .container{
        background-color: white;
        width: 10000px;
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
<div class="container" style="height: 1100px;">
    <div id= body class="jumbotron .d-flex" style="height: 1100px;">
      <h1> About </h1>
      <section>
      <div class="card mt-2 .d-flex ">
        <div class="card-body" style="background-color: lightblue;">
            <h2>About Me!</h2>
            <p>Hello! My Name is Mridula Venkatasamy and I am a senior at Georgia State Univeristy. I was born and raised in Georgia and have lived in Atlant$
              I love to explore the city, shop, listen to music, and go on walks. I hope you find my site useful and visit the local shops showcased!
            </p>
            <p class="mt-4"><a href="https://www.linkedin.com/in/mridula-venkatasamy-a66184157/">Connect with me on LinkedIn!<i class="fas fa-angle-right"></$
        </div>
      </div>
 </section>
    <section>
    <div class="card mt-4 .d-flex ">
      <div class="card-body" style="background-color: lightblue; ">
        <h2>About the Site</h2>
        <p>As a Georgia native, Atlanta holds a place in my heart. There are a lot of local shops that are worth a visit and I wanted to be able to highlight$
          During and after the pandemic, small businesses have been shutting down due to lack of business. I wanted to create a website dedicated to local bu$
          help them draw business and to advocate shopping locally. 
        </p>
        <p class="mt-4"><a href="https://thelocalgood.ca/top-10-reasons-to-shop-local/">Benefits of Shopping Local <i class="fas fa-angle-right"></i></a></p>
      </div>
    </div>
      </section>
  <section>
  <div class="card mt-4 .d-flex ">
    <div class="card-body" style="background-color: lightblue;">
        <h2>Technologies Used</h2>
      <p> For this project I used CSS and Bootstrap to style the website, html for Formatting, and Javascript for dynamic functionality. I deployed the websi$
          I also used Phpmyadmin for the database for the login information. The forum utilizies ajax and for each local business I used google maps to provi$
          for the location.  
      </p>
    </div>
  </div>
    </section>
    <section>
    <div class="card mt-4 .d-flex ">
      <div class="card-body" style="background-color: lightblue;">
    <h2>What have I learned in Web Programming? </h2>
    <p> In the class I learned multiple valueable skills. I decided to take this class because I really wanted to branch out my programming skills and learn 
      how to create a website. This class taught me not only how to make a functional website but it also taught me how to use a database, introduced me to n$
      frameworks, and taught me how to set up and use an EC2 instance. This class was very informative and I highly recommend taking this course with Dr.Jose$
      Georgia State University.</p>
    </div>
    </div>
</section>
</div>
</div>
</body>
