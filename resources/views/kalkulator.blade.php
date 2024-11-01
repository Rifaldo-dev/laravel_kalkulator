<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Responsif</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f2f2f2;
        }
        .calculator {
            width: 100%;
            max-width: 340px;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .display {
            font-size: 1.5em;
            padding: 15px;
            background: #333;
            color: #fff;
            text-align: right;
            border-bottom: 1px solid #ddd;
        }
        .buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1px;
        }
        .buttons button {
            padding: 20px;
            font-size: 1.2em;
            border: none;
            cursor: pointer;
            background-color: #f9f9f9;
            color: #333;
            transition: background 0.2s ease;
        }
        .buttons button.operator {
            background-color: #f0a500;
            color: #fff;
        }
        .buttons button.equal {
            background-color: #333;
            color: #fff;
            grid-column: span 2;
        }
        .buttons button.clear {
            background-color: #ff6666;
            color: #fff;
        }
        .buttons button:hover {
            background-color: #e0e0e0;
        }
        .buttons button.operator:hover {
            background-color: #d98900;
        }
        .buttons button.clear:hover {
            background-color: #ff4d4d;
        }
        .buttons button.equal:hover {
            background-color: #444;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <div class="display" id="display">0</div>
        <div class="buttons">
            <button class="clear" onclick="clearDisplay()">C</button>
            <button class="operator" onclick="appendOperator('/')">÷</button>
            <button class="operator" onclick="appendOperator('*')">×</button>
            <button class="operator" onclick="appendOperator('-')">−</button>

            <button onclick="appendNumber(7)">7</button>
            <button onclick="appendNumber(8)">8</button>
            <button onclick="appendNumber(9)">9</button>
            <button class="operator" onclick="appendOperator('+')">+</button>

            <button onclick="appendNumber(4)">4</button>
            <button onclick="appendNumber(5)">5</button>
            <button onclick="appendNumber(6)">6</button>

            <button onclick="appendNumber(1)">1</button>
            <button onclick="appendNumber(2)">2</button>
            <button onclick="appendNumber(3)">3</button>
            <button class="equal" onclick="calculate()">=</button>

            <button onclick="appendNumber(0)">0</button>
            <button onclick="appendDot()">.</button>
        </div>
    </div>

    <script>
        let displayValue = '0';

        function updateDisplay() {
            document.getElementById('display').textContent = displayValue;
        }

        function clearDisplay() {
            displayValue = '0';
            updateDisplay();
        }

        function appendNumber(number) {
            if (displayValue === '0') {
                displayValue = String(number);
            } else {
                displayValue += number;
            }
            updateDisplay();
        }

        function appendDot() {
            if (!displayValue.includes('.')) {
                displayValue += '.';
            }
            updateDisplay();
        }

        function appendOperator(operator) {
            if (!isNaN(displayValue[displayValue.length - 1])) {
                displayValue += operator;
            }
            updateDisplay();
        }

        function calculate() {
            try {
                displayValue = String(eval(displayValue));
            } catch (error) {
                displayValue = 'Error';
            }
            updateDisplay();
        }
    </script>
</body>
</html>
