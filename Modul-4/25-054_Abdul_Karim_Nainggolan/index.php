<?php
$errors = array();

// Cek apakah tombol submit ditekan
if (isset($_POST['submit'])) {
    require 'validate.inc';
    
    // Validasi field
    validateName($errors, $_POST, 'surname');
    
    // Skenario Error berdasarkan flowchart
    if ($errors) {
        echo '<h1>Invalid, correct the following errors:</h1>';
        foreach ($errors as $field => $error) {
            echo "$field $error</br>";
        }
        // tampilkan kembali form dengan isian data
        include 'form.inc';
    } else {
        // Tampilkan pesan proses berhasil
        echo 'Form submitted successfully with no errors';
    }
} else {
    // Tampilkan form kosong jika belum ada isian form
    include 'form.inc';
}
?>