<?php
/*********************************************************************
* Author: Rami Sowalha
* Date: 24-3-2026
* Description: Zoektocht voor de Aldi
* Version: 0.3
**********************************************************************/

$aldi = "      __________\n" .
        "     |  ALDI    |\n" .
        "     |  [  ]    |\n" .
        "     |__________|  \n" .
        "    /          \\ \n" .
        "   /____________\\ \n";

printf("\n\nJe bent gevallen door de vloer onderweg naar de Aldi en bent wakker geworden in een onbekende kamer. Je wilt hier weg!\n\n");

// STAP 1
printf("1. Je kijkt om je heen, wat doe je?\n");
printf("Optie 1: Zoek naar een wapen.\n");
printf("Optie 2: Zoek direct naar een uitgang.\n");
$keuze = readline("Maak je keuze: ");

if ($keuze == 1) {
    // STAP 2
    printf("\n2. Je vindt een vreemd vormige schedel op de vloer.\n");
    printf("Optie 1: WOW! COOL! Je neemt hem mee.\n");
    printf("Optie 2: Negeer het en zoek verder.\n");
    $keuze = readline("Maak je keuze: ");

    if ($keuze == 1) {
        // STAP 3
        printf("\n3. Een monster blokkeert de weg! Hij lijkt bang voor de schedel.\n");
        printf("Optie 1: Gooi de schedel naar het monster.\n");
        printf("Optie 2: Zet de schedel op je kop als een helm.\n");
        $keuze = readline("Maak je keuze: ");

        if ($keuze == 1) {
            // STAP 4
            printf("\n4. Het monster ontploft? Nice! Voor je zie je een splitsing.\n");
            printf("Optie 1: Ga naar rechts, richting een fel licht.\n");
            printf("Optie 2: Ga naar links, een donkere gang in.\n");
            $keuze = readline("Maak je keuze: ");

            if ($keuze == 1) {
                // STAP 5
                printf("\n5. Het licht komt van een enorme gouden deur. Er zit geen klink op.\n");
                printf("Optie 1: Hard tegen de deur duwen.\n");
                printf("Optie 2: Met de schedel op de deur kloppen.\n");
                $keuze = readline("Maak je keuze: ");

                if ($keuze == 2) {
                    // STAP 6
                    printf("\n6. De deur zwaait open! Alles wordt wit en je hoort een stem: 'Meneer? Meneer?!'\n");
                    printf("Optie 1: Doe je ogen open.\n");
                    printf("Optie 2: Doe de griddy\n");
                    $keuze = readline("Maak je keuze: ");

                    if ($keuze == 1) {
                        printf("\n--- HET EINDE ---\n");
                        printf("Je schrikt wakker.\n");
                        printf("Een medewerker kijkt je bezorgd aan. Je hebt geen schedel vast, maar een bevroren pak vissticks.\n");
                        printf("Je bent eindelijk in de ALDI!\n\n");
                        echo $aldi;
                    } else {
                        printf("\nDe medewerker schiet je op je kop met een raketwerper. Je ontploft. GAME OVER.\n\n");
                    }
                } else {
                    printf("\nDe deur valt op jou. Je bent plat geperst. GAME OVER.\n\n");
                }
            } else {
                printf("\nIn de donkere gang struikel je over een kratje bier. Je valt en breekt je nek. MAAR JE OVERLEEFT! en dan ontplof je... GAME OVER.\n\n");
            }
        } else {
            printf("\nJe ontploft... Wacht wat? GAME OVER.\n\n");
        }
    } else {
        printf("\nJe vind een aansteker! Daar heb je helemaal NIKS aan. Je steekt de aansteker aan en de kamer ontploft. GAME OVER.\n\n");
    }
} else {
    printf("\nJe rent blindelings naar de uitgang, maar zonder een wapen kom je snel een monster tegen en eet je op. GAME OVER.\n\n");
}
?>