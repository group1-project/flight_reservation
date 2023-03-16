<?php
require "user_header.php";
require "../connection.php";
?>
<!-- Image and text -->
<div class="container-fluid main_grad m-0 p-0">
	<nav
		class="navbar row justify-content-around justify-content-start justify-content-lg-around p-0 m-0 py-3 sticky-top"
		id="navigate"
	>
		<div class="col-12 text-center text-lg-start col-lg-10 p-0 m-0">
			<a class="navbar-brand" href="#">
				<img
					src="../images/logo2.png"
					alt="Logo"
					class="d-inline-block rounded-5 firstwidth"
				/>
				<span class="text-light fw-bold"> AMATMA </span>
				<span class="text-danger">Airlines</span>
			</a>
		</div>
	</nav>
	<!-- dashboard dropdown starts here -->
	<div
		class="col-12 col-lg-11 d-flex p-0 m-0 justify-content-center justify-content-lg-end gap-3 mt-3 mt-lg-0"
	>
		<form action="" method="POST">
    		<div class="dropdown">
      			<img src="" class="" alt="profile pic">
  				<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    				Hi<?php ?> !
  				</button>
  				<ul class="dropdown-menu">
    				<li><a class="dropdown-item" href="user_profile.php">My profile</a></li>
    				<li><a class="dropdown-item" href="">Logout</a></li>
  				</ul>
			</div>
		</form>
	</div>
	<!-- dashboard dropdown stops here -->
	<div class="container-fluid">
		<div class="row justify-content-center m-0 p-0">
			<p class="header_fond text-center m-0 pb-0 my-3 my-lg-0 pb-lg-5">
				We make the dream of your journey!
			</p>
			<div
				class="col-12 col-lg-6 m-0 p-0 rounded-5 bg-light shadow row justify-content-center"
			>
				<div
					class="col-12 col-lg-12 row justify-content-center m-0 p-0 py-0 py-lg-2"
				>
					<div class="col-4 col-lg-3 text-center m-0 p-0">
						<input
							type="radio"
							name="travel_type"
							id="oneway"
						/><label for="oneway" class="text-muted fw-bold"
							>ONEWAY</label
						>
					</div>
					<div class="col-4 col-lg-3 text-center m-0 p-0">
						<input
							type="radio"
							name="travel_type"
							id="roundtrip"
						/><label for="roundtrip" class="text-muted fw-bold"
							>ROUND TRIP</label
						>
					</div>
					<div class="col-4 col-lg-3 text-center m-0 p-0">
						<input
							type="radio"
							name="travel_type"
							id="multicity"
						/><label for="multicity" class="text-muted fw-bold"
							>MULTI CITY</label
						>
					</div>
				</div>
			</div>
		</div>
	</div>
	<form action="" method="POST">
		<div class="row justify-content-center m-0 p-0">
			<div
				class="col-12 col-lg-10 m-0 p-0 rounded-3 bg-white mt-5 mb-3 shadow row justify-content-center py-3"
			>
				<div class="col-8 col-lg-3 text-center py-3 my-3 border">
					<p class="text-muted fw-bold">FROM</p>
					<input
						type="text"
						id="myInput"
						list="myList"
						name="myInput"
						class="py-2 my-3 border-0"
						placeholder="Enter a city or Airport"
					/>
					<datalist id="myList">
						<option value="Sharon"></option>
						<option value="Tibin"></option>
						<option value="shambu"></option>
						<option value="Option 4"></option>
						<option value="Option 5"></option>
					</datalist>
				</div>
				<div class="col-8 col-lg-3 text-center py-3 my-3 border">
					<p class="text-muted fw-bold">TO</p>
					<input
						type="text"
						id="myInput"
						list="myList"
						name="myInput"
						class="py-2 my-3 border-0"
						placeholder="Enter a city or Airport"
					/>
					<datalist id="myList">
						<option value="Option 1"></option>
						<option value="Option 2"></option>
						<option value="Option 3"></option>
						<option value="Option 4"></option>
						<option value="Option 5"></option>
					</datalist>
				</div>
				<div class="col-8 col-lg-2 text-center py-3 my-3 border">
					<p class="text-muted fw-bold">Departure</p>
					<input
						type="date"
						class="py-2 my-3 border-0"
						placeholder="Enter the date"
					/>
				</div>
				<div class="col-8 col-lg-3 text-center py-3 my-3 border">
					<p class="text-muted fw-bold">Travellers and classes</p>
				</div>
			</div>
		</div>
		<div class="row text-center pb-3 m-0 p-0">
			<div>
				<input
					type="submit"
					name="submit"
					id=""
					value="SEARCH"
					class="btn btn-outline-light fs-4"
				/>
			</div>
		</div>
	</form>	

	<footer class="row justify-content-center bg-black mt-3 py-3 p-0 m-0">
		<div class="col-10 col-lg-4 p-0 m-0">
			<p class="text-center text-light py-3">
				visit our official website at www.amatma.com
			</p>
		</div>
		<div class="col-10 col-lg-4 p-0 m-0 text-center py-3">
			<a class="navbar-brand" href="#">
				<img
					src="../images/logo2.png"
					alt="Logo"
					class="d-inline-block rounded-5 wid"
				/>
				<span class="text-light fw-bold"> AMATMA </span>
				<span class="text-danger">Airlines</span>
			</a>
		</div>
		<div class="col-10 col-lg-4 p-0 m-0 py-3">
			<p class="text-center text-light m-0">
				&copy; 2023 AMATMA PVT. LTD.
			</p>
			<p class="text-center text-light m-0">Country India</p>
		</div>
	</footer>
</div>
<?php
  require "../footer.php";
?>
