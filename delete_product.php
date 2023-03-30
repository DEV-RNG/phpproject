<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(2);
?>
<?php
  $product = find_by_id('products',(int)$_GET['id']);
  if(!$product){
    $session->msg("d","Identifiant du produit manquant.");
    redirect('product.php');
  }
?>
<?php
  $delete_id = delete_by_id('products',(int)$product['id']);
  if($delete_id){
      $session->msg("s","Produits supprimés.");
      redirect('product.php');
  } else {
      $session->msg("d","Échec de la suppression des produits.");
      redirect('product.php');
  }
?>
