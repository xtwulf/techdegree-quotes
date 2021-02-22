<?php

// PHP - Random Quote Generator

// Read JSON file

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
$quotes = json_decode(file_get_contents('inc/quotes.json'), true);


// Create the getRandomQuote function and name it getRandomQuote

function getRandomQuote($quotes) {
    
    return rand(0, count($quotes['quotes'])-1);
}



// Create the printQuote funtion and name it printQuote

function printQuote($quotes) {
    $number = getRandomQuote($quotes);
    $quote = $quotes['quotes'][$number]['quote'];
    $author = $quotes['quotes'][$number]['author'];
    
    return(array('quote'=>$quote, 'author'=>$author));
    
}


?>