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

    <div class=" row justify-content-center m-0 p-0 ">
        <div class="col-12 col-lg-8 m-0 p-0 rounded-5 bg-light my-5 shadow row justify-content-center"></div>
    </div>
</div>

<div class="container">
    <div class="bd-example">
        <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#airport" type="button" role="tab" aria-controls="home" aria-selected="true">Airport</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#airline" type="button" role="tab" aria-controls="profile" aria-selected="false">Airline</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#flight" type="button" role="tab" aria-controls="contact" aria-selected="false">Flight</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#route" type="button" role="tab" aria-controls="contact" aria-selected="false">Route</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">

            <div class="tab-pane fade active show" id="airport" role="tabpanel" aria-labelledby="home-tab">
                <div class="container w-50 ">

                    <form>
                        <div class="mb-3">

                            <input type="text" class="form-control" placeholder="Airport Name" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">

                            <input type="text" class="form-control" placeholder="Abbr" id="exampleInputPassword1">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <table class="table table-primary table-striped border border-2">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Airport Name</th>
                            <th>Abbr</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a class="btn text-light edit" href="">Edit</a></td>
                            <td><a class="btn btn-danger" href="" onclick="">Delete</a></td>
                            <!-- ?=$emp->Id?
                        ?php echo $emp->Id? -->
                        </tr>

                    </tbody>
                </table>
                <a class="btn btn-success" href="">Update</a>
            </div>
            <div class="tab-pane fade" id="airline" role="tabpanel" aria-labelledby="profile-tab">

                <div class="container w-50 ">

                    <form>
                        <div class="mb-3">

                            <input type="text" class="form-control" placeholder="ADD New Air line" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <table class="table table-primary table-striped border border-2">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Aireline</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td></td>
                            <td></td>
                            <td><a class="btn btn-success" href="">Edit</a></td>
                            <td><a class="btn btn-danger" href="" onclick="">Delete</a></td>
                            <!-- ?=$emp->Id?
                        ?php echo $emp->Id? -->
                        </tr>

                    </tbody>
                </table>
                <a class="btn btn-success" href="">Update</a>
            </div>
            <div class="tab-pane fade" id="flight" role="tabpanel" aria-labelledby="contact-tab">


                <table class="table table-primary table-striped border border-2">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Flight Name</th>
                            <th>Total Seat</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a class="btn btn-success" href="">Edit</a></td>
                            <td><a class="btn btn-danger" href="" onclick="">Delete</a></td>
                            <!-- ?=$emp->Id?
                        ?php echo $emp->Id? -->
                        </tr>

                    </tbody>
                </table>
                <a class="btn btn-success" href="">Update</a>
            </div>
            <div class="tab-pane fade" id="route" role="tabpanel" aria-labelledby="contact-tab">


                <table class="table table-primary table-striped border border-2">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Flight Name</th>
                            <th>Departure</th>
                            <th>Arrival</th>
                            <th>Departre Date</th>
                            <th>Arrival Date</th>
                            <th>Departre time</th>
                            <th>Arrival time</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a class="btn btn-success" href="">Edit</a></td>
                            <td><a class="btn btn-danger" href="" onclick="">Delete</a></td>
                            <!-- ?=$emp->Id?
                        ?php echo $emp->Id? -->
                        </tr>

                    </tbody>
                </table>
                <a class="btn btn-success" href="">Update</a>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">


                <table class="table table-primary table-striped border border-2">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Flight Name</th>
                            <th>Departure</th>
                            <th>Arrival</th>
                            <th>Departre Date</th>
                            <th>Arrival Date</th>
                            <th>Departre time</th>
                            <th>Arrival time</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a class="btn btn-success" href="">Edit</a></td>
                            <td><a class="btn btn-danger" href="" onclick="">Delete</a></td>
                            <!-- ?=$emp->Id?
                        ?php echo $emp->Id? -->
                        </tr>

                    </tbody>
                </table>
                <a class="btn btn-success" href="">Update</a>
            </div>
        </div>
    </div>


</div>
<?php
require "footer.php";
?>