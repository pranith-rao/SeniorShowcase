<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=banking', 'root', ''); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 


#Database connection after hosting
/* <?php
$pdo = new PDO('mysql:host=sql101.epizy.com;port=3306;dbname=epiz_29372594_banking', 'epiz_29372594', '8I3rrFW7ll0U1vR'); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  */
