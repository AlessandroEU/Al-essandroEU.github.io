<?php


$ima=$_POST['ima'];
$priz=$_POST['priz'];
$nomer=$_POST['nomer'];
$misto=$_POST['misto'];
$ditu=$_POST['ditu'];
$rezume=$_POST['rezume'];


$ima= htmlspecialchars($ima);
$priz= htmlspecialchars($priz);
$nomer= htmlspecialchars($nomer);
$misto= htmlspecialchars($misto);
$ditu= htmlspecialchars($ditu);
$rezume= htmlspecialchars($rezume);


$ima= urldecode($ima);
$priz= urldecode($priz);
$nomer= urldecode($nomer);
$misto= urldecode($misto);
$ditu= urldecode($ditu);
$rezume= urldecode($rezume);


$ima= trim($ima);
$priz= trim($priz);
$nomer= trim($nomer);
$misto= trim($misto);
$ditu= trim($ditu);
$rezume= trim($rezume);


if(mail("agentwaze@gmail.com",
        "Новое письмо",
        "ім'я: " .$ima."\n".
        "Прізвище : " .$priz."\n".
        "Номер: " .$nomer."\n".
        "Місто: " .$misto."\n".
        "Діти: " .$ditu."\n".
        "Резюме: " .$rezume,
        "From: no-reply@alessandroeu.github.io \r\n")


){
    echo ('Відповідь надіслано!');
}
else {
    echo('Заповніть анкету повністю!');
}

?>