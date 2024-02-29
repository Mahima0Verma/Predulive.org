<?php include('includes/header.php'); ?>
<?php
      include"dashboard/z_db.php";
      ?>
        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Impacts</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home/</a></li>
                    
                    <li class="breadcrumb-item active text-white">Impacts</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->



<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Startup Success</h5>
            <h1 class="mb-4">Success Stories</h1>
            <p class="mb-0">Celebrate the success stories of startups that have flourished under our guidance and support.
            </p>
        </div>
        
        <div class="row g-4 justify-content-center">


        <?php
				   $qs="SELECT * FROM  impact ORDER BY id DESC";


 $r1 = mysqli_query($con,$qs);

while($rod = mysqli_fetch_array($r1))
{
	$id="$rod[id]";
	$impactg="$rod[impact_title]";
	$impact_desc="$rod[impact_desc]";
    $ufile="$rod[ufile]";

print "


            <div class='col-lg-4 col-md-6'>
                <div class='blog-item'>
                    <div class='blog-img'>
                        <div class='blog-img-inner'>
                            <img class='img-fluid w-100 rounded-top' src='dashboard/uploads/impacts/$ufile' alt='Image'>
                        </div>
                        <div class='blog-info d-flex align-items-center border border-start-0 border-end-0'>
                           
                        </div>
                    </div>
                    <div class='blog-content border border-top-0 rounded-bottom p-4'>
                       
                        <a href='#' class='h4'>$impactg</a>
                        <p class='my-3'>$impact_desc</p>
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
                            <img class="img-fluid w-100 rounded-top" src="img/package-6.jpg" alt="Image">
                            <div class="blog-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>
                        <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                           
                        </div>
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                       
                        <a href="#" class="h4">Startup Support</a>
                        <p class="my-3">Join our startup support program for guidance, mentorship, and access to resources that will propel your venture forward.</p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            <img class="img-fluid w-100 rounded-top" src="img/package-7.jpg" alt="Image">
                            <div class="blog-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>
                        <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                           
                        </div>
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                       
                        <a href="#" class="h4">Funding Access</a>
                        <p class="my-3">Navigate the funding landscape with our assistance, connecting startups with government grants, schemes, and potential investors.</p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            <img class="img-fluid w-100 rounded-top" src="img/package-8.jpg" alt="Image">
                            <div class="blog-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>
                        <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                           
                        </div>
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                       
                        <a href="#" class="h4">Capacity Building</a>
                        <p class="my-3">Participate in our capacity-building programs, including workshops and bootcamps, to enhance your skills and knowledge.</p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                    </div>
                </div>
            </div> -->
        </div>
        
    </div>
</div>
<!-- Blog End -->

<!-- Blog Start -->
<div class="container-fluid blog py-5">
    
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Job Creation</h5>
            <h1 class="mb-4">Job opportunities in local communities</h1>
            <p class="mb-0">Witness the tangible impact of our initiatives through the creation of employment opportunities in local communities.
            </p>
        </div>
        
        <div class="row g-4 justify-content-center">
        <?php
				   $qs="SELECT * FROM  impact_1 ORDER BY id DESC";


 $r1 = mysqli_query($con,$qs);

while($rod = mysqli_fetch_array($r1))
{
	$id="$rod[id]";
	$impact_1g="$rod[impact_1_title]";
	$impact_1_desc="$rod[impact_1_desc]";
    $ufile="$rod[ufile]";

print "


            <div class='col-lg-4 col-md-6'>
                <div class='blog-item'>
                    <div class='blog-img'>
                        <div class='blog-img-inner'>
                            <img class='img-fluid w-100 rounded-top' src='dashboard/uploads/impact_1/$ufile' alt='Image'>
                        </div>
                        <div class='blog-info d-flex align-items-center border border-start-0 border-end-0'>
                           
                        </div>
                    </div>
                    <div class='blog-content border border-top-0 rounded-bottom p-4'>
                       
                        <a href='#' class='h4'>$impact_1g</a>
                        <p class='my-3'>$impact_1_desc</p>
                        <a href='#' class='btn btn-primary rounded-pill py-2 px-4'>Read More</a>
                    </div>
                </div>
            </div>

";
}
?>
          
       
            <!-- <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            <img class="img-fluid w-100 rounded-top" src="img/package-6.jpg" alt="Image">
                            <div class="blog-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>
                        <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                           
                        </div>
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                       
                        <a href="#" class="h4">Startup Support</a>
                        <p class="my-3">Join our startup support program for guidance, mentorship, and access to resources that will propel your venture forward.</p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            <img class="img-fluid w-100 rounded-top" src="img/package-7.jpg" alt="Image">
                            <div class="blog-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>
                        <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                           
                        </div>
                    </div>
                    <!-- <div class="blog-content border border-top-0 rounded-bottom p-4">
                       
                        <a href="#" class="h4">Funding Access</a>
                        <p class="my-3">Navigate the funding landscape with our assistance, connecting startups with government grants, schemes, and potential investors.</p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                    </div> -->
                </div>
            </div> -->
            <!-- <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            <img class="img-fluid w-100 rounded-top" src="img/p.jpg" alt="Image">
                            <div class="blog-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>
                        <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                           
                        </div>
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                       
                        <a href="#" class="h4">Capacity Building</a>
                        <p class="my-3">Participate in our capacity-building programs, including workshops and bootcamps, to enhance your skills and knowledge.</p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                    </div>
                </div>
            </div> -->
        </div>
        
    </div>
</div>
<!-- Blog End -->
<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Economic Growth</h5>
            <h1 class="mb-4">Supporting Startups</h1>
            <p class="mb-0">See how we contribute to economic growth by supporting startups and fostering a culture of innovation.
            </p>
        </div>
        
        <div class="row g-4 justify-content-center">

        <?php
				   $qs="SELECT * FROM  impact_2 ORDER BY id DESC";


 $r1 = mysqli_query($con,$qs);

while($rod = mysqli_fetch_array($r1))
{
	$id="$rod[id]";
	$impact_2g="$rod[impact_2_title]";
	$impact_2_desc="$rod[impact_2_desc]";
    $ufile="$rod[ufile]";

print "


            <div class='col-lg-4 col-md-6'>
                <div class='blog-item'>
                    <div class='blog-img'>
                        <div class='blog-img-inner'>
                            <img class='img-fluid w-100 rounded-top' src='dashboard/uploads/impact_2/$ufile' alt='Image'>
                        </div>
                        <div class='blog-info d-flex align-items-center border border-start-0 border-end-0'>
                           
                        </div>
                    </div>
                    <div class='blog-content border border-top-0 rounded-bottom p-4'>
                       
                        <a href='#' class='h4'>$impact_2g</a>
                        <p class='my-3'>$impact_2_desc</p>
                        <a href='#' class='btn btn-primary rounded-pill py-2 px-4'>Read More</a>
                    </div>
                </div>
            </div>

";
}
?>

            <!-- <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            <img class="img-fluid w-100 rounded-top" src="img/blog-1.jpg" alt="Image">
                            <div class="blog-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>
                        <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                           
                        </div>
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                       
                        <a href="#" class="h4">Startup Support</a>
                        <p class="my-3">Join our startup support program for guidance, mentorship, and access to resources that will propel your venture forward.</p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            <img class="img-fluid w-100 rounded-top" src="img/blog-1.jpg" alt="Image">
                            <div class="blog-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>
                        <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                           
                        </div>
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                       
                        <a href="#" class="h4">Funding Access</a>
                        <p class="my-3">Navigate the funding landscape with our assistance, connecting startups with government grants, schemes, and potential investors.</p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            <img class="img-fluid w-100 rounded-top" src="img/blog-1.jpg" alt="Image">
                            <div class="blog-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>
                        <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                           
                        </div>
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                       
                        <a href="#" class="h4">Capacity Building</a>
                        <p class="my-3">Participate in our capacity-building programs, including workshops and bootcamps, to enhance your skills and knowledge.</p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                    </div>
                </div>
            </div> -->
        </div>
        
    </div>
</div>
<!-- Blog End -->
<!-- Blog Start -->
<div class="container-fluid blog py-5">



    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Skill Development</h5>
            <h1 class="mb-4">Training programs</h1>
            <p class="mb-0">Explore the real-world application of skills acquired through our training programs, contributing to personal and professional growth.
            </p>
        </div>
        
        <div class="row g-4 justify-content-center">


        <?php
				   $qs="SELECT * FROM  impact_3 ORDER BY id DESC";


 $r1 = mysqli_query($con,$qs);

while($rod = mysqli_fetch_array($r1))
{
	$id="$rod[id]";
	$impact_3g="$rod[impact_3_title]";
	$impact_3_desc="$rod[impact_3_desc]";
    $ufile="$rod[ufile]";

print "


            <div class='col-lg-4 col-md-6'>
                <div class='blog-item'>
                    <div class='blog-img'>
                        <div class='blog-img-inner'>
                            <img class='img-fluid w-100 rounded-top' src='dashboard/uploads/impact_3/$ufile' alt='Image'>
                        </div>
                        <div class='blog-info d-flex align-items-center border border-start-0 border-end-0'>
                           
                        </div>
                    </div>
                    <div class='blog-content border border-top-0 rounded-bottom p-4'>
                       
                        <a href='#' class='h4'>$impact_3g</a>
                        <p class='my-3'>$impact_3_desc</p>
                        <a href='#' class='btn btn-primary rounded-pill py-2 px-4'>Read More</a>
                    </div>
                </div>
            </div>

";
}
?>

            <!-- <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            <img class="img-fluid w-100 rounded-top" src="img/blog-1.jpg" alt="Image">
                            <div class="blog-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>
                        <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                           
                        </div>
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                       
                        <a href="#" class="h4">Startup Support</a>
                        <p class="my-3">Join our startup support program for guidance, mentorship, and access to resources that will propel your venture forward.</p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            <img class="img-fluid w-100 rounded-top" src="img/blog-1.jpg" alt="Image">
                            <div class="blog-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>
                        <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                           
                        </div>
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                       
                        <a href="#" class="h4">Funding Access</a>
                        <p class="my-3">Navigate the funding landscape with our assistance, connecting startups with government grants, schemes, and potential investors.</p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            <img class="img-fluid w-100 rounded-top" src="img/blog-1.jpg" alt="Image">
                            <div class="blog-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>
                        <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                           
                        </div>
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                       
                        <a href="#" class="h4">Capacity Building</a>
                        <p class="my-3">Participate in our capacity-building programs, including workshops and bootcamps, to enhance your skills and knowledge.</p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                    </div>
                </div>
            </div> -->
        </div>
        
    </div>
</div>
<!-- Blog End -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Innovation Ecosystem</h5>
            <h1 class="mb-4">Building a robust innovation ecosystem</h1>
            <p class="mb-0">Learn about the advancements and innovations that have stemmed from our commitment to building a robust innovation ecosystem.
            </p>
        </div>
        
        <div class="row g-4 justify-content-center">

        <?php
				   $qs="SELECT * FROM  impact_4 ORDER BY id DESC";


 $r1 = mysqli_query($con,$qs);

while($rod = mysqli_fetch_array($r1))
{
	$id="$rod[id]";
	$impact_4g="$rod[impact_4_title]";
	$impact_4_desc="$rod[impact_4_desc]";
    $ufile="$rod[ufile]";

print "


            <div class='col-lg-4 col-md-6'>
                <div class='blog-item'>
                    <div class='blog-img'>
                        <div class='blog-img-inner'>
                            <img class='img-fluid w-100 rounded-top' src='dashboard/uploads/impact_4/$ufile' alt='Image'>
                        </div>
                        <div class='blog-info d-flex align-items-center border border-start-0 border-end-0'>
                           
                        </div>
                    </div>
                    <div class='blog-content border border-top-0 rounded-bottom p-4'>
                       
                        <a href='#' class='h4'>$impact_4g</a>
                        <p class='my-3'>$impact_4_desc</p>
                        <a href='#' class='btn btn-primary rounded-pill py-2 px-4'>Read More</a>
                    </div>
                </div>
            </div>

";
}
?>
            <!-- <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            <img class="img-fluid w-100 rounded-top" src="img/blog-1.jpg" alt="Image">
                            <div class="blog-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>
                        <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                           
                        </div>
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                       
                        <a href="#" class="h4">Startup Support</a>
                        <p class="my-3">Join our startup support program for guidance, mentorship, and access to resources that will propel your venture forward.</p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            <img class="img-fluid w-100 rounded-top" src="img/blog-1.jpg" alt="Image">
                            <div class="blog-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>
                        <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                           
                        </div>
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                       
                        <a href="#" class="h4">Funding Access</a>
                        <p class="my-3">Navigate the funding landscape with our assistance, connecting startups with government grants, schemes, and potential investors.</p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            <img class="img-fluid w-100 rounded-top" src="img/blog-1.jpg" alt="Image">
                            <div class="blog-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>
                        <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                           
                        </div>
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                       
                        <a href="#" class="h4">Capacity Building</a>
                        <p class="my-3">Participate in our capacity-building programs, including workshops and bootcamps, to enhance your skills and knowledge.</p>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                    </div>
                </div>
            </div> -->
        </div>
        
    </div>
</div>
      

        <?php include('includes/footer.php'); ?>