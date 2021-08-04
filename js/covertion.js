function validation(val){
	var conversionType = val.conversionType.value;
	var unit = val.unit.value;
	var rate = val.rate.value;
	var flag = true;
	if(conversionType==="")
	{
	   document.getElementById('conversionTypeError').innerHTML="type can't be empty";
		flag = false;
	}
	if(unit==="")
	{
		document.getElementById('unitError').innerHTML="unit can't be empty";
		flag = false;
	}
	if(rate==="")
	{
		document.getElementById('rateError').innerHTML="rate can't be empty";
		flag = false;
	}
	return flag;
}

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
		xhttp.open("GET",pform.action + "?conversionType="+pform.conversionType.value+"&unit="+pform.unit.value + "&rate="+pform.rate.value,true);
		xhttp.send();
	}
	
}
