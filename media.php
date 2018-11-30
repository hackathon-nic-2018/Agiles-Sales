<?php
  $page_title = 'Lista de imagenes';
  require_once('includes/load.php');
  // Checkin ¿Qué nivel de usuario tiene permiso para ver esta página?
  page_require_level(2);
?>
<?php $media_files = find_all('media');?>
<?php
  if(isset($_POST['submit'])) {
  $photo = new Media();
  $photo->upload($_FILES['file_upload']);
    if($photo->process_media()){
        $session->msg('s','Imagen subida al servidor.');
        redirect('media.php');
    } else{
      $session->msg('d',join($photo->errors));
      redirect('media.php');
    }

  }

?>