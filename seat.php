<?php require "connection.php";
	$sql='SELECT * FROM airline';
	$statement = $connection ->prepare($sql);
    $statement->execute();
    $airlines = $statement->fetchAll(PDO::FETCH_OBJ);
 require "header.php"?>
<!-- Image and text -->
<div class="container-fluid main_grad">
    <nav
        class="navbar row justify-content-around justify-content-start justify-content-lg-around p-0 m-0 py-3 pb-5"
    >
        <div class="col-6 col-lg-6 p-0 m-0 pb-5">
            <a class="navbar-brand" href="#">
                <img
                    src="images/logo2.png"
                    alt="Logo"
                    class="d-inline-block rounded-5 wid"
                />
                <span class="text-light fw-bold"> AMATMA </span>
                <span class="text-danger">Airlines</span>
            </a>
        </div>
        <div class="col-5 col-lg-3 p-0 m-0 text-center pb-5">
            <button type="submit" class="btn btn-outline-light">SignUp</button>
            <button type="submit" class="btn btn-outline-light">Login</button>
        </div>
    </nav>
</div>

<div class="container">
    <div class="bs-example margin-bottom main_grad mt-5 rounded-3">
        <ul class="nav nav-tabs mb-3" id="myTab" >
            <li class="nav-item" >
                    <a href="#airport" class="nav-link text-danger active" data-bs-toggle="tab"> Airport </a>
            </li>
            <li class="nav-item" >
                    <a href="#airline" class="nav-link text-danger" data-bs-toggle="tab"> Airline </a>
            </li>
            
            <li class="nav-item" >
                    <a href="#flight" class="nav-link text-danger" data-bs-toggle="tab"> Flight </a>
            </li>
            <li class="nav-item" >
                    <a href="#route" class="nav-link text-danger" data-bs-toggle="tab"> Route </a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div
                class="tab-pane fade active show"
                id="airport"
                
            >
            <!-- seat selection -->
                <div>
                <h2> Choose seats by clicking the corresponding seat in the layout below:</h2>
    <div id="holder"> 
        <ul  id="place">
        </ul>    
    </div>
    <div style="float:left;"> 
    <ul id="seatDescription">
        <li style="background:url('images/available_seat_img.gif') no-repeat scroll 0 0 transparent;">Available Seat</li>
        <li style="background:url('images/booked_seat_img.gif') no-repeat scroll 0 0 transparent;">Booked Seat</li>
        <li style="background:url('images/selected_seat_img.gif') no-repeat scroll 0 0 transparent;">Selected Seat</li>
    </ul>
    </div>
        <div style="clear:both;width:100%">
        <input type="button" id="btnShowNew" value="Show Selected Seats" />
        <input type="button" id="btnShow" value="Show All" />           
        </div>
                </div>
            <!-- seat selection code ended  -->
			<!-- Airline details end -->
            <div class="col-12 col-md-8 mt-3">
<fieldset class="formRow">
<div class="formRow--item">
<label for="traveller" class="formRow--input-wrapper js-inputWrapper active">
<input type="text" name="traveller" id="traveller" class="formRow--input js-input travellerDetails" autocomplete="off" value="1 Travellers, Economy" readonly="" placeholder="" fdprocessedid="iz6x27" aria-invalid="false"><span class="placeholder">Travellers &amp; Cabin</span>
<i class="zmdi zmdi-account-circle zmdi-hc-2x icf"></i>
 <i class="zmdi zmdi-chevron-down zmdi-hc-2x arrowDwn"></i>
</label>
</div>
</fieldset>
<div class="pax-popover" style="position: absolute; display: none;">
<i class="zmdi zmdi-hc-2x zmdi-close" style="position: absolute;right: 3px;top: -3px;z-index:1; " onclick="$('.pax-popover').hide();"></i>
<div class="d-flex justify-content-start">
<div class="p-2 pt-3 font-weight-bold">Adult</div>
<div class="ml-auto p-2">
<div class="input-group">
<span class="input-group-btn">
<button type="button" class="btn operator btn-sm btn-primary mr-1 p-1" data-type="minus" data-field="adult" fdprocessedid="ugs04l">
<i class="zmdi zmdi-hc-2x zmdi-minus-circle"></i>
</button>
</span>
<input type="text" name="adult" readonly="readonly" class="form-control paxCountField" value="1" min="1" max="9" fdprocessedid="joe4k">
<span class="input-group-btn">
<button type="button" class="btn operator btn-sm btn-primary ml-1 p-1" data-type="plus" data-field="adult" fdprocessedid="xz392d">
<i class="zmdi zmdi-hc-2x zmdi-plus-circle"></i>
</button>
</span>
</div>
</div>
</div>
<div class="d-flex justify-content-start">
<div class="p-2 pt-3 font-weight-bold">Child</div>
<div class="ml-auto p-2">
<div class="input-group" style="margin-top:10px;">
<span class="input-group-btn">
<button type="button" class="btn operator btn-sm btn-primary mr-1 p-1" data-type="minus" data-field="child" fdprocessedid="pnvqpx">
<i class="zmdi zmdi-hc-2x zmdi-minus-circle"></i>
</button>
</span>
<input type="text" name="child" readonly="readonly" class="form-control paxCountField" value="1" min="0" max="6" fdprocessedid="2agnk7">
<span class="input-group-btn">
<button type="button" class="btn operator btn-sm btn-primary ml-1 p-1" data-type="plus" data-field="child" fdprocessedid="jdxdga">
<i class="zmdi zmdi-hc-2x zmdi-plus-circle"></i>
</button>
</span>
</div>
</div>
</div>
<div class="d-flex justify-content-start">
<div class="p-2 pt-3 font-weight-bold">Infant</div>
 <div class="ml-auto p-2">
<div class="input-group" style="margin-top:10px;">
<span class="input-group-btn">
<button type="button" class="btn operator btn-sm btn-primary mr-1 p-1" data-type="minus" data-field="infant" fdprocessedid="a43skd">
<i class="zmdi zmdi-hc-2x zmdi-minus-circle"></i>
</button>
</span>
<input type="text" name="infant" readonly="readonly" class="form-control paxCountField" value="0" min="0" max="6" fdprocessedid="oca4v">
<span class="input-group-btn">
<button type="button" class="btn operator btn-sm btn-primary ml-1 p-1" data-type="plus" data-field="infant" fdprocessedid="y50usm">
<i class="zmdi zmdi-hc-2x zmdi-plus-circle"></i>
</button>
</span>
</div>
</div>
</div>
<div class="d-flex justify-content-start">
<div class="p-2 pt-3 font-weight-bold">Class</div>
<div class="ml-auto p-2">
<select name="classi" id="classi" class="form-control form-control-sm" fdprocessedid="2qvngc" aria-invalid="false">
<option value="economy">Economy</option>
<option value="business" selected="selected">Business</option>
<option value="first">First</option>
</select>
</div>
</div>
<div class="text-center">

<input type="button" name="done" class="btn btn-danger bgshade-2 font-weight-bold" onclick="$('.pax-popover').hide();" style="width: 150px;" value="Done" fdprocessedid="n5jvbg">
</div>
</div>
<input type="hidden" name="adult" id="adult" value="1">
<input type="hidden" name="child" id="child" value="1">
<input type="hidden" name="infant" id="infant" value="0">
<input type="hidden" name="class" id="class" value="economy">
<input type="hidden" name="source" id="source" value="direct">
<input type="hidden" name="pgn" id="pgn" value="results">
</div>
            <div
                class="tab-pane fade"
                id="route"
                role="tabpanel"
                aria-labelledby="contact-tab"
            >
                <div><h2 class="text-center text-light">ROUTE</h2></div>
                <div class="container mt-3 w-50">
                    <div class="d-flex justify-content-evenly">
                        <div class="mt-4">
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <select name="flight_id" id="">
                                        <option value="" disabled selected>
                                            Select Flight
                                        </option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="dept_date" class="text-light"
                                        >Departure Date</label
                                    >
                                    <input
                                        type="date"
                                        placeholder="Departure Date"
                                        name="dept_date"
                                        class="form-control mt-1"
                                        required
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="dept_time" class="text-light"
                                        >Departure Time</label
                                    >
                                    <input
                                        type="time"
                                        placeholder="Departure Date"
                                        name="dept_time"
                                        class="form-control mt-1"
                                        required
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="arr_date" class="text-light"
                                        >Arrival Date</label
                                    >
                                    <input
                                        type="date"
                                        placeholder="Arrival Date"
                                        name="arr_date"
                                        class="form-control mt-1"
                                        required
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="arr_time" class="text-light"
                                        >Arrival Time</label
                                    >
                                    <input
                                        type="time"
                                        placeholder="Arrival Time"
                                        name="arr_time"
                                        class="form-control mt-1"
                                        required
                                    />
                                </div>
                            </form>
                        </div>
                        <div class="p-5 row align-self-center">
                            <div>
                                <input
                                    type="submit"
                                    value="ADD"
                                    class="btn btn-primary w-50 p-0"
                                />
                            </div>
                            <div class="mt-3">
                                <input
                                    type="submit"
                                    value="Update"
                                    class="btn btn-success w-50 p-0"
                                />
                            </div>
                            <div class="mt-3">
                                <input
                                    type="submit"
                                    value="Delete"
                                    class="btn btn-danger w-50 p-0"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 w-100 mx-auto">
                    <table
                        class="table table-primary table-striped border border-2"
                    >
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Departure Date</th>
                                <th>Departure Time</th>
                                <th>Arrival Date</th>
                                <th>Arrival Time</th>
                                <th>Flight Name</th>
                                <th>Action</th>
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
                                <td>
                                    <a
                                        class="btn btn-success text-light edit"
                                        href=""
                                        >Edit</a
                                    >
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div
                class="tab-pane fade"
                id="contact"
                role="tabpanel"
                aria-labelledby="contact-tab"
            >
                <table
                    class="table table-primary table-striped border border-2"
                >
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
                            <td>
                                <a class="btn btn-danger" href="" onclick=""
                                    >Delete</a
                                >
                            </td>
                            <!-- ?=$emp->Id?
                        ?php echo $emp->Id? -->
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
require "footer.php";
?>
