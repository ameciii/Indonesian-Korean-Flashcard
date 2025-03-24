<?php
// Include the data file
include 'data.php';

// Get a random flashcard
$randomKey = array_rand($flashcards);
$indonesian = $randomKey;
$korean = $flashcards[$randomKey];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Bahasa Korea</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }
        .flashcard {
            border: 2px solid #444;
            border-radius: 10px;
            padding: 20px;
            margin: 20px auto;
            width: 300px;
            background-color: #f9f9f9;
        }
        .button {
            margin-top: 10px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Belajar Bahasa Korea</h1>
    <div class="flashcard">
        <p><strong>Bahasa Indonesia:</strong> <?= $indonesian; ?></p>
        <p id="korean-word" style="display: none;"><strong>Bahasa Korea:</strong> <?= $korean; ?></p>
        <div class="button">
            <button onclick="showTranslation()">Tampilkan Terjemahan</button>
            <a href="index.php"><button>Muat Ulang</button></a>
        </div>
    </div>

    <script>
        function showTranslation() {
            document.getElementById('korean-word').style.display = 'block';
        }
    </script>
</body>
</html>
