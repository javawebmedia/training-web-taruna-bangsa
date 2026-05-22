<body>
	<div class="container dasbor p-5">
		<!-- header -->
		<nav class="navbar navbar-expand-lg bg-success">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Navbar</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link text-white active" aria-current="page" href="dasbor.php">Dashboard</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="user.php">Pengguna</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Master
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Action</a></li>
								<li><a class="dropdown-item" href="#">Another action</a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
							</ul>
						</li>
						<!-- area akun -->
						<li class="nav-item">
							<a class="nav-link text-warning" aria-disabled="true">
								<?php echo $_SESSION['nama'] ?> 
								(<?php echo $_SESSION['akses_level'] ?>)
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-danger active" aria-current="page" href="index.php?logout">Logout</a>
						</li>
						<!-- end area akun -->
					</ul>
					<form class="d-flex" role="search">
						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
						<button class="btn btn-outline-warning" type="submit">Search</button>
					</form>
				</div>
			</div>
		</nav>
		<!-- end header -->
		<div class="container mb-3 mt-3">