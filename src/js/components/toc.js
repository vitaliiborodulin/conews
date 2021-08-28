$('#toc_container a').on('click', function(e){
	var fixed_offset = 20;

	$('html,body').stop().animate({ 
		scrollTop: $(this.hash).offset().top - fixed_offset 
	}, 300);
	// e.preventDefault();
	// burger.toggleClass('header__burger--close');
	// menu.toggleClass('header__menu--open');
  // $('html').toggleClass('scroll-disabled');
});