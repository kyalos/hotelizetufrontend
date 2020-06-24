
const storehotelid = (id) =>{

console.log(id);
// Check browser support
if (typeof(Storage) !== "undefined") {
  // Store
  sessionStorage.setItem("hotel_id", id);
  // Retrieve
  document.getElementById("result").innerHTML = sessionStorage.getItem("hotel_id");
} else {
	document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
}

};

storehotelid(1);