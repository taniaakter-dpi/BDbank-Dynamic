<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>bangladeshbank</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <?php wp_head();?>
  
</head>
<body>

<!-- topbar part start -->
<div class="cont">
    <div class="row topbar">
        <div class="col-sm-1">
           <?php dynamic_sidebar('topbarimg');?>
        </div>
        <div class="col-sm-9">
            <form action="#">
                <input type="text" class="search" placeholder="search">
            </form>
        </div>
        <div class="col-sm-2 text-end">
            <p>বাংলা</p>
        </div>
    </div>
</div>
<!-- topbar part end -->
<!-- banner part start -->
<div class="cont">
     <div class="row banner">
        <?php dynamic_sidebar('banner');?>
        <div class="banner_menu  text-end">
        <?php
                wp_nav_menu([
                    'theme_location'=>'PM',
                    'menu_class'=>'menu',
                    
                ]);
            ?>
        </div>
            </div>
        </div>
    </div>
   
<!-- banner part end -->
<!-- header part start -->
<div class="cont">
    <div class="row header mt-5">
        <div class="col-sm-8 slider">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                <?php
                    $x = 0;
                    while(have_posts()){the_post();
                        $x++;
                    ?>
                    <div class="carousel-item <?=($x==1)? 'active' : '' ?>">
                    <?php the_post_thumbnail(); ?>
                    <!-- <img src="..." class="d-block w-100" alt="..."> -->
                    </div>
                    <?php }?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
        <div class="col-sm-4">
            <h3 style="background-color: #00B16A; color: white;font-size: 14px; padding: 5px; font-weight: bold;">HONORABLE GOVERNOR</h3>
                <div class="row">
                  <div class="col-md-4">
                  <?php dynamic_sidebar('bannerimg');?>
                    <!-- <img src="./assest/images/abdurrouftalukder.jpg" alt="..." style="height:144px; margin-right: 10px;"> -->
                  </div>
                  <div class="col-md-8">
                    <div>
                      <h5 style="color: #777; font-weight: bold;margin-left: 20px;">MR. ABDUR ROUF TALUKDER</h5>
                      <p style="font-size: 11px; margin-left: 20px;">HONORABLE GOVERNOR OF<br> BANGLADESH BANK</p>
                      <a href="#" style="text-decoration: none; margin-left: 20px;">more...</a> 
                    </div>
                  </div>
                </div>
        </div>
        </div>
    </div>
</div>
<!-- header part end -->
<!-- news part start -->
<div class="cont">
    <div class="row news mt-5">
        <div class="col-sm-2">
            <span class="lab">RECENT NEWS</span>
        </div>
        <div class="col-sm-10">
        
          <marquee  direction="down" height="20px" width="60%"> 
          <?php dynamic_sidebar('news');?>
          
        </marquee>
    </div>
    </div>
</div>
<!-- news part end -->
<!-- mainbody part start -->
<div class="cont">
<div class="row mainbody">
    <div class="col-sm-8">
        <div class="row body1">
            <div class="col-sm-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                      <?php dynamic_sidebar('card1');?>
                        <!-- <img src="./assest/images/card1.png" class="img-fluid rounded-start" alt="..."> -->
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                      <?php dynamic_sidebar('card1');?>
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                      <?php dynamic_sidebar('card1');?>
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                      <?php dynamic_sidebar('card1');?>
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-sm-6">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                      <?php dynamic_sidebar('card1');?>
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                      <?php dynamic_sidebar('card1');?>
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                      <?php dynamic_sidebar('card1');?>
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                      <?php dynamic_sidebar('card1');?>
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <!-- notice part start -->
    <!-- notice part end -->
    <div class="col-sm-4 sidebar">
        <div class="sidebar_1 ">
            <h2>CUSTOMERS\' INTEREST<br> PROTECTION CENTER(CIPC)</h2>
            <h3>FOR ANY COMPLAIN</h3>
            <h1>Call: 16236</h1>
            <p>Email: bb.cipc@bb.org.bd</p>
            <h6>Download Apps google<br>submit online</h6>
            <a href="#">view all-></a>
        </div>
        <div class="sidebar_2">
            <h2>Call Money Rate</h2>
            <h3>13 February, 2023</h3>
            <h1>Weighted Average Interest Rate</h1>
            <p>5.87</p>
            <a href="#">view all-></a>
            <h6>Upcoming auctions</h6>
            <div class="row bill">
              <div class="col-sm-3"><h1>Bond</h1></div>
              <div class="col-sm-6"><h2>February, 2023</h2></div>
              <div class="col-sm-2"><h3>14</h3></div>
            </div>
            <div class="row bill">
              <div class="col-sm-3"><h1>Bill</h1></div>
              <div class="col-sm-6"><h2>February, 2023</h2></div>
              <div class="col-sm-2"><h3>19</h3></div>
            </div>
        </div>
        <div class="sidebar_3">
            <div class="row">
              <div class="col-sm-12">
                <h1>Emergency Hotline</h1>
                <?php dynamic_sidebar('helpline');?>
              </div>
            </div>
           
          
        </div>
    </div>
</div>
<!-- info -->
<div class="row">

</div>
</div>

<!-- mainbody part end -->
<!-- footer part start -->
<div class="cont">
    <div class="row footer">
        <div class="col-sm-4 ft_left">
            <h1>CONTACT</h1>
            <div>
            <?php dynamic_sidebar('location');?>
            </div>
            <div>
            <?php dynamic_sidebar('phone');?>
            </div>
            <div>
            <?php dynamic_sidebar('email');?>
            </div>
            <div class="row ft_left_b">
              <div class="col-sm-12">
                <p>contact for other purpose</p> 
              </div>
            </div>
           
        </div>
        <div class="col-sm-4 ft_center">
            <h1>Useful Links</h1>
            <ol>
              <li><a href="#">Payment system</a></li>
              <li><a href="#">Payment system</a></li>
              <li><a href="#">Payment system</a></li>
              <li><a href="#">Payment system</a></li>
              <li><a href="#">Payment system</a></li>
              <li><a href="#">Payment system</a></li>
              <li><a href="#">Payment system</a></li>
            </ol>
        </div>
        <div class="col-sm-4 ft_right">
          <h1>Stay connected</h1>
          <div class="row">
            <div class="col-sm-4"> <?php dynamic_sidebar('facebook');?></div>
            <div class="col-sm-4">   <?php dynamic_sidebar('twitter');?></div>
            <div class="col-sm-4">  <?php dynamic_sidebar('youtube');?></div>
          </div>
         
       
        
          
        </div>
    </div>
</div>
<!-- footer part end -->
<!-- contact part start -->
<div class="cont">
<div class="row contact">
<ul>
  <li><a href="#">Home</a></li>
  <li><a href="#">Sitemap</a></li>
  <li><a href="#">Feedback</a></li>
</ul>
</div>
<!-- disclaimer  -->
<p style="font-size: 14px; text-align: center; margin-top: 20px;"><b>Disclaimer:</b> While every effort is made 
  to ensure accuracy of the information in this website, Bangladesh Bank assumes no responsibility for any damages or losses to users resulting <br>from any error/omission/inadvertent alteration in information provided by this website.</p> 
<!-- disclaimer  -->
</div>
<!-- contact part end -->


<?php wp_footer();?>
</body>
</html>