<?php require_once('layout/header.php'); ?>

<main id="main" class="main">

	<div class="pagetitle">
		<h1>Product List</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item active">Product List</li>
			</ol>
		</nav>
	</div>
	<!-- End Page Title -->

	<section class="section dashboard">

		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title" style="text-align: center;">Product List</h5>
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
                                        <th scope="col">Quntity</th>
										<th scope="col">Expire Date</th>
                                        <th scope="col">Manufacture Date</th>
										<th scope="col">Price</th>
									</tr>
								</thead>
								
								<tbody>
									<?php if (empty($product_management)) : ?>
										<tr>
											<td colspan="5">- No Data Available In Table1 -</td>
										</tr>
									<?php else : ?>
										<?php foreach ($product_management as $value) : ?>
											<tr>
												<td><?= $value->i_id?></td>
												<td><?= $value->i_name?></td>
												<td><?= $value->i_des?></td>
												<td><?= $value->i_cate?></td>
                                                <td><?= $value->i_sub_cate?></td>
                                                <td><?= $value->i_attach ?></td>
                                                <td><?= $value->i_stock?></td>
                                                <td><?= $value->i_brand?></td>
                                                <td><?= $value->i_expire_date?></td>
                                                <td><?= $value->i_mani_date?></td>
                                                <td><?= $value->price ?></td>
												<td>
													<a href="<?= BASE ?>Sample/update_product?i_id=<?= $value->i_id ?>"><i class="bi bi-pencil"></i></a> |
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
<?php require_once('layout/footer.php'); ?>


                                        