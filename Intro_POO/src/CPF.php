<?php

class CPF {
  private $cpf;

  public function __construct(string $cpf) {
    $this->validaCpf($cpf);
    $this->cpf = $cpf;
  }

  public function recuperaCpf(): string {
    return $this->cpf;
  }

  private function validaCpf(string $cpf): void {
    if (strlen($cpf) < 11) {
      echo "CPF inválido";
      return;
    }

    $this->cpf = $cpf;
  }
}