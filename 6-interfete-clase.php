<?php

interface ProfesorInterface {
    public function specializare(): string;
}

interface StudentInterface {
    public function anStudiu(): string;
}

abstract class Persoana {
    protected string $nume;
    public function __construct(string $nume) {
        $this->nume = $nume;
    }
    public function nume(): string {
        return $this->nume;
    }
    abstract public function prezentare(): string;
}

class Profesor extends Persoana implements ProfesorInterface {
    private string $specializare;
    public function __construct(string $nume, string $specializare) {
        parent::__construct($nume);
        $this->specializare = $specializare;
    }
    public function specializare(): string {
        return $this->specializare;
    }
    public function prezentare(): string {
        return '<strong>Profesor coodronator</strong>: ' . $this->nume . ' - specializare: ' . $this->specializare;
    }
}

class Student extends Persoana implements StudentInterface {
    private int $anStudiu;
    public function __construct(string $nume, int $anStudiu) {
        parent::__construct($nume);
        $this->anStudiu = $anStudiu;
    }
    public function anStudiu(): string {
        return $this->anStudiu;
    }
    public function prezentare(): string {
        return 'Student: ' . $this->nume() . ' - an de studiu: ' . $this->anStudiu();
    }
}

$echipa = [
    new Profesor('Marian', 'Matematica-Informatica'),
    new Student('Mihai', 2),
    new Student('Ana', 3),
    new Student('Cristi', 1),
    new Student('Maria', 1),
];

foreach ($echipa as $persoana) {
    if ($persoana instanceof ProfesorInterface) {
        echo '<strong>Profesor coordonator</strong>: ' . $persoana->nume() . ' - specializare ' . $persoana->specializare() . PHP_EOL."<br>";
    } elseif($persoana instanceof StudentInterface) {
        echo 'Student: ' . $persoana->nume() . ' - an de studiu: ' . $persoana->anStudiu() . PHP_EOL . "<br>";
    }
}

echo PHP_EOL.'<br>';

foreach ($echipa as $persoana) {
    echo $persoana->prezentare() . PHP_EOL."<br>";
}

?>