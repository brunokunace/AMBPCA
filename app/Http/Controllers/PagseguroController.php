<?php

namespace App\Http\Controllers;
use Artistas\PagSeguro\PagSeguroRecorrente;
use Artistas\PagSeguro\PagSeguroException;


class PagseguroController
{

    public function pagseguro()
    {
        try {
            $pagseguro = resolve(PagSeguroRecorrente::class);
            $pagseguro->sendPreApprovalRequest([
                'preApprovalName' => 'Prédio', //Nome do plano
                'preApprovalCharge' => 'AUTO', //Tipo de Cobrança
                'preApprovalPeriod' => 'MONTHLY', //Periodicidade do plano
                'preApprovalCancelURL' => 'http://sitedocliente.com', //URL de cancelamento OPCIONAL
                'preApprovalAmountPerPayment' => '150.00', //Valor exato da cobrança
            ]);

        } catch (PagSeguroException $e) {
            $e->getCode(); //codigo do erro
            $e->getMessage(); //mensagem do erro
        }
    }
}