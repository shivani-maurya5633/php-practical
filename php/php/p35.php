<?php
$countries = [
    "India" => "New Delhi",
    "USA"   => "Washington, D.C.",
    "Japan" => "Tokyo",
    "Germany" => "Berlin"
];

$capital = "New Delhi";
$country = array_search($capital, $countries);

if ($country !== false) {
    echo "Capital '$capital' belongs to Country: $country\n";
} else {
    echo "Capital '$capital' not found in array\n";
}
?>