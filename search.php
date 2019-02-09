<?php
if(isset($_GET["term"])){
$term = $_GET["term"];
}
else {
  exit("You must enter a search term here");
}
$type=isset($_GET["type"]) ? $_GET["type"]: "sites";
 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome to Doodle</title>
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="header">

        <div class="headerContent">
          <div class="logoContainer">
          <a href="index.php">
            <img src="assets/images/logo.png" style="width:250px; height:100px;" alt="Doodle">
          </a>
          </div>
          <div class="searchContainer">
            <form class="" action="search.php" method="GET">
              <div class="searchBarContainer">
                <input type="text" name="term" value="" class="searchBox">
                  <button type="button" name="button" class="searchButton">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
  width="24" height="24"
  viewBox="0 0 224 224"
  style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,224v-224h224v224z" fill="none"></path><g fill="#3176f3"><path d="M84,18.66667c-35.97205,0 -65.33333,29.36128 -65.33333,65.33333c0,35.97206 29.36128,65.33333 65.33333,65.33333c16.31465,0 31.22008,-6.08511 42.69271,-16.04167l3.97396,3.97396v12.06771l56,56l18.66667,-18.66667l-56,-56h-12.06771l-3.97396,-3.97396c9.95656,-11.47263 16.04167,-26.37806 16.04167,-42.69271c0,-35.97205 -29.36128,-65.33333 -65.33333,-65.33333zM84,37.33333c25.88383,0 46.66667,20.78283 46.66667,46.66667c0,25.88383 -20.78283,46.66667 -46.66667,46.66667c-25.88384,0 -46.66667,-20.78283 -46.66667,-46.66667c0,-25.88384 20.78283,-46.66667 46.66667,-46.66667z"></path></g></g></svg>
                  </button>
              </div>
            </form>
          </div>
        </div>
        <div class="tabsContainer">

          <ul class="tablist">
            <li class="<?php echo $type =='sites' ? 'active' :  ''   ?>"> <a href='<?php echo "search.php?term=$term&type=sites";  ?>'>Sites </a> </li>
            <li class="<?php echo $type =='images' ? 'active' :  ''   ?>"> <a href='<?php echo "search.php?term=$term&type=images";  ?>'>Images </a> </li>


          </ul>

        </div>
      </div>
  </div>
  </body>
</html>
