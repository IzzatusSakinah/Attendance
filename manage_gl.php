<?php
include('function.php');
?>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
       
        <!-- Side Navigation -->
        <?php
        include('sidenav.php');
        ?>

        <!-- Top header -->
        <?php
        include('header.php');
        ?>
        
        <div>
          <p class="text">Please choose your</p>
          <p class="textGC">GL and AGL</p>
          <p class="text1">in your group.</p>
         
        </div>

        <!-- Page Content -->
        <div class="group-name">
            <h4>Group</h4>
        </div>
            
        <div class="custom-select" >
            <?php while ($row = mysqli_fetch_array($groups)) { ?>
    		<select>
                <option><?php echo $row ['group_code'] ?></option>
            </select>
            <?php } ?>
        </div>
        

        <div class="group-name">
            <h4>Group Leader</h4>
        </div>
                   
        <div class="custom-select" style="width: 200px;">
		<select>
            <option value="0">Yusuf Iskandar</option>
            <option value="1">Zayn Malik</option>
            <option value="2">Adam Danish</option>
        </select>
        </div>

        <div class="group-name">
            <h4>Assistant Group Leader</h4>
        </div>
                   
        <div class="custom-select" style="width: 200px;">
		<select>
            <option value="0">Hanis Zalikha</option>
            <option value="1">Nurul Nabilah</option>
            <option value="2">Amal Syahirah</option>
        </select>
        </div>

            <div class="edit-btn">
                <p class="edit">Edit GL/AGL</p>
            </div>
        </div>  

    <script> <!-- THIS ONE JAVASCRIPT UNTUK DROP DOWN, MAKE SURE SIMPAN BEFORE TAG "</body>"-->
        var x, i, j, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
        x = document.getElementsByClassName("custom-select");
        for (i = 0; i < x.length; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
    /*for each element, create a new DIV that will act as the selected item:*/
         a = document.createElement("DIV");
         a.setAttribute("class", "select-selected");
         a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
         x[i].appendChild(a);
    /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 0; j < selElmnt.length; j++) {
    /*for each option in the original select element, create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function(e) {
    /*when an item is clicked, update the original select box, and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);

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
    </body>
</html>
