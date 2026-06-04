<?php
require_once("config.php");

$options = [
    "http" => [
        "header" => "x-api-key: $api_key"
    ]
];

$context = stream_context_create($options);

$response = file_get_contents($api_url, false, $context);
$data = json_decode($response, true);

$dog = $data[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A simple web application that generates random dog pictures using The Dog API.">
    <meta name="author" content="Ezekiel Serrano">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <h1>Random Dog Pictures!</h1>
</header>

<main>

<section class="card">

    <h2>Press the button to shuffle!</h2>

    <img src="<?php echo $dog['url']; ?>" alt="Random Dog Pictures">

    <button onclick="location.reload()">Generate a new picture</button>

</section>

</main>

<footer>
    <p>PHP Assignment One API Integrationt</p>
</footer>

</body>
</html>
