<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Nav Item - Inicio -->
	<li class="nav-item">
		<a class="nav-link" href="#">
			<i class="fas fa-home fa-2xl"></i>
			<span>Inicio</span></a>
	</li>	

	<!-- Nav Item - Servicios -->
	<li class="nav-item">
		<a class="nav-link" href="charts.html">
			<i class="fas fa-fw fa-cog"></i>
			<span>Servicios</span></a>
	</li>

	<!-- Nav Item - Conoce -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
			aria-expanded="true" aria-controls="collapseTwo">
			<i class="fas fa-fw fa-search"></i>
			<span>Conoce</span>
		</a>
		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Opciones:</h6>
				<a class="collapse-item" href="buttons.html">Opción 1</a>				
			</div>
		</div>
	</li>

	<!-- Nav Item - Sitios -->
	<li class="nav-item">
		<a class="nav-link" href="charts.html">
			<i class="fas fa-fw fa-desktop"></i>
			<span>Sitios</span></a>
	</li>	

	<!-- Nav Item - Descargas -->
	<li class="nav-item">
		<a class="nav-link" href="charts.html">
			<i class="fas fa-fw fa-download"></i>
			<span>Descargas</span></a>
	</li>

	<!-- Nav Item - Cumpleaños -->
	<li class="nav-item">
		<a class="nav-link" href="charts.html">
			<i class="fas fa-fw fa-birthday-cake"></i>
			<span>Cumpleaños</span></a>
	</li>	

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>           

</ul>
<!-- End of Sidebar -->

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">¿Deseas cerrar sesión?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Indica "Si" para finalizar tu sesión actual.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
				<a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Si</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
					@csrf
				</form>
			</div>
		</div>
	</div>
</div>