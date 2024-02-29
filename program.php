<?php include('includes/header.php'); ?>

<?php
      include"dashboard/z_db.php";
      ?>  

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Program</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    
                    <li class="breadcrumb-item active text-white">Program</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->



<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Our Programs</h5>
            <h1 class="mb-4">Join our Programs</h1>
            <p class="mb-0">Predulive Edutech Foundation supports startups with guidance, mentorship, and resources. Programs include funding access, capacity building, innovation infrastructure, and community building events.
            </p>
        </div>
        
        <div class="row g-4 justify-content-center">


        <?php
				   $qs="SELECT * FROM  program ORDER BY id DESC";


 $r1 = mysqli_query($con,$qs);

while($rod = mysqli_fetch_array($r1))
{
	$id="$rod[id]";
	$programg="$rod[program_title]";
	$program_desc="$rod[program_desc]";
    $ufile="$rod[ufile]";

print "


            <div class='col-lg-4 col-md-6'>
                <div class='blog-item'>
                    <div class='blog-img'>
                        <div class='blog-img-inner'>
                            <img class='img-fluid w-100 rounded-top' src='dashboard/uploads/programs/$ufile' alt='Image'>
                        </div>
                        <div class='blog-info d-flex align-items-center border border-start-0 border-end-0'>
                           
                        </div>
                    </div>
                    <div class='blog-content border border-top-0 rounded-bottom p-4'>
                       
                        <a href='#' class='h4'>$programg</a>
                        <p class='my-3'>$program_desc</p>
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
            </div>
        </div>
        <br><br>
      
    </div>
</div>
<!-- Blog End -->

      

        <?php include('includes/footer.php'); ?>