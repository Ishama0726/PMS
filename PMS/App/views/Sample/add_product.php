<?php require_once('layout/header.php'); ?>
<main id="main" class="main">
	<div class="pagetitle">
		<h1>Product</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item active">New Product</li>
			</ol>
		</nav>
	</div>
	<!-- End Page Title -->
	<section class="section dashboard">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">New Product</h5>
						<!-- Vertical Form -->
						<form class="row g-3" method="POST">

							<div class="col-12">
								<label for="inputName" class="form-label">Product Name</label>
								<input type="Text" class="form-control" name="inputName" id="inputName">
							</div>
							<div class="col-12">
								<label for="inputDescription" class="form-label">Description</label>
								<input type="Text" class="form-control" name="inputDescription" id="inputDescription" >
							</div>
                            <div class="col-12">
								<label for="inputCategory" class="form-label">Category</label>
								<input type="Text" class="form-control" name="inputCategory" id="inputCategory" >
							</div>
                            <div class="col-12">
								<label for="inputSubCategory" class="form-label">Sub Category</label>
								<input type="Text" class="form-control" name="inputSubCategory" id="inputSubCategory" >
							</div>
                            <div class="col-12">
								<label for="inputAttachment" class="form-label">Attachment</label>
								<input type="Text" class="form-control" name="inputAttachment" id="inputAttachment" >
							</div>
                            <div class="col-12">
								<label for="inputStock" class="form-label">Stock</label>
								<input type="Text" class="form-control" name="inputStock" id="inputStock" >
							</div>
                            <div class="col-12">
								<label for="inputBrand" class="form-label">Brand</label>
								<input type="Text" class="form-control" name="inputBrand" id="inputBrand" >
							</div>
							<div class="col-12">
								<label for="inputQuantity" class="form-label">Quantity</label>
								<input type="number" class="form-control" name="inputQuantity" id="inputQuantity" >
							</div>
							<div class="col-12">
								<label for="inputExpireDate" class="form-label">Expire Date</label>
								<input type="date" class="form-control" name="inputExpireDate" id="inputExpireDate" >
							</div>
							<div class="col-12">
								<label for="inputManufacturerDate" class="form-label">Manufacturer Date</label>
								<input type="date" class="form-control" name="inputManufacturerDate" id="inputManufacturerDate" >
							</div>
							<div class="col-12">
								<label for="inputPrice" class="form-label">Price</label>
								<input type="number" class="form-control" name="inputPrice" id="inputPrice" >
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