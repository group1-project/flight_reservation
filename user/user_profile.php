<?php
require "user_header.php";
require "../connection.php";
?>
<!-- Image and text -->
<div class="container-fluid main_grad m-0 p-0">
  <nav class="navbar row justify-content-around justify-content-start justify-content-lg-around p-0 m-0 py-3 sticky-top" id="navigate">
    <div class=" col-12 text-center text-lg-start col-lg-10 p-0 m-0">
      <a class="navbar-brand  " href="#">
        <img src="../images/logo2.png" alt="Logo" class="d-inline-block  rounded-5 firstwidth">
        <span class="text-light fw-bold"> AMATMA </span>
        <span class="text-danger">Airlines</span>
      </a>
    </div>
  </nav>
  <div class="col-11 col-lg-11 d-flex p-0 m-0 justify-content-end">
        <input type="submit" class="btn btn-outline-light" value="Logout">
    </div>
  <div class="container-fluid">
    <div class="row justify-content-center m-0 p-0 ">
      <p class="header_fond  text-center m-0 pb-0 my-3 my-lg-0  pb-lg-3">Hello <?php ?>!</p>
    </div>
  </div>
</div>
<div class="row justify-content-center gap-5 p-0 m-0 my-5">
    <div class="col-8 col-lg-2"></div>
    <div class="col-10 col-lg-7">
        <p><?php ?></p>
        <p><?php ?></p>
        <p><?php ?></p>
        <p><?php ?></p>
    </div>
</div>
    <div class="d-flex p-0 m-0 justify-content-center">
        <form action="user_edit.php">
        <input type="submit" class="btn btn-outline-success px-5" value="Edit">
        </form>
        <form action=""> 
        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Reset Password
      </button>

      <!-- Modal registration -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Sign Up Here</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Password" aria-label="PhoneNumber" aria-describedby="basic-addon1" name="phone_number" class="mt-2">
              <label>Confirm Password</label>
              <input type="password" class="form-control" placeholder="Confirm Password" aria-label="Password" aria-describedby="basic-addon1" name="password" clsass="mt-2">
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
          </div>
        </div>
      </div>
        </form>
    </div>
    <footer class="row justify-content-center bg-black mt-3 py-3 p-0 m-0">
        <div class="col-10 col-lg-4 p-0 m-0">
            <p class="text-center text-light py-3">visit our official website at www.amatma.com</p>
        </div>
        <div class=" col-10 col-lg-4 p-0 m-0 text-center py-3">
            <a class="navbar-brand  " href="#">
            <img src="../images/logo2.png" alt="Logo" class="d-inline-block  rounded-5 wid">
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