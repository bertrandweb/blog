<?php
session_start();

require("./classe/Autoload.class.php");
spl_autoload_register("Autoload::classeAutoloader");

//$test = new jeanmichel();
//var_dump($test);

//$users -> Inscription();
//var_dump($users);


//$article = new Article();
//$article -> displayarticle(1);

$user = new Users();
$user -> Inscription();


//include("./functions/functionUsers.php");
//include("./functions/functionContent.php");
//include("./common/header.php");
//include("./common/main.php");
//include("./common/footer.php");
