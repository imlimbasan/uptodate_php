

<?php
 
/*$brad ='IONEL ';
$age=30;
$has_kids=true;
$cash=20.2;

echo $has_kids;
var_dump($has_kids);
print_r($cash);


$person = [ $brad ='IONEL ',$age=30,$has_kids=true,$cash=20.2];
$peoples = [ array($brad ='IONEL ',$age=30,$has_kids=true,$cash=20.2),
            array($brad ='IONEL ',$age=30,$has_kids=true,$cash=20.2),
            array($brad ='IONEL ',$age=30,$has_kids=true,$cash=20.2) ];
echo $peoples[1][1];
print_r($person);
print_r($peoples);

*/



//SIMPLE ARRAY 
echo "<br><h1> SIMPLE ARRAY </h1>"; 
$crypto =   [
            'ETH',
            'BTC',
            'EGLD',
            'SOL',
            'LINK'
            ];

//function1
unset($crypto[1]);
echo "<br> Eliminarea unui element si afisarea altuia: " .$crypto[2];"</br>";

//function2
array_splice($crypto, 0, 1);
echo "<br> Eliminarea unui element și afișarea următorului: " .$crypto[1];"</br>";

//function3
array_splice($crypto, 0, 0, 'DOT');
echo "<br> Adaugarea unui element la începutul array-ului: " .$crypto[0];"</br>";

// function4
$sum = array_sum($crypto);
echo "<br> Suma: " . $sum . "";

//function5
$flippedArray = array_flip($crypto); 
echo "<br>Array inversat: ";print_r($flippedArray);

//function6
array_push($crypto, "ADA");
echo "<br>Ultimul Element adaugat: " . $crypto[count($crypto) - 1] . "";

//function7
rsort($crypto);
echo "<br> Sortat descrescator:"; print_r($crypto);

//function8
$slice = array_slice($crypto, 1, 2);
echo "<br>Sliced Array: "; print_r($slice);

//function9
$implodeString = implode(', ', $crypto);
echo "<br> Concatenarea elementelor: $implodeString";

//function10
$searchIndex = array_search('EGLD', $crypto);
echo "<br> Indexul valorii 'EGLD': $searchIndex";

//function11
$searchValue = 'DOT';
if (in_array($searchValue, $crypto)) {
    echo "<br> Verificare '$searchValue': Elementul exista în array";
} else {
    echo "<br> Verificare '$searchValue': Elementul nu exista în array";
}


// ASOCIATIVE ARRAY 
echo "<br><h1> ASOCIATIVE ARRAY </h1>"; 

$cryptocurrency = [
    'Ethereum' => 'ETH',
    'Bitcoin' => 'BTC',
    'MultiversX' => 'EGLD',
    'Solana' => 'SOL',
    'Chainlink' => 'LINK'
];

// F1 afisare
echo "<br> 1. Afisare:  " . $cryptocurrency['Ethereum'] . "</br>"; 

// F2 afisare cu parametrii
echo "<br> 2. Afisare param:  " . print_r($cryptocurrency, true) . "</br>"; 

// F3 lungime array
echo "<br> 3. Lungine array:  " . count($cryptocurrency) . "</br>"; 

// F4 sortare array
sort($cryptocurrency); echo "<br> 4. Sortare: "; print_r($cryptocurrency); echo "</br>"; 


// F5 sortare array dupa chei
ksort($cryptocurrency); echo "<br> 5. Sortare după chei: "; print_r($cryptocurrency); echo "</br>"; 

// F6 cheile din array
$keys = array_keys($cryptocurrency); echo "<br> 6. Cheile array-ului: "; print_r($keys); echo "</br>"; 

// F7 valorile din array
$values = array_values($cryptocurrency); echo "<br> 7. Valorile array-ului: "; print_r($values); echo "</br>"; 

// F8 adaugarea unui element nou
array_push($cryptocurrency, 'BNK','BONK');
echo"<br> Elementul nou adaugat: " .$cryptocurrency[count($cryptocurrency) -1]."</br>";


// F9 verifica array
$searchValue = 'ETH';
if (in_array($searchValue, $cryptocurrency)) {
    echo "<br> 9. Verificare existență valoare '$searchValue': Există in array </br>";
} else {
    echo "<br> Nu exista in array </br>";
}

// F10 inverseaza cheile cu valorile
$flippedArray = array_flip($cryptocurrency); echo "<br> 10.  Array inversat: "; print_r($flippedArray); echo "</br>"; 

?>
