<?php include('header.php'); 
$array=mysqli_query($conn, "SELECT productname from product");
$ar=[];
while($arr=mysqli_fetch_array($array)){
	array_push($ar,$arr['productname']);
}

if(isset($_SESSION['username'])){?>
<style>
  html{
    scroll-behavior: smooth;
}
#myBtn {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    font-size: 15px;
    border: none;
    outline: none;
    border-radius: 100px 100px;
    background-color: white;
    box-shadow: rgba(133, 133, 133, 0.658) 0 0 25px;
    color: rgb(0, 0, 0);
    cursor: pointer;
    padding: 10px;
  }
  #m{
      display: flex;
  }
  .a123{
    padding: 0 50px 30px 60px;
  }
  #myBtn:hover {
    background-color: rgb(255, 255, 255);
    box-shadow: black 0 0 25px;

    color: black;
  }
  #abtflex{
    display: flex;
    align-items: center;
  }
  #ime{
    display: flex;
    padding: 20px 50px 0 50px;
  }
</style>
<body class="ab">
<?php include('nav1.php'); ?>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>

<form autocomplete="off">
	<div class="pull-right">
	<div class="autocomplete " style="width:300px;">
	<input id="myInput" type="text" name="myCountry" placeholder="Search">
  </div>
  <a href="#" style="margin: 0 50px 5px 20px;padding:10px" class=" a btn btn-primary" >search</a>
	</div>
  </form>
<div class="container">
	<h1 class="page-header text-left" style="font-family: 'Merriweather', serif;"><b>ORDER HERE<span class="glyphicon glyphicon-hand-down" style="color:rgba(168, 37, 37, 0.877);;"></span> </b></h1>
	<!-- <h1 class="page-header text-right"><b>search</b></h1> -->

	<form method="POST" action="use_pur.php">
  <div class="col-xs-10" style="margin-left:85%;">Click to Order
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> Order</button>
        
			</div>
		<table class="table table-bordered table-hover" id="tab">
			<thead>
				<th class="text-center"><input type="checkbox" id="checkAll"></th>
				<th>Category</th>
				<th>Product Name</th>
				<th>Price</th>
				<th>Quantity</th>
			</thead>
			<tbody>
				<?php 
					$sql="SELECT * from product left join category on category.categoryid=product.categoryid 
          order by product.categoryid asc, productname asc";
					$query=mysqli_query($conn,$sql);
					$iterate=0;
					while($row=$query->fetch_array()){
						?>
						<tr id="<?php echo $row['productname']; ?>">
							<td class="text-center"><input type="checkbox" value="<?php echo $row['productid']; ?>||<?php echo $iterate; ?>" name="productid[]" style=""></td>
							<td><?php echo $row['catname']; ?></td>
							<td><?php echo $row['productname']; ?></td>
							<td class="text-right">&#x20A8; <?php echo number_format($row['price'], 2); ?></td>
							<td><input type="text" class="form-control" name="quantity_<?php echo $iterate; ?>"></td>
						</tr>
						<?php
						$iterate++;
					}
				?>
			</tbody>
		</table>
		
		<div class="row">
			<div class="col-md-3">
				<!-- <input type="text" name="email" class="form-control" placeholder="customer" required> -->
			</div>
			<div class="col-xs-10" style="margin-right:;">
         
			</div>
		</div>
	</form>
</div>
<script>
  var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<script type="text/javascript">
// $('#myInput').keyup(function(){
// 	$('a[href^="#"]').each(function(){ 
//             var oldUrl = $(this).attr("href"); // Get current url
//             var newUrl = oldUrl.replace("#", +$('#myInput').val()); // Create new url
//             $(this).attr("href", newUrl); // Set herf value
//     });

function se(){
	$('a.a').each(function(){ 
            var oldUrl = $(this).attr("href"); // Get current url
            var newUrl = oldUrl.replace(oldUrl, '#'+$('#myInput').val()); // Create new url
            $(this).attr("href", newUrl); // Set herf value
    });
}

$('a.a').click(function(){

	se();
});
	$(document).ready(function(){
		$("#checkAll").click(function(){
	    	$('input:checkbox').not(this).prop('checked', this.checked);
		});
	});
</script>
<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = <?php echo Json_encode($ar); ?>;
/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
</script>

</body>
</html>
<?php    }
else{
	header("location:start.php");
} ?>