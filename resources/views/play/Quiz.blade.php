<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quiz') }}
        </h2>
    </x-slot>

    <style>

        :root {
            --hue-neutral: 200;
            --hue-wrong: 0;
            --hue-correct: 145;
        }

        body {
            --hue: var(--hue-neutral);
            padding: 0;
            margin: 0;
            justify-content: center;
            align-items: center;
        }

        body.correct {
            --hue: var(--hue-correct);
        }

        body.wrong {
            --hue: var(--hue-wrong);
        }

        .container {
            width: 100%;
            height: 300px;
            background-color: white;
            border-radius: 5px;
            padding: 10px;
        }

        .btn-grid {
            display: grid;
            grid-template-columns: repeat(2, auto);
            gap: 10px;
            margin: 20px 0;
        }

        .btn {
            --hue: var(--hue-neutral);
            border: 1px solid hsl(var(--hue), 100%, 30%);
            background-color: hsl(var(--hue), 100%, 50%);
            border-radius: 5px;
            padding: 5px 10px;
            color: white;
            outline: none;
        }

        .btn:hover {
            border-color: black;
        }

        .btn.correct {
            --hue: var(--hue-correct);
            color: black;
        }

        .btn.wrong {
            --hue: var(--hue-wrong);
        }

        .controls {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hide {
            display: none;
        }

    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                    <div class="container">
                        <div id="question-container" class="hide">
                            <div id="question">Question</div>
                            <div id="answer-buttons" class="btn-grid">
                                <button class="btn">Answer 1</button>
                                <button class="btn">Answer 2</button>
                                <button class="btn">Answer 3</button>
                                <button class="btn">Answer 4</button>
                            </div>
                        </div>
                        <div class="controls">
                            <button id="start-btn" style=" background-color: #8732a8; width: 10rem; margin: 3rem auto " class=" text-white font-bold py-2 px-4 rounded rounded">Start</button>
                            <button id="next-btn" style=" background-color: #8732a8; width: 10rem; margin: 3rem auto " class="next-btn btn hide">Next</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script type="text/javascript">

        const startButton = document.getElementById('start-btn')
        const nextButton = document.getElementById('next-btn')
        const questionContainerElement = document.getElementById('question-container')
        const questionElement = document.getElementById('question')
        const answerButtonsElement = document.getElementById('answer-buttons')

        let shuffledQuestions, currentQuestionIndex

        startButton.addEventListener('click', startGame)
        nextButton.addEventListener('click', () => {
            currentQuestionIndex++
            setNextQuestion()
        })

        function startGame() {
            startButton.classList.add('hide')
            shuffledQuestions = questions.sort(() => Math.random() - .5)
            currentQuestionIndex = 0
            questionContainerElement.classList.remove('hide')
            setNextQuestion()
        }

        function setNextQuestion() {
            resetState()
            showQuestion(shuffledQuestions[currentQuestionIndex])
        }

        function showQuestion(question) {
            questionElement.innerText = question.question
            question.answers.forEach(answer => {
                const button = document.createElement('button')
                button.innerText = answer.text
                button.classList.add('btn')
                if (answer.correct) {
                    button.dataset.correct = answer.correct
                }
                button.addEventListener('click', selectAnswer)
                answerButtonsElement.appendChild(button)
            })
        }

        function resetState() {
            clearStatusClass(document.body)
            nextButton.classList.add('hide')
            while (answerButtonsElement.firstChild) {
                answerButtonsElement.removeChild(answerButtonsElement.firstChild)
            }
        }

        function selectAnswer(e) {
            const selectedButton = e.target
            const correct = selectedButton.dataset.correct
            setStatusClass(document.body, correct)
            Array.from(answerButtonsElement.children).forEach(button => {
                setStatusClass(button, button.dataset.correct)
            })
            if (shuffledQuestions.length > currentQuestionIndex + 1) {
                nextButton.classList.remove('hide')
            } else {
                startButton.innerText = 'Restart'
                startButton.classList.remove('hide')
            }
        }

        function setStatusClass(element, correct) {
            clearStatusClass(element)
            if (correct) {
                element.classList.add('correct')
            } else {
                element.classList.add('wrong')
            }
        }

        function clearStatusClass(element) {
            element.classList.remove('correct')
            element.classList.remove('wrong')
        }

        const questions = [
            {
                question: 'What are Nociceptors?',
                answers: [
                    { text: 'Receptors of taste', correct: false },
                    { text: 'Nerve endings that detect pain.', correct: true },
                    { text: 'Smell receptors.', correct: false },
                    { text: 'Nerve transmitters located in brain.', correct: false }
                ]
            },
            {
                question: 'Which body part is Achlorhydria condition?',
                answers: [
                    { text: 'A stomach condition.', correct: true },
                    { text: 'A lungs condition', correct: false },
                    { text: 'A hearth condition', correct: false },
                    { text: 'I am not sure', correct: false }
                ]
            },
            {
                question: 'What is Refraction?',
                answers: [
                    { text: 'It is a muscle cramp.', correct: false },
                    { text: 'Disease of a liver.', correct: false },
                    { text: 'That is not a word.', correct: false },
                    { text: 'The deflection of light through medium.', correct: true }
                ]
            },
            {
                question: 'Which body organ does Cirrhosis affects?',
                answers: [
                    { text: 'It affects liver', correct: false },
                    { text: 'It affects hearth', correct: true },
                    { text: 'It affects skin', correct: true },
                    { text: 'It affects kidneys', correct: true }
                ]
            }
        ]

    </script>
</x-app-layout>
