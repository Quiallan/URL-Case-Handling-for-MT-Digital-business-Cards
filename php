<?php
// Array to map lowercase filenames to the actual filenames
$images = [
    'bill' => 'Bill.jpg',
    'carrieann' => 'Carrieann.jpg',
    'doug' => 'Doug.jpg',
    'don' => 'Don.jpg',
    'eric' => 'Eric.jpg',
    'gregh' => 'GregH.jpg',
    'jen' => 'Jen.jpg',
    'qui' => 'Qui.jpg',
    // Add more mappings here
];

// Extract the path from the URL and convert to lowercase
$path = strtolower(basename($_SERVER['REQUEST_URI']));

// Remove any file extension, if present
$path = pathinfo($path, PATHINFO_FILENAME);

// Check if the lowercase path exists in the images array
if (isset($images[$path])) {
    // Redirect to the correct case-sensitive path
    header('Location: ' . 'https://vcard.marketingtechonline.com/' . $images[$path]);
    exit;
}

?>



<?php
$images = [
    'bill' => 'Bill.jpg',
    'carrieann' => 'Carrieann.jpg',
    'doug' => 'Doug.jpg',
    'don' => 'Don.jpg',
    'eric' => 'Eric.jpg',
    'gregh' => 'GregH.jpg',
    'jen' => 'Jen.jpg',
    'qui' => 'Qui.jpg',

];
$path = strtolower(basename($_SERVER['REQUEST_URI']));
$path = pathinfo($path, PATHINFO_FILENAME);
if (isset($images[$path])) {
    $newPath = 'https://vcard.marketingtechonline.com/' . $images[$path];
    if ($_SERVER['REQUEST_URI'] != '/' . $images[$path]) {
        header('Location: ' . $newPath);
        exit;
    }
}

?>

