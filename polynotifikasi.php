<?php
# Interface
interface Notifikasi {
    public function kirim();
}

# Implementasi Email
class Email implements Notifikasi {

    public function kirim(){
        echo "Notifikasi dikirim melalui Email";
    }

}

# Implementasi SMS
class SMS implements Notifikasi {

    public function kirim(){
        echo "Notifikasi dikirim melalui SMS";
    }

}

# Implementasi WhatsApp
class WhatsApp implements Notifikasi {

    public function kirim(){
        echo "Notifikasi dikirim melalui WhatsApp";
    }

}

# Pemanggilan
$email = new Email();
$sms = new SMS();
$wa = new WhatsApp();

$email->kirim();
echo "<br>";

$sms->kirim();
echo "<br>";

$wa->kirim();
?>