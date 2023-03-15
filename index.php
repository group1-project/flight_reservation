<?php
require "header.php";
require "connection.php";
?>
<!-- Image and text -->
<div class="container-fluid main_grad m-0 p-0">
  <nav class="navbar row justify-content-around justify-content-start justify-content-lg-around p-0 m-0 pt-5 sticky-top">
    <div class=" col-12 text-center text-lg-start col-lg-10 p-0 m-0">
      <a class="navbar-brand  " href="#">
        <img src="images/logo2.png" alt="Logo" class="d-inline-block  rounded-5 firstwidth">
        <span class="text-light fw-bold"> AMATMA </span>
        <span class="text-danger">Airlines</span>
      </a>
    </div>
  </nav>
  <div class=" col-5 col-lg-11 p-0 m-0 text-center text-lg-end mt-3 mt-lg-0 ">
      <!-- Button trigger modal  for registration-->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        SIGN UP
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
              <label>Name</label>
              <input type="text" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1" class="mx-3">
              <label>Email</label>
              <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" name="email" class="mt-2">
              <label>Phone Number</label>
              <input type="text" class="form-control" placeholder="Phone Number" aria-label="PhoneNumber" aria-describedby="basic-addon1" name="phone_number" class="mt-2">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password" clsass="mt-2">
              <label>Profile Photo</label>
              <input type="file" class="form-control" placeholder="Add Profile photo" aria-label="Photo" aria-describedby="basic-addon1" name="photo" value="profile photo" class="mt-2">
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
          </div>
        </div>
      </div>
      <!-- modal registration ends -->
      <!-- Button trigger modal  for login-->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
        LOGIN
      </button>
      <!-- login modal -->
      <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">LOGIN</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <label>User Name</label>
              <input type="text" class="form-control" placeholder="Userame" aria-label="Username" aria-describedby="basic-addon1" class="mt-3">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password" clsass="mt-3">
              <a href="" class="btn btn-primary mt-3">Forgot Password</a>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">SUBMIT</button>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="container-fluid">
    <div class="row justify-content-center m-0 p-0 margin-top">
      <p class="header_fond  text-center">We make the dream of your journey!</p>
      <div class="col-12 col-lg-6 m-0 p-0 rounded-5 bg-light my-5 shadow row justify-content-center">
        <div class="col-12 col-lg-12 row justify-content-center m-0 p-0 py-2">
          <div class="col-4 col-lg-3 text-center m-0 p-0"><input type="radio" name="travel_type" id="oneway"><label for="oneway" class="text-muted fw-bold">ONEWAY</label></div>
          <div class="col-4 col-lg-3 text-center m-0 p-0"><input type="radio" name="travel_type" id="roundtrip"><label for="roundtrip" class="text-muted fw-bold">ROUND TRIP</label></div>
          <div class="col-4 col-lg-3 text-center m-0 p-0"><input type="radio" name="travel_type" id="multicity"><label for="multicity" class="text-muted fw-bold">MULTI CITY</label></div>
        </div>
      </div>
    </div>
  </div>
  <form action="" method="POST">
    <div class=" row justify-content-center m-0 p-0 ">
      <div class="col-12 col-lg-10 m-0 p-0 rounded-3 bg-light mt-5 mb-3 shadow row justify-content-center py-3">
        <div class="col-8  col-lg-3 text-center py-3 my-3 border">
          <p class="text-muted fw-bold ">FROM</p>
          <input type="text" id="myInput" list="myList" name="myInput" class="py-2 my-3 border-0" placeholder="Enter a city or Airport">
          <datalist id="myList">
            <option value="Sharon">
            <option value="Tibin">
            <option value="shambu">
            <option value="Option 4">
            <option value="Option 5">
          </datalist>
        </div>
        <div class="col-8  col-lg-3 text-center py-3 my-3 border">
          <p class="text-muted fw-bold">TO</p>
          <input type="text" id="myInput" list="myList" name="myInput" class="py-2 my-3 border-0" placeholder="Enter a city or Airport">
          <datalist id="myList">
            <option value="Option 1">
            <option value="Option 2">
            <option value="Option 3">
            <option value="Option 4">
            <option value="Option 5">
          </datalist>
        </div>
        <div class="col-8  col-lg-2 text-center py-3 my-3 border">
          <p class="text-muted fw-bold">Departure</p>
          <input type="date" class="py-2 my-3 border-0" placeholder="Enter the date">
        </div>
        <div class="col-8  col-lg-3 text-center py-3 my-3 border">
          <p class="text-muted fw-bold">Travellers and classes</p>

        </div>
      </div>
    </div>
    <div class="row text-center pb-3 m-0 p-0">
      <div>
        <input type="submit" name="submit" id="" value="SEARCH" class="btn btn-outline-light fs-4">
      </div>
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
</div>
<?php
require "footer.php";
?>