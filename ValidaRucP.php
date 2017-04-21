<?
/**
*Validar Ruc Peruano
=======================
* @package     ValidarIdentificacion_RUC_Peruano
* @subpackage
* @author      John Chacon <enlinea777@gmail.com>
* @copyright   2017 John Chacon
* @license     GNU V3
* @link        https://github.com/enlinea777/Validar-Ruc-Peruano/new/master
* @version     @@1.0@@

*/


class ValidarRucP
{

    Private $Factores=array(5,4,3,2,7,6,5,4,3,2);
    Private $Valida;
    
    public function __construct($data=""){
        $NroDocumento=trim($data);
        $NroIdentificador=substr($NroDocumento, -1);

        for ($i=0;$i<10; $i++){
            $Valor=substr($NroDocumento, $i,1);
            $Productos+=$Valor * $this->Factores[$i];
        }
        $Resultado = 11 - ($Productos % 11);
        switch ($Resultado){
            case 10:
                $Resultado=0;
            break;
            case 11:
                $Resultado=1;
            break;
        }
        if ($Resultado>11){
          $Resultado=substr($Resultado, -1);
        }
        if($NroDocumento==''){
            $this->valida=false;
        }else{
            if ($Resultado == $NroIdentificador){
                $this->valida=true;
            }else{
                $this->valida=false;
            }
        }
    }
}
?>
