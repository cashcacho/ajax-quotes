<?php
// Array of quotes
$quotes = [
    "I can't relate to lazy people. We don't speak the same language. I don't understand you. I don't want to understand you.",
    "A lot of people say they want to be great, but they’re not willing to make the sacrifices necessary to achieve greatness.",
    "Have a good time. Life is too short to get bogged down and be discouraged. You have to keep moving. You have to keep going. Put one foot in front of the other, smile and just keep on rolling.",
    "There’s nothing truly to be afraid of, when you think about it, because I’ve failed before, and I woke up the next morning, and I’m OK.",
    "Those times when you get up early and you work hard; those times when you stay up late and you work hard; those times when you don’t feel like working, you’re too tired, you don’t want to push yourself, but you do it anyway; that is actually the dream. That’s the dream. It’s not the destination, it’s the journey.",
];

// Get a random index
$randomIndex = array_rand($quotes);

// Return the random quote
echo $quotes[$randomIndex];
?>
