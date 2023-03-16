<?php
require "connection.php";
session_start();
require "header.php";


// user registration
if(isset($_POST['register'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $pass=$_POST['password'];
  $phone=$_POST['phone'];
  $password=md5($pass);
  $pic=$_FILES['photo']['name'];
  $temp=$_FILES['photo']['tmp_name'];
  $target="uploads/".basename($pic);

          $sql='INSERT INTO users(name,email,password,phone,image)VALUES(:name,:email,:password,:phone,:image)';
          $statement=$connection->prepare($sql);
          if( $statement->execute(['name'=>$name,':email'=>$email,':password'=>$password,':phone'=>$phone, 'image'=>$pic])){
            $move_pic=move_uploaded_file($temp,$target);

            echo"<div class='alert alert-info'>Data recorded successfully</div>";
        }
      }
  // user registration end

  // login code 
  if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

        $sql= 'SELECT * FROM users WHERE email=:email LIMIT 1';
        $stmt = $connection->prepare($sql);
        $stmt -> execute(['email' => $email]);
        $exists = $stmt->fetch(PDO :: FETCH_OBJ);
        if(!$exists){
            echo  "<script> Swal.fire('Enter Valid Email Id') </script>";
        }
        else{
            $check_pass=$exists->password;
            $password=md5($password);
            if($check_pass!=$password){
                echo  "<script> Swal.fire('Invalid Password') </script>";
            }
            else{
                $_SESSION['email']=$email;
                header("Location:userpage.html");
            }
        }
}

// login code end 
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
             <form action="" method="POST" enctype="multipart/form-data">
              <label>Name</label>
              <input type="text" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1" name="name" class="mx-3" required>
              <label>Email</label>
              <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" name="email" class="mt-2" required>
              <label>Phone Number</label>
              <input type="text" class="form-control" placeholder="Phone Number" aria-label="PhoneNumber" aria-describedby="basic-addon1" name="phone" class="mt-2" required>
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password" clsass="mt-2" required>
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="con_password" clsass="mt-2" required>
              <label>Profile Photo</label>
              <input type="file" class="form-control" placeholder="Add Profile photo" aria-label="Photo" aria-describedby="basic-addon1" name="photo" value="profile photo" class="mt-2" required>
            
              <input type="submit" name="register" value="Register" class="btn btn-primary">
             </form>
            
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
             <form action="" method="POST">
             <label>User Name</label>
              <input type="email" class="form-control" name="email" placeholder="Userame" aria-label="Username" aria-describedby="basic-addon1" class="mt-3">
              <label>Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password" clsass="mt-3">
              
            
          
              <input type="submit" class="btn btn-primary mt-3" name="login">

              <a href="" class="btn btn-primary mt-3">Forgot Password</a>
           
             </form>
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