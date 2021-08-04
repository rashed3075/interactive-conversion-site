function ajax(pform) {
	// body...
	var isValid=validation(pform);
	if(isValid){
		var xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			if (this.status===200) {
				  document.getElementById("result").innerHTML = this.responseText;
			}
		}
		xhttp.open("GET",pform.action + "?convertion="+pform.convertion.value+"&numberValue="+pform.numberValue.value,true);
		xhttp.send();
	}
	
}
function validation(val){
	var convertion = val.convertion.value;
	var cal = val.numberValue.value;
	var flag = true;
	if(convertion==="")
	{
	   document.getElementById('convertionError').innerHTML="type can't be empty";
		flag = false;
	}
	if(cal==="")
	{
		document.getElementById('valueError').innerHTML="value can't be empty";
		flag = false;
	}
	return flag;
}