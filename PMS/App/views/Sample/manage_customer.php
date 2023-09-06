<?php require_once('layout/header.php'); ?>

<main id="main" class="main">

	<div class="pagetitle">
		<h1>Update Customer</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item active">Update Customer</li>
			</ol>
		</nav>
	</div>
	<!-- End Page Title -->

	<section class="section dashboard">

		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title" style="text-align: center;">Update Customer Details</h5>
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
                                        <th scope="col">Date Of Birth</th>
                                        <th scope="col">Phone Number</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php if (empty($customer_table)) : ?>
										<tr>
											<td colspan="5">- No Data Available In Table -</td>
										</tr>
									<?php else : ?>
										<?php foreach ($customer_table as $value) : ?>
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
<script>
	$(document).ready(function() {
		$('#dataTable').DataTable();
	});
</script>

<script>
	$(document).ready(function() {
		$('#dataTable').Tabledit({
			deleteButton: false,
			editButton: false,
			columns: {
				identifier: [0, 'id'],
				editable: [
					[1, 'username'],
					[2, 'password']
                    [3, 'name'],
					[4, 'email']
                    [5, 'address'],
					[6, 'dob']
                    [7, 'phone_number'],
					
				]
			},
			hideIdentifier: false,
			url: '<?=BASE?>/Sample/manage_customer'
		});
	});
</script>

<?php require_once('layout/footer.php'); ?>