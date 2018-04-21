var images = ["maçon.jpg",
"plomberie.jpg",
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



//Partie base de données :
var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "root"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  con.query("CREATE DATABASE mydb", function (err, result) {
    if (err) throw err;
    console.log("Database created");
  });
});
