
<div style="width:970px;height: 400px;">
  <img class="mySlides" src="Images/bus1.jpg" style="width:970px;height: 400px;">
  <img class="mySlides" src="Images/bus2.jpg" style="width:970px;height: 400px;">
  <img class="mySlides" src="Images/bus3.jpg" style="width:970px;height: 400px;">
</div>

<script>
var myIndex = 0;
slides();
function slides() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(slides, 2000); // Perubahan gambar setiap 2 detik
    }
</script>