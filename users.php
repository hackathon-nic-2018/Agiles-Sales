<?php
$page_title = 'Lista de usuarios';
require_once('includes/load.php');
?>
//nivel del usuario ala de crear diferentes niveles pagina
<?php
page_requiere_level(1);

// los que estan alo jado requiere enlos login
$all_users = find_all_user();
?>
