<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обо Мне | Людмила Чёрная</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/about.css">
</head>
<body>
    <?php
        include "html/header.html";
    ?>
    <main>
        <div class="aboutMe">
            <div class="photoWrap">
                <img src="/images/aboutMePhoto.png" alt="Photo" class="photo">
            </div>
            <article>
                <h1>title text</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu leo eros.
                    Sed sollicitudin, leo in pellentesque accumsan, felis justo facilisis tortor,
                    vitae mattis magna enim nec mauris. Pellentesque felis magna, semper eu metus a,
                    laoreet varius eros. Nunc tincidunt libero vel elit sodales pretium. Nam ornare
                    quam mauris. In a tristique purus, at efficitur nisl. Proin id augue in risus
                    bibendum tincidunt. Fusce sit amet justo suscipit, ultricies mi a, aliquam leo.
                </p>
            </article>
            <div class="feedback">
                <h2>feedback</h2>
                <div class="slider" id="slider">
                    <img src="/images/icons/arrow-left.svg" alt="leftArrow" onclick="slideLeft()">
                    <div id="quote0" style="display: block;">
                        <p>
                            ”Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu leo eros.
                            Sed sollicitudin, leo in pellentesque accumsan, felis justo facilisis tortor,
                            vitae mattis magna enim nec mauris.”
                        </p>
                        <span>Name Firstname</span>
                    </div>
                    <div id="quote1" style="display: none; opacity: 0;">
                        <p>
                            ”Morem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu leo eros.
                            Sed sollicitudin, leo in pellentesque accumsan, felis justo facilisis tortor,
                            vitae mattis magna enim nec mauris.”
                        </p>
                        <span>Name Secondname</span>
                    </div>
                    <div id="quote2" style="display: none; opacity: 0;">
                        <p>
                            ”Horem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu leo eros.
                            Sed sollicitudin, leo in pellentesque accumsan, felis justo facilisis tortor,
                            vitae mattis magna enim nec mauris.”
                        </p>
                        <span>Name Thirdnamename</span>
                    </div>
                    <img src="/images/icons/arrow-right.svg" alt="rightArrow" onclick="slideRight()">
                </div>
            </div>
        </div>
    </main>
</body>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script src="/js/slider.js"></script>
<script src="/js/transitionOnLoad.js"></script>
</html>