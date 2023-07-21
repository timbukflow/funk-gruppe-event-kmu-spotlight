<?php

function validateForm() {
    global $teilnahme, $essenspraferenz, $vorname, $name, $firma, $email, $mitteilung, $vorname2, $name2, $firma2, $email2, $essenspraferenz02;

    $errors = [];

    if (empty($_POST["teilnahme"])) {
        $errors["teilnahme"] = "Bitte wählen Sie mindestens eine Option aus";
    } else {
        $teilnahme = htmlspecialchars($_POST["teilnahme"]);
    }

    if (isset($_POST["essenspraferenz"])) {
        $essenspraferenz = htmlspecialchars($_POST["essenspraferenz"]);
    }

    if (empty($_POST["vorname"])) {
        $errors["vorname"] = "Vorname ist erforderlich";
    } else {
        $vorname = filter_var($_POST["vorname"], FILTER_SANITIZE_STRING);
        if (empty($vorname)) {
            $errors["vorname"] = "Es sind nur Buchstaben erlaubt";
        }
    }

    if (empty($_POST["name"])) {
        $errors["name"] = "Name ist erforderlich";
    } else {
        $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
        if (empty($name)) {
            $errors["name"] = "Es sind nur Buchstaben erlaubt";
        }
    }

    if (empty($_POST["firma"])) {
        $errors["firma"] = "Firma ist erforderlich";
    } else {
        $firma = filter_var($_POST["firma"], FILTER_SANITIZE_STRING);
        if (empty($firma)) {
            $errors["firma"] = "Es sind nur Buchstaben erlaubt";
        }
    }

    if (empty($_POST["email"])) {
        $errors["email"] = "Email ist erforderlich";
    } else {
        $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
        if (!$email) {
            $errors["email"] = "Diese Email Adresse ist nicht korrekt";
        }
    }

    if (!empty($_POST["mitteilung"])) {
        $mitteilung = htmlspecialchars($_POST["mitteilung"]);
    }

    // Zusätzliche Person 
    $additionalPerson = isset($_POST["additionalPerson"]) && $_POST["additionalPerson"] == 'on';

    if ($additionalPerson) {

        if (empty($_POST["vorname2"])) {
            $errors["vorname2"] = "Vorname ist erforderlich";
        } else {
            $vorname2 = filter_var($_POST["vorname2"], FILTER_SANITIZE_STRING);
            if (empty($vorname2)) {
                $errors["vorname2"] = "Es sind nur Buchstaben erlaubt";
            }
        }

        if (empty($_POST["name2"])) {
            $errors["name2"] = "Name ist erforderlich";
        } else {
            $name2 = filter_var($_POST["name2"], FILTER_SANITIZE_STRING);
            if (empty($name2)) {
                $errors["name2"] = "Es sind nur Buchstaben erlaubt";
            }
        }

        if (empty($_POST["firma2"])) {
            $errors["firma2"] = "Firma ist erforderlich";
        } else {
            $firma2 = filter_var($_POST["firma2"], FILTER_SANITIZE_STRING);
            if (empty($firma2)) {
                $errors["firma2"] = "Es sind nur Buchstaben erlaubt";
            }
        }

        if (empty($_POST["email2"])) {
            $errors["email2"] = "Email ist erforderlich";
        } else {
            $email2 = filter_var($_POST["email2"], FILTER_VALIDATE_EMAIL);
            if (!$email2) {
                $errors["email2"] = "Diese Email Adresse ist nicht korrekt";
            }
        }

        if (isset($_POST["essenspraferenz02"])) {
            $essenspraferenz02 = htmlspecialchars($_POST["essenspraferenz02"]);
        }
    }

    return $errors;
}

function sendEmail($message_body) {
    $headers = "From: anmeldung@funk-gruppe-event.ch";
    $to = "ivoschwizer@gmail.com"; // Hier die E-Mail-Adresse angeben, an die du die Formulardaten senden möchtest
    $subject = "Funk Gruppe Event | KMU Spotlight 2023";
    
    // Optional: Du kannst den Inhalt der E-Mail im HTML-Format darstellen, indem du den Content-Type entsprechend anpasst
    $headers .= "\r\nContent-Type: text/plain; charset=utf-8\r\n";

    // Die PHP mail()-Funktion, um die E-Mail zu versenden
    if (mail($to, $subject, $message_body, $headers)) {
        // Hier kannst du weitere Aktionen ausführen, z.B. eine Bestätigungsmeldung anzeigen
        // Optional: Logge die erfolgreiche Versendung der E-Mail oder speichere die Formulardaten in einer Datenbank
    } else {
        // E-Mail-Versand ist fehlgeschlagen, du kannst hier entsprechende Fehlerbehandlung durchführen
    }
}

$errors = [];
$success = "";
$teilnahme = $essenspraferenz = $vorname = $name = $firma = $email = $mitteilung = $vorname2 = $name2 = $firma2 = $email2 = $essenspraferenz02 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form data
    $errors = validateForm();

    // Check reCAPTCHA response
    $captcha_response = $_POST['g-recaptcha-response'];
    $secret_key = '6LeWoEEnAAAAAMCWCag-Xm8ZfjnZxDAHBFadyn0h'; // Ersetze dies durch deinen reCAPTCHA-Secret Key
    $url = 'https://www.google.com/recaptcha/api/siteverify';

    $data = array(
        'secret' => $secret_key,
        'response' => $captcha_response
    );

    $options = array(
        'http' => array(
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    );

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $response = json_decode($result, true);

    if (!$response || !$response['success']) {
        $errors["captcha"] = "Bitte bestätigen Sie, dass Sie kein Roboter sind.";
    }

    // If no errors, send email
    if (empty($errors)) {
        $message_body = "";
        unset($_POST["submit"]);
        foreach ($_POST as $key => $value) {
            if (is_array($value)) {
                $value = implode(", ", $value);
            }
            $message_body .= $key . ": " . htmlspecialchars($value) . "\n";
        }

        sendEmail($message_body);

        $success = "Ihre Anfrage wurde erfolgreich gesendet.";
        $teilnahme = $essenspraferenz = $vorname = $name = $firma = $email = $mitteilung = $vorname2 = $name2 = $firma2 = $email2 = $essenspraferenz02 = "";
    } else {
        $teilnahme = isset($_POST["teilnahme"]) ? htmlspecialchars($_POST["teilnahme"]) : "";
        $essenspraferenz = isset($_POST["essenspraferenz"]) ? htmlspecialchars($_POST["essenspraferenz"]) : "";
        $vorname = isset($_POST["vorname"]) ? filter_var($_POST["vorname"], FILTER_SANITIZE_STRING) : "";
        $name = isset($_POST["name"]) ? filter_var($_POST["name"], FILTER_SANITIZE_STRING) : "";
        $firma = isset($_POST["firma"]) ? filter_var($_POST["firma"], FILTER_SANITIZE_STRING) : "";
        $email = isset($_POST["email"]) ? filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) : "";
        $mitteilung = isset($_POST["mitteilung"]) ? htmlspecialchars($_POST["mitteilung"]) : "";
    }
}
?>