<?php
require_once __DIR__ . '/patient.php';
require_once __DIR__ . '/doctor.php';

// Clase Appointment: Asocia un objeto Patient con un objeto Doctor
class Appointment {
    // Encapsulamiento con referencias a otras clases (Composición)
    private Patient $patient;
    private Doctor $doctor;
    private string $date;
    private string $time;
    private string $reason;

    // Constructor que recibe instancias de Patient y Doctor
    public function __construct(Patient $patient, Doctor $doctor, string $date, string $time, string $reason) {
        $this->patient = $patient;
        $this->doctor = $doctor;
        $this->date = $date;
        $this->time = $time;
        $this->reason = $reason;
    }

    // Método para imprimir el resumen de la cita
    public function showAppointment(): void {
        echo "<strong>Detalles de la Cita:</strong><br>";
        echo "Paciente: " . $this->patient->getName() . "<br>";
        echo "Doctor: " . $this->doctor->getName() . " (" . $this->doctor->getSpecialty() . ")<br>";
        echo "Fecha: " . $this->date . "<br>";
        echo "Hora: " . $this->time . "<br>";
        echo "Motivo: " . $this->reason . "<br>";
    }
}
?>