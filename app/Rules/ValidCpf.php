<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\ValidationRule;

class ValidCpf implements ValidationRule
{
    public function validate(string $attribute, mixed $value, \Closure $fail): void
    {
        // Remove todos os caracteres que não são dígitos
        $cpf = preg_replace('/[^0-9]/is', '', $value);

        // Verifica se foi informado todos os dígitos corretamente
        if (strlen($cpf) != 11) {
            $fail('O :attribute fornecido não é um CPF válido.');
            return;
        }

        // Verifica se todos os dígitos são iguais
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            $fail('O :attribute fornecido não é um CPF válido.');
            return;
        }

        // Calcula os dígitos verificadores para verificar se o CPF é válido
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                $fail('O :attribute fornecido não é um CPF válido.');
                return;
            }
        }
    }
}
