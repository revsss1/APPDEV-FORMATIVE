<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $name = "Karl Alexis Revilla";
        $profession = "Software Engineer";

        $contactNumber = "09213763803";
        $email = "karlrevilla@gmail.com";
        $address = "Kingspoint, Quezon City, Philippines";

        $aboutMe = "I'm a passionate software engineer skilled in turning ideas into reality through code. With expertise 
        in frontend and backend technologies, I thrive in collaborative environments and believe in the power of software 
        to drive innovation and improve lives. Agile advocate and continuous learner. Let's build something amazing together!";

        $skillInterest = array("Programming","Problem Solving", "Testing and Debugging", "Database Management", "Cloud Computing");
        $programmingLanguage = array("C++","Python", "Java", "Php", "Javascript");
        
        $education = array("FEU Institute of Technology" => "2022-2026",
                            "FEU High School"=>"2020-2022");

        $experience = array("Company ABC, Software Development Intern" => "2023-present",
                            "XYZ Inc., Quality Assurance Intern"=>"2022-2023");

        $projects = array("Dynamic Task Scheduler" => "Design and implement a task scheduling system that dynamically allocates resources based on workload and priority.",
                          "Blockchain-Based Supply Chain Management System" => "Design a blockchain-based system for tracking and managing supply chain logistics.")
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            max-width: 750px;
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            border-bottom: 1px solid #eee;
            padding-bottom: 20px;
        }

        .header img {
            width: 80px;
            height: 80px;
            margin-right: 20px;
            border-radius: 50%;
            border: 2px solid #4b6587;
        }

        .header h1, .header h4 {
            margin: 0;
            color: #4b6587;
        }

        .content {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }

        .column {
            flex: 1;
            padding: 0 10px;
            min-width: 0;
        }

        .left-column {
            flex: 0.4;
        }

        .right-column {
            flex: 0.6;
        }

        .card {
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 30px;
        }

        .contact-info {
            width: 100%;
            justify-content: center;
            align-items: center;
            font-size: 0.8rem;
            text-align: center;
            
        }

        ul {
            padding: 0;
            margin: 0;
            list-style-type: none; 
        }

        h2 {
            margin-top: 0;
            color: #4b6587;
            font-size: 1.6rem;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }

        h4 {
            margin-top: 0;
            color: #4b6587;
            font-size: 1.1rem;
            font-weight: normal;
            margin-bottom: 10px;
        }

        p, li {
            margin-top: 0;
            color: #555555;
            line-height: 1.5;
            text-align: justify;
        }

        strong {
            color: #4b6587;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="https://www.shutterstock.com/image-photo/ginger-kitten-isolated-on-white-260nw-1650020986.jpg" alt="Profile Picture">
            <div>
                <h1><?php echo $name ?></h1>
                <h4><?php echo $profession ?></h4>
            </div>
        </div>
        <div class="contact-info">
            <p>
                <li class="fas fa-phone"></li> <?php echo $contactNumber ?> &nbsp;&nbsp;&nbsp;
                <li class="fas fa-envelope"></li> <?php echo $email ?> &nbsp;&nbsp;&nbsp;
                <li class="fas fa-map-marker-alt"></li> <?php echo $address ?>
            </p>
        </div>
        <div class="content">
            <div class="column left-column">
                <div class="card">
                    <div class="about-me">
                        <h2>About Me</h2>
                        <p><?php echo $aboutMe ?></p>
                    </div>
                    <div class="skill-and-interest">
                        <h2>Skills and Interests</h2>
                        <ul>
                        <?php
                            foreach ($skillInterest as $skill) {
                                echo "<li>$skill</li>";
                            }
                        ?>

                        </ul>
                        <br>
                    </div>
                    <div class="Programming Language">
                        <h2>Programming Language</h2>
                        <ul>
                        <?php
                            foreach ($programmingLanguage as $pl) {
                                echo "<li>$pl</li>";
                            }
                        ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="column right-column">
                <div class="card">
                    <h2>Education</h2>
                    <ul>
                         <?php 
                            foreach ($education as $school => $year) {
                                echo "<li>$school <h4>$year</h4></li>";
                        }
                        ?>
                    </ul>
                </div>
                <div class="card">
                    <h2>Experience</h2>
                    <ul>
                        <?php 
                            foreach ($experience as $company => $duration) {
                                echo "<li>$company <h4>$duration</h4></li>";
                        }
                        ?>
                    </ul>
                </div>
                <div class="card">
                    <h2>Projects</h2>
                    <?php 
                        foreach ($projects as $projname => $description) {
                           echo "<strong>$projname</strong>
                           <p>$description</p>";
                        }

                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
