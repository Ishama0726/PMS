<?php require_once('layout/header.php'); ?>

<main id="main" class="main">

	<div class="pagetitle">
		<h1>Update Product</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item active">Update Product</li>
			</ol>
		</nav>
	</div>
	<!-- End Page Title -->

	<section class="section dashboard">

		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title" style="text-align: center;">Update Product Details</h5>
						<br>
						<div style="overflow-x:auto;">
							<table class="table table-striped" style="text-align:center; white-space:nowrap;font-size: 15px; " id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th scope="col">ID</th>
										<th scope="col">Name</th>
										<th scope="col">Description</th>
										<th scope="col">Category</th>
                                        <th scope="col">Sub Category</th>
                                        <th scope="col">Attachment</th>
                                        <th scope="col">Stock</th>
                                        <th scope="col">Brand</th>
										<th scope="col">Quantity</th>
                                        <th scope="col">Expire Date</th>
                                        <th scope="col">Manufacturer Date</th>
										<th scope="col">Price</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php if (empty($item_table)) : ?>
										<tr>
											<td colspan="5">- No Data Available In Table -</td>
										</tr>
									<?php else : ?>
										<?php foreach ($item_table as $value) : ?>
											<tr>
												<td><?= $value->i_id  ?></td>
												<td><?= $value->i_name ?></td>
												<td><?= $value->i_des ?></td>
												<td><?= $value->i_cate ?></td>
                                                <td><?= $value->i_sub_cate ?></td>
                                                <td><?= $value->i_attach ?></td>
                                                <td><?= $value->i_stock ?></td>
                                                <td><?= $value->i_brand ?></td>
												<td><?= $value->i_quntity?></td>
                                                <td><?= $value->i_expire_date?></td>
												<td><?= $value->i_mani_date?></td>
                                                <td><?= $value->price?></td>
												<td>
													<a onclick="return confirm('Are you sure you want to delete?')" href="<?= BASE ?>Sample/delete_product?Delete=<?= $value->i_id ?>"><i class="bi bi-trash3-fill"></i></a>
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
				identifier: [0,'i_id'],
				editable: [
					[1, 'i_name'],
					[2, 'i_des']
                    [3, 'i_cate'],
					[4, 'i_sub_cate']
                    [5, 'i_attach'],
					[6, 'i_stock']
                    [8, 'i_brand'],
					[9, 'i_quntity']
                    [10, 'i_expire_date'],
					[11, 'i_mani_date']
                    [12, 'price'],
					
				]
			},
			hideIdentifier: false,
			url: '<?=BASE?>/Sample/manage_product'
		});
	});
</script>

<?php require_once('layout/footer.php'); ?>