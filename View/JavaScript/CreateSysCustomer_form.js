var myForm = document.getElementById("create_form");

/*myForm.onsubmit = function()
{
	alert("end here");
};*/

window.onunload = function()
{
	window.opener.location.reload();
	window.close();
};