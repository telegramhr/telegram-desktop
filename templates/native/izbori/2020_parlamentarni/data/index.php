<?php
/*
$nesigurni_mandati = 30;
$restart_bonus = round(rand(0,14));
$hdz_bonus = round(rand(0,14));
$nesigurni_mandati = $nesigurni_mandati - $restart_bonus - $hdz_bonus;
$domovinski_bonus = round($nesigurni_mandati/2);
$nesigurni_mandati = $nesigurni_mandati - $domovinski_bonus;
$most_bonus = round(rand(0,$nesigurni_mandati));
$nesigurni_mandati = $nesigurni_mandati - $most_bonus;

$results = array();
$results["total"] = array();
$results["total"]["restart"] = array(
    "mandati" => 50+$restart_bonus,
    "postotak" => round(rand(20,40), 1)
);
$results["total"]["hdz"] = array(
    "mandati" => 50+$hdz_bonus,
    "postotak" => round(rand(20,40), 1)
);
$results["total"]["domovinski"] = array(
    "mandati" => 11+$domovinski_bonus,
    "postotak" => round(rand(10,30), 1)
);
$results["total"]["most"] = array(
    "mandati" => 2+$most_bonus,
    "postotak" => round(rand(5,10), 1)
);
$results["total"]["mozemo"] = array(
    "mandati" => $nesigurni_mandati,
    "postotak" => round(rand(4,8), 1)
);
$results["total"]["simp"] = array(
    "mandati" => round(rand(0,3)),
    "postotak" => round(rand(4,8), 1)
);
$results["total"]["dosta"] = array(
    "mandati" => round(rand(0,3)),
    "postotak" => round(rand(3,7), 1)
);
$results["total"]["reformisti"] = array(
    "mandati" => round(rand(0,2)),
    "postotak" => round(rand(3,7), 1)
);
$results["total"]["petrina"] = array(
    "mandati" => round(rand(0,1)),
    "postotak" => round(rand(1,4), 1)
);
$results["total"]["kerum"] = array(
    "mandati" => round(rand(0,1)),
    "postotak" => round(rand(1,4), 1)
);

for ($i=1; $i < 11; $i++) { 
    $results[$i]["counted"] = round(rand(5,95));
    $results[$i]["restart"] = array(
        "mandati" => round(rand(3,6)),
        "postotak" => round(rand(20,40), 1)
    );
    $results[$i]["hdz"] = array(
        "mandati" => round(rand(3,6)),
        "postotak" => round(rand(20,40), 1)
    );
    $results[$i]["domovinski"] = array(
        "mandati" => round(rand(0,3)),
        "postotak" => round(rand(10,30), 1)
    );
    $results[$i]["most"] = array(
        "mandati" => round(rand(0,2)),
        "postotak" => round(rand(5,10), 1)
    );
    $results[$i]["mozemo"] = array(
        "mandati" => round(rand(0,1)),
        "postotak" => round(rand(4,8), 1)
    );
    $results[$i]["simp"] = array(
        "mandati" => round(rand(0,1)),
        "postotak" => round(rand(4,8), 1)
    );
    $results[$i]["dosta"] = array(
        "mandati" => round(rand(0,1)),
        "postotak" => round(rand(4,8), 1)
    );
    $results[$i]["reformisti"] = array(
        "mandati" => round(rand(0,2)/2),
        "postotak" => round(rand(0,7), 1)
    );
    $results[$i]["petrina"] = array(
        "mandati" => round(rand(0,2)/2),
        "postotak" => round(rand(0,6), 1)
    );
    $results[$i]["kerum"] = array(
        "mandati" => round(rand(0,2)/2),
        "postotak" => round(rand(0,6), 1)
    );
}

$results["age"] = round(rand(0,10));
$results["counted"] = round(rand(5,95));
*/
$results = get_option('tmg_izbori_2020_total');
echo json_encode($results);