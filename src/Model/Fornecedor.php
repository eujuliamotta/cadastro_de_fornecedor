<?php

namespace APP\Model;

class Fornecedor
{
    // Propriedades
    private string $name;
    private float $code;
    private string $service;
    private bool $isActive;

    public function __construct(
        string $name,
        float $code,
        string $service,
        bool $isActive = true
    )
    {
        $this->name = $name;
        $this->code = $code;
        $this->service = $service;
        $this->isActive = $isActive;
    }
}