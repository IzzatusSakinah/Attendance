<div class="header-box">
      <div class="logout-box">
        <p class="username">
        	<?php
			if(isset($_SESSION['name'])){
				echo "".$_SESSION['name']."";
			}
			?>				
		</p>
        <?php
            if(isset($_SESSION['role'])){
                echo "<p class='user-status'>".$_SESSION['role']."</p>";
            }
            ?>
      </div>
      <p class="dashboardtext">Welcome to PB Attendance</p>


      <div class="dropdown">
                <img id="img-sort" class="dropbtn" src="img/sort.png" onclick="myFunction()" style="width: 9px; height: 9px;">
            <div id="myDropdown" class="dropdown-content">
                <a href="profile.php">Profile</a>
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </div>

    
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {

        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
            for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
        	}
    	}
	}
}
</script>        