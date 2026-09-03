<?php
// Clase Patient: Representa a un paciente de la clínica
class Patient {
    // Encapsulamiento: Atributos privados
    private string $name;
    private int $age;
    private string $phoneNumber;
    private string $address;

    // Constructor para inicializar la instancia
    public function __construct(string $name, int $age, string $phoneNumber, string $address) {
        $this->name = $name;
        $this->age = $age;
        $this->phoneNumber = $phoneNumber;
        $this->address = $address;
    }

    // Métodos Getters para acceder de forma segura a las propiedades
    public function getName(): string { return $this->name; }
    public function getAge(): int { return $this->age; }
    public function getPhoneNumber(): string { return $this->phoneNumber; }
    public function getAddress(): string { return $this->address; }

    // Método para desplegar la información completa del paciente
    public function showPatientInfo(): void {
        echo "<strong>Paciente:</strong> " . $this->name . "<br>";
        echo "<strong>Edad:</strong> " . $this->age . "<br>";
        echo "<strong>Teléfono:</strong> " . $this->phoneNumber . "<br>";
        echo "<strong>Dirección:</strong> " . $this->address . "<br>";
    }
}
?>