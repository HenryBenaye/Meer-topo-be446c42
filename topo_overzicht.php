<?php
        $dataBase = array ();
        echo("Hoeveel landen ga je toevoegen?").PHP_EOL;
        $hvlLand = readline("");
        for($i = 1; $i <= $hvlLand; $i++){
                echo("Welk land wil je toevoegen").PHP_EOL;
                $voegLand = readline("");
                echo("wat is de hoofdstad van $voegLand").PHP_EOL;
                $voegStad = readline("");
                $dataBase[$voegLand] = $voegStad;
        }
                 echo("De volgende landen en steden zitten in de database.").PHP_EOL;
        foreach($dataBase as $voegLand => $voegStad){
                 echo("$voegLand".", "."$voegStad").PHP_EOL;
        }

?>
