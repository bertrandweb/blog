<?php
session_start();

require("./classe/Autoload.class.php");
spl_autoload_register("Autoload::classeAutoloader");

//$test = new jeanmichel();
//var_dump($test);

//$database = new Database();
//$users = new Users();

//$users -> Inscription();
//var_dump($users);


$article = new Article();
$article -> displayarticle(1);




//include("./functions/functionUsers.php");
//include("./functions/functionContent.php");
//include("./common/header.php");
//include("./common/main.php");
//include("./common/footer.php");
