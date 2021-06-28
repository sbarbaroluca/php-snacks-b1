<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
    $partite = [[
      "squadraDiCasa" => "Suns",
      "squadraOspite" => "Clippers",
      "squadraDiCasaPunti" => 104,
      "squadraOspitePunti" => 103
    ],
    [
      "squadraDiCasa" => "Hawks",
      "squadraOspite" => "Bucks",
      "squadraDiCasaPunti" => 120,
      "squadraOspitePunti" => 114
    ],
    [
      "squadraDiCasa" => "Sixers",
      "squadraOspite" => "Jazz",
      "squadraDiCasaPunti" => 106,
      "squadraOspitePunti" => 92
    ],
    [
      "squadraDiCasa" => "Nuggets",
      "squadraOspite" => "Nets",
      "squadraDiCasaPunti" => 125,
      "squadraOspitePunti" => 91
    ],
    [
    "squadraDiCasa" => "Lakers",
      "squadraOspite" => "Mavericks",
      "squadraDiCasaPunti" => 103,
      "squadraOspitePunti" => 100
    ]];

    echo "<ul>";
        for ($i=0; $i < count($partite); $i++) {
          ["squadraDiCasa" => $squadraDiCasa, "squadraOspite" => $squadraOspite, "squadraDiCasaPunti" => $puntiCasa, "squadraOspitePunti" => $puntiGuest] = $partite[$i];
          echo "<h1>" . $squadraDiCasa . " - " . $squadraOspite . " | " . $puntiCasa . " - " . $puntiGuest . "<h1/>";
        };
    echo "</ul>";
    
?>