<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <style>
        body {
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
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

        .main-label {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .left, .right {
            width: 100%; /* Changed */
            padding: 10px;
            text-align: center;
        }

        .left input[type="number"] {
            width: 40%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .left input[type="submit"] {
            width: 15%;
            padding: 10px;
            cursor: pointer;
            background-color: darkgray;
            color: white;
            border: none;
            border-radius: 4px;
        }

        .left input[type="submit"]:hover {
            background-color: darkgray;
            opacity: 50%;
        }

        .right label {
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="main-label">Grade Ranking</div>
        <div class="left">
            <form action="formative2_2.php" method="post">
                <input type="number" placeholder="Enter grade" name="grade">
                <br>
                <input type="submit" value="Submit" name="submit">
            </form>
        </div>
        <div class="right">
            <?php 
                $letterGrade = "";

                if(isset($_POST["grade"])) {
                    $grade = $_POST["grade"];
                    if($grade >= 93 && $grade <= 100){
                        $letterGrade = "A";
                    } else if($grade >= 90 && $grade <= 92){
                        $letterGrade = "A-";
                    } else if($grade >= 87 && $grade <= 89){
                        $letterGrade = "B+";
                    } else if($grade >= 83 && $grade <= 86){
                        $letterGrade = "B";
                    } else if($grade >= 80 && $grade <= 82){
                        $letterGrade = "B-";
                    } else if($grade >= 77 && $grade <= 79){
                        $letterGrade = "C+";
                    } else if($grade >= 73 && $grade <= 76){
                        $letterGrade = "C";
                    } else if($grade >= 70 && $grade <= 72){
                        $letterGrade = "C-";
                    } else if($grade >= 67 && $grade <= 69){
                        $letterGrade = "D+";
                    } else if($grade >= 63 && $grade <= 66){
                        $letterGrade = "D";
                    } else if($grade >= 60 && $grade <= 62){
                        $letterGrade = "D-";
                    } else if($grade < 60){
                        $letterGrade = "F";
                    } else {
                        $letterGrade = "Invalid Input";
                    }
                }
            ?>
            <label for="grade">Grade: <?php echo $letterGrade; ?> </label> <br>
        </div>
    </div>
</body>
</html>
