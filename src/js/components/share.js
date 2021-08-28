$('.click').on('click', function(e){
  e.preventDefault();
  $('.click').not(this).next().hide();
  // $(this).next().toggleClass('active');
  $(this).next().slideToggle();
});


