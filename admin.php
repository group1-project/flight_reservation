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
    <div class="bd-example margin-bottom main_grad mt-5 rounded-3">
        <ul class="nav nav-tabs mb-3" id="myTab" role="tablist" class="">
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link active text-danger"
                    id="home-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#airport"
                    type="button"
                    role="tab"
                    aria-controls="home"
                    aria-selected="true"
                >
                    Airport
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link text-danger"
                    id="profile-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#airline"
                    type="button"
                    role="tab"
                    aria-controls="profile"
                    aria-selected="false"
                >
                    Airline
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link text-danger"
                    id="contact-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#flight"
                    type="button"
                    role="tab"
                    aria-controls="contact"
                    aria-selected="false"
                >
                    Flight
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link text-danger"
                    id="contact-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#route"
                    type="button"
                    role="tab"
                    aria-controls="contact"
                    aria-selected="false"
                >
                    Route
                </button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div
                class="tab-pane fade active show"
                id="airport"
                role="tabpanel"
                aria-labelledby="home-tab"
            >
                <div>
                    <h2 class="text-center text-light">AIRPORT DETAILS</h2>
                </div>
                <div class="container mt-3 w-50">
                    <div class="d-flex justify-content-evenly">
                        <div class="mt-4">
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <input
                                        type="text"
                                        placeholder="Airport Name"
                                        name="airport_name"
                                        class="form-control"
                                        required
                                    />
                                </div>
                                <div class="mb-3">
                                    <input
                                        type="text"
                                        placeholder="Abbr"
                                        name="abbr"
                                        class="form-control"
                                        required
                                    />
                                </div>
                                <div class="mb-3">
                                    <select name="s_id" id="">
                                        <option value="" disabled selected>
                                            Select State
                                        </option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="p-4">
                            <div>
                                <input
                                    type="submit"
                                    value="ADD"
                                    class="btn btn-primary w-100 p-0"
                                />
                            </div>
                            <div class="mt-3">
                                <input
                                    type="submit"
                                    value="Update"
                                    class="btn btn-success w-100 p-1"
                                />
                            </div>
                            <div class="mt-3">
                                <input
                                    type="submit"
                                    value="Delete"
                                    class="btn btn-danger w-100 p-1"
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
                                <th>Airport Name</th>
                                <th>Abbr</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
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
			<!-- Airline details start -->
            <div
                class="tab-pane fade"
                id="airline"
                role="tabpanel"
                aria-labelledby="profile-tab"
            >
                <div>
                    <h2 class="text-center text-light">AIRLINE DETAILS</h2>
                </div>
                <div class="container mt-3 w-50">              
					<form action="./airlinecrud.php" method="POST">
						<div class="d-flex justify-content-evenly">
							<div class="mt-4">
								<div class="mb-3">
									<?php if($_SESSION['airline']): ?>
									<input
										type="text"
										placeholder="Airline Name"
										name="airline_name"
										class="form-control"
										value="<?=$airline_name; ?>"
										required
									/>
									<?php
										session_destroy(); 
										endif;
									   ?>
									<input
										type="text"
										placeholder="Airline Name"
										name="airline_name"
										id="airline_name"
										class="form-control"
										required
									/>
								</div>
							</div>
							<div class="p-4"> 
								<div>
									<input
										type="submit"
										value="ADD"
										class="btn btn-primary w-100 p-1"
										name="add"
									/>
								</div>
								<!-- <div class="mt-3">
									<input
										type="submit"
										value="Update"
										class="btn btn-success w-100 p-1"
										name="update"
									/>
								</div> -->
								<div class="mt-3">
									<input
										type="submit"
										value="Delete"
										class="btn btn-danger w-100 p-1"
										name="delete"
									/>
								</div>
							</div>
						</div>
					</form>                    
                </div>
                <div class="mt-3 w-100 mx-auto">
                    <table
                        class="table table-primary table-striped border border-2"
                    >
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Airline Name</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
						<?php
						$id=1;
						foreach ($airlines as $airline): ?>
                            <tr>
                                <td><?=$id++; ?></td>
                                <td><?=$airline->airline_name; ?></td>

                                <td>
                                    <a
                                        class="btn btn-success text-light edit"
                                        href="./airlinecrud.php?name=<?=$airline->airline_name; ?>"
                                        >Edit</a
                                    >
                                </td>
								<!-- <td>
									<form action="" method="POST" >
										<input type="submit" class="btn btn-success text-light edit" value="Edit">
									</form>
								</td> -->
                            </tr>
						<?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
			<!-- Airline details end -->
            <div
                class="tab-pane fade"
                id="flight"
                role="tabpanel"
                aria-labelledby="contact-tab"
            >
                <div>
                    <h2 class="text-center text-light">FLIGHT DETAILS</h2>
                </div>
                <div class="container mt-3 w-50">
                    <div class="d-flex justify-content-evenly">
                        <div class="mt-4">
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <input
                                        type="text"
                                        placeholder="Flight Name"
                                        name="flight_name"
                                        class="form-control"
                                        required
                                    />
                                </div>
                                <div class="mb-3">
                                    <input
                                        type="text"
                                        placeholder="Total Seat"
                                        name="total_seat"
                                        class="form-control"
                                        required
                                    />
                                </div>
                                <div class="mb-3">
                                    <select name="a_id" id="">
                                        <option value="" disabled selected>
                                            Select Airline
                                        </option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="p-4">
                            <div>
                                <input
                                    type="submit"
                                    value="ADD"
                                    class="btn btn-primary w-100 p-1"
                                />
                            </div>
                            <div class="mt-3">
                                <input
                                    type="submit"
                                    value="Update"
                                    class="btn btn-success w-100 p-1"
                                />
                            </div>
                            <div class="mt-3">
                                <input
                                    type="submit"
                                    value="Delete"
                                    class="btn btn-danger w-100 p-1"
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
                                <th>Flight Name</th>
                                <th>Total Seat</th>
                                <th>Airline</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
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
