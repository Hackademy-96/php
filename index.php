
<?php

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$numeripari = 0;

$numerodispari = 0;

foreach ($array as $numero) {
    if($numero % 2 == 0){
        $sommapari +- $numero;
        
        $numerodispari++;
    }
}

if ($numerodispari > 0){
    $mediapari = $numeropari / %numerodispari;

echo "la media dei numeri pari nell'array è : $mediapari;

}
else {
    echo "Numero dispari"
}

// Esercizo 2

$utenti = [
    ["nome" => "Marco", "cognome" => "Rossi", "genere" => "Maschio"],
    ["nome" => "Laura", "cognome" => "Bianchi", "genere" => "Femmina"],
    ["nome" => "Luigi", "cognome" => "Verdi", "genere" => "Maschio"],
];


foreach ($utenti as $utente) {
    $nome = $utente["nome"];
    $cognome = $utente["cognome"];
    $genere = $utente["genere"];

  
    if ($genere === "Maschio") {
        echo "Buongiorno Sig. $nome $cognome ";
    } elseif ($genere === "Femmina") {
        echo "Buongiorno Sig.ra $nome $cognome;
    } else {
        echo "Buongiorno $nome $cognome";
    }
}


// ES 3
for ($i=1; $i <= 100 ; $i++) { 
    if ($i % 5 == 0 && $i % 15 == 0) {
        echo "Hackademy96 \n";
    } else if ($i % 5 == 0){
        echo "Jacascript \n";
    } else if ($i % 3 == 0){
        echo "Php \n";
    } else {
        echo $i . "\n";
    }
}

?>
