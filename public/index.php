<?php 

require_once __DIR__."\..\app_core\Application.php";



$app = new Application();

$app->router->get("/",function(){
 return "Hii";
});
$app->router->get("/user",function(){
    return "Hii user";
   });
   

$app->run();


?>