<?
// call me  valida_RucP_test.php?dni=xxxxxxxxxxx
include('ValidaRucP.php');
echo "Valida: ";
var_dump( (new ValidarRucP($_GET['dni']))->valida);
?>
