<?php 
$conn = mysqli_connect('localhost','root','toor','testdb') or die(mysqli_error());
$selectQ = "SELECT * FROM post";
$res = mysqli_query($conn,$selectQ);
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    .f{
        display:flex;
        flex-direction:row;
        justify-content:space-around;
    }
    .img-thumbnail{
        width:150px;
        height:150px;
        padding-left:10px;
        border:none;
    }
    .blogger{
        display:flex;
        flex-direction:row;
        margin-top:50px;
        background-color:whitesmoke;
    }
    .blogger .blogger1{
        margin-top:8%;
    }
    .col1{
        display:flex;
        flex-direction:column;
        gap:2rem;
        margin:10%; 
    }
    .img-fluid{
        
        width:50%;
        heigth:30%;

    }
    .container1{
        margin:3%;
        text-align:center;
        color:#F75757;
    }
    .bc{
        background-color:#F75757;
        border:none;
        color:white;

    }
    .bc:hover{
        background-color:red;
        border:none;
        color:white;
    }
    .imgcard{
        display:flex;
        flex-direction:row;
        justify-content:space-between;
        flex-wrap:wrap;
    }
  
</style>
<!-- Navigation bar  -->
<nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
  <a class="navbar-brand" href="/">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#blogger">About <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#bb">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#ct">Contact</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Carasoul adding -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="blog1.jpeg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="blog2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="blog3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container py-5 a">
    <h2 style="text-align:center;">We work with business and provide solution to the clients.</h2>
</div>
<div class="f">
    <div class="con">
    <img src="personal-computer.png" alt="..." class="img-thumbnail">
    <h3>Modern Design</h3>
    <p>Lorem ipsum dolor sit amet</p>
    </div>
    <div class="con">
    <img src="responsive-design.png" alt="..." class="img-thumbnail">
    <h3>Responsive Design</h3>
    <p>Lorem ipsum dolor sit amet</p>
    </div>
    <div class="con">
    <img src="flexible.png" alt="..." class="img-thumbnail">
    <h3>Flexible Design</h3>
    <p>Lorem ipsum dolor sit amet</p>
    </div>
</div>
<div class="blogger">
    <img src="blog3.jpg" class="img-fluid" id="blogger">
    <!-- <h4 style="color:red;padding:20px;">Who we are</h4> -->
    <div class="col1">
    <h2>We are team of creative people.</h2>
    <p>We provide consulting services in the area of Web Development, Android Development, Full Stack and many more.</p>
    <button type="button" class="btn bc">Get Started</button>
    </div>     
</div>
<div class="container1">
<h4 id="bb"><b>Our Blogs</b></h4>
</div>
<div class="imgcard container">
<?php while($row=mysqli_fetch_assoc($res)){ ?>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?php echo base64_encode($row['image']); ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['pname']; ?></h5>
    <p class="card-text"><?php echo $row['pdetails']; ?></p>
    <a href="#" class="btn bc">Know More</a>
  </div>
</div>
<?php } ?>


</div>
<!-- Footer -->
<br/><br/>
<footer class="text-center text-lg-start bg-dark text-muted">
  <!-- Section: Social media -->
  
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container py-3 text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4 text-danger">
            <i class="fas fa-gem me-3"></i>dattu
          </h6>
          <p class="text-light">
            Some information about our company.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 text-danger">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset text-light">Web Solutions</a>
          </p>
          <p>
            <a href="#!" class="text-reset text-light">Android</a>
          </p>
          <p>
            <a href="#!" class="text-reset text-light">ios</a>
          </p>
          <p>
            <a href="#!" class="text-reset text-light">Many more</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 text-danger">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset text-light">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset text-light">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset text-light">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset text-light">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 text-danger" id="ct">Contact</h6>
          <p class="text-light"><i class="fas fa-home me-3 text-light"></i> Karnataka, India</p>
          <p class="text-light">
            <i class="fas fa-envelope me-3"></i>
            abc@example.com
          </p>
          <p class="text-light"><i class="fas fa-phone me-3"></i> +919292929292</p>
          <p class="text-light"><i class="fas fa-print me-3"></i> +91 8080929281</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4 text-light" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 Copyright:
    <a class="text-reset fw-bold text-light" href="">dattu hegde</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->


