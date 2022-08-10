<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/contacts.css">
    <link rel="stylesheet" href="/css/contactsForm.css">
    <link rel="stylesheet" href="/css/modal.css">
</head>
<body>
    <?php
        include "html/header.html";
    ?>
    <main class="contacts">
        <article>
            <h2>черная людмина игоревна</h2>
            <p>Описание описание описание описание</p>
        </article>
        <?php
            include "html/footer.html";
        ?>
    </main>
    <?php
        include "html/contactMeForm.php";
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
<script src="/js/validator.js"></script>
</html>
