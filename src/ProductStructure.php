<?php

namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
        //todo your code.
        $novoArray = [];
        foreach ($this->array_product as $cor_tamanho) {
            list($cor, $tamanho) = explode("-", $cor_tamanho);
            if (isset($novoArray[$cor][$tamanho])) {
                $novoArray[$cor][$tamanho] += 1;
            } else {
                $novoArray[$cor][$tamanho] = 1;
            }
        }
        return $novoArray;
    }
}
