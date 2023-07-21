<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css" />
    <title>Funk Gruppe Event | KMU Spotlight 2023</title>
    <meta name="description" content="Funk Gruppe Event | KMU Spotlight 2023">
    <?php require_once 'head.php'; ?>

</head>

<body>
    <header>
        <div class="asheader"><h3>Anmeldeschluss ist der 12. April 2023.</h3> </div>
        <div class="event-title"><img src="./img/funk-meet-eat.svg" alt="funk-logo"></div>
        <button class="homebutton"> <a class="goto" href="#anmeldung">zur Anmeldung</a> </button>
    </header>
    <section>
      <article class="intro">
        <h1>Liebe Geschäfts- und Netzwerkpartner</h1>
        <p>
          <span>
            Gerne laden wir Sie zum Funk KMU-Spotlight bei der Fritschi AG Swiss Bindings in Reichenbach im Kandertal ein. Lernen Sie ein regionales Unternehmen und die Menschen dahinter besser kennen und stellen Sie wertvolle Kontakte in einem kleinen, feinen Rahmen her.
          </span>
          <span>
            Während einem kurzen Betriebsrundgang erhalten Sie Einblicke in die Planung und Produktion der Hightech-Sktitourenbindungen aus dem Traditionsunternehmen. Für den Einsatz an den schönsten Powder-Hängen dieser Welt, werden die Bindungen mit viel Handarbeit und unter höchsten Qulitätsansprüchen in Reichenbach geplant und gefertigt.
          </span>
          <span>
            Der Geschäftsführer Stefan Ibach wird uns in die spannende Welt der Fritschi AG mitnehmen und über die aktuellen Herausforderungen berichten. Speziell durch die ständig neuen, nicht planbaren makroökonomischen Veränderungen sind Themen wie Lagerbewirtschaftung, Verfügbarkeit, Lieferketten und Inflation auch für die Fritschi AG aktueller denn je.
          </span>
          <span>
            Wir freuen uns auf spannende Einblicke in die Fritschi AG und einen interessanten Austausch mit Ihnen.
          </span>
        </p>
      </article>

      <article>
        <div class="acctitle">
          <h2>Programm</h2>
          <div class="pmcontainer">
            <div class="plus"></div>
            <div class="minus"></div>
          </div>
          <div class="acclist">
            <div class="grid02">
              <p><strong>Datum</strong> </p>
              <p><strong>Donnerstag, 19. Oktober 2023</strong></p>
              <p>16:15 Uhr</p>
              <p>Eintreffen der Gäste</p>
              <p>16:30 Uhr</p>
              <p>Begrüssung durch Funk / Jonas Müller</p>
              <p>16:35 Uhr</p>
              <p>Empfang und Einleitung durch Stefan Ibach mit Firmenpräsentation und Rundgang</p>
              <p class="noline">17:30 Uhr</p>
              <p class="noline">Networking und Apéro Riche</p>
            </div>
          </div>
        </div>
        <div class="acctitle">
          <h2>Anreise</h2>
          <div class="pmcontainer">
            <div class="plus"></div>
            <div class="minus"></div>
          </div>
          <div class="acclist">
            <div class="grid01">
              <p>
                <strong>Fritschi AG Swiss Bindings:</strong> <br>
                Hauptstrasse 9, 3713 Reichenbach
              </p>
              <p>
                <strong>Anreise mit dem Zug:</strong> <br>
                 RE Bern à Brig | Die Hauptstrasse 9 ist 5 Gehminuten vom Bahnhof Reichenbach entfernt
              </p>
              <p class="noline">
                <strong>Anreise mit dem PW:</strong> <br> Autostrasse Spiez à Frutigen | Parkplätze auf dem Betriebsareal vorhanden</p>
            </div>
          </div>
        </div>
      </article>
      
      <div id="anmeldung" class="containerform">
            <h2>Anmeldung</h2>
            <p>Die Teilnehmerzahl ist beschränkt. Die Anmeldungen werden nach Eingang berücksichtigt.</p>
            <?php include('form.php'); ?>

            <form id="contact" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" novalidate>
              
              <fieldset class="checkbox">
                <div>
                  <input class="radio" type="radio" id="checkbox1" name="teilnahme" value="Ja, ich nehme gerne teil" tabindex="1" 
                  <?= (isset($teilnahme) && $teilnahme == "Ja, ich nehme gerne teil") ? "checked" : "" ?>>
                  <label for="checkbox1">Ja, ich nehme gerne teil</label>
                </div>
                <div>
                  <input class="radio" type="radio" id="checkbox2" name="teilnahme" value="Leider bin ich verhindert" tabindex="2"
                  <?= (isset($teilnahme) && $teilnahme == "Leider bin ich verhindert") ? "checked" : "" ?>>
                  <label for="checkbox2">Leider bin ich verhindert</label>
                </div>
                <span class="error"><?= isset($errors["teilnahme"]) ? $errors["teilnahme"] : $teilnahme_error ?></span>
              </fieldset>

              <fieldset class="checkbox">
                <div>
                  <input class="radio" type="radio" id="checkboxvegi" name="essenspraferenz" value="vegetarisch" tabindex="3" 
                  <?= (isset($essenspraferenz) && $essenspraferenz == "vegetarisch") ? "checked" : "" ?>>
                  <label for="checkboxvegi">vegetarisch</label>
                </div>
                <div>
                  <input class="radio" type="radio" id="checkboxfleisch" name="essenspraferenz" value="mit Fleisch" tabindex="4"
                  <?= (isset($essenspraferenz) && $essenspraferenz == "mit Fleisch") ? "checked" : "" ?>>
                  <label for="checkboxfleisch">mit Fleisch</label>
                </div>
              </fieldset>

              <fieldset>
                <input placeholder="Vorname&#42;" type="text" name="vorname" value="<?= htmlspecialchars($vorname) ?>" tabindex="5" autofocus>
                <span class="error"><?= isset($errors["vorname"]) ? htmlspecialchars($errors["vorname"]) : htmlspecialchars($vorname_error) ?></span>
              </fieldset>

              <fieldset>
                <input placeholder="Name&#42;" type="text" name="name" value="<?= htmlspecialchars($name) ?>" tabindex="6">
                <span class="error"><?= isset($errors["name"]) ? htmlspecialchars($errors["name"]) : htmlspecialchars($name_error) ?></span>
              </fieldset>

              <fieldset>
                <input placeholder="Firma&#42;" type="text" name="firma" value="<?= htmlspecialchars($firma) ?>" tabindex="7">
                <span class="error"><?= isset($errors["firma"]) ? htmlspecialchars($errors["firma"]) : htmlspecialchars($firma_error) ?></span>
              </fieldset>

              <fieldset>
                <input placeholder="Email&#42;" type="text" name="email" value="<?= htmlspecialchars($email) ?>" tabindex="8">
                <span class="error"><?= isset($errors["email"]) ? htmlspecialchars($errors["email"]) : htmlspecialchars($email_error) ?></span>
              </fieldset>

              <fieldset>
                <textarea placeholder="Mitteilung" name="mitteilung" tabindex="9" rows="5"><?= htmlspecialchars($mitteilung) ?></textarea>
                <span class="error"><?= isset($errors["mitteilung"]) ? htmlspecialchars($errors["mitteilung"]) : htmlspecialchars($mitteilung_error) ?></span>
              </fieldset>


              <!-- Weitere Personen anmelden -->
              <fieldset class="checkbox">
                  <div>
                      <input class="radio" type="checkbox" id="additionalPerson" name="additionalPerson" tabindex="10">
                      <label for="additionalPerson">Weitere Person anmelden</label>
                  </div>
              </fieldset>

              <!-- Zusätzliche Felder für die weitere Person -->
              <fieldset id="additionalPersonFields" style="display:none;">                  
                  <fieldset class="checkbox">
                    <div>
                      <input class="radio" type="radio" id="checkboxvegi02" name="essenspraferenz02" value="vegetarisch" tabindex="3" 
                      <?= (isset($essenspraferenz02) && $essenspraferenz02 == "vegetarisch") ? "checked" : "" ?>>
                      <label for="checkboxvegi02">vegetarisch</label>
                    </div>
                    <div>
                      <input class="radio" type="radio" id="checkboxfleisch02" name="essenspraferenz02" value="mit Fleisch" tabindex="4"
                      <?= (isset($essenspraferenz02) && $essenspraferenz02 == "mit Fleisch") ? "checked" : "" ?>>
                      <label for="checkboxfleisch02">mit Fleisch</label>
                    </div>
                  </fieldset>

                  <fieldset>
                      <input placeholder="Vorname&#42;" type="text" name="vorname2" value="<?= htmlspecialchars($vorname2) ?>" tabindex="13">
                      <span class="error"><?= isset($errors["vorname2"]) ? htmlspecialchars($errors["vorname2"]) : "" ?></span>
                  </fieldset>

                  <fieldset>
                      <input placeholder="Name&#42;" type="text" name="name2" value="<?= htmlspecialchars($name2) ?>" tabindex="14">
                      <span class="error"><?= isset($errors["name2"]) ? htmlspecialchars($errors["name2"]) : "" ?></span>
                  </fieldset>

                  <fieldset>
                      <input placeholder="Firma&#42;" type="text" name="firma2" value="<?= htmlspecialchars($firma2) ?>" tabindex="15">
                      <span class="error"><?= isset($errors["firma2"]) ? htmlspecialchars($errors["firma2"]) : "" ?></span>
                  </fieldset>

                  <fieldset>
                      <input placeholder="Email&#42;" type="text" name="email2" value="<?= htmlspecialchars($email2) ?>" tabindex="16">
                      <span class="error"><?= isset($errors["email2"]) ? htmlspecialchars($errors["email2"]) : "" ?></span>
                  </fieldset>
              </fieldset>

              <!-- reCAPTCHA -->
              <div class="g-recaptcha" data-sitekey="6LebgkInAAAAAK4nXFcjKyUAvT03n48B69zxheQq"></div>

              <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Anfrage senden</button>
              </fieldset>
              <div class="success"><?= htmlspecialchars($success); ?></div>
            </form>
      </div> 
    </section>
    
    <div id="success-popup" style="display: none;">
      <h3>Vielen Dank!</h3>
      <p>Ihre Anfrage wurde erfolgreich gesendet.</p>
    </div>
    <script>
      <?php if (!empty($success)) : ?>
          // Zeige das Pop-up an, wenn die $success-Variable nicht leer ist
          window.onload = function() {
              document.getElementById('success-popup').style.display = 'block';
          };
      <?php endif; ?>
    </script>

    <?php require_once 'footer.php'; ?>
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-3.6.3.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>
</html>