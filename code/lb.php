<html>
<head>
<title>Local Businesses</title>
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
        width: 200x; 
        display: block;
        margin-left: auto;
        margin-right: auto;
      padding-top: 50px;
    }
    .container{
        background-color: lavender;
        width: 10000px;
        height: 1000px;
        font-family: Georgia; 
        display: flex;
        flex-flow: column wrap;
    }
    .row {  
    display: flex;
    flex-wrap: wrap;
    margin: 50px;
    }
    @media screen and (max-width: 700px) {
    .row {   
    flex-direction: column;
  }
}

</style>
</head>

<body>
<div id="entire">
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm" style="font-family: Georgia;">
             <h5 class="my-0 mr-md-auto font-weight-normal" >Neighborhood Gems</h5>
        <nav class="my-2 my-md-0 mr-md-3">
          <a class="p-2 text-dark" href="home2.php">Home</a>
          <a class="p-2 text-dark" href="about2.php">About</a>
          <a class="p-2 text-dark" href="qa2.php">Q & A</a>
          <a class="p-2 text-dark" href="cl2.php">Checklist</a>
        </nav>
        <div class="dropdown" style="text-align: right;">
            <div class="btn-group">
                <a href="lb.php" class="btn btn-outline-info" role="button">Local Businesses</a>
                <button type="button" class="btn btn-outline-info dropdown-toggle dropdown-toggle-split mr-2" data-toggle="dropdown" aria-haspopup="true" ari$
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="fd.php">Food & Drink</a>
              <a class="dropdown-item" href="nl.php">Nightlife</a>
              <a class="dropdown-item" href="cg.php#">Clothing</a>
              <a class="dropdown-item" href="ls.php">Lifestyle</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="forum.php">Forum</a>
            </div>
            </div>
          </div>
        <a href="home.php" class="btn btn-outline-info mr-1" role="button">Log Out</a>
      </div>
    <div class="row" style="background-color: lavender;">
        <img id="img1" src="https://media.tenor.com/jR3wu5ZbHWMAAAAi/support-local-shop-small.gif">
            <div class="col-lg3 text-center"style="padding-top: 50px; padding-left: 50px; padding-right: 50px;">
               Supporting local businesses is important for economic, social, environmental, and cultural reasons. By patronizing local businesses, 
                you can contribute to the well-being and vitality of your community, foster sustainability, and build meaningful connections with 
                business owners and fellow community members.<br><br>
                <b>Supporting local businesses is important for several reasons:</b> <br><br>

                1. <b>Economic impact:</b> Local businesses contribute to the local economy by creating jobs and generating revenue that 
                circulates within the community. When you support local businesses, you are helping to create and maintain 
                livelihoods for people in your community, and fostering economic growth. <br><br>
                2. <b>Community character:</b> Local businesses often reflect the unique character and identity of a community. They offer 
                distinct products, services, and experiences that contribute to the cultural richness of a locality. Supporting local 
                businesses helps preserve the uniqueness and diversity of your community, making it a more vibrant and interesting place to live. <br><br>
                3. <b>Environmental sustainability:</b> Local businesses typically have a smaller carbon footprint compared to large 
                corporations that rely on global supply chains. Local businesses often source their products and services locally, 
                which reduces transportation-related emissions and promotes environmental sustainability. <br><br>
                4. <b>Customer service and personalized experiences:</b> Local businesses often offer personalized customer service and take the time to buil$
                relationships with their customers. They can provide tailored recommendations and create unique experiences that foster customer loyalty. 
                By supporting local businesses, you can enjoy personalized service and build meaningful connections with business owners and employees. <br><$
                5. <b>Social cohesion:</b> Local businesses can foster social cohesion and community engagement. They provide opportunities for people to con$
                collaborate, and build relationships. Supporting local businesses helps create a sense of belonging and promotes community involvement. <br><$
                6. <b>Resilience and self-sufficiency:</b> Supporting local businesses can help communities become more resilient and self-sufficient. Local 
                businesses are often more adaptable and able to respond to the needs and challenges of their communities quickly. They also help reduce 
                dependence on large corporations, which can strengthen local economies and communities in the face of economic downturns or crises. <br><br>
            </div>
    </div>
</div>
</body>
      
