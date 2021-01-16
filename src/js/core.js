$(document).ready(function()
{
	$('.navbar-brand span').hide();

	//$("[rel='tooltip']").tooltip();

	$('.site-destacados article').hover(function()
	{
		//$(this).find('.info').slideDown(250); //.fadeIn(250)
	},
	function()
	{
		//$(this).find('.info').slideUp(250); //.fadeOut(205)
	});

	$("div.bhoechie-tab-menu>div.list-group>a").click(function(e)
	{
		e.preventDefault();
		$(this).siblings('a.active').removeClass("active");
		$(this).addClass("active");
		var index = $(this).index();
		$("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
		$("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
	});

	$('#topmenu').affix({
		offset: {
		  top: 80
		}
	});

	$('#topmenu').on('affixed.bs.affix', function()
	{
		$('#topmenu').addClass('topmenu_fixed');
		$('.topmenu_fixed .navbar-brand img').hide();
		$('.topmenu_fixed .navbar-brand span').slideDown();
	});

	$('#topmenu').on('affixed-top.bs.affix', function()
	{
		$('#topmenu').removeClass('topmenu_fixed');
		$('#topmenu .navbar-brand span').hide();
		$('#topmenu .navbar-brand img').slideDown();
	});


});
