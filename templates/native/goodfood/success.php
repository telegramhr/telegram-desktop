<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime = test_input($_POST["ime"]);
    $prezime = test_input($_POST["prezime"]);
    $telefon = test_input($_POST["telefon"]);
    $lokacija = test_input($_POST["lokacija"]);
    $email = test_input($_POST["email"]);
    $imesalate = test_input($_POST["imesalate"]);
    $baza = test_input($_POST["baza"]);
    $dodaci = test_input($_POST["dodaci"]);
    $umak = test_input($_POST["umak"]);

    // Email adresa na koju želite poslati podatke
    $to = "predrag@reset.hr";
    $subject = "Nova kontakt forma";

    $message = "Ime: $ime\n";
    $message .= "Prezime: $prezime\n";
    $message .= "Kontakt telefon: $telefon\n";
    $message .= "Adresa i mjesto stanovanja: $lokacija\n";
    $message .= "E-mail: $email\n";

  $message .= "Ime salate: $imesalate\n";
  $message .= "Baza: $baza\n";
  $message .= "Dodaci: $dodaci\n";
  $message .= "Umak: $umak\n";

    // Slanje emaila
    mail($to, $subject, $message);

    // Redirekcija nakon slanja forme
    header("Location: <?php echo $native_path ?>/hvala.php");
    exit();
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
