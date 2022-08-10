<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Дизайн Интерьеров | Людмила Чёрная</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/contactsForm.css">
    <link rel="stylesheet" href="/css/modal.css">
</head>
<body>
    <?php
        include "html/header.html";
    ?>
    <main class="content">
        <div class="carousel" id="carousel">
            <img src="images/banner.png" alt="image">
            <img src="https://via.placeholder.com/1140x516" alt="image">
            <img src="images/banner.png" alt="image">
            <img src="https://via.placeholder.com/1140x516" alt="image">
        </div>
        <article>
            <h1>title text</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu leo eros. Sed sollicitudin, leo in pellentesque accumsan,
                felis justo facilisis tortor, vitae mattis magna enim nec mauris. Pellentesque felis magna, semper eu metus a, laoreet
                varius eros. Nunc tincidunt libero vel elit sodales pretium. Nam ornare quam mauris. In a tristique purus, at efficitur
                nisl. Proin id augue in risus bibendum tincidunt. Fusce sit amet justo suscipit, ultricies mi a, aliquam leo.
            </p>
        </article>
        <button id="contactBtn">заказать</button>
    </main>
    <?php
        include "html/contactMeForm.php";
    ?>
    <?php
        include "html/footer.html";
    ?>
    <!-- The Modal -->
    <div id="modal">
        <!-- Modal content -->
        <div id="modal-content">
            <span id="close">&times;</span>
            <p></p>
        </div>
    </div>
</body>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script src="/js/transitionOnLoad.js"></script>
<script src="/js/carousel.js"></script>
<script src="/js/slideDownForm.js"></script>
<script src="/js/validator.js"></script>
</html>