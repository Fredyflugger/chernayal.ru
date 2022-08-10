window.addEventListener("load", () => {
    $('button').addClass('transitionAnim')
    $('.logos a img').addClass('transitionAnim')
    $('nav a').addClass('transitionAnim')
    $('.articlePrices').addClass('transitionAnim')
    $('.faqClosed').addClass('transitionAnim')
    $('.portfolio img').addClass('transitionAnim')
    $('.portfolioBack').addClass('transitionAnim')
    $('#scrollToTopBtn').addClass('transitionAnim')
    // margin for scroll bar width
    var body = $('body');
    var normalwidth = 0;
    var scrollwidth = 0;
    if(body.prop('scrollHeight')>body.height()){
        normalwidth = window.innerWidth;
        scrollwidth = normalwidth - body.width();
        $('#main').css({marginRight:'-'+scrollwidth+'px'});
    }
})
