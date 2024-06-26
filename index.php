<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description">
    <meta name="keywords">
    <link rel="stylesheet" href="./styles/main.css">
    <title>Denzel Dalton</title>
    <!-- Denzel Dalton -->
</head>
<body onload="ChangeNavbarActive('index')">
    <?php require_once("./navbar.php");?>
        <section>
            <h2>Hi, My name is Denzel and I can help you with technology.</h2>
            <img id="headshot" name="headshot" src="https://img.freepik.com/free-photo/glowing-spaceship-orbits-planet-starry-galaxy-generated-by-ai_188544-9655.jpg?size=626&ext=jpg&ga=GA1.1.1222169770.1710374400&semt=sph" alt="image not found">
            
            <h4>Professional Experience</h4>
            <p>
                This website exists to showcase my skills and qualifications related to software development and information technology. 
                On the Qualifications page you can find information relating to my professional degrees, certificatoins, and experience.
                If you would like to contact me regarding employment you can use the email listed in the footer of this website, or fill out the contact form on the contact page.
            </p>

            <h4>Personal Information</h4>
            <p>
                On the About Me page you can learn more about me as a person, how I solve problems, and how I like to work.
                If you would like to learn how I use my professional skills to explore my passions, check out the passion projects page.
            </p>

            <h4>Contact Me</h4>
            <p>
                If you would like to contact me you can either send me an email at: <a href="#">denzel.r.dalton@gamil.com</a> or send a message via form on the contact page.
            </p>
            <button id="print" type="button" value="print" onclick="window.print()">Print</button>
            <?php require_once("./footer.php");?>
        </section>
    <script src="./js/main.js"></script>
</body>
</html>