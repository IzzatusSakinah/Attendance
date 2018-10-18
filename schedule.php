<?php
include('function.php');
?>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PB Attendance</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles --> 
        <link rel="stylesheet" type="text/css" href="css/style.css">      
 
        <!-- Side Navigation -->
        <?php
        include('sidenav.php');
        ?>

        <!-- Top header -->
        <?php
        include('header.php');
        ?>

        
        <!-- Page Content -->
        <div class="box-organize">
            <div class="box-class">
                <div class="boxa"></div>
                    <div id="image-1">
                        <a href="schedule.php"><img src="img/class.png" style="width:80px; height:80px;"></a>
                    </div>
                        <p class="A-heading">Schedule</p>
            </div>
           
        <div class="box-lecture">
            <a href="session.php"><img id="image-2" src="img/lecture.png" style="width:80px; height:80px;"></a>
                <p class="B-heading">Session</p>
        </div>
        </div> <!-- End Content -->

       
       <!-- Table -->
        <table class="table-organize">
            <tr>
                <th>DATE/TIME</th>
                <th colspan="2">8.00AM - 10.00AM</th>
                <th colspan="2">10.30AM - 12.00PM</th>
                <th></th>
                <th colspan="2">1.00PM - 2.30PM</th>
                <th colspan="2">2.30PM - 4.00PM</th>
            </tr>
            <tr>
                <td>MONDAY</td>
                <td colspan="2"></td>
                <td colspan="2"></td>
                <td>B</td>
                <td colspan="2"></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>TUESDAY</td>
                <td colspan="2"><p>SAD</p>
                                <p>DiICT(INS)0216/02</p>
                                <p>Room 9.04</p>
                </td>
                <td colspan="2"></td>
                <td>R</td>
                <td colspan="2"><p>SAD</p>
                                <p>DiICT(NWS)0216/02</p>
                                <p>Room 6.04</p></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>WEDNESDAY</td>
                <td colspan="2"></td>
                <td colspan="2"></td>
                <td>E</td>
                <td colspan="2"></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>THURSDAY</td>
                <td colspan="2"></td>
                <td colspan="2"><p>SAD</p>
                                <p>DiICT(INS)0216/02</p>
                                <p>Room 9.04</p></td>
                <td>A</td>
                <td colspan="2"></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>SATURDAY</td>
                <td colspan="2"></td>
                <td colspan="2"></td>
                <td>K</td>
                <td colspan="2"><p>SAD</p>
                                <p>DiICT(NWS)0216/02</p>
                                <p>Room 6.04</p></td>
                <td colspan="2"></td>
            </tr>
        </table> <!-- End Table -->
        
        
        
        <!-- Script Dropdown -->
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
        </script> <!-- End Script Dropdown -->



    </body>
</html>
