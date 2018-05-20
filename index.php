<?php

$text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
when an unknown printer took a galley of type and scrambled it to make a type specimen book.
It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
$words = preg_split("/[\s]+/", $text);
$temp = "";

function isFirstVowel($word) {
    $arrVowels = array("a", "e", "i", "o", "u", "y");
    return in_array(strtolower($word{0}), $arrVowels);
}

for ($i = 0; $i < count($words); $i++) {
    if (($i + 1) % 5 == 0 && isFirstVowel($words[$i]) && $i != 0) {
        $temp .= ",";
    }

    if ($i != 0 || ($i + 1) != count($words)) {
        $temp .= " ";
    }

    $temp .= $words[$i];
}

echo $temp;

//for ($i = 0, $wordIndex = 4; $i < floor(count($words) / 5); $i++, $wordIndex += 5) {
//    $word = $words[$wordIndex];
//    $firstWord = strtolower($word{0});
//    if (in_array($firstWord, $arr)) {
//        echo " - " . $word;
//    }
//}

