<?php
include("menu.php");
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="css/contact.css">
    <script src="js/main.js"></script>
</head>
<body>
    <div class="container">  
    <form id="contact" action="" method="post">
            <h3>DS contactformulier</h3>
            <h4>Neem contact met ons op als u vragen of opmerkingen heeft</h4>
        <fieldset>
            <input placeholder="Uw naam" type="text" tabindex="1" required autofocus>
        </fieldset>
        <fieldset>
            <input placeholder="Uw email adress" type="email" tabindex="2" required>
        </fieldset>
        <fieldset>
            <input placeholder="Uw telefoon nummer (Optie)" type="tel" tabindex="3">
        </fieldset>
        <fieldset>
            <input placeholder="Uw website (Optie)" type="url" tabindex="4">
        </fieldset>
        <fieldset>
            <textarea placeholder="Type hier uw bericht..." tabindex="5" required></textarea>
        </fieldset>
        <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
        </fieldset>
    </form>
    </div>
</body>
</html>