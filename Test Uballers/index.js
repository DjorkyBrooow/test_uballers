

function changeForm(val){
	// Get the selected value in the select form
	var selectedValue=val.options[val.selectedIndex].value;
	if(selectedValue=='login'){
			document.getElementById('password').style.display='none';
			document.getElementById('login').style.display='';
	}
    if(selectedValue=='password'){
        document.getElementById('login').style.display='none';
        document.getElementById('password').style.display='';
    }
}

function displayText() {
    document.getElementById["birthText"].style.visibility = "visible";
}
  
function hideText() {
    document.getElementById["birthText"].style.visibility = "hidden";
}