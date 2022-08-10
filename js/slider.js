function slideRight() {
  let textFeed = $("#slider div")
  for (let i = 0; i < textFeed.length; i++) {
    if ($(textFeed[i]).is(":visible") === true && i != textFeed.length - 1) {
      $(textFeed[i]).fadeTo(400, 0, function(){
        $(textFeed[i]).hide()
        $(textFeed[i+1]).show()
        $(textFeed[i+1]).fadeTo(400, 1)
      })
      break
    } else if ($(textFeed[i]).is(":visible") === true && i === textFeed.length - 1) {
      $(textFeed[i]).fadeTo("slow", 0, function(){
        $(textFeed[i]).hide()
        $(textFeed[0]).show()
        $(textFeed[0]).fadeTo("slow", 1)
      })
      break
    }
  }
}

function slideLeft() {
  let textFeed = $("#slider div")
  for (let i = 0; i < textFeed.length; i++) {
    if ($(textFeed[i]).is(":visible") === true && i != 0) {
      $(textFeed[i]).fadeTo(400, 0, function(){
        $(textFeed[i]).hide()
        $(textFeed[i-1]).show()
        $(textFeed[i-1]).fadeTo(400, 1)
      })
      break
    } else if ($(textFeed[i]).is(":visible") === true && i === 0) {
      $(textFeed[i]).fadeTo("slow", 0, function(){
        $(textFeed[i]).hide()
        $(textFeed[textFeed.length - 1]).show()
        $(textFeed[textFeed.length - 1]).fadeTo("slow", 1)
      })
      break
    }
  }
}
