<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/projects.css">
    <title>Denzel Dalton</title>
</head>
<body  onload="ChangeNavbarActive('projects')">
    <?php include_once("./navbar.php"); ?>

    <section>
        <h3>Here are some of my personal projects</h3>

        <ul class="cards">
            <li class="card">
                <img src="./images/FPS Lab.JPG" alt="Image not found">
                <h3>FPS Lab</h3>
                <p>First Person Shooter Game</p>
            </li>
            <li class="card">
                <img src="./images/Mario.JPG" alt="Image not found">
                <h3>Platformer Lab</h3>
                <p>Platformer Game</p>
            </li>
            <li class="card">
                <img src="./images/CG.JPG" alt="Image not found">
                <h3>OpenGL Proj</h3>
                <p>OpenGL Graphics Program</p>
            </li>
            <li class="card">
                <img src="./images/curves.JPG" alt="Image not found">
                <h3>CImage Curves</h3>
                <p>Curve Algorithm Demonstration</p>
            </li>
        </ul>
    </section>

    <?php include_once("./footer.php"); ?>
    <script src="./js/main.js"></script>
</body>
</html>