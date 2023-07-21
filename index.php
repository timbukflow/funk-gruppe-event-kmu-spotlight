<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css" />

    <?php require_once 'head.php'; ?>
    <meta name="description" content="Funk-Grill-Plausch Versichereranlass mit Fussball-Special">
    <title>Funk Gruppe Event Meet &#38; Eat</title>
</head>

<body>
    <header>
        <!-- <div class="asheader"><h3>Anmeldeschluss ist der 12. April 2023.</h3> </div> -->
        <div class="event-title"><img src="./img/funk-meet-eat.svg" alt="funk-logo"></div>
        <button class="homebutton"> <a class="goto" href="#anmeldung">zur Anmeldung</a> </button>
    </header>
    <section>
      <article class="intro">
        <h1>Liebe Geschäfts- und Netzwerkpartner</h1>
        <p>
          <span>
            Im Namen der Niederlassung Bern, laden wir Sie herzlich zum <strong>Funk meet&#38;eat 2023</strong>  ein. Wir freuen uns, zusammen mit Ihnen einen stimmungsvollen Abend in schönem Ambiente des neu umgebauten Berner-Kursaals zu verbringen.
          </span>
          <span>
            Lassen Sie sich durch die beiden Kurzreferate zu den Themen "Leadership" und "Change" inspirieren. Wie begegnen wir als Unternehmen diesen Themen und wie schaffen wir es, zusammen mit motivierten Mitarbeitenden und begeisterten Führungskräften eine gemeinsame Vision zu verfolgen?
          </span>
          <span>
            Die beiden Referenten werden ihre Erfahrungen dazu aus verschiedenen Blickwinkeln erläutern. Vision, Motivation, Leadership und Organisationsformen sind sowohl in zeitgemässen Unternehmensführungen wie auch im top modernen Leadership Campus der Schweizer Armee entscheidende Themen.
          </span>
          <span>
            Im Zentrum des Abends stehen der persönliche Austausch und das gesellige Beisammensein, begleitet von kulinarischen Leckerbissen. <strong>Wir freuen uns auf den gemeinsamen Abend mit Ihnen.</strong> 
          </span>
        </p>
      </article>

      <article>
      <div class="acctitle">
          <h2>Zu den Referenten</h2>
          <div class="pmcontainer">
            <div class="plus"></div>
            <div class="minus"></div>
          </div>
          <div class="acclist">
            <div class="grid02 center">
              <img src="./img/hans-peter.jpg" alt="funk-hans-peter">
              <p>
                <strong>Korpskommandant Hans-Peter Walser</strong> <br> führt das Kommando Ausbildung. Er ist verantwortlich für die Grundbereitschaft und die Ausbildung der Armee. Zudem ist er der stellvertretende Chef der Armee. Zum Kommando Ausbildung gehören unter anderem das Ausbildungszentrum der Armee, die Lehrverbände, die höhere Kaderausbildung der Armee sowie das Personelle der Armee.
              </p>
              <img src="./img/marc-rothenbuehler.jpg" alt="funk-hans-peter">
              <p class="noline">
                <strong>Marc Rothenbühler</strong> <br> ist als Geschäftsleitungsmitglied der Funk Gruppe für die Schweizer Niederlassungen verantwortlich. Vor dem Wechsel zur Funk Gruppe im 2013, führte er als Mitglied der erweiterten Geschäftsleitung die Deutschschweizer Organisation eines renommierten Privatversicherers. Als gelernter Betriebswirtschafter bildet er sich in den Themen Change- & Performance-Management laufend weiter. 
              </p>
            </div>
          </div>
        </div>
        <div class="acctitle">
          <h2>Programm</h2>
          <div class="pmcontainer">
            <div class="plus"></div>
            <div class="minus"></div>
          </div>
          <div class="acclist">
            <div class="grid02">
              <p><strong>Datum</strong> </p>
              <p><strong>Dienstag, 9. Mai 2023</strong></p>
              <p>18:00 Uhr</p>
              <p>Eintreffen der Gäste / Apéro</p>
              <p>18:30 Uhr</p>
              <p>Begrüssung durch Jonas Müller</p>
              <p>18:40 Uhr</p>
              <p>Kurzreferat Marc Rothenbühler</p>
              <p>19:00 Uhr</p>
              <p>Kurzreferat KKdt Hans-Peter Walser</p>
              <p class="noline">19:30 Uhr</p>
              <p class="noline">Essen, persönlicher Austausch</p>
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
                <strong>Kursaal Bern</strong> <br>
                Kornhausstrasse 3, 3013 Bern
              </p>
              <p>
                <strong>Anreise per ÖV</strong> <br>
                Mit dem öffentlichen Verkehr können Sie die Tramlinie 9 nehmen: Sie fährt vom Bahnhof Bern (Kante B) bis zur "Kursaal" Tramhaltestelle (Nähe Viktoriaplatz).
              </p>
              <p class="noline">
                <strong>Anreise per Auto</strong> <br> Im Kursaal Parking stehen Ihnen 240 Parkplätze zur Verfügung. Bitte beachten Sie die beschränkte Anzahl Parkplätze im Quartier.</p>
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

              <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Anfrage senden</button>
              </fieldset>
              <div class="success"><?= htmlspecialchars($success); ?></div>
            </form>
      </div> 
    </section>

    <?php require_once 'footer.php'; ?>
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-3.6.3.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>
</html>