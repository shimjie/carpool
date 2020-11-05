<a class="navbar-brand" href="#">Sharing</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
		  <ul class="navbar-nav">
			<li class="nav-item">
			  <a class="nav-link" href="index.php" >Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
			  <a class="nav-link active" href="carpool.php">Carpool</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="co-study.php">Co-Study</a>
			</li>
		  </ul>

		<ul class="navbar-nav ml-auto">

			<?php
				session_start();

				if(isset($_SESSION['user']) && !empty($_SESSION['user'])){

					echo "
					<li class='nav-item dropdown'>
						<a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
							Hi " .$_SESSION['user']. "
						</a>
						<div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownMenuLink'>
							<a class='dropdown-item' href='profile.php'>Personal Profile</a>
							<a class='dropdown-item' href='profile.php'>Change Password</a>
							<a class='dropdown-item' href='profile.php'>My Routine Application</a>
							<a class='dropdown-item' href='profile.php'>My Teaching Profile</a>
						</div>
					</li>
					
					<li class='nav-item'>
						<a class='nav-link' id = 'logoutBut' href='#' onclick='Logout()'>Logout</a>
					</li>";
				}
				else{
					echo "<li class='nav-item'>
					<a class='nav-link' id = 'loginBut' href='#'>Login</a>
					</li>";
				}
			?>
		</ul>

		</div>