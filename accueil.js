var images = ["maçon.jpg",
"plomberie.jpg","slider1","calcul-retraite-macon",
"elec.jpg",
"autres.jpg"];
var num=0;

function suivant(){
	var slider = document.getElementById("slider");
	num++;
	if(num>=images.length){
		num=0;
	}
	slider.src=images[num];
}
function precedent(){
	var slider=document.getElementById("slider");
	num--;
	if(num<0){
		num=images.length-1;
	}
	slider.src=images[num];
}
