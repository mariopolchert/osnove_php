1. Koristeći petlju while, ispišite prvih deset brojeva.

<?php
echo "<br>";
$i = 1;
while ($i <= 10) {
    echo $i . ",";
    $i++;
}
echo "<br>" . "<br>";
?>

2. Koristeći petlju for, ispišite visekratnike broja 3 do 100.
<?php
echo "<br>";

for ($i = 3; $i <= 100; $i += 3) {
    echo $i . ",";
}
echo "<br>" . "<br>";

?>

3. Tablica množenja: Napiši PHP program koji koristi petlje za generiranje tablice množenja od 1 do 10.
Primjer:
1 x 1 = 1
1 x 2 = 2
...
10 x 10 = 100

<?php
echo "<br>";

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo $i . " x " . $j . " = " . $i * $j .
            "<br>";
    }
}
echo "<br>" . "<br>";

?>

4. Definirajte varijablu $names i dodijelite joj niz koji sadrži pet imena.
Koristeći petlju foreach, iz niza ispišite ključeve i pripadajuće im vrijednosti.

<?php
echo "<br>";

$names = array("Tyrion", "Daenerys", "Arya", "Sansa", "The Hound");
foreach ($names as $key => $value) {
    echo $key . " => " . $value . "<br>";
}
echo "<br>" . "<br>";

?>
6. Ispisati imena iz niza $names spojene sa zarezom i razmakom tako da iza zadnjeg imena ne budu zarez i razmak
Primjer:
Harry, Ron, Hermione, Snake

<?php
echo "<br>";

$names = array("Tyrion", "Daenerys", "Arya", "Sansa", "The Hound");
foreach ($names as $name) {
    echo ($name === end($names)) ? $name : $name . ", ";
}
echo "<br>" . "<br>";

?>

7. Definirajte varijable a, b i c, te im istim redoslijedom dodijelite vrijednosti 5,10 i 15.
Koristeći uvjetovani tip kontrolne strukture provjerite je li vrijednost b između a i c.
Ako je uvjet istinit, ispišite da je b između a i c, a ako je uvjet lažan ispišite da nije.
Kod mora raditi i ako zamijenimo vrijednosti u varijablama a i c.

<?php
echo "<br>";

$a = 5;
$b = 10;
$c = 15;
if (($b > $a && $b < $c) || ($b < $a && $b > $c)) {
    echo "Vrijednost b je između a i c";
} else {
    echo "Vrijednost b nije između a i c";
}
echo "<br>" . "<br>";

?>

8. Koristeći uvjetovani tip kontrolne strukture switch ili match ispišite koji je trenutno dan u tjednu.
Za ispravno izvršenu vježbu koristite PHP funkciju date(). Nazivi dana moraju biti na hrvatskom jeziku.

<?php
echo "<br>";

$day = date("l");
switch ($day) {
    case "Monday":
        echo "Ponedjeljak";
        break;
    case "Tuesday":
        echo "Utorak";
        break;
    case "Wednesday":
        echo "Srijeda";
        break;
    case "Thursday":
        echo "Četvrtak";
        break;
    case "Friday":
        echo "Petak";
        break;
    case "Saturday":
        echo "Subota";
        break;
    case "Sunday":
        echo "Nedjelja";
        break;
}
?>