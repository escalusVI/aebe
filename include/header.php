<header class="row">	
				<a href="index.php"><img src="images/logo.png" class="col-lg-3 col-md-2 col-xs-1 logo"></a>

	<div class="col-md-10 header">		

			<nav class="col-md-10 col-md-offset-1">
				<ul class="hidden-xs list-unstyled list-inline">
					<li class="col-lg-4 col-md-2"><a href="aPropos.php">A propos</a></li>
					<li class="col-lg-4 col-md-3"><a href="index.php">Evénements</a></li>
					<li class="col-lg-4 col-md-2"><a href="member.php">Membres</a></li>
					<li class="col-lg-4 col-md-2"><a href="cantine.php">Cantine</a></li>
					<li class="col-lg-4 col-md-2"><a href="reunion.php">Réunion</a></li>
					<li class="col-lg-4 col-md-3"><a href="info.php">Infos pratiques</a></li>
				</ul>

				    <!-- Navigation -->
				<a id="menu-toggle" href="#" class="visible-xs btn btn-dark btn-lg toggle">
				<span class="glyphicon glyphicon-menu-hamburger"></span>
				</a>
				<nav id="sidebar-wrapper">
					<ul class="sidebar-nav">
						<a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
						<li class="sidebar-brand">
							<a href="aPropos.php"  onclick = $("#menu-close").click(); >A propos</a>
						</li>
						<li>
							<a href="index.php" onclick = $("#menu-close").click(); >Evénements</a>
						</li>
						<li>
							<a href="member.php" onclick= $("#menu-close").click(); >Membres</a>
						</li>
						<li>
							<a href="cantine.php" onclick = $("#menu-close").click(); >Cantine</a>
						</li>
						<li>
							<a href="reunion.php" onclick = $("#menu-close").click(); >Réunion</a>
						</li>
						<li>
							<a href="info.php" onclick = $("#menu-close").click(); >Infos pratiques</a>
						</li>
						
					</ul>
				</nav>
				<script src="bootstrap/js/bootsrap.js"></script>
				<script src="bootstrap/js/jquery.js"></script>
				<script src="bootstrap/js/jquery-3.1.1.js"></script>
			<script>
				
			 // Closes the sidebar menu
				$("#menu-close").click(function(e) {
					e.preventDefault();
					$("#sidebar-wrapper").toggleClass("active");
				});

				// Opens the sidebar menu
				$("#menu-toggle").click(function(e) {
					e.preventDefault();
					$("#sidebar-wrapper").toggleClass("active");
				});

			</script>
			</nav>
	</div>
</header>