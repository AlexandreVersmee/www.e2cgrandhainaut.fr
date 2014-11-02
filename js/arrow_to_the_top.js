$(function()
{
	$('#tothetop').click(function()
	{
	  $('html,body').animate({scrollTop: 0}, 'slow');
	});

	$(window).scroll(function()
	{
		if($(window).scrollTop()<300)
		{
			$('#tothetop').fadeOut();
		}
		else
		{
			$('#tothetop').fadeIn();
		}
	});
});