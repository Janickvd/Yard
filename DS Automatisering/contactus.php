<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="css/contactus.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
  <div class="contact-section">
    <h2 class="ct-section-head">CONTACT US</h2>
    <div class="row contact-fields">
      <div class="col-md-8 left-form">
       <form method="post" action="">
        <div class="form-group">
          <label class="sr-only" for="fname">Voornaam *</label>
          <input class="required form-control" id="fname" name="fname" placeholder="Voornaam&nbsp;*" type="text"  required>
        </div>
        <div class="form-group">
          <label class="sr-only" for="lname">Achternaam *</label>
          <input class="required form-control" id="lname" name="lname" placeholder="Achternaam&nbsp;*" type="text"  required>
        </div>
        <div class="form-group">
            <label class="sr-only" for="bedrijf">Bedrijfsnaam</label> 
            <input class="none required form-control" id="bedrijf" name="bedrijf" placeholder="Bedrijfsnaam&nbsp;*" type="text" none required>
        </div>

        <div class="form-group">
          <label class="sr-only" for="contactEmail">Email *</label>
          <input class="required form-control h5-email" id="contactEmail" name="contactEmail" placeholder="Email&nbsp;*" type="text"  required>
        </div>
        <div class="form-group">
          <label class="sr-only" for="contactPhone">Telefoonnummer *</label>
          <input class="required form-control h5-phone" id="contactPhone" name="contactPhone" placeholder="Telefoonnummer&nbsp;*" type="text"  required>
        </div>
        <div class="form-group">
          <label class="sr-only" for="comment">Type uw bericht hier</label>
          <textarea class="required form-control" id="comment" name="comment" placeholder="Type uw bericht hier&nbsp;*" rows="6" required></textarea>
        </div>
        <button class="btn btn-accent" type="submit">Submit</button>  
      </form>
    </div>
    <div class="col-md-4 contact-info">
      <div class="phone">
        <h2>Call</h2>
        <a href="tel:+0548-541219">0548-541219</a>
      </div>
      <div class="email">
        <h2>Email</h2>
        <a href="mailto:info@dsautomatisering.nl">info@dsautomatisering.nl</a>
      </div>
      <div class="location">
        <h2>Visit</h2>
        <p>DS Automatisering </br>
        Kryptonstraat 7 </br>
        7463 PB Rijssen
      </div>
    </div>
  </div>
</div>
</body>
</html>