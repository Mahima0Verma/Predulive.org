<?php include ('includes/header.php');?>
  <?php
      include"dashboard/z_db.php";
      ?> 
        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">About Us</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home/</a></li>
                    
                    <li class="breadcrumb-item active text-white">About Us/</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- About Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="h-100" style="border: 50px solid; border-color: transparent #13357B transparent #13357B;">
                            <img src="img/about-img.jpg" class="img-fluid w-100 h-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                        <h5 class="section-about-title pe-3">Who we are ?</h5>
                        <h1 class="mb-4">Welcome to <span class="text-primary">Predulive</span></h1>
                        <p class="mb-4">In the heart of innovation and the soul of education, Predulive Edutech Foundation thrives. We are architects of empowerment, weaving success stories in the fabric of Tier II, Tier III, and rural landscapes. 
                        </p>
                        <p class="mb-4">Our strength lies in sculpting dreams into reality, fostering resilience, and lighting the path for startups to soar. Discover the force behind countless triumphs, where every challenge is an opportunity and every entrepreneur finds unwavering support. This is who we are - a powerhouse of possibilities.</p>
                        <div class="row gy-2 gx-4 mb-4">
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Incubation Support</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Business Development Workshops</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Access to Funding Networks:</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Technology and Innovation Hub</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Community Engagement Programs</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Marketing and Branding Assistance</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">What We Stands For</h5>
            <h1 class="mb-4">Popular Travel Blogs</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti deserunt tenetur sapiente atque. Magni non explicabo beatae sit, vel reiciendis consectetur numquam id similique sunt error obcaecati ducimus officia maiores.
                
            </p>
        </div>
        <div class="row g-4 justify-content-center">

<?php
				   $q="SELECT * FROM  stands ORDER BY id DESC";


 $r124 = mysqli_query($con,$q);

while($ru = mysqli_fetch_array($r124))
{
    $id="$ru[id]";
    $title = "$ru[Title]";
    $description="$ru[Description]";
    

print "
 

            <div class='col-lg-4 col-md-6'>
                <div class='blog-item'>
                    <div class='blog-img'>
                        
                        <div class='blog-info d-flex align-items-center border border-start-0 border-end-0'>
                            
                            
                        </div>
                    </div>
                    <div class='blog-content border border-top-0 rounded-bottom p-4'>
                        <a href='#' class='h4'>$title</a>
                        <p class='my-3'>$description</p>
                        <br><br>
                    </div>
                </div>
            </div>


";
}
?>
        </div>
    </div>
</div>

        <!-- About Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    
                    <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                        <h5 class="section-about-title pe-3">Founder and Chairman</h5>
                        <h1 class="mb-4"> Mr. Shivanshu <span class="text-primary">Dwivedi</span></h1>
                        <p class="mb-4">Meet Shivanshu Dwivedi, the visionary behind Predulive Edutech Foundation. Their passion for empowering startups and contributing to societal development has shaped the foundation's mission. 
                        </p>
                        <p class="mb-4">Our strength lies in sculpting dreams into reality, fostering resilience, and lighting the path for startups to soar. Discover the force behind countless triumphs, where every challenge is an opportunity and every entrepreneur finds unwavering support. This is who we are - a powerhouse of possibilities.</p>
                        
                        
                    </div>
                    <div class="col-lg-5">
                        
                            <img src="img/shiv.jpg" class="img-fluid w-100 h-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

         
          <!-- Travel Guide Start -->
        <div class="container-fluid guide py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Team Members</h5>
                    <h1 class="mb-0">Meet Our Leadership Team</h1>
                </div>
                <div class="row g-4">


 <?php
				   $q="SELECT * FROM  team ORDER BY id DESC";


 $r124 = mysqli_query($con,$q);

while($ru = mysqli_fetch_array($r124))
{
    $id="$ru[id]";
    $Tname = "$ru[team_member_name]";
    $post ="$ru[designation]";
    $facebook_link ="$ru[facebook_link]";
    $instagram_link ="$ru[instagram_link]";
    $twitter_link ="$ru[twitter_link]";
    $linkedin_link ="$ru[linkedin_link]";   
    $ufile="$ru[ufile]";

print "



                    <div class='col-md-6 col-lg-3'>
                        <div class='guide-item'>
                            <div class='guide-img'>
                                <div class='guide-img-efects'>
                                    <img src='dashboard/uploads/team/$ufile' class='img-fluid w-100 rounded-top' alt='Image'>
                                </div>
                               <div class='guide-icon rounded-pill p-2'>
                                    <a class='btn btn-square btn-primary rounded-circle mx-1' href='$facebook_link'><i class='fab fa-facebook-f'></i></a>
                                    <a class='btn btn-square btn-primary rounded-circle mx-1' href='$twitter_link'><i class='fab fa-twitter'></i></a>
                                    <a class='btn btn-square btn-primary rounded-circle mx-1' href='$instagram_link'><i class='fab fa-instagram'></i></a>
                                    <a class='btn btn-square btn-primary rounded-circle mx-1' href='$linkedin_link'><i class='fab fa-linkedin-in'></i></a>
                                </div>
                            </div>
                            <div class='guide-title text-center rounded-bottom p-4'>
                                <div class='guide-title-inner'>
                                    <h4 class='mt-3'>$Tname
                                    </h4>
                                    <p class='mb-0'>$post</p>
                                </div>
                            </div>
                        </div>
                    </div>

";
}
?>
                </div>
            </div>
        </div>
        <!-- Travel Guide End -->

        

        <?php include('includes/footer.php'); ?>