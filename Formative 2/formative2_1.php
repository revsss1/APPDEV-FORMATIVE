<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Length Converter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column; /* Added */
            background-color: white;
            padding: 20px; 
            width: 50%;
            height: 45%;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .input-group {
            display: flex;
            margin-bottom: 10px;
        }

        .input-group input, .input-group select {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }

        .input-group input[type="submit"] {
            width: 15%;
            padding: 10px;
            cursor: pointer;
            background-color: darkgray;
            color: white;
            border: none;
            border-radius: 4px;
            transition: opacity 0.3s;
        }

        .input-group input[type="submit"]:hover {
            background-color: darkgray;
            opacity: 0.5;
        }

        .output {
            font-weight: bold;
            font-size: 20px;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Length Converter</h1>
        <form method="post">
            <div class="input-group">
                <input type="number" name="inputValue" value="<?php echo isset($_POST['inputValue']) ? $_POST['inputValue'] : ''; ?>">
                <select name="inputUnit">
                    <option value="meter">Meter</option>
                    <option value="centimeter">Centimeter</option>
                    <option value="kilometer">Kilometer</option>
                    <option value="inch">Inch</option>
                    <option value="foot">Foot</option>
                    <option value="yard">Yard</option>
                </select>
            </div>
            <div class="input-group">
                <select name="outputUnit">
                    <option value="meter">Meter</option>
                    <option value="centimeter">Centimeter</option>
                    <option value="kilometer">Kilometer</option>
                    <option value="inch">Inch</option>
                    <option value="foot">Foot</option>
                    <option value="yard">Yard</option>
                </select>
                <input type="submit" name="submit" value="Convert">
            </div>
    
            <?php
                if(isset($_POST['submit'])) {
                    $inputValue = $_POST['inputValue'];
                    $inputUnit = $_POST['inputUnit'];
                    $outputUnit = $_POST['outputUnit'];
                    $outputValue = '';

                    if ($inputUnit == $outputUnit) {
                        $outputValue = $inputValue;
                    } else {
                        switch ($inputUnit) {
                            case 'meter':
                                switch ($outputUnit) {
                                    case 'centimeter':
                                        $outputValue = $inputValue * 100;
                                        break;
                                    case 'kilometer':
                                        $outputValue = $inputValue / 1000;
                                        break;
                                    case 'inch':
                                        $outputValue = $inputValue * 39.3701;
                                        break;
                                    case 'foot':
                                        $outputValue = $inputValue * 3.28084;
                                        break;
                                    case 'yard':
                                        $outputValue = $inputValue * 1.09361;
                                        break;
                                }
                                break;
                            case 'centimeter':
                                switch ($outputUnit) {
                                    case 'meter':
                                        $outputValue = $inputValue / 100;
                                        break;
                                    case 'kilometer':
                                        $outputValue = $inputValue / 100000;
                                        break;
                                    case 'inch':
                                        $outputValue = $inputValue * 0.393701;
                                        break;
                                    case 'foot':
                                        $outputValue = $inputValue * 0.0328084;
                                        break;
                                    case 'yard':
                                        $outputValue = $inputValue * 0.0109361;
                                        break;
                                }
                                break;
                            // Similar cases for other units...
                        }
                    }

                    echo "<div class='output'>$inputValue $inputUnit = $outputValue $outputUnit</div>";
                }
            ?>
        </form>
    </div>
</body>
</html>
