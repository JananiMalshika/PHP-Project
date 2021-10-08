function checkPassword()
{
	if(document.getElementById("pwd").value != document.getElementById("Repwd").value)
	{
		alert("Incorrect Password!");
		return false;
	}		
	
	else
		return true;
}



function enablebutton()
{
	if (document.getElementById("policy").checked)
	{
		document.getElementById("subm2").disabled=false;
	}
	
	else
		document.getElementById("subm2").disabled=true;
}