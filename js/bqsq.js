$(document).ready(function(){
  $(".BQSHero-dropdown-link, .BQSHero-article-know-container, .BQSServices-prices-cta-link").click(function(e){
    let linkHref = $(this).attr('href');
    $('html, body').animate({
      scrollTop: $(linkHref).offset().top
    },1000);
  });
});