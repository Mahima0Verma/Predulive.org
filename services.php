<?php include('includes/header.php'); ?>
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
                        
                        <h1 class="mb-4">Why Predulive <span class="text-primary">Edutech Foundation</span></h1>
                        <p class="mb-4">
                            Predulive Edutech Foundation is a beacon of support for startups, offering a comprehensive suite of services aimed at fostering success. With unwavering dedication, the foundation provides invaluable guidance, mentorship, and essential resources to empower budding entrepreneurs on their journey. 
                        </p>
                        <p class="mb-4">Through personalized mentorship programs, startups gain insights from seasoned professionals, honing their strategies for sustainable growth. Predulive Edutech Foundation is not just a resource provider but a catalyst for innovation, fostering an environment where startups can thrive.</p>
                        <p class="mb-4">By bridging knowledge gaps, facilitating networking, and delivering targeted resources, the foundation plays a pivotal role in propelling startups toward sustainable success in the dynamic landscape of the business world.</p>
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Our Services</h5>
            <h1 class="mb-4">Services Offered by Us</h1>
            <p class="mb-0">Predulive Edutech Foundation empowers startups with essential guidance, mentorship, and resources crucial for their success. We are dedicated to fostering innovation and propelling entrepreneurs towards sustainable growth.
            </p>
        </div>
        
        <div class="row g-4 justify-content-center">

<?php
				   $qs="SELECT * FROM  service ORDER BY id DESC";


 $r1 = mysqli_query($con,$qs);

while($rod = mysqli_fetch_array($r1))
{
	$id="$rod[id]";
	$serviceg="$rod[service_title]";
	$service_desc="$rod[service_desc]";
    $ufile="$rod[ufile]";

print "


            <div class='col-lg-4 col-md-6'>
                <div class='blog-item'>
                    <div class='blog-img'>
                        <div class='blog-img-inner'>
                            <img class='img-fluid w-100 rounded-top' src='dashboard/uploads/services/$ufile' alt='Image'>
                        </div>
                        <div class='blog-info d-flex align-items-center border border-start-0 border-end-0'>
                           
                        </div>
                    </div>
                    <div class='blog-content border border-top-0 rounded-bottom p-4'>
                       
                        <a href='#' class='h4'>$serviceg</a>
                        <p class='my-3'>$service_desc</p>
                        <a href='#' class='btn btn-primary rounded-pill py-2 px-4'>Read More</a>
                    </div>
                </div>
            </div>

";
}
?>
            
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            <img class="img-fluid w-100 rounded-top" src="img/package-3.jpg" alt="Image">
                            <div class="blog-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>
                        <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                           
                        </div>
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                       
                        <a href="#" class="h4">Incubation Services</a>
                        <p class="my-3">Benefit from our incubation services, providing startups with physical space, resources, and mentorship to accelerate their growth.</p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
<!-- Blog End -->

       
        <?php include('includes/footer.php'); ?>