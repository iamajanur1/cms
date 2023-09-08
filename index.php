<?php 

require_once __DIR__."\app_core\Application.php";



$app = new Application();

$app->router->get("/",function(){
 return "<button type=\"button\" class=\"btn\">Base class</button>";
});
$app->router->get("/user",function(){
    return "Hii user";
   });
$app->router->get("/aaa",function(){
    return "Hii Admin";
   });

   $app->router->post("/a",function(){
    return "Hii Admin";
   });
   

$app->run();


?>