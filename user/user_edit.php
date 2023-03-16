<?php
require "user_header.php";
require "../connection.php";
?>
<!-- Image and text -->
<div class="container-fluid main_grad m-0 p-0">
  <nav class="navbar row justify-content-around justify-content-start justify-content-lg-around p-0 m-0 py-3 sticky-top" id="navigate">
    <div class=" col-12 text-center text-lg-start col-lg-10 p-0 m-0">
      <a class="navbar-brand  " href="#">
        <img src="images/logo2.png" alt="Logo" class="d-inline-block  rounded-5 firstwidth">
        <span class="text-light fw-bold"> AMATMA </span>
        <span class="text-danger">Airlines</span>
      </a>
    </div>
  </nav>
</div>
<div class="row justify-content-center gap-5 p-0 m-0 my-5">
    <form action="" method="POST" class="row justify-content-center gap-5 my-5">
    <div class="col-8 col-lg-2">change your image</div>
    <div class="col-6 col-lg-4 row p-0 m-0">
        <label for="user_name">Full Name</label><input type="text" name="" id="user_name" class="my-3">
        <label for="user_name">Email</label><input type="text" name="" id="user_name" class="my-3">
        <label for="user_name">Password</label><input type="text" name="" id="user_name" class="my-3">
        <label for="user_name">Confirm password</label><input type="text" name="" id="user_name" class="my-3">
    </div>
    </div>
    <div class="d-flex p-0 m-0 justify-content-center">
        <input type="submit" class="btn btn-outline-dark ">
    </div>
    </form>
    <footer class="row justify-content-center bg-black mt-3 py-3 p-0 m-0">
        <div class="col-10 col-lg-4 p-0 m-0">
            <p class="text-center text-light py-3">visit our official website at www.amatma.com</p>
        </div>
        <div class=" col-10 col-lg-4 p-0 m-0 text-center py-3">
            <a class="navbar-brand  " href="#">
            <img src="images/logo2.png" alt="Logo" class="d-inline-block  rounded-5 wid">
            <span class="text-light fw-bold"> AMATMA </span>
            <span class="text-danger">Airlines</span>
            </a>
        </div>
        <div class="col-10 col-lg-4 p-0 m-0 py-3">
            <p class="text-center text-light m-0"> &copy; 2023 AMATMA PVT. LTD.</p>
            <p class="text-center text-light  m-0">Country India </p>
        </div>
  </footer>

<?php
require "../footer.php";
?>