
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title><?php if(isset($title)){ echo $title; }else{ echo "NUCCAAW";}?></title>
<!-- Bootstrap CSS -->
   <link href="<?= base_url('public/assets/css/bootstrap.css') ?>" rel="stylesheet">
   <link href=" <?= base_url('public/assets/css/bootstrap-datatable.css') ?>" rel="stylesheet">
   <link href="<?= base_url('public/assets/css/tableresponsive.css')?>" rel="stylesheet"  type='text/css'>
   <link href="<?= base_url('public/assets/css/datedisplay.css')?>" rel="stylesheet"  type='text/css'>
   
  <!--- font awesome loader--> 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- end font awesome loader-->
   
 <style>
.hiddenRow {
    padding: 0 !important;
}
.table-row{
	cursor:pointer;
}
.table-row:hover{
	background-color:#f8f9fa;
}
.appcolor{
	background-color:#2c1e22;
}
.newheaderstyle{
	display: block;
    padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
    font-size: var(--bs-nav-link-font-size);
    font-weight: var(--bs-nav-link-font-weight);
    color:#14287b;
    text-decoration: none;
    background: 0 0;
    border: 0;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
   
}
.newheaderstyle:focus,
.newheaderstyle:hover{
	color: #0B6623;
}
.custback{
	
	background-color:#007bff;
	color:#ffffff;
}
.custback:hover{
	background-color:#14287b;
	color:#98FB98;
}
.imagback{
 
 background-image: url(<?= base_url()?>public/assets/images/backgroundimg/figure11.png)  ;
 -moz-background-size: cover;
  -webkit-background-size: cover;
  -o-background-size: cover;
   background-size: cover;
   background-repeat: no-repeat;
    background-position: left bottom;
}
.numbertext {
  color: #f2f2f2;
  font-size: 20px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
  font-weight:bold;
}
.titlecolor{
	color:#14287b;
}

</style>
 </head >
 
 
<body class="d-flex flex-column min-vh-100 bg-white" style="max-width:1786px;  font-size:18px;">
 
<!--Main Navigation-->
<header class="">
  <!-- Jumbotron -->
  
  <div class=" d-none d-lg-block  align-items-center "  style="background-color:#0B6623;">
  
      <div class="d-flex flex-row bg-white justify-content-end p-2" style="">
	  
	  <div class="d-grid gap-3 d-md-flex justify-content-md-end ms-5 me-5">
	  <a  class="btn text-primary btn-sm rounded-circle d-flex justify-content-center " href="#!" role="button">
		 <svg xmlns="http://www.w3.org/2000/svg" style="color:;" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
</svg>
		
		</a>
		<a  class="btn  btn-sm rounded-circle d-flex justify-content-center " href="#!" role="button" style="color:#000;">
		 <svg xmlns="http://www.w3.org/2000/svg" style="color: ;" width="20" height="20" fill="currentColor" class="bi bi-twitter-x " viewBox="0 0 16 16">
  <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
</svg>
		
		</a>
		<a  class="btn text-info btn-sm rounded-circle d-flex justify-content-center " href="#!" role="button">
		<svg xmlns="http://www.w3.org/2000/svg" style="color:;" width="20" height="20" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
</svg>
		
		</a>
		<a  class="btn text-warning btn-sm rounded-circle d-flex justify-content-center " href="#!" role="button">
		 <svg xmlns="http://www.w3.org/2000/svg" style="color:;" width="20" height="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
</svg>
		
		</a>

</div>
	  
	  </div>
	  
    <div class="container">
      <div class="row ">
        <!-- Left elements -->
        <div class="col-sm-4 d-flex justify-content-center justify-content-md-start mb-md-0">
          <a href="#!" class="ms-md-2 align-items-center">
            <img src="<?= base_url('public/assets/images/newlogo.png') ?>" height="90" class="p-0"/>
          </a>
        </div>
        <!-- Left elements -->

        <!-- Center elements -->
        <!--<div class="col-md-2">
          <form class="d-flex input-group w-auto my-auto mb-3 mb-md-0">
            <input autocomplete="off" type="search" class="form-control rounded" placeholder="Search" />
            <span class="input-group-text border-0 d-none d-lg-flex"><i class="fas fa-search"></i></span>
          </form>
		  
		  
        </div>-->
        <!-- Center elements -->

        <!-- Right elements -->
        <div class="col-md-8 d-flex justify-content-center  align-items-center">
          <div class="d-flex flex-row ">
             <div class="p-2">
			 <div class="d-flex flex-row  me-2 align-items-center">
			 <div class="p-0 me-3 " style="color:#98FB98;"><svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
</svg></div>
			 <div class="d-flex flex-column align-items-start fs-6 text-white">
             <div class="p-0  fw-bold ">Opening Hours</div>
             <div class="p-0 fw-bold ">Mon - Fri : 9:00am - 4:30pm</div>
			 </div>
			 </div>
			 </div>
             <div class="p-2">
			 <div class="d-flex flex-row  me-2 align-items-center">
			 <div class="p-0 me-3 "  style="color:#98FB98;">
			<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
</svg>
			
			 </div>
			 <div class="d-flex flex-column align-items-start fs-6 fw-bold text-white">
             <div class="p-0  ">E-mail Us</div>
             <div class="p-0 ">nuucaw@gmail.com</div>
			 </div>
			 </div>
			 </div>
			 <div class="p-2">
			 <div class="d-flex flex-row  me-2  align-items-center">
			 <div class="p-0 me-3 " style="color:#98FB98;">
			 <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
</svg>
			 </div>
			 <div class="d-flex flex-column align-items-start fs-6 fw-bold text-white">
             <div class="p-0 ">Quick Contact</div>
             <div class="p-0">039 3249531</div>
			 </div>
			 </div>
			 </div>
          </div>
          
        
        </div>
        <!-- Right elements -->
      </div>
    </div>
 
  </header>
  <!-- Jumbotron -->

  <!-- Navbar -->
 
<!--<div class="container ">-->
 
<nav class="navbar navbar-expand-lg  bg-white sticky-top border border-1 border-end-0 border-start-0 border-top-0  shadow-sm" >
<!--<div class="container-fluid    border-warning">-->
<div class="container">
    <a class="navbar-brand fw-bold d-none d-sm-block d-lg-none" href="#" style="color:#0B6623;"><h5>NUCCAAW</h5></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-5 " >
        <li class="nav-item ">
          <a class="nav-link newheaderstyle me-3 " aria-current="page" href="#"><h5>Home</h5></a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link newheaderstyle " href="#"><h5>Our Profile</h5></a>
        </li>
		<li class="nav-item me-3">
          <a class="nav-link newheaderstyle " href="#"><h5>Compaigns</h5></a>
        </li>
		<li class="nav-item me-3 ">
          <a class="nav-link newheaderstyle" href="#"><h5>Membership</h5></a>
        </li>
		 <li class="nav-item me-3">
          <a class="nav-link  newheaderstyle" href="#"><h5>Guidance</h5></a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link  newheaderstyle" href="#"><h5>Contact</h5></a>
        </li>
		
      </ul>
      <!--<form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>-->
    </div>
 </div>
 <!--</div>-->
</nav>
<!--</div>-->
<!--</div>-->
  <!-- Navbar -->
<!--- render content to the page start--->
<div class="container-fluid">
<?= $this->renderSection('content') ?>

 </div>
<!--- render content to the page end--->


  
  

<!--<start footer>-->
<!-- Footer Block Start -->
<footer id="site-footer ">
    <div class="bg-success bg-opacity-25 py-5">
        <div class="container py-3">
            <div class="row d-flex " >
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <h4 class="pb-2 " style="color:#14287b;"><i class="fa fa-info-circle pe-1"></i> About us</h4>
                    <span class="text-dark fw-light h4">
					<strong>(NUCCAAW) </strong> is a TRADE UNION ORGANISATION that exists to contribute to a process of improving 
					the livelihood of workers through promoting decent work ... 
					
					</span>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12 ">
                    <h4 class="pb-2 " style="color:#151B54;"><i class="fa fa-link pe-1"></i> Important links</h4>
                    <ul class="h4 fw-light">
                        <li><a href="#" class="text-decoration-none link-dark">About us</a></li>
                        <li><a href="#" class="text-decoration-none link-dark">Services</a></li>
                        <li><a href="#" class="text-decoration-none link-dark">Seek help</a></li>
						<li><a href="#" class="text-decoration-none link-dark">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12 ">
                    <h4 class="pb-2" style="color:#14287b;"><i class="fa fa-map-marker pe-1" aria-hidden="true"></i> Our location</h4>
                    <span class="text-default h4 fw-light">
                         Latifah Building<br>
                       Lugoba Road, Off Bombo Road<br>
                        Wakiso District, Uganda<br>
                    </span>
                </div>
                <!--<div class="col-xl-3 col-md-6 col-sm-12">
                    <h5 class="pb-3" style="color:#14287b;"><i class="fa fa-paper-plane pe-1"></i>Send message</h5>
                    <form>
                      	<textarea class="form-control" id="textAreaExample1" rows="4"></textarea>
                        <button class="w-100 btn btn-dark mt-2">Send now</button>
                    </form>
                </div>-->
            </div>
        </div>
    </div>
    <div class=" py-3" style="background-color:#0B6623;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <!--<ul class="list-inline mb-0">
                        <li class="list-inline-item"><a class="btn btn-outline-secondary" href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-outline-secondary" href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-outline-secondary" href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-outline-secondary" href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-outline-secondary" href="#"><i class="fa-brands fa-github"></i></a></li>
                    </ul>-->
					  <div class="d-flex flex-row  justify-content-start p-2" style="">
	  
	  <div class="d-grid gap-3 d-md-flex d-inline-flex ms-5 me-5">
	  <a  class="btn  btn-sm rounded-circle d-flex justify-content-center " href="#!" role="button">
		 <svg xmlns="http://www.w3.org/2000/svg" style="color: #fff;" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
</svg>
		
		</a>
		<a  class="btn  btn-sm rounded-circle d-flex justify-content-center " href="#!" role="button" style="background-color:#;">
		 <svg xmlns="http://www.w3.org/2000/svg" style="color:#fff;" width="20" height="20" fill="currentColor" class="bi bi-twitter-x " viewBox="0 0 16 16">
  <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
</svg>
		
		</a>
		<a  class="btn  btn-sm rounded-circle d-flex justify-content-center " href="#!" role="button">
		<svg xmlns="http://www.w3.org/2000/svg" style="color: #fff;" width="20" height="20" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
</svg>
		
		</a>
		<a  class="btn  btn-sm rounded-circle d-flex justify-content-center " href="#!" role="button">
		 <svg xmlns="http://www.w3.org/2000/svg" style="color: #fff;" width="20" height="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
</svg>
		
		</a>

</div>
	  
	  </div>
                </div>
                <div class="col-md-6 col-sm-12 "><span class=" pt-1 float-md-end float-sm-start" style="color:#fff;">Copyright &copy; <?php echo date('Y'); ?></span></div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Block Start -->
<!-- end of the footer --->
</div>
 


  <script src="<?= base_url('public/assets/js/bootstrap.bundle.min.js') ?>"  crossorigin="anonymous"></script>
  <script src="<?= base_url('public/assets/js/jquery.js') ?>"></script>
 <script src="<?= base_url('public/assets/js/popper.min.js') ?>/"></script>
 <script src="<?= base_url('public/assets/js/bootstrap.min.js') ?>"></script> 
 <script src="<?= base_url('public/assets/js/bootstrap.table.js') ?>"></script> 
 <script src="<?= base_url('public/assets/js/bootstrap.datatable.min.js') ?>"></script>  
 <script src="<?= base_url('public/assets/js/dateintterface.js') ?>"></script> 
  
<script>
$(document).ready(function(){
	const myCarouselEl = document.querySelector('#mainSlide');
	const carousel = bootstrap.Carousel.getInstance(myCarouselEl); // Retrieve a Carousel instance
	myCarouselEl.addEventListener('slid.bs.carousel', event => {
  //carousel.to('2') // Will slide to the slide 2 as soon as the transition to slide 1 is finished
  //alert("ok");
});
/*projects done slide controls*/
 $("#slidePrev").click(function(){
	 $("#projectsSlider").carousel('prev');
 });
 $("#slideNext").click(function(){
	$("#projectsSlider").carousel('next');
 });
 /*end of controls*/
	
});
</script> 
</body>

</html>
