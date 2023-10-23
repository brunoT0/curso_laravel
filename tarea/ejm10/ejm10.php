<?php
class Forma {
    // No se proporciona una implementación específica en la clase base
    // ya que el cálculo del área depende del tipo de forma.
    public function calcularArea() {
        // Este método se sobrescribirá en las clases derivadas.
    }
}

class Circulo extends Forma {
    private $radio;

    public function __construct($radio) {
        $this->radio = $radio;
    }

    public function calcularArea() {
        return M_PI * pow($this->radio, 2);
    }
}

class Rectangulo extends Forma {
    private $ancho;
    private $alto;

    public function __construct($ancho, $alto) {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    public function calcularArea() {
        return $this->ancho * $this->alto;
    }
}

// Ejemplo de uso
$circulo = new Circulo(5);
$rectangulo = new Rectangulo(4, 6);

echo "Área del círculo: " . $circulo->calcularArea() . "<br>";
echo "Área del rectángulo: " . $rectangulo->calcularArea();
?>