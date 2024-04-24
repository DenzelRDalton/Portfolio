<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/main.css">
    <title>Denzel Dalton</title>
</head>
<body onload="ChangeNavbarActive('about')">
    <?php include_once("./navbar.php"); ?>

    <section>
        <table border="1">
            <caption><h3>Education</h3></caption>
            <thead>
                <tr>
                    <th>Institution</th>
                    <th>Degree or Certification</th>
                    <th>Date of Completion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>University of North Carolina Wilmington</td>
                    <td>Bachelor's of Science in Computer Science</td>
                    <td>05/2024</td>
                </tr>
                <tr>
                    <td>CompTIA</td>
                    <td>A+</td>
                    <td>03/2021</td>
                </tr>
                <tr>
                    <td>CompTIA</td>
                    <td>Network+</td>
                    <td>03/2021</td>
                </tr>
                <tr>
                    <td>Microsoft</td>
                    <td>Azure Assotiate</td>
                    <td>09/2023</td>
                </tr>
            </tbody>
        </table>
        
        <table border="1">
            <caption><h3>Work Experience</h3></caption>
            <thead>
                <tr>
                    <th>Company</th>
                    <th>Position</th>
                    <th>Last Day</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ServiceNet INC</td>
                    <td>Computer Technician</td>
                    <td>Current</td>
                </tr>
                <tr>
                    <td>Target</td>
                    <td>Logistics Specialist</td>
                    <td>09/2021</td>
                </tr>
            </tbody>
        </table>
        <?php include_once("./footer.php"); ?>
    </section>
    <script src="./js/main.js"></script>
</body>
</html>