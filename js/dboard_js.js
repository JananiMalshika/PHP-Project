
var d = new Date();
var year = d.getFullYear();
var month = d.getMonth();
var day = d.getDate();
var fullDate = day + "/" + (month+1) + "/" + year;
document.getElementById("date").innerHTML = fullDate;

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
