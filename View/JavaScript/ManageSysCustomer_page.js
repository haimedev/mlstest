$("#newAccount_btn").click(function()
{
	var createAdminPopUpURL = "../View/Page/CreateSysCustomer_form.php";
	//window.open("../View/Page/CreateSysCustomer_form.php","_blank", "top=100, left=100, height=400, width=700");
	var popUp = PopupCenter(createAdminPopUpURL,'xtf','500','300');  
	/*var timer = setInterval(function() {   
    if(popUp.closed) {  
        clearInterval(timer);  
		alert("nag close");
        location.reload() 
    }  
}, 1000); */
});

function PopupCenter(url, title, w, h) {
    // Fixes dual-screen position                         Most browsers      Firefox
    var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : window.screenX;
    var dualScreenTop = window.screenTop != undefined ? window.screenTop : window.screenY;

    var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
    var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

    var left = ((width / 2) - (w / 2)) + dualScreenLeft;
    var top = ((height / 2) - (h / 2)) + dualScreenTop;
    var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

    // Puts focus on the newWindow
    if (window.focus) {
        newWindow.focus();
    }
}