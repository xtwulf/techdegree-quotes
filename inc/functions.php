<?php

// PHP - Random Quote Generator



// Creating the Quotes array
$quotes = [];
$quotes[0] = array("quote" => "When one door closes another door opens; but we so often look so long and so regretfully upon the closed door, that we do not see the ones which open for us.", "author" => "Alexander Graham Bell", "citation" => "", "year" => "1887", "category" =>"Business");
$quotes[1] = array("quote" => "To be a striker you need to be in good shape.", "author" => "Pele", "citation" => "", "year" => "", "category" =>"Sports");
$quotes[2] = array("quote" => "I don't want to adult today, I just want to dog. I'll be lying down on the floor in the sun, you can pet me and bring me some snacks.", "author" => "unknown", "citation" => "", "year" => "", "category" =>"Funny");
$quotes[3] = array("quote" => "I just don’t know if movies can ever be considered art, because there’s so much money involved… It’s all about commerce. I don’t think art can come from that place.", "author" => "Johnny Depp", "citation" => "", "year" => "", "category" =>"Celebrities");
$quotes[4] = array("quote" => "Enjoy yourself. It's later than you think.", "author" => "unknown", "citation" => "chinese proverb", "year" => "", "category" =>"Life");
$quotes[5] = array("quote" => "I have also seen children successfully surmounting the effects of an evil inheritance. That is due to purity being an inherent attribute of the soul.", "author" => "Mahatma Gandhi", "citation" => "quotes.net", "year" => "", "category" =>"Celebrities");



// Function getRandomQuote checks the elemnts of the array and returns a random number

function getRandomQuote($quotes) {
    
    return rand(0, count($quotes)-1);
}



// Function printQuote --> Print a random quote and checks, if tehr are additional elements

function printQuote($quotes) {
    $number = getRandomQuote($quotes);
    $quote = $quotes[$number]['quote'];
    $author = $quotes[$number]['author'];
    $citation = $quotes[$number]['citation'];
    $year = $quotes[$number]['year'];
    $category = $quotes[$number]['category'];
    
    echo '
    <p> Category: ' . $category . '</p>
    <p class="quote"> '. $quote .' </p>
    <p class="source"> ' . $author;
    if ($citation != "") {
        echo "<span class='citation'> " . $citation ." </span>";

    }
    if ($year != "") {
        echo "<span class='year'> ".$year." </span>";
        
    }
    echo "</p>";

}


?>