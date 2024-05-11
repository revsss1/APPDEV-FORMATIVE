<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Generator</title>
</head>
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
        flex-direction: column; 
        background-color: white;
        padding: 20px; 
        width: 50%;
        height: 45%;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

</style>
<body>
    <div class="container">
        <?php
            for($i = 0; $i < 100; $i++) {
                if($i < 10){
                    echo "0" . $i . ", ";
                }else{
                    echo $i . ", ";
                }
            }
        ?>
    </div>
</body>
</html>