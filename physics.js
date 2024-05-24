const quizContainer = document.getElementById('quiz-container');
const quizQuestion = document.getElementById('quiz-question');
const quizOptions = document.getElementById('quiz-options');
const submitBtn = document.getElementById('submit-btn');
const quizFeedback = document.getElementById('quiz-feedback');

const quizData = [
    {
        question: 'What is referred to as the maximum displacement of a particle?',
        options: ['Frequency', 'Amplitude', 'Wavelength'],
        answer: 'Amplitude'
    },
    {
        question: 'What is the unit of electric current?',
        options: ['Volt', 'Ampere', 'Ohm'],
        answer: 'Ampere'
    },
    // Add more quiz questions here
];

let currentQuizIndex = 0;

function displayQuiz() {
    const currentQuiz = quizData[currentQuizIndex];
    quizQuestion.textContent = currentQuiz.question;
    quizOptions.innerHTML = '';

    currentQuiz.options.forEach(option => {
        const optionElement = document.createElement('div');
        optionElement.classList.add('quiz-option');

        const radioInput = document.createElement('input');
        radioInput.type = 'radio';
        radioInput.name = 'quiz-option';
        radioInput.value = option;

        const label = document.createElement('label');
        label.textContent = option;

        optionElement.appendChild(radioInput);
        optionElement.appendChild(label);
        quizOptions.appendChild(optionElement);
    });
}

function checkAnswer() {
    const selectedOption = document.querySelector('input[name="quiz-option"]:checked');
    if (selectedOption) {
        const currentQuiz = quizData[currentQuizIndex];
        if (selectedOption.value === currentQuiz.answer) {
            quizFeedback.textContent = 'Correct!';
        } else {
            quizFeedback.textContent = 'Wrong answer. Try again!';
        }
        currentQuizIndex++;
        if (currentQuizIndex < quizData.length) {
            setTimeout(displayQuiz, 1000);
        } else {
            quizFeedback.textContent = 'You have completed the quiz!';
        }
    } else {
        quizFeedback.textContent = 'Please select an option.';
    }
}

displayQuiz();

submitBtn.addEventListener('click', checkAnswer);