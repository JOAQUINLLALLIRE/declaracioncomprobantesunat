<?php
namespace SunatDeclaracion\Entidad;

abstract class TipoSolicitud{
    const SendBill = 1;
    const GetStatusCdr = 2;
    const SendSummary = 3;
    const GetStatusCdrSummary = 4;
}
