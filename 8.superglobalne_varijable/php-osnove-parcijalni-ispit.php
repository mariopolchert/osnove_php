<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <title>PHP parcijalni ispit</title>
    <style>
        body {
            display: flex;
            flex-direction: row;
        }

        div {
            margin-left: 40px;
            margin-right: 40px;
        }

        th,
        td {
            padding: 5px;
        }
    </style>
</head>

<body>
    <div>
        <h2>PHP parcijalni ispit</h2>

        <!-- Form za unos novih riječi -->

        <form method="POST">
            <label for="word">Unesite riječ:</label><br>
            <input type="text" id="word" name="word" required>
            <br><br>
            <input type="submit" value="Pošalji">
        </form>
    </div>

    <?php
    // Prebroj samoglasnike
    function countVowels($word)
    {
        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        $count = 0;
        foreach (str_split($word) as $letter) {
            if (in_array($letter, $vowels)) {
                $count++;
            }
        }
        return $count;
    }

    // Prebroj suglasnike
    function countConsonants($word)
    {
        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        $count = 0;
        foreach (str_split($word) as $letter) {
            if (ctype_alpha($letter) && !in_array($letter, $vowels)) {
                $count++;
            }
        }
        return $count;
    }

    $filePath = __DIR__ . '/words.json';
    $wordsArray = [];

    // Pročitaj riječi iz JSON datoteke, ako postoji, i spremi ih u polje
    if (file_exists($filePath)) {
        $jsonContent = file_get_contents($filePath);
        $wordsArray = json_decode($jsonContent, true);
    }

    // Ako postoji, uzmi riječ iz POST-a i dodaj je u polje, s uklonjenim prazninama
    if (isset($_POST['word']) && !empty(trim($_POST['word']))) {
        $word = trim($_POST['word']);
        $numLetters = strlen($word);
        $numVowels = countVowels($word);
        $numConsonants = countConsonants($word);
        // Formiraj polje s podacima nove riječi
        $newWordData = [
            'word' => $word,
            'numLetters' => $numLetters,
            'numVowels' => $numVowels,
            'numConsonants' => $numConsonants
        ];

        // Dodaj podatke nove riječi, ako već nisu u polju
        if (!in_array($newWordData, $wordsArray) && $wordsArray !== null) {
            $wordsArray[] = $newWordData;
        }


        // Spremi polje riječi u JSON datoteku
        file_put_contents($filePath, json_encode($wordsArray));
    }
    ?>

    <!-- Ispiši tablicu -->
    <div>
        <h4>Upišite željenu riječ!</h4>
        <table border="1">
            <tr>
                <th>Riječ</th>
                <th>Broj slova</th>
                <th>Broj samoglasnika</th>
                <th>Broj suglasnika</th>
            </tr>
            <?php if (!empty($wordsArray)) : ?>
                <?php foreach ($wordsArray as $wordData) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($wordData['word']); ?></td>
                        <td><?php echo $wordData['numLetters']; ?></td>
                        <td><?php echo $wordData['numVowels']; ?></td>
                        <td><?php echo $wordData['numConsonants']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </div>

</body>

</html>