<?php
require_once 'vendor/autoload.php';

use SunatDeclaracion\Sunat\DeclaracionSunat;
use SunatDeclaracion\Entidad;
use SunatDeclaracion\Entidad\EmpresaFE;
use SunatDeclaracion\Sunat\FirmarComprobante;

try{
    $rutaBaseApp = $_SERVER['DOCUMENT_ROOT'] ;
    // // die;  
    // $obj = new FirmarComprobante("0001-0221-sinfirma");
    // $rutaCertificado = $rutaBaseApp . "./files/certificadoDigital/certificado_demo_20201023221.pfx";
    // $rutaXml = $rutaBaseApp . "xml/FN01-00003831-sinfirma.xml";
    // $obj->setCertificadoFromContent(file_get_contents($rutaCertificado), "20201023221");
    // // $obj->setCertificadoFromFile($rutaCertificado, "10432898275");
    // $xml = $obj->firmarComprobante(NULL, file_get_contents($rutaXml));

    // $obj = new DeclaracionSunat("20454744617", "U5ERKVGH", "00Glolivos18", EmpresaFE::Sunat, TRUE);
    // $rpta = $obj->declararComprobante("01","FF01-00017696", NULL, file_get_contents("xml/20454744617-01-FF01-00017696.xml"));
    // var_dump($rpta);

    /* Obtener el CDR */
    // $obj = new DeclaracionSunat("20454744617", "U5ERKVGH", "00Glolivos18", EmpresaFE::Sunat, TRUE);
    // $rpta = $obj->obtenerCdr("01", "FF01", "00017366");
    // var_dump($rpta);

    // $obj = new DeclaracionSunat("20201023221", "MODDATOS", "MODDATOS", EmpresaFE::Sunat, false);
    // $obj->declararSummary("RC", "RC-20210609-3", null, file_get_contents("C:/Users/Usuario/Downloads/50-RC-20210609-3/RC-20210609-3.xml"));
    // var_dump($rpta);

    $obj = new DeclaracionSunat("20604717711", "TANIROSS", "T42065193s", EmpresaFE::Sunat, TRUE);
    $rpta = $obj->validarUsuarioSecundario();
    var_dump($rpta);

    // $numeroDocumento = "20103818860-01-FE01-00000048-sinfirma";
    // $obj = new FirmarComprobante($numeroDocumento);
    // $rutaCertificado = $rutaBaseApp . "/files/certificadoDigital/20103818860.pfx";
    // $rutaXml = $rutaBaseApp . "/xml/{$numeroDocumento}.xml";
    // $obj->setCertificadoFromContent(file_get_contents($rutaCertificado), "VilussaC372");
    // $obj->setCertificadoFromFile($rutaCertificado, "VilussaC372");
    // $obj->firmarComprobante(NULL, file_get_contents($rutaXml));
    // $rpta = "OK";
    
    // Beta - Vilussa
    // $obj = new DeclaracionSunat("20103818860", "MODDATOS", "MODDATOS", EmpresaFE::Sunat, FALSE);
    // $rpta = $obj->declararComprobante("01","FE01-00000047", NULL, file_get_contents("20103818860-01-FE01-00000047.xml"));

    // Producción - Jaen
    // $obj = new DeclaracionSunat("20411419488", "mujaenbp", "03mujaenbp", EmpresaFE::NubeFact, true);
    // $rpta = $obj->declararComprobante("01","FF01-00020266", NULL, file_get_contents("20411419488-01-FF01-00020266.xml"));
    // var_dump($rpta);

    // Producción - Vilussa
    // $obj = new DeclaracionSunat("20103818860", "FPALACIO", "H67w45h4w5", EmpresaFE::Sunat, TRUE);
    // $rpta = $obj->declararComprobante("01","FE01-00000047", NULL, file_get_contents(str_replace("-sinfirma","", "./{$numeroDocumento}.xml")));

    // $obj = new DeclaracionSunat("20103818860", "vilssa01", "#vilssa01#", EmpresaFE::NubeFact, TRUE);
    // $rpta = $obj->declararComprobante("01","FE01-00000048", NULL, file_get_contents(str_replace("-sinfirma","", "./{$numeroDocumento}.xml")));


    /* Obtener el CDR */
    // $obj = new DeclaracionSunat("20600700228", "XXXXX", "XXXXXXX", EmpresaFE::Sunat, TRUE);
    // $rpta = $obj->obtenerCdr("01", "FP01", "00005321");
    // var_dump($rpta);
} catch(Exception $ex){
    echo "Error " . $ex->getCode() . " - Detalles: " . $ex->getMessage();
}






