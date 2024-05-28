<?php
//PHP funkcije – vježba 2

// Proizvoljno deklarirajte funkciju koja ima dva argumenta (name i surname). Funkcija
// treba konkatenirati podatke iz argumenata tako da između postoji razmak i dodijeliti ih
// lokalnoj varijabli, zatim treba vrijednost u varijabli pretvoriti u velika slova i to vratiti kao
// rezultat.
//  Pozovite funkciju i vraćenu vrijednost dodijelite varijabli.
//  Ispišite vrijednost varijable.

function concatNameSurname(string $name, string $surname): string
{
    $fullName = $name . ' ' . $surname;
    return strtoupper($fullName);
}

$fullName = concatNameSurname('Ime', 'Prezime');
echo $fullName;
echo '<br><br>';

/* PHP funkcije – vježba 3

Proizvoljno deklarirajte funkciju koja ima jedan argument (number). Funkcija treba imati
lokalnu varijablu u koju će pribrojiti vrijednost argumenta number te istu vratiti kao
rezultat. Vrijednost treba biti zadržana kod svakog poziva funkcije.
Deklarirajte funkciju kao varijablu.
Pozovite funkciju pomoću varijable, a kao vrijednost argumenta pošaljite slučajan broj u
rasponu od 1 do 10 te ispišite rezultat.
Ponovite postupak pet puta. */

function oneArgumentFunction(int $number): int
{
    static $sum = 0;
    $sum += $number;
    return $sum;
}

echo $oneArgument = oneArgumentFunction(rand(1, 10)) . '<br>';
echo $oneArgument = oneArgumentFunction(rand(1, 10)) . '<br>';
echo $oneArgument = oneArgumentFunction(rand(1, 10)) . '<br>';
echo $oneArgument = oneArgumentFunction(rand(1, 10)) . '<br>';
echo $oneArgument = oneArgumentFunction(rand(1, 10)) . '<br>';
