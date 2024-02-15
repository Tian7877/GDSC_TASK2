<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];
    
    $to = 'christianvalerioksana374@gmail.com';
    $subject = 'Pesan dari ' . $nama;
    $message = 'Nama: ' . $nama . "\r\n" .
               'Email: ' . $email . "\r\n" .
               'Pesan: ' . $pesan;
    $headers = 'From: ' . $email . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();
    
    if (mail($to, $subject, $message, $headers)) {
        echo 'Pesan berhasil dikirim!';
    } else {
        echo 'Pesan gagal dikirim. Silakan coba lagi.';
    }
}
?>
