<?php require_once('layout/header.php'); ?>

<main id="main" class="main">

	<div class="pagetitle">
		<h1>Dashboard</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item active">Dashboard</li>
			</ol>
		</nav>
	</div>
	<!-- End Page Title -->

	<section class="section dashboard">
		<div class="row">
			<div class="col-xxl-4 col-md-4">
				<div class="card info-card card-type-a">
					<div class="card-body">
						<h5 class="card-title">Customers <span>| Today</span></h5>
						<div class="d-flex align-items-center">
							<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
								<i class="bi bi-people-fill"></i>
							</div>
							<div class="ps-3">
								<h6><?= $Dashboard['Customers'] ?></h6>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xxl-4 col-md-4">
				<div class="card info-card card-type-b">
					<div class="card-body">
						<h5 class="card-title">Products <span>| Today</span></h5>
						<div class="d-flex align-items-center">
							<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
								<i class="bi bi-gift"></i>
							</div>
							<div class="ps-3">
								<h6><?= $Dashboard['Products'] ?></h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xxl-4 col-md-4">
				<div class="card info-card card-type-c">
					<div class="card-body">
						<h5 class="card-title">Category <span>| Today</span></h5>
						<div class="d-flex align-items-center">
							<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
								<i class="bi bi-cart-dash"></i>
							</div>
							<div class="ps-3">
								<h6><?= $Dashboard['Category'] ?></h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title" style="text-align: center;">View Customer Details</h5>
						<br>
						<div style="overflow-x:auto;">
							<table class="table table-striped" style="text-align:center; white-space:nowrap;font-size: 15px; " id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th scope="col">ID</th>
										<th scope="col">Username</th>
										<th scope="col">Password</th>
										<th scope="col">Name</th>
										<th scope="col">Email</th>
										<th scope="col">Address</th>
										<th scope="col">Date of Birth</th>
										<th scope="col">Phone Number</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th scope="col">ID</th>
										<th scope="col">Username</th>
										<th scope="col">Password</th>
										<th scope="col">Name</th>
										<th scope="col">Email</th>
										<th scope="col">Address</th>
										<th scope="col">Date of Birth</th>
										<th scope="col">Phone Number</th>
									</tr>
								</tfoot>
								<tbody>
									<?php
									foreach ($Dashboard_table as $value) {
										echo "<tr>";
										echo "<td>{$value->id}</td>";
										echo "<td>{$value->username}</td>";
										echo "<td>{$value->password}</td>";
										echo "<td>{$value->name}</td>";
										echo "<td>{$value->email}</td>";
										echo "<td>{$value->address}</td>";
										echo "<td>{$value->dob}</td>";
										echo "<td>{$value->phone_number}</td>";
										echo "</tr>";
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<!-- End #main -->
<?php require_once('layout/footer.php'); ?>


