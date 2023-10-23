<?php
class CuentaBancaria {
    private $saldo;

    public function __construct($saldoInicial = 0) {
        $this->saldo = $saldoInicial;
    }

    public function depositar($monto) {
        if ($monto > 0) {
            $this->saldo += $monto;
            return true;
        } else {
            return false;
        }
    }

    public function retirar($monto) {
        if ($monto > 0 && $this->saldo >= $monto) {
            $this->saldo -= $monto;
            return true;
        } else {
            return false;
        }
    }

    public function consultarSaldo() {
        return $this->saldo;
    }
}

// Ejemplo de uso
$cuenta = new CuentaBancaria(1000); // Crear una cuenta con saldo inicial de $1000

// Depositar dinero
$cuenta->depositar(500);

// Retirar dinero
$cuenta->retirar(300);

// Consultar el saldo actual
$saldoActual = $cuenta->consultarSaldo();

echo "Saldo actual: $" . $saldoActual;
?>