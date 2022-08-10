<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/router.php");

// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index
get('/', 'html/index.php');
get('/prices', 'html/prices.php');
get('/about', 'html/about.php');
get('/faq', 'html/faq.php');
get('/portfolio', 'html/portfolio.php');
get('/portfolio/project_test', 'html/project.php');
get('/contacts', 'html/contacts.php');
get('/mail', 'html/mail.php');


post('/', 'html/index.php');
post('/prices', 'html/prices.php');
post('/contacts', 'html/contacts.php');
post('/mail', 'html/mail.php');

//post(htmlspecialchars($_SERVER["PHP_SELF"]), '/');

// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404','html/404.php');
