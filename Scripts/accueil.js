/*var images = ["maçon.jpg",
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
*/


var MongoClient = require('mongodb').MongoClient;
var url = "mongodb://localhost:27017/mydb";

MongoClient.connect(url, function(err, db) {
  if (err) throw err;
  console.log("Database created!");
  db.close();
});
