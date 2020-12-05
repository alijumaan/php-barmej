<?php
/**
 * All characters in this file is real and i copy it from Wikipedia
 */
// List of all criminal
$criminals = [
    [
        'name' => 'Charles Manson',
        'age' => '43',
        'description' => 'Known for Manson Family murders',
        'id' => '101',
    ],
    [
        'name' => 'Carlo Gambino',
        'age' => '51',
        'description' => 'an Italian-American crime boss of the Gambino crime family',
        'id' => '102',
    ],
    [
        'name' => 'Albert Anastasia',
        'age' => '38',
        'description' => 'an Italian-American mobster, hitman, and crime boss',
        'id' => '103',
    ],
    [
        'name' => 'Johnny Torrio',
        'age' => '61',
        'description' => 'an Italian-American mobster who helped build the Chicago Outfit in the 1920s',
        'id' => '104',
    ],
    [
        'name' => 'Frank Costello',
        'age' => '55',
        'description' => 'was an Italian-American crime boss of the Luciano crime family. In 1957',
        'id' => '105',
    ],
    [
        'name' => 'Charles Manson',
        'age' => '43',
        'description' => 'Known for Manson Family murders',
        'id' => '106',
    ],
    [
        'name' => 'Veerappan',
        'age' => '51',
        'description' => 'kidnapping major politicians for ransom',
        'id' => '107',
    ],
    [
        'name' => 'Jonathan Wild',
        'age' => '44',
        'description' => 'used his crime fighting role to remove rivals and launder the proceeds of his own crimes',
        'id' => '108',
    ],
    [
        'name' => 'Frankie Yale',
        'age' => '38',
        'description' => 'severely beat several men during a fight in the Coney Island pool hall',
        'id' => '109',
    ],
    [
        'name' => 'Joe Masseria',
        'age' => '32',
        'description' => 'an early Italian-American Mafia boss in New York City',
        'id' => '110',
    ],
];
// List of criminal arrested
$criminal_arrested = [
    [
        'name' => 'Carlo Gambino',
        'age' => '51',
        'description' => 'an Italian-American crime boss of the Gambino crime family',
        'id' => '102',
    ],
    [
        'name' => 'Frank Costello',
        'age' => '55',
        'description' => 'was an Italian-American crime boss of the Luciano crime family. In 1957',
        'id' => '105',
    ],
    [
        'name' => 'Charles Manson',
        'age' => '43',
        'description' => 'Known for Manson Family murders',
        'id' => '106',
    ],
    [
        'name' => 'Jonathan Wild',
        'age' => '44',
        'description' => 'used his crime fighting role to remove rivals and launder the proceeds of his own crimes',
        'id' => '108',
    ]
];

function return_criminal_id()
{
    $criminals_id=[];
    global $criminals;
    foreach ($criminals as $criminal)
    {
        $criminals_id[] = $criminal['id'];
    }

    $criminals_id_value = [];
    foreach ($criminals_id as $key => $item)
    {
        $criminals_id_value[] = $item;
    }
    return $criminals_id_value;
}

function return_criminal_arrested_id()
{
    $criminal_arrested_id = [];
    global $criminal_arrested;
    foreach ($criminal_arrested as $arrest)
    {
        $criminal_arrested_id[] = $arrest['id'];
    }

    $criminal_arrested_id_value = [];
    foreach ($criminal_arrested_id as $key => $item)
    {
        $criminal_arrested_id_value[] = $item;
    }
    return $criminal_arrested_id_value;
}

function find_criminal()
{
    return_criminal_id();
    return_criminal_arrested_id();
    foreach (return_criminal_id() as $item)
    {
        if (in_array($item, return_criminal_arrested_id())) {
            echo $item."<br>";
        }
    }
}

find_criminal();
