<?php require_once('layout/header.php'); ?>

<main id="main" class="main">

	<div class="pagetitle">
		<h1>Customer List</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item active">Customer List</li>
			</ol>
		</nav>
	</div>
	<!-- End Page Title -->

	<section class="section dashboard">

		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title" style="text-align: center;">Customer Details</h5>
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
								
								<tbody>
									<?php if (empty($customer_management)) : ?>
										<tr>
											<td colspan="5">- No Data Available In Table -</td>
										</tr>
									<?php else : ?>
										<?php foreach ($customer_management as $value) : ?>
											<tr>
												<td><?= $value->id ?></td>
												<td><?= $value->username ?></td>
												<td><?= $value->password ?></td>
												<td><?= $value->name ?></td>
                                                <td><?= $value->email ?></td>
                                                <td><?= $value->address ?></td>
                                                <td><?= $value->dob ?></td>
                                                <td><?= $value->phone_number ?></td>
												<td>
													<a href="<?= BASE ?>Sample/update_customer?id=<?= $value->id ?>"><i class="bi bi-pencil"></i></a> |
													<a onclick="return confirm('Are you sure you want to delete?')" href="<?= BASE ?>Sample/delete_customer?Delete=<?= $value->id ?>"><i class="bi bi-trash3-fill"></i></a>
												</td>
											</tr>
										<?php endforeach; ?>
									<?php endif; ?>
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


                                        