<?php 
    include "header.php";
?>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
  <div class="sec-1">
    <div class="p-4 my-3 bg-light rounded-3">
      <div class="container-fluid py-3 text-center">
        <h1 class="display-6 fw-bold">Welcome To CleanHolic</h1>
        <p class="text-break">Please select of of our many sevices we provide</p>
      </div>
    </div>
    </div>
    <div class="carousel-item active">
      <img src="../Img/CleanHolic.svg" class="d-block w-100" alt="...">\
      <div class="carousel-caption">
      </div>
    </div>
    <div class="carousel-item">
      <img src="../Img/CleanHolic.svg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../Img/CleanHolic.svg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  
<?php 
    include "footer.php";
?>
