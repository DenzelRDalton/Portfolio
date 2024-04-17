<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/contact.css">
    <title>Denzel Dalton</title>
</head>
<body onload="ChangeNavbarActive('contact')">
    <?php include_once("./navbar.php"); ?>
    <section>
        <h2>Let's Work Together!</h2>
        <form>
            <label for="fname">Please Enter Your Name:</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">
      
            <label for="message">Message:</label>
            <textarea id="message" name="message" placeholder="Your message.." style="height:200px"></textarea>
      
            <input id="submit" type="submit" value="Submit">
        </form>
        <?php include_once("./footer.php"); ?>
    </section>
    <script src="./js/main.js"></script>
</body>
</html>