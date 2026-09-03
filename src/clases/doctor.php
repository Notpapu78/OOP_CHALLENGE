<?php
// Clase Doctor: Representa al profesional médico
class Doctor {
    // Encapsulamiento: Atributos privados
    private string $name;
    private string $specialty;
    private string $phoneNumber;

    // Constructor
    public function __construct(string $name, string $specialty, string $phoneNumber) {
        $this->name = $name;
        $this->specialty = $specialty;
        $this->phoneNumber = $phoneNumber;
    }

    // Getters públicos
    public function getName(): string { return $this->name; }
    public function getSpecialty(): string { return $this->specialty; }
    public function getPhoneNumber(): string { return $this->phoneNumber; }

    // Método para desplegar la información del médico
    public function showDoctorInfo(): void {
        echo "<strong>Doctor:</strong> " . $this->name . "<br>";
        echo "<strong>Especialidad:</strong> " . $this->specialty . "<br>";
        echo "<strong>Teléfono:</strong> " . $this->phoneNumber . "<br>";
    }
}
?>