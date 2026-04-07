<?php
/*********************************************************************
* Author: Rami Sowalha
* Date: 24-3-2026
* Description: Example PHP program treasure hunt
* Version: 0.0.1
**********************************************************************/

// Create variable win, a nice string to show when user wins
// Concatinate with .
// \n is an enter
$win =  "      ___________\n"                        .
                "     '._==_==_=_.'\n"                    .
                "     .-\\:      /-.\n"                    .
                "    | (|:.     |) |\n"                    .
                "     '-|:.     |-' \n"                    .
                "       \\::.    /\n"                        .
                "        '::. .'\n"                            .
                "          ) (\n"                                .
                "        _.' '._\n"                            .
                "       `\"\"\"\"\"\"\"`\n";

// Nice intro screen for the game
// printf output a formatted string.
printf("Welcome to the treasure hunt game!\n\n");
printf("      _______\n");
printf( "     //  $$ /|\n");
printf("    // $$  / |\n");
printf("   //_____/  |\n");
printf("  |          |\n");
printf("  |   __   |\n");
printf("  |  |__|  |\n");
printf("  |________|\n\n\n");

// Question 1
printf("You find yourself standing at the edge of the jungle, with two paths ahead of you:\n");
printf("Option 1. This path leads through a dense thicket of thorns\n");
printf("Option 2. This path seems to be clear and well - trodden\n");
printf("Please make your choice 1 or 2:\n");
// Collect answer
// readline is a function!!
// https://www.php.net/manual/en/function.readline.php
$userChoice = readline("");

// Check the choice of the user: Option 1
// So comparing is done with ==
// Declaring a variable is done with 1 =
if ($userChoice == 1) {
    printf("You push your way through the thicket, enduring scratches and cuts along the way. Eventually, you emerge into a clearing and find a hidden cave. \n\n");
    printf("Option 1. Do you enter the cave?\n");
    printf("Option 2. Do you continue on the path?\n");
    printf("Please make your choice 1 or 2:\n");
    // Collect answer
    $userChoice = readline("");
  // Option 1 --> show winning
  if ($userChoice == 1) {
      printf("You found the chest!!!\n\n");
      printf("%s", $win);
  }
}

// Option 2
if ($userChoice == 2) {
    printf("You follow the well-trodden path and come across a river. Do you attempt to cross the river or look for a different route? \n\n");
  printf("Option 1. You attempt to cross the river?\n");
  printf("Option 2. Loof for a different route?\n");
  // Collect answer
  $userChoice = readline("");

  // Option 1 end game
  if ($userChoice == 1) {
        printf("You could not cross the river.. THE END ");
  }
  // Option 2 end game
  if ($userChoice == 2) {
    printf("After years searching you did not find the treasure chest... THE END");
  }
}
?>