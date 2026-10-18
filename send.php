<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Formulardaten auslesen
  $name = strip_tags(trim($_POST["name"]));
  $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
  $phone = strip_tags(trim($_POST["telefon"]));
  $message = trim($_POST["nachricht"]);

 // Wohin soll die E-Mail gehen?
  $to = "info@ing-idrizi.de";
  $subject = "Neue Projektanfrage von Website: " . $name;

  // E-Mail-Inhalt zusammenbauen
  $email_content = "Sie haben eine neue Anfrage über das Kontaktformular erhalten:\n\n";
  $email_content .= "Name: $name\n";
  $email_content .= "E-Mail: $email\n";
  $email_content .= "Telefon: $phone\n\n";
  $email_content .= "Nachricht:\n$message\n";

  // Nutze eine bei IONOS existierende Adresse als Absender
  $headers = "From: info@ing-idrizi.de\r\n";
  $headers .= "Reply-To: $email\r\n";
  
  // E-Mail über den 1&1 Server senden
  if (mail($to, $subject, $email_content, $headers)) {
    // Weiterleitung zurück auf die Website mit Erfolgshinweis
    header("Location: index.html?gesendet=success");
    exit();
  } else {
    echo "Fehler beim Senden der Nachricht. Bitte versuchen Sie es direkt per E-Mail.";
  }
} else {
  header("Location: index.html");
  exit();
}
?>
