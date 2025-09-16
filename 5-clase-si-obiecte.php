<?php

class Persoana {
    private string $nume;
    private int $varsta;

    public function __construct(string $nume, int $varsta) {
        $this->nume = $nume;
        $this->varsta = $varsta;
    }

    public function nume(): string
    {
        return $this->nume;
    }
    public function varsta(): int
    {
        return $this->varsta;
    }
}

$echipa = [
    new Persoana('Mihai', 22),
    new Persoana('Ana', 24),
    new Persoana('Cristi', 19),
    new Persoana('Maria', 21),
];

$suma = 0;
foreach ($echipa as $coleg) {
    $suma = $suma + $coleg->varsta();
}

echo 'Media de varsta a echipei este de: ';
echo $suma / count($echipa) . PHP_EOL;

?>