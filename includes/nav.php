<?php
//verificamos si hay cambios de lenguaje mediante POST
if(isset($_POST["lang"])){
    $lang = $_POST["lang"];
    if(!empty($lang)){
        $_SESSION["lang"] = $lang;
    }
}
// verificamos la sesion creada
if(isset($_SESSION['lang'])){
    // si es true, se crea el require y la variable lang
    $lang = $_SESSION["lang"];
    include "lang/".$lang.".php";
    // si no hay sesion por default se carga el lenguaje espanol
}else{
    include "lang/es.php";
}
?>

 <div class="navbar-fixed">
  <nav class="navblack">
    <div class="nav-wrapper nav-wrapper-2 container white">
    <ul class="left hide-on-med-and-down">
      <li><a href="index" class="brand"></a></li>

      <li><a href="index" class="dark-text">SmartShop</a></li>
        <li> <form class="form-inline" method="POST">
                    <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="lang" value="algo" >
                    <option value="es"><?php echo $lang["opcion_2"]; ?></option>
                    <option value="en"><?php echo $lang["opcion_3"]; ?></option>
                </select>
                <button type="submit" class="btn btn-primary"><?php echo $lang["cambiar"]; ?></button>
            </form>
        </li>
    </ul>

    <ul class="center hide-on-large-only">
      <li><a href="index" class="dark-text">SmartShop</a></li>

    </ul>

    <ul  class="right hide-on-med-and-down">
        <li><a href="index" class="dark-text">Home</a></li>
      <li><a href="sign" class="waves-effect waves-light btn button-rounded">Sign In</a></li>
      <li><a href="cart" class="dark-text baskett"><i class="material-icons">shopping_cart</i>
         <span class="badge <?php if(!isset($_SESSION['item']) OR $_SESSION['item'] == 0) echo'hide'; ?>"><?= $_SESSION['item']; ?></span></a></li>

    </ul>
  </div>
  </nav>
</div>
