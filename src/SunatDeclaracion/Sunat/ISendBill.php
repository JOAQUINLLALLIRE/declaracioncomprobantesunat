<?php 
namespace SunatDeclaracion\Sunat;

interface ISendBill{
    public function validarUsuarioSecundario();

    public function declararComprobante($tipoDoc, $numeroDocumento, $pathXml = NULL, $contentXml = NULL);
    public function obtenerCdr($tipoDoc, $serie, $correlativo);

    public function declararSummary($tipoDoc, $numeroDocumento, $pathXml = NULL, $contentXml = NULL);
    public function obtenerCdrSummary($numeroTicket, $tipoDoc, $numeroDocumento);
}