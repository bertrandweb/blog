<?php
require("./classe/Autoload.class.php");
spl_autoload_register("Autoload::classeAutoloader");

$test = new jeanmichel();
var_dump($test);

Log::writeCSV("sdsqd");

//include("./functions/functionUsers.php");
//include("./functions/functionContent.php");
//include("./common/header.php");
//include("./common/main.php");
//include("./common/footer.php");
