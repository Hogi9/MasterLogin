<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
	<div class="app-brand demo">
		<a href="{{ url('/') }}" class="app-brand-link">
			<span class="app-brand-text demo menu-text text-capitalize fw-bolder ms-2">Master Login</span>
		</a>

		<a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
			<i class="bx bx-chevron-left bx-sm align-middle"></i>
		</a>
	</div>

	<div class="menu-inner-shadow"></div>

	<ul class="menu-inner py-1">
		<!-- Dashboard -->
		<li class="menu-item active">
			<a href="{{ url('/') }}" class="menu-link">
				<i class="menu-icon tf-icons bx bx-home-circle"></i>
				<div data-i18n="Analytics">Dashboard</div>
			</a>
		</li>

		<!-- Layouts -->
		<li class="menu-item">
			<a href="javascript:void(0);" class="menu-link menu-toggle">
				<i class="menu-icon tf-icons bx bx-layout"></i>
				<div data-i18n="Layouts">Layouts</div>
			</a>

			<ul class="menu-sub">
				<li class="menu-item">
					<a href="#" class="menu-link">
						<div data-i18n="Without menu">Testing</div>
					</a>
				</li>
				<li class="menu-item">
					<a href="layouts-without-navbar.html" class="menu-link">
						<div data-i18n="Without navbar">Without navbar</div>
					</a>
				</li>
				<li class="menu-item">
					<a href="layouts-container.html" class="menu-link">
						<div data-i18n="Container">Container</div>
					</a>
				</li>
				<li class="menu-item">
					<a href="layouts-fluid.html" class="menu-link">
						<div data-i18n="Fluid">Fluid</div>
					</a>
				</li>
				<li class="menu-item">
					<a href="layouts-blank.html" class="menu-link">
						<div data-i18n="Blank">Blank</div>
					</a>
				</li>
			</ul>
		</li>

		<li class="menu-header small text-uppercase">
			<span class="menu-header-text">Auth</span>
		</li>
		<li class="menu-item">
			<a href="javascript:void(0);" class="menu-link">
				<i class="menu-icon tf-icons bx bx-layout"></i>
				<div>Profile</div>
			</a>

		</li>
		<li class="menu-item">
			<a href="{{ url('logout') }}" class="menu-link">
				<i class="menu-icon tf-icons bx bx-copy"></i>
				<div>Logout</div>
			</a>
		</li>
	</ul>
</aside>
