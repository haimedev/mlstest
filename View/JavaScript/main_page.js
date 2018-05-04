$("#page_arw").click(function(){
	
	/*
	if("#menu_tbl").is(":visible")
	{
		$("#menu_tbl").hide(300);
	}
	
	else
	{
		$("#menu_tbl").show(300);
	}
	*/
	$("#menu_tbl").toggle(300);
});

$(".menuItem_cls").click(function(event)
{
	event.preventDefault();
	$("#paramMenuItem").val(event.target.id);
	$("#menuItem_frm").submit();
});

$(".menu_cls").click(function(e){
	e.preventDefault();
	$("#" + e.target.id + "SubMenu_tbl").toggle(300);
});