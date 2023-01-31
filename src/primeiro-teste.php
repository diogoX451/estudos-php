<?php

echo  "Hello World";

// Variaveis
// for ($i = 0; $i <= 30; $i++) {
//     if ($i % 2 == 0) {
//         echo  "O número $i é par " . PHP_EOL;
//     } else {
//         echo  "O número $i é impar " . PHP_EOL;
//     }
// }

// getType => pega o tipo da variavel
// PHP_EOL => quebra de linha
// . concatenação


for ($i = 0; $i <= 20; $i++) {
    if ($i == 10) {
        echo  "O número $i é igual a 10" . PHP_EOL;
        break;
    }
}
