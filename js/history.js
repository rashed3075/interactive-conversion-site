function ajax(pform) {
	// body...
	
	
		var xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			if (this.status===200) {
				  document.getElementById("result").innerHTML = this.responseText;
			}
		}
		xhttp.open("GET",pform.action + "?type="+pform.type.value,true);
		xhttp.send();
	
	
}
