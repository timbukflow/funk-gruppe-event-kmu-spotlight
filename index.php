<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css" />
    <title>Funk Gruppe Event | KMU Spotlight 2024</title>
    <meta name="description" content="Funk Gruppe Event | KMU Spotlight 2024">
    <?php require_once 'head.php'; ?>
</head>

<body>
    <header>
        <div class="event-title"><img src="./img/funk-kmu-spotlight.svg" alt="funk-kmu-spotlight"></div>
        <!-- <button class="homebutton"> <a class="goto" href="#anmeldung">zur Anmeldung</a> </button> -->
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
              <p><strong>Donnerstag, 11. April 2024</strong></p>
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
      
      <!-- <div id="anmeldung" class="containerform">
            <h2>Anmeldung</h2>
            <p>Die Teilnehmerzahl ist beschränkt. Die Anmeldungen werden nach Eingang berücksichtigt. <strong>Anmeldeschluss ist der 15. März 2024.</strong></p>
            <?php require_once('form.php'); ?>

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

              <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Anfrage senden</button>
              </fieldset>
            </form>

            <div id="popup" class="popup">
              <h1>Vielen Dank für Ihr Interesse!</h1> 
              <p>Ihre An- oder Abmeldung haben wir erhalten. Eine persönliche Bestätigung Ihrer Anmeldung erhalten Sie in den nächsten Tagen per E-Mail.<br><br>
              Herzliche Grüsse <br> 
              Jonas Müller <br>
              Leiter Niederlassung Bern</p>
              <button id="closePopup">Alles klar!</button>
            </div>
      </div>  -->
    </section>

    <script>
      function showPopup() {
          document.getElementById('popup').style.display = 'block';
      }
      document.getElementById('closePopup').addEventListener('click', function() {
          document.getElementById('popup').style.display = 'none';
      });

      <?php if (isset($success)) { ?>
          showPopup();
      <?php } ?>
    </script>

    <?php require_once 'footer.php'; ?>
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-3.6.3.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>