window.addEventListener("DOMContentLoaded", function(e) {
    var carousel = document.getElementById("carousel")
    var fadeComplete = function(e) { carousel.appendChild(arr[0]) }
    var arr = carousel.getElementsByTagName("img")
    for(var i=0; i < arr.length; i++) {
      arr[i].addEventListener("animationend", fadeComplete, false)
    }
}, false)