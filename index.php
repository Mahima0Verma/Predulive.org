<?php include ('includes/header.php');?>

            <!-- Carousel Start -->
            <div class="carousel-header">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="img/carousel-4.jpg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <!-- <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">From inception to acceleration</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">Let's Work Together!</h1>
                                    <p class="mb-5 fs-5">Predulive: Bridging the gap, building the future. Supporting startups in tier-2 and tier-3 cities to flourish and redefine success. 
                                    </p>
                                     -->
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/carousel-5.jpg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <!-- <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Empowering Entrepreneurs Beyond Metros</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">Predulive, Nurturing Startups in Every Corner!</h1>
                                    <p class="mb-5 fs-5"> Igniting entrepreneurial dreams in small towns and villages. From incubation support to growth strategies, we're here, empowering startups in every corner, beyond the confines of metropolitan limits. 
                                    </p>
                                     -->
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/carousel-6.jpg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <!-- <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Start Local, Grow Global</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">Redefining Entrepreneurship Beyond City Lights</h1>
                                    <p class="mb-5 fs-5">Starting local, our incubation center propels startups in Tier-2 and Tier-3 towns. Bridging gaps, building futures - we empower entrepreneurs for global success, one innovative idea at a time. 
                                    </p> -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
        
        <!-- Navbar & Hero End -->

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
                        <h5 class="section-about-title pe-3">About Us</h5>
                        <h1 class="mb-4">Welcome to <span class="text-primary">Predulive</span></h1>
                        <p class="mb-4">Welcome to Predulive Edutech Foundation, the catalyst for innovation and education. Our mission is to empower startups in Tier II, Tier III, and rural areas, fostering growth, innovation, and economic development. With transformative programs and expert services, we ignite success, one idea at a time. Dive into our initiatives to fuel a vibrant startup ecosystem. </p>
                         <p class="mb-4">Join us in empowering rural visionaries, propelling growth, and driving educational and economic change. Your journey to success begins with Predulive - where dreams take flight and innovation knows no boundaries.</p>
                         <p><b>We support you in:</b></p>
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
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

      <?php
      include"dashboard/z_db.php";
      ?>  

       

        

        <!-- Packages Start -->
        <div class="container-fluid packages py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Services</h5>
                    <h1 class="mb-0">Our Services</h1>
                </div>
                <div class="packages-carousel owl-carousel">

  <?php
				   $qs="SELECT * FROM  service ORDER BY id DESC";


 $r1 = mysqli_query($con,$qs);

while($rod = mysqli_fetch_array($r1))
{
	$id="$rod[id]";
	$serviceg="$rod[service_title]";
	$service_desc="$rod[service_desc]";
    $ufile="$rod[ufile]";

print "   <div class='packages-item' data-groups='['marketing','development']'>
                        <div class='packages-img'>
                            <img src='dashboard/uploads/services/$ufile' class='img-fluid w-100 rounded-top' alt='Image'>
                            <div class='packages-info d-flex border border-start-0 border-end-0 position-absolute' style='width: 100%; bottom: 0; left: 0; z-index: 5;'>  
                            </div>
                            
                        </div>
                        <div class='packages-content bg-light'>
                            <div class='p-4 pb-0'>
                                <h5 class='mb-0'>$serviceg</h5>
                                <p class='mb-4'>$service_desc</p>
                            </div>
                        </div>
                    </div>
";
}
?>
                    
                </div>
            </div>
        </div>
        <!-- Packages End -->





        
 <!-- Explore Tour Start -->
        <div class="container-fluid ExploreTour py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">News</h5>
                    <h1 class="mb-4">Predulive in News</h1>
                    
                </div>
                <div class="tab-class text-center">
                    



                    <div class="tab-content">
                        <div id="NationalTab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                            <?php
				   $q="SELECT * FROM  portfolio ORDER BY id DESC";


 $r123 = mysqli_query($con,$q);

while($ro = mysqli_fetch_array($r123))
{

	$id="$ro[id]";
	$port_title="$ro[port_title]";
    $port_desc="$ro[port_desc]";
    $ufile="$ro[ufile]";

print "

                                <div class='col-md-6 col-lg-4'>
                                    <div class='national-item'>
                                        <img src='dashboard/uploads/portfolio/$ufile' class='img-fluid w-100 rounded' alt='Image'>  
                                    </div>
                                </div>
";
}
?>

                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Explore Tour Start -->


    

        <!-- Tour Booking Start -->
        <div class="container-fluid booking py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h5 class="section-booking-title pe-3">Booking</h5>
                        <h1 class="text-white mb-4">Book Your Consulting</h1>
                        <p class="text-white mb-4">Experience seamless consulting with Predulive. Our online consulting booking platform ensures convenience and accessibility in various sectors. From startup guidance to education and innovation consultancy, effortlessly schedule virtual sessions with our experts. 
                        </p>
                        <p class="text-white mb-4">Navigate through our user-friendly interface, choose your preferred sector, and book a consultation at your convenience. Whether you're an aspiring entrepreneur, educator, or innovator, Predulive's online booking system connects you with industry professionals to address your specific needs. Trust us to bring expert advice to your fingertips, making progress and success more accessible than ever. Book your consultation today and embark on a journey of growth and knowledge with Predulive.
                        </p>
                        <a href="#" class="btn btn-light text-primary rounded-pill py-3 px-5 mt-2">Read More</a>
                    </div>
                    <div class="col-lg-6">
                        <h1 class="text-white mb-3">Book A Demo</h1>
                        <p class="text-white mb-4">Get <span class="text-warning">50% Off</span> On Your First Consultation.</p>
                        <form action="functions/authcode.php" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-white border-0" id="name" placeholder="Your Name" name="name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-white border-0" id="email" placeholder="Your Email" name="email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="datetime-local" class="form-control bg-white border-0" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" name="date_time"/>
                                        <label for="datetime">Date & Time</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-white border-0" id="select1" name="services">
                                            <option value="Startup Support">Startup Support</option>
                                            <option value="Fund Access">Fund Access</option>
                                            <option value="Technology Services">Technology Services</option>
                                        </select>
                                        <label for="select1">Services</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control bg-white border-0" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" name="address" />
                                        <label for="datetime">Address</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="number" class="form-control bg-white border-0" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" name="phone" />
                                        <label for="datetime">Phone No.</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-white border-0" placeholder="Special Request" id="message" style="height: 100px" name="special_request"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary text-white w-100 py-3" name="register_btn"type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tour Booking End -->






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

        <!-- Blog Start -->
        <!-- <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Our Blog</h5>
                    <h1 class="mb-4">Popular Travel Blogs</h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti deserunt tenetur sapiente atque. Magni non explicabo beatae sit, vel reiciendis consectetur numquam id similique sunt error obcaecati ducimus officia maiores.
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <div class="blog-img-inner">
                                    <img class="img-fluid w-100 rounded-top" src="img/blog-1.jpg" alt="Image">
                                    <div class="blog-icon">
                                        <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                    </div>
                                </div>
                                <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>28 Jan 2050</small>
                                    <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i class="fa fa-thumbs-up text-primary me-2"></i>1.7K</a>
                                    <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i class="fa fa-comments text-primary me-2"></i>1K</a>
                                </div>
                            </div>
                            <div class="blog-content border border-top-0 rounded-bottom p-4">
                                <p class="mb-3">Posted By: Royal Hamblin </p>
                                <a href="#" class="h4">Adventures Trip</a>
                                <p class="my-3">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                                <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <div class="blog-img-inner">
                                    <img class="img-fluid w-100 rounded-top" src="img/blog-2.jpg" alt="Image">
                                    <div class="blog-icon">
                                        <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                    </div>
                                </div>
                                <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>28 Jan 2050</small>
                                    <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i class="fa fa-thumbs-up text-primary me-2"></i>1.7K</a>
                                    <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i class="fa fa-comments text-primary me-2"></i>1K</a>
                                </div>
                            </div>
                            <div class="blog-content border border-top-0 rounded-bottom p-4">
                                <p class="mb-3">Posted By: Royal Hamblin </p>
                                <a href="#" class="h4">Adventures Trip</a>
                                <p class="my-3">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                                <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <div class="blog-img-inner">
                                    <img class="img-fluid w-100 rounded-top" src="img/blog-3.jpg" alt="Image">
                                    <div class="blog-icon">
                                        <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                    </div>
                                </div>
                                <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>28 Jan 2050</small>
                                    <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i class="fa fa-thumbs-up text-primary me-2"></i>1.7K</a>
                                    <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i class="fa fa-comments text-primary me-2"></i>1K</a>
                                </div>
                            </div>
                            <div class="blog-content border border-top-0 rounded-bottom p-4">
                                <p class="mb-3">Posted By: Royal Hamblin </p>
                                <a href="#" class="h4">Adventures Trip</a>
                                <p class="my-3">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                                <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Blog End -->

        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Testimonial</h5>
                    <h1 class="mb-0">Our Clients Say!!!</h1>
                </div>
                
                <div class='testimonial-carousel owl-carousel'>

   <?php
				   $q="SELECT * FROM  testimony ORDER BY id DESC LIMIT 6";


 $r123 = mysqli_query($con,$q);

while($ro = mysqli_fetch_array($r123))
{

	$name="$ro[name]";
	$position="$ro[position]";
    $message="$ro[message]";
    $ufile="$ro[ufile]";

print "

                    <div class='testimonial-item text-center rounded pb-4'>
                        <div class='testimonial-comment bg-light rounded p-4'>
                            <p class='text-center mb-5'>$message
                            </p>
                        </div>
                        <div class='testimonial-img p-1'>
                            <img src='dashboard/uploads/testimony/$ufile' class='img-fluid rounded-circle' alt='Image'>
                        </div>
                        <div style='margin-top: -35px;'>
                            <h5 class='mb-0'>$name</h5>
                            <p class='mb-0'>$position</p>
                            
                        </div>
                    </div>

";
}
?>
                   
                    
                    
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        
<?php include('includes/footer.php'); ?>
        