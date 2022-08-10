$(".faqWrap").click(function() {
    $("#questionsWrap").children("div").each(function(){
        if ($("article p", this).css("display") === "block") {
            $("p", this).toggle()
            $("h2", this).toggleClass("faqClosed")
        }
    })
    $("p", this).fadeToggle(150, function(){
        $("p", this).toggle()
    })
    $("h2", this).toggleClass("faqClosed")
})
