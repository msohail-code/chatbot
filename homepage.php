<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Onpush Homepage</title>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/homepage.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
   <!-------Header Area starts Here------->
    
      
           <div class="container myMenu"> 
               <nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#">
      <img src="<?php echo base_url(); ?>images/logo.png" class='img-fluid' width='150px' height='100px' alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto px-sm-4 ml-auto">
    
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Capabilities
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Capability 1</a>
          <a class="dropdown-item" href="#">Capability 2</a>
         
        </div>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Document</a>
      </li>
      
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Resources
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Resource 1</a>
          <a class="dropdown-item" href="#">Resource 2</a>
         
        </div>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Company
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Company 1</a>
          <a class="dropdown-item" href="#">Company 2</a>
         
        </div> 
      </li>
       
       
    </ul>
    
    <div class="form-inline my-2 my-lg-0 myAccount">
          <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url().'login'; ?>">Login</a>
          </li>
          <li class="nav-item signup">
            <a class="nav-link" href="<?php echo base_url().'signup'; ?>">Sign Up</a>
          </li>
        </ul>
       </div>
        
    
  </div>
</nav>
           </div>
           
        
    
    <!-------Header Area Ends Here------->
    
    <!-------Hero Area Starts Here------->
    <div class="container-fluid myhero">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 hero_left">
                    <h1>Turn Your Visitor into Customers with our <br><strong>Free Push Platform</strong></h1><br>
                    <p>Get Started and save monthly on <br> Monthly Paid push platforms with onepush</p><br>
                    <a href="" class="btn btn-danger"><strong>Get Started</strong> <span class="herSep">----</span> It's Free</a>
                </div>
                <div class="col-sm-6 hero_right">
                    <center>
                        <img src="image/final-banner.png" alt="" class='img-fluid'>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <!-------Hero Area Ends Here------->
    
    <!-------Trusted Area starts Here------->
    <div class="container trusted_area">
        <h2>Trusted By</h2>
           
            <div class="row" style="text-align: center">
                <div class="col-sm-2">
                    <img src="image/lending.png" class='img-fluid'>
                </div>
                <div class="col-sm-2">
                    <img src="image/vw.png" alt="" class='img-fluid'>
                </div>
                <div class="col-sm-2">
                    <img src="image/verizon.png" alt="" class='img-fluid'>
                </div>
                <div class="col-sm-2">
                    <img src="image/zynga.png" alt="" class='img-fluid'>
                </div>
                <div class="col-sm-2">
                    <img src="image/softonic.png" alt="" class='img-fluid'>
                </div>
                <div class="col-sm-2">
                    <img src="image/eatstreet.png" alt="" class='img-fluid'>
                </div>
            </div>
      
    </div>
    <!-------Trusted Area Ends Here------->
    
    <!-------Integration Area Starts Here------->
    <div class="container-fluid integrate_area">
        <div class="container">
        <h2>Integrated With</h2>
            <div class="row ">
                <div class="col-sm-7 integrate-left" style="margin-top: 25px;">
                    <h3>Web Integration</h3>
                    <div class="integ_seperator"></div>
                    <ul class="list-unstyled">
                        <li>
                            <img src="image/coming-soon.png" style="margin-top: -50px;" width="80px" height="30px" alt="">
                            <br>
                            <i class="fa fa-safari" style="margin-top: -50px;"></i>
                        </li>
                        <li>
                            <i class="fa fa-firefox"></i>
                        </li>
                        <li>
                            <i class="fa fa-chrome"></i>
                        </li>
                        <li>
                        
                           
                            <i class="fa fa-opera pull-right"></i>

                        </li>
                        <li>
                    </ul>
                </div>
                <div class="col-sm-5 integrate_right">
                   <center>
                       <img src="image/coming-soon.png" style="margin-top:-80px; " alt="">
                   </center>
                   <h3>App Integration</h3>
                    <div class="integ_seperator"></div>
                    <ul class="list-unstyled">
                        <li>
                            <i class="fa fa-android"></i>
                        </li>
                        <li class="">
                            <i class="fa fa-apple pull-right" ></i>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-------Integration Area Ends Here------->
    
    <!-------Features Area Starts Here------->
    <div class="container myfeatures">
        <h2>Features</h2>
        <div class="row features_row">
            <div class="col-sm-3">
                <center>
                    <img src="image/feature-11.png" alt="" class="img-fluid">
                </center>
                <h4>15 Minute Setup</h4>
                <p>Our users are always shocked at how easy it is to get started.</p>
                
            </div>
            <div class="col-sm-3">
                <center>
                    <img src="image/feature12.png" alt="" class="img-fluid">
                </center>
                <h4>Real-Time Reporting</h4>
                <p>View delivery and conversion performance for every message.</p>
                
            </div>
            <div class="col-sm-3">
                <center>
                    <img src="image/feature13.png" alt="" class="img-fluid">
                </center>
                <h4>Incredible Scalability</h4>
                <p>Millions of users? No problem. We send out billions of notifications daily.</p>
                
            </div>
            <div class="col-sm-3">
                <center>
                    <img src="image/feature-14.png" alt="" class="img-fluid">
                </center>
                <h4>A/B Testing</h4>
                <p>Compare message performance and automatically send the best.</p>
                
            </div>
            
        </div>
        
        <div class="row features_row">
            <div class="col-sm-3">
                <center>
                    <img src="image/feature-15.png" alt="" class="img-fluid">
                </center>
                <h4>Superior Segmentation</h4>
                <p>Create personalized messages and send them to the right audiences.</p>
                
            </div>
            <div class="col-sm-3">
                <center>
                    <img src="image/feature-16.png" alt="" class="img-fluid">
                </center>
                <h4>Automated Messaging</h4>
                <p>Set it and forget it. You can trigger notifications based on user behavior.</p>
                
            </div>
            <div class="col-sm-3">
                <center>
                    <img src="image/feature-17.png" alt="" class="img-fluid">
                </center>
                <h4>Intelligent Delivery</h4>
                <p>Leverage machine learning to send your messages at the optimal time.</p>
                
            </div>
            <div class="col-sm-3 last_feature">
                <center>
                  
                       <img src="image/coming-soon.png" style="margin-top:-30px; margin-left: -10px; position: absolute; " alt="">
                   
                    <img src="image/feature-18.png" alt="" class="img-fluid">
                </center>
                <h4>Analyze Results Anywhere</h4>
                <p>Our SDKs are open source and every component is accessible via API.</p>
                
            </div>
            
        </div>
    </div>
    <!-------Features Area Ends Here------->
    
    <!-------Promotion Banner Starts Here------->
    <div class="container-fluid promot_banner">
        <center>
            <h1>Convert your visitors into an audience</h1>
            <p>Signup on <span class="site-title">OnePush</span> start growing and engaging your audience</p>
             <a href="#" class="btn btn-danger"><strong>Get Started</strong> <span class="herSep">----</span> It's Free</a>
        </center>
    </div>
    <!-------Promotion Banner Ends Here------->
    
    <!-------Footer Starts Here------->
    <div class="container-fluid footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2>Company</h2>
                    <hr>
                    <ul class="list-unstyled">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">Affiliate</a></li>
                        <li><a href="#">Write for Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h2>Product</h2>
                    <hr>
                    <ul class="list-unstyled">
                        <li><a href="#">What's New</a></li>
                        <li><a href="#">Messenger</a></li>
                        <li><a href="#">For WordPress</a></li>
                        <li><a href="#">For Shopify</a></li>
                        <li><a href="#">For Magento</a></li>
                        <li><a href="#">Integration</a></li>
                        <li><a href="#">Migrating to iZooto</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h2>Customers</h2>
                    <hr>
                    <ul class="list-unstyled">
                        <li><a href="#">Customer Success</a></li>
                        <li><a href="#">Case Studies</a></li>
                        <li><a href="#">Use Cases</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Help Docs</a></li>
                        <li><a href="#">API Docs</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h2>Learn</h2>
                    <hr>
                    <ul class="list-unstyled">
                        <li><a href="#">Web Push Notifications</a></li>
                        <li><a href="#">Messenger Notifications Explained</a></li>
                        <li><a href="#">App Push Notifications Explained</a></li>
                        <li><a href="#">Audience Engagement Guide</a></li>
                        <li><a href="#">E-commerce Retargeting Guide</a></li>
                        <li><a href="#">ROI Calculator</a></li>
                        <li><a href="#">Webinars</a></li>
                        <li><a href="#">Podcasts</a></li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
    <!-------Footer Ends Here------->
    
    
    <!-------Copyright starts Here------->
    <div class="container-fluid copyright_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item"><a href="#">Copyright Terms</a></li>
                        <li class="list-group-item"><a href="#">GDPR</a></li>
                        <li class="list-group-item"><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-sm-6">
                     <ul class="list-group list-group-horizontal pull-right socialmedia">
                        <li class="list-group-item" ><a href="#" ><i class="fa fa-facebook"></i></a></li>
                        <li class="list-group-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="list-group-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-------Copyright Ends Here------->
    
</body>
</html>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/homepage.js"></script>