<div class="wrapper">

	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
		<!-- Left navbar links -->

		<!-- SEARCH FORM -->
		<form class="form-inline ml-3">
			<div class="input-group input-group-sm">
				<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
				<div class="input-group-append">
					<button class="btn btn-navbar" type="submit">
						<i class="fa fa-search"></i>
					</button>
				</div>
			</div>
		</form>

		<!-- Right navbar links -->
	</nav>
	<!-- /.navbar -->

	<!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Brand Logo -->
		<a href="index3.html" class="brand-link">
			<img src="<?=base_url()."public/dist/img/AdminLTELogo.png"?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
			style="opacity: .8">
			<span class="brand-text font-weight-light">Virtual T</span>
		</a>

		<!-- Sidebar -->
		<div class="sidebar">

			<!-- Sidebar Menu -->
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

					<li class="nav-item has-treeview">
						<a href="#" class="nav-link">
							<i class="nav-icon fa fa-dashboard"></i>
							<p>
								Productos
								<i class="right fa fa-angle-left"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="<?=base_url()."index.php/Producto/index"?>" class="nav-link">
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Crear Producto</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?=base_url()."index.php/Producto/edit"?>" class="nav-link">
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Editar Producto</p>
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="<?=base_url()."index.php/Venta/index"?>" class="nav-link">
							<i class="nav-icon fa fa-barcode"></i>
							<p>
								Ventas
							</p>
						</a>
					</li>

					<li class="nav-item has-treeview">
						<a href="#" class="nav-link">
							<i class="nav-icon fa fa-shopping-cart	"></i>
							<p>
								Compras
								<i class="fa fa-angle-left right"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="<?=base_url()."index.php/Compra/catalogo"?>" class="nav-link">
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Catalogo</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?=base_url()."index.php/Compra/index"?>" class="nav-link">
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Mis Compras</p>
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
			<!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	</aside>
	<div class="content-wrapper">
		<section class="content">
			<div class="container-fluid">
				<div class="row">