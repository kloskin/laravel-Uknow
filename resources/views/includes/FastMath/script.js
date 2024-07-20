let score = 0;
let round = 1;
let correctAnswers = 0;
let startTime;
let numRange = 3; // Initial range of numbers
let minRange = 0; // Initial minimum range
let basePoints = 100; // Initial base points
let pointsLossRate = 5; // Points lost per second
let lives = 3; // Initial lives

function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function startGame() {
    // Hide the start button and show the game elements
    document.getElementById('start-button').classList.add('hidden');
    document.getElementById('game-elements').classList.remove('hidden');

    document.getElementById('result').innerHTML = '';
    const eq = generateEquation();
    document.getElementById('equation').innerHTML = eq.equation;
    document.getElementById('answer').value = '';
    document.getElementById('answer').focus();

    startTime = new Date().getTime();

    document.getElementById('answer').onkeydown = function (event) {
        if (event.key === 'Enter') {
            checkAnswer(eq.answer);
        }
    };
}

function generateEquation() {
    const operations = ['+', '-', '*', '/'];
    if (round > 6) {
        operations.push('^');
    }

    let num1 = getRandomInt(minRange, numRange);
    let num2 = getRandomInt(1, numRange);
    let operation1 = operations[getRandomInt(0, operations.length - 1)];

    // Ensure there is only one exponentiation per equation
    let hasExponentiation = (operation1 === '^');

    if (operation1 === '/') {
        while (num1 % num2 !== 0) {
            num2 = getRandomInt(1, numRange);
        }
    } else if (operation1 === '^') {
        num2 = getRandomInt(2, 3); // Limit exponentiation to 2 and 3
    }

    let equation = `${num1} ${operation1} ${num2}`;
    let answer = eval(`${num1} ${operation1} ${num2}`);

    if (round > 9) {
        let intermediateResult = answer;
        let num3 = getRandomInt(1, numRange);
        let operation2;
        do {
            operation2 = operations[getRandomInt(0, operations.length - 1)];
        } while (operation2 === '^' && hasExponentiation);

        if (operation2 === '^') {
            hasExponentiation = true;
            num3 = getRandomInt(2, 3); // Limit exponentiation to 2 and 3
        }

        if (operation2 === '/') {
            while (intermediateResult % num3 !== 0) {
                num3 = getRandomInt(1, numRange);
            }
        }

        equation = `(${equation}) ${operation2} ${num3}`;
        answer = eval(`${intermediateResult} ${operation2} ${num3}`);
    }

    return { equation, answer: answer.toString() };
}

function checkAnswer(correctAnswer) {
    const userAnswer = document.getElementById('answer').value;
    const endTime = new Date().getTime();
    const timeTaken = (endTime - startTime) / 1000; // in seconds

    if (userAnswer === correctAnswer) {
        const points = Math.max(0, Math.floor(basePoints - timeTaken * pointsLossRate));
        score += points;
        correctAnswers += 1;
        document.getElementById('result').innerHTML = `Correct! You earned ${points} points.`;

        // Increase difficulty every 3 correct answers
        if (correctAnswers % 3 === 0) {
            round += 1;
            if (round % 4 === 0) {
                minRange += 1; // Increase minimum range every 4 rounds
            }
            numRange += 1; // Increase number range
            basePoints += 10; // Increase base points each round
            document.getElementById('rounds').innerHTML = `Round: ${round}`;
        }
    } else {
        lives -= 1;
        document.getElementById('result').innerHTML = `Wrong! The correct answer was ${correctAnswer}.`;
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
