<?= $this->extend('layouts/main');?>
<?= $this->section('content') ?>
<!----start of the slider---->

<div id="mainSlide" class="carousel slide mt-4 mb-4" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#mainSlide" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#mainSlide" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#mainSlide" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
     <img src="<?= base_url('public/assets/images/work2.jpg') ?>" class="d-block w-100" alt="..."  height="500">
      <div class="carousel-caption d-none d-md-block">
        <h5>COFFEE PEOPLE RUN</h5>
        <p>Every coffee worker has the right to a safe and a healthy working enviroment </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('public/assets/images/slide2.jpg') ?>" class="d-block w-100" alt="..."  height="500">
      <div class="carousel-caption d-none d-md-block">
        <h5>COFFEE PEOPLE RUN</h5>
        <p>Every coffee worker has the right to a safe and a healthy working enviroment </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('public/assets/images/slide3.jpg') ?>" class="d-block w-100" alt="..."  height="500">
      <div class="carousel-caption d-none d-md-block">
        <h5>COFFEE PEOPLE RUN</h5>
        <p>Every coffee worker has the right to a safe and a healthy working enviroment </p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#mainSlide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#mainSlide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!--- end of the slider---->
<!---- stsrt of other view holders-->
<div class="container p-5 ">
<!--=================== about us short review ===============-->
  <!-- Stack the columns on mobile by making one full-width and the other half-width -->
  <div class="row gy-3 mb-5" >
    <div class="col-sm-12 col-md-6 " >
	<div class="card  mb-3 px-3 border-0 imagback" >
  <div class="card-body">
    <h3 class="card-title pb-4" style="color:#14287b;">
	A democratic, strong, independent and sustainable union which promotes workers’ rights
	</h3>
    <p class="card-text">
	<strong>NUCCAAW</strong> is a TRADE UNION ORGANISATION that exists to contribute to a process of improving the livelihood of workers through promoting decent work, 
	entrepreneurship, skills development and capacity building.
	</p>
	<p>
	We work towards improving working conditions, fighting for the rights of workers through 
	negotiating for better terms and conditions of service, promoting the economic and social wellbeing of workers in co-operatives, 
	commercial, agricultural and other allied organizations in Uganda.
	</p>
	<div class="d-flex flex-row justify-content-end">
    <a href="#" class="card-link text-decoration-none">Read more</a>
	</div>
  </div>
	
	</div>
	</div>
    <div class="col-sm-12 col-md-6  d-flex justify-content-center">
	
	<div class="container text-center">
  <div class="row row-cols-1 row-cols-md-2 g-4 py-3 ">
  <div class="col">
    <div class="card h-100 custback">
      <div class="card-body ">
       <div class="d-flex flex-column bd-highlight ">
            <div class="bd-highlight py-3 px-3">
			<span><i class="fa fa-life-ring fa-4x "></i></span>
			</div>
            <h4>Trusted </h4>
			
     </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 custback " >
      <div class="card-body">
       <div class="d-flex flex-column bd-highlight ">
            <div class="bd-highlight py-3 px-3">
			<span><i class="fa fa-handshake-o fa-4x "></i></span>
			</div>
            <h4>Integrity </h4>
     </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 custback">
     
       <div class="card-body ">
       <div class="d-flex flex-column bd-highlight ">
            <div class="bd-highlight py-3 px-3">
			<span><i class="fa fa-balance-scale fa-4x "></i></span>
			</div>
            <h4>Equity & Fairness </h4>
     </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 custback text-center">
     
       <div class="card-body ">
       <div class="d-flex flex-column bd-highlight ">
            <div class="bd-highlight py-3 px-3">
			<span><i class="fa fa-users  fa-4x  "  aria-hidden="true"></i></span>
			</div>
            <h4>Team Work </h4>
     </div>
      </div>
    </div>
  </div>
</div>
</div>
	
	</div>
	
	
	

	
  </div>
<!--- end of othre view holders --->
<!--=================== end aboutus  ===============-->
<!--=================== start of done and upcoming projects  ===============-->
 <div class="card  gy-3 border-end-0 border-start-0 pb-5" >
  <div class="d-flex flex-row justify-content-center p-3 "><h3> Our Projects</h3></div>
 
<div class="row  justify-content-center mt-4">

<div class="col-sm-12 col-md-6 ">

<div class="card-title rounded-top p-2 bg-info"><span class="h4 text-white fw-bold">Completed </span></div>
   <div class="list-group">
  
    
 
  <!-- close of items holder -->

</div>
<div id="projectsSlider" class="carousel slide" data-bs-interval="false" data-bs-wrap="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="list-group-item list-group-item-action border-top-0 border-end-0 border-start-0 " >
	<!-- items holder -->
	<div class="">
   <div class="col-md-12 border rounded">
    <div class="d-flex justify-content-center align-items-center  ">
	 <div class="col-md-12">
	   <div class="numbertext" style="color:#fff;">1 / 2</div>
       <img src="<?= base_url('public/assets/images/noback.png') ?>" class="img-fluid rounded-top"  alt="..." style="margin-top:0px;" >
    </div>
   </div>
   <div class="d-flex flex-row ">
    <div class="col-md-8 me-auto">
    <div class="d-flex justify-content-center align-items-center rounded-bottom h-100">
	<div class=" p-3 text-center">
	    <h5 class="" style="color:#14287b;">Investment in agricultural practices</h5>
        <p class=""><small>This project 1992 to 2006 with the establishment of a day care</small> </p>
		
	</div>
   </div>
   </div>
   <div class="col-md-4 ">
    <div class="d-flex justify-content-center align-items-center  h-100">
	<div class=" p-3 text-center ">
	<h1 class="fw-bold">21</h1>
	<h5>mar-2024</h5>
	</div>
   </div>
   
  </div>
   </div>
   
  </div>
 <!--<div class="col-md-12 ">
    <div class="card d-flex justify-content-center align-items-center shadow-lg h-100">
	<div class=" p-3 text-center">
	<h1 class="fw-bold">20</h1>
	<h5>mar-2024</h5>
	</div>
   </div>
   
  </div>-->
  </div>
  </div>
    </div>
    <div class="carousel-item">
      <div class="list-group-item list-group-item-action border-top-0 border-end-0 border-start-0 " >
	<!-- items holder -->
	<div class="">
   <div class="col-md-12 border rounded">
    <div class="d-flex justify-content-center align-items-center  ">
	 <div class="col-md-12">
	 <div class="numbertext" style="color:#fff;">2 / 2</div>
       <img src="<?= base_url('public/assets/images/noback.png') ?>" class="img-fluid rounded-top"  alt="..."  >
    </div>
   </div>
   <div class="d-flex flex-row ">
    <div class="col-md-8 me-auto">
    <div class="d-flex justify-content-center align-items-center rounded-bottom h-100">
	<div class=" p-3 text-center">
	    <h5 class="" style="color:#14287b;">Investment in agricultural practices</h5>
        <p class=""><small>This project 1992 to 2006 with the establishment of a day care</small> </p>
		
	</div>
   </div>
   </div>
   <div class="col-md-4 ">
    <div class="d-flex justify-content-center align-items-center  h-100">
	<div class=" p-3 text-center ">
	<h1 class="fw-bold">20</h1>
	<h5>mar-2024</h5>
	</div>
   </div>
   
  </div>
   </div>
   
  </div>
 <!--<div class="col-md-12 ">
    <div class="card d-flex justify-content-center align-items-center shadow-lg h-100">
	<div class=" p-3 text-center">
	<h1 class="fw-bold">20</h1>
	<h5>mar-2024</h5>
	</div>
   </div>
   
  </div>-->
  </div>
  </div>
    </div>
   
  </div>
 
</div>

<div class="d-flex justify-content-end p-2 ">   
<div class="btn-group border align-items-center border-info" role="group" aria-label="Basic mixed styles example">
  <button type="button" class="btn text-center text-primary"  id="slidePrev"> <span class="h4"><i class="fa fa-chevron-left "></i> Prev</span></button>
  <button type="button" class="btn text-center text-primary"  id="slideNext"><span class="h4">Next<i class="fa fa-chevron-right ps-1"></i></span></button>
</div>  	  
</div>





</div>

<div class="col-sm-12 col-md-6 ">
<div class=" pb-1 border-0">
<div class=" p-3  border-bottom"><i class='fa fa-calendar fa-lg me-3 text-default'></i> 
<span class="text-dark fw-bold h5 " >Upcoming </span></div>


    <ol class="list-group  list-group-item-action pb-1">
 
<a href="#" class="list-group-item list-group-item-action border-top-0 border-end-0 border-start-0 border-bottom border-default">
<div class="card mb-1 text-center border-0" style="max-width: 540px; ">
  <div class="row g-0">
    <div class="col-md-6">
       <img src="<?= base_url('public/assets/images/workerstand.jpg') ?>" class="img-fluid rounded h-100 "  alt="..." height="100px" >
    </div>
    <div class="col-md-6">
      <div class="p-2">
        <h5 class="" style="color:#14287b;">Occupational Safety</h5>
        <p class=""><small>This project 1992 to 2006 with the establishment of a day care</small> </p>
		<div class="d-flex flex-row justify-content-end"><span class="badge bg-secondary rounded-pill fw-bold p-2"> <?php echo "3"."\t"."Days left";?></span></div>
		
        
      </div>
    </div>
  </div>
</div>
 </a>
 <a href="#" class="list-group-item list-group-item-action border-top-0 border-end-0 border-start-0 border-bottom border-default">
<div class="card mb-1 text-center border-0" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-6">
       <img src="<?= base_url('public/assets/images/noback.png') ?>" class="img-fluid rounded h-100 "  alt="..."  >
    </div>
    <div class="col-md-6">
      <div class="p-2">
        <h5 class="" style="color:#14287b;">Elimination of child </h5>
        <p class=""><small>This project 1992 to 2006 with the establishment of a day care</small> </p>
		<div class="d-flex flex-row justify-content-end"><span class="badge bg-secondary rounded-pill fw-bold p-2"> <?php echo "3"."\t"."Days left";?></span></div>
		
        
      </div>
    </div>
  </div>
</div>
 </a>
 <a href="#" class="list-group-item list-group-item-action border-top-0 border-end-0 border-start-0 border-bottom border-default">
<div class="card mb-1 text-center border-0" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-6">
       <img src="<?= base_url('public/assets/images/workerlead.png') ?>" class="img-fluid rounded h-100 "  alt="..."  >
    </div>
    <div class="col-md-6">
      <div class="p-2">
        <h5 class="" style="color:#14287b;">IUF Regional Women</h5>
        <p class=""><small>This project 1992 to 2006 with the establishment of a day care</small> </p>
		<div class="d-flex flex-row justify-content-end"><span class="badge bg-secondary rounded-pill fw-bold p-2"> <?php echo "3"."\t"."Days left";?></span></div>
		
        
      </div>
    </div>
  </div>
</div>
 </a>
  
  
</ol>
     <div class="d-flex justify-content-end p-2 ">
	    <a class="card-link  text-center rounded-3   col-sm-3  pe-2 ps-2 pb-1 pt-1 text-decoration-none " href="<?= base_url()?>" role="button">
	   <span class=""> View All</span></a> 
	  </div>
 
  
</div>
</div>
</div>
  
  </div>
  
  </div>

 
 

<!--=================== end of projects  ===============-->
<!--=======================start of worker message =====================-->
<div class="  pb-5  mb-5 pt-5 border-0 d-flex justify-content-center" style="
background-image: url(<?= base_url()?>public/assets/images/stolen.jpg)  ;
 -moz-background-size: cover;
  -webkit-background-size: cover;
  -o-background-size: cover;
   background-size: cover;
   background-repeat: no-repeat;
">
  <!--<div class="d-flex flex-row justify-content-center p-3 "><h3> Our Projects</h3></div>-->
 
<div class="row container pt-3 pb-3">

<div class="col-sm-12 col-md-6 pt-4 pb-4">
     
</div>
<div class="col-sm-12 col-md-6  bg-white card text-center pt-4 pb-4">
<div class="card-body">
<div class="pt-4 pb-4 titlecolor"><h1>Together we <small class="fs-1 fw-light">can ensure</small> </h1><h2><small class="fs-1 fw-light">worker's </small>
Health and Safety</h2></div>
<div class=" pb-4 ps-2 pe-2  ">  
	    <a class="card-link bg-primary text-center rounded-3   col-sm-4  p-3 text-decoration-none text-white" href="<?= base_url()?>" role="button">
	   <span class=""> Read More <i class="fa fa-angle-right"></i></span></a> 
	  </div>
	  </div>
</div>
</div>

</div>

<div class="  pb-5  mb-5 pt-5 border-0 d-flex justify-content-center" >
  <!--<div class="d-flex flex-row justify-content-center p-3 "><h3> Our Projects</h3></div>-->
 
<div class="row container">
<div class="d-flex flex-row justify-content-center pt-3 ps-3 pe-3 pb-5 "><h3> What we Do</h3></div>
 
<div class="col-sm-12 col-md-6 pt-4 pb-4">
   <div class="card  mb-3 px-3 border-0 imagback" >
    <h3 class="pb-3 fw-light" style="color:#14287b;">
	Our Goal is to advocate for workers’ rights, negotiate for better terms and conditions of service
	</h3>
  <div class="card-body">
	<div class="">
	<div class="d-flex justify-content-start">
	<span><i class="fa fa-check-circle-o fa-2x text-info me-3"></i></span>
	<h4 class="card-text" style="color:#14287b;"> 
	Participate in lobbying and advocating for policy and legislation </h4>
	</div>
	<p class="p-3"> 
	To participate in lobbying and advocating for policy and legislation in favor of 
	workers’ rights and wellbeing and ensure accountability and effective implementation.
	</p>
	</div>
	<div class="">
	<div class="d-flex justify-content-start">
	<span><i class="fa fa-check-circle-o fa-2x text-info me-3"></i></span>
	<h4 class="card-text" style="color:#14287b;"> 
	Secure, promote and safeguard rights of all workers employed </h4>
	</div>
	<p class="p-3"> 
	To secure, promote and safeguard rights of all workers employed within the Co-operatives, 
	commercial agricultural and all such other allied organizations, as may from time to time be regulated by authorities. 
	It also rejects any kind of oppression or tyrannical 
	and any form of discrimination based on religion, linguistic or on grounds of Colour
	</p>
	</div>
	
	<div class="">
	<div class="d-flex justify-content-start">
	<span><i class="fa fa-check-circle-o fa-2x text-info me-3"></i></span>
	<h4 class="card-text" style="color:#14287b;"> 
	Contribute to value chain development, Agric based capacity building</h4>
	</div>
	<p class="p-3"> 
	To contribute to value chain development, Agric based capacity building, certification, 
	market linkages, export coaching as well as resource mobilizations
	</p>
	</div>
	<div class="d-flex justify-content-end p-2 ">
	    <a class="card-link  text-center rounded-3   col-sm-3  pe-2 ps-2 pb-1 pt-1 text-decoration-none " href="<?= base_url()?>" role="button">
	   <span class=""> Read more</span></a> 
	  </div>
  </div>
  
  </div>
  
</div>
<div class="col-sm-12 col-md-6  card  pt-4 pb-4 bg-info bg-opacity-50 border-0" style="background-color:;" >
<div class="card-body">
<h4 class="card-text border-bottom p-2 border-2 border-white text-center text-black" style="color:;"> 
	SEEK HELP / GUIDANCE </h4>
	
<form class="row g-3 bg-white mt-5 rounded-2 p-3">
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Name</label>
    <div class="row g-3">
  <div class="col">
    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
  </div>
</div>
  </div>
   <div class="col-md-12">
    <label for="company" class="form-label">Phone Number</label>
    <input type="text" class="form-control" id="company">
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-12">
    <label for="company" class="form-label">Company</label>
    <input type="text" class="form-control" id="company">
  </div>
  <div class="col-md-12">
    <label for="inputAddress" class="form-label">Issue / Concern</label>
    <input type="text" class="form-control" id="" placeholder="what is the issue ?">
  </div>
  <div class="col-md-12">
    <label for="inputAddress2" class="form-label">Issue details</label>
    <textarea class="form-control" id="textAreaExample1" rows="6"></textarea>
  </div>
  
  <div class="col-sm-12">
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-4 pt-0">Period of service</legend>
    <div class="col-sm-8">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
        <label class="form-check-label" for="gridRadios1">
          Below 1 Yr
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
        <label class="form-check-label" for="gridRadios2">
          Above 2 Yrs 
        </label>
      </div>
      <div class="form-check disabled">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" >
        <label class="form-check-label" for="gridRadios3">
          Above 6 Yrs
        </label>
      </div>
    </div>
  </fieldset>
  </div>
   <div class="col-12">
    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane pe-1"></i> SUBMIT</button>
  </div>
</form>
</div>
</div>
</div>

</div>
<div class="  pb-5  mb-5 pt-0 border-0 d-flex justify-content-center" >
 <div class=" container">
<div class="d-flex flex-row justify-content-center pt-3 ps-3 pe-3 pb-5 "><h3> Latest news</h3></div>
<div class="col-md-12 row ">
<div class=" col-sm-4  p-2">

 <img src="<?= base_url('public/assets/images/workerlead.png') ?>" class="img-fluid rounded h-100 "  alt="..."  >
 
</div>
<div class=" col-sm-4  p-2">

 <img src="<?= base_url('public/assets/images/workerlead.png') ?>" class="img-fluid rounded h-100 "  alt="..."  >
	 
</div>
<div class=" col-sm-4  p-2">

 <img src="<?= base_url('public/assets/images/workerlead.png') ?>" class="img-fluid rounded h-100 "  alt="..."  >
 
</div>
        
    </div>
 </div>
 </div>

 
<?= $this->endSection(); ?>
