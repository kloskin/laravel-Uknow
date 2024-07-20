<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Słowne Przestawki</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Coiny&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Coiny", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #88BDBC;
            margin: 0;
            color: #EDFAE9;
        }

        .game-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: #254E58;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            min-width: 350px;
            min-height: 350px;
        }

        #scrambled-word {
            font-size: 24px;
            margin-bottom: 20px;
        }

        #answer {
            font-size: 18px;
            padding: 10px;
            width: 200px;
            margin-bottom: 20px;
            font-family: "Coiny", sans-serif;
        }

        input {
            border-radius: 20px;
        }

        button {
            border-radius: 20px;
            font-size: 18px;
            padding: 10px 20px;
            font-family: "Coiny", sans-serif;
            background-color: #112D32;
            color: #EDFAE9;
        }

        #message {
            margin-top: 20px;
            font-size: 18px;
        }

        #score, #rounds {
            font-size: 18px;
        }

        .score-round-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px; /* Space between score and rounds */
            margin-top: 20px;
        }

        .hidden {
            display: none;
        }

    </style>
</head>
<body>
    <div class="game-container">
        <h1>Słowne Przestawki</h1>
        <button id="start-button" onclick="startGame()">Rozpocznij Grę</button>
        <div id="game-elements" class="hidden">
            <p id="scrambled-word"></p>
            <input type="text" id="answer" placeholder="Twoja odpowiedź">
            <p id="message"></p> <!-- Ensure this element is added -->
            <div id="result"></div>
            <div class="score-round-container">
                <div id="score">Wynik: 0</div>
                <div id="rounds">Runda: 1</div>
                <div id="tries">Pozostałe próby: 3</div>
            </div>
        </div>
    </div>
    <script>
        let score = 0;
        let round = 1;
        let correctAnswers = 0;
        let startTime;
        let basePoints = 100; // Initial base points
        let pointsLossRate = 5; // Points lost per second
        let lives = 3; // Initial lives

        const words = ["rower", "motyl", "parowiec", "skazaniec"];
        let currentWord = "";
        let scrambledWord = "";

        function scrambleWord(word) {
            let scrambled = word.split('').sort(() => 0.5 - Math.random()).join('');
            while (scrambled === word) {
                scrambled = word.split('').sort(() => 0.5 - Math.random()).join('');
            }
            return scrambled;
        }

        function startGame() {
            // Hide the start button and show the game elements
            document.getElementById('start-button').classList.add('hidden');
            document.getElementById('game-elements').classList.remove('hidden');

            currentWord = words[Math.floor(Math.random() * words.length)];
            scrambledWord = scrambleWord(currentWord);
            document.getElementById("scrambled-word").innerText = scrambledWord;
            document.getElementById("answer").value = "";
            document.getElementById("message").innerText = "";
            document.getElementById("answer").focus();

            startTime = new Date().getTime();

            document.getElementById("answer").onkeydown = function (event) {
                if (event.key === 'Enter') {
                    checkAnswer();
                }
            };
        }

        function checkAnswer() {
            const userAnswer = document.getElementById('answer').value.toLowerCase();
            const endTime = new Date().getTime();
            const timeTaken = (endTime - startTime) / 1000; // in seconds

            if (userAnswer === currentWord) {
                const points = Math.max(0, Math.floor(basePoints - timeTaken * pointsLossRate));
                score += points;
                correctAnswers += 1;
                document.getElementById('message').innerHTML = `Dobrze! Otrzymałeś ${points} punktów.`;

                // Increase difficulty every 3 correct answers
                if (correctAnswers % 3 === 0) {
                    round += 1;
                    basePoints += 10; // Increase base points each round
                    document.getElementById('rounds').innerHTML = `Runda: ${round}`;
                }
            } else {
                lives -= 1;
                document.getElementById('tries').innerHTML = `Pozostałe próby: ${lives}`;
                
                if (lives <= 0) {
                    document.getElementById('result').innerHTML = 'Koniec Gry!.';
                    document.getElementById('answer').disabled = true;
                    return;
                }
            }

            document.getElementById('score').innerHTML = `Wynik: ${score}`;
            startGame();
        }

        // Start the game initially
        window.onload = function() {
            document.getElementById('answer').onkeydown = function (event) {
                if (event.key === 'Enter') {
                    checkAnswer();
                }
            };
        };

    </script>
</body>
</html>
