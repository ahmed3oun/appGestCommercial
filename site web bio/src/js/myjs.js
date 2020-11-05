$(document).ready(function(){
$('.bxslider').bxSlider({
   mode: 'fade',
   auto:true
});
});

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var button = document.getElementsByClassName("cancelbtn")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
button.onclick = function() {
  modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


//image
var index = 1;
		function plusIndex(n){
		index = index + 1;
		showImage(index);
		}
		showImage(1)
			function showImage(n){
			var i;
			var x= document.getElementsByClassName("slides");

			if(n>x.length){index=1};
			if(n<1){index = x.length };
			
			for (i=0;i<x.length;i++)
			{
			x[i].style.display = "none";
			}
			x[index-1].style.display = "block";
			}
//panier
 