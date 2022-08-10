<?php
    $url = $_SERVER['SERVER_NAME']  . $_SERVER['REQUEST_URI'];
    $short = strstr($url, '/');
    // include "html/mail.php";
?>

<div class="contactMe" id="contactForm" style="<?php
                                                    if ($short === '/' || $short === '/prices') {
                                                        echo 'display: none;';
                                                    } else {
                                                        echo 'display: block;';
                                                    }
                                                ?>">
    <article>
        <h2>contact me</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </article>
    <form method="post" action="/html/mail.php" id="emailForm">
        <input type="text" name="name" placeholder="Имя *" value="<?php echo $name;?>" id="formName">
        <span class="error" id="nameError"> <?php echo $nameErr;?></span>
        <input type="email" name="email" placeholder="E-mail адрес *" maxlength="100" value="<?php echo $email;?>"  id="formEmail">
        <span class="error" id="emailError"> <?php echo $emailErr;?></span>
        <input type="text" name="referral" placeholder="Как вы нашли меня?" maxlength="100" value="<?php echo $referral;?>"  id="formRef">
        <textarea name="textarea" placeholder="Ваше сообщение" maxlength="400"  id="formMsg"><?php echo $textarea;?></textarea>
        <button type="submit" name="submit" id="formBtn">обратная связь</button>
    </form>
</div>