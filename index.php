<?php
    require "header.php";
    require "connection.php";
?>
<!-- Image and text -->
<div class="container-fluid main_grad">
<nav class="navbar row justify-content-around justify-content-start justify-content-lg-around p-0 m-0 py-3">
  <div class=" col-6 col-lg-6 p-0 m-0">
    <a class="navbar-brand  " href="#">
      <img src="images/logo2.png" alt="Logo" class="d-inline-block  rounded-5 wid">
      <span class="text-light fw-bold"> AMATMA </span>
      <span class="text-danger">Airlines</span>
    </a>
  </div>
  <div class=" col-5 col-lg-3 p-0 m-0 text-center">
     <button type="submit" class="btn btn-outline-light">SignUp</button>
    <button type="submit" class="btn btn-outline-light">Login</button>
  </div>
</nav>
<div class="container">
<div class=" row justify-content-center m-0 p-0 margin-top">
  <div class="col-12 col-lg-6 m-0 p-0 rounded-5 bg-light my-5 shadow row justify-content-center">
    <div class="col-12 col-lg-12 row justify-content-center m-0 p-0 py-2">
      <div class="col-4 col-lg-3 text-center m-0 p-0"><input type="radio" name="travel_type" id="oneway"><label for="oneway" class="text-muted fw-bold">ONEWAY</label></div>
      <div  class="col-4 col-lg-3 text-center m-0 p-0"><input type="radio"  name="travel_type"  id="roundtrip"><label for="roundtrip" class="text-muted fw-bold">ROUND TRIP</label></div>
      <div  class="col-4 col-lg-3 text-center m-0 p-0"><input type="radio"  name="travel_type" id="multicity"><label for="multicity" class="text-muted fw-bold">MULTI CITY</label></div>
    </div>
  </div>
</div>

</div>
<div class=" row justify-content-center m-0 p-0 ">
<div class="col-12 col-lg-8 m-0 p-0 rounded-5 bg-light my-5 shadow row justify-content-center"></div>
</div>
<?php
    require "footer.php";
?>