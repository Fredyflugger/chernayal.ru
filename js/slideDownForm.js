$("#contactBtn").click(function() {
    $("#contactBtn").hide();
    $("#contactForm").slideToggle();
    $("html, body").animate({ scrollTop: $(document).height() }, 1000);
})