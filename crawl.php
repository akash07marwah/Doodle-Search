<?php
include("classes/ddp.php");
function followLinks($url){
$parser= new DomDocumentParser($url);
}
$startURL="https://www.google.com";
followLinks($startURL);
 ?>
