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
