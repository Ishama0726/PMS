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
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Update Product</h5>
						<!-- Vertical Form -->
						<form class="row g-3" method="POST">
							<div class="col-12">
								<label for="inputId" class="form-label">Product ID</label>
								<input type="hidden" name="inputId" value="<?= $product_management->i_id ?>">
								<input type="text" class="form-control" id="inputId" disabled value="<?= $product_management->i_id ?>">
							</div>
							<div class="col-12">
								<label for="inputProductName" class="form-label">Product Name</label>
								<input type="Text" class="form-control" name="inputName" id="inputProductName" value="<?= $product_management->i_name ?>">
							</div>
							<div class="col-12">
								<label for="inputDescription" class="form-label">Product Description</label>
								<input type="Text" class="form-control" name="inputDescription" id="inputDescription" value="<?= $product_management->i_des ?>">
							</div>
                            <div class="col-12">
								<label for="inputCategory" class="form-label">Product Category</label>
								<input type="Text" class="form-control" name="inputCategory" id="inputCategory" value="<?= $product_management->i_cate ?>">
							</div>
							<div class="col-12">
								<label for="inputSubCategory" class="form-label">Product Sub Category</label>
								<input type="Text" class="form-control" name="inputSubCategory" id="inputSubCategory" value="<?= $product_management->i_brand ?>">
							</div>
                            <div class="col-12">
								<label for="inputAttachment" class="form-label">Product Attachment</label>
								<input type="Text" class="form-control" name="inputAttachment" id="inputAttachment" value="<?= $product_management->i_attach ?>">
							</div>
                            <div class="col-12">
								<label for="inputStock" class="form-label">Product Stock</label>
								<input type="Text" class="form-control" name="inputStock" id="inputStock" value="<?= $product_management->i_stock ?>">
							</div>
                            <div class="col-12">
								<label for="inputBrand" class="form-label">Product Brand</label>
								<input type="Text" class="form-control" name="inputBrand" id="inputBrand" value="<?= $product_management->i_brand ?>">
							</div>
                            <div class="col-12">
								<label for="inputQuntity" class="form-label">Product Quntity</label>
								<input type="number" class="form-control" name="inputQuntity" id="inputQuntity" value="<?= $product_management->i_quntity ?>">
							</div>
							
                            <div class="col-12">
								<label for="inputExpireDate" class="form-label">Product Expire Date</label>
								<input type="date" class="form-control" name="inputExpireDate" id="inputExpireDate" placeholder="1234 Main St" value="<?= $product_management->i_quntity ?>">
							</div>
                            <div class="col-12">
								<label for="inputManufactureDate" class="form-label">Product Manufacture Date</label>
								<input type="date" class="form-control" name="inputManufactureDate" id="inputManufactureDate" placeholder="1234 Main St" value="<?= $product_management->i_mani_date ?>">
							</div>
                            <div class="col-12">
								<label for="inputPrice" class="form-label">Product Price</label>
								<input type="number" class="form-control" name="inputPrice" id="inputPrice" value="<?= $product_management->price ?>">
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-primary">Submit</button>
								<button type="reset" class="btn btn-secondary">Reset</button>
							</div>
						</form>
						<!-- Vertical Form -->
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<!-- End #main -->
<?php require_once('layout/footer.php'); ?>