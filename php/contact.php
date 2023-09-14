<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $date = $_POST['trip-start'];
    $celular = $_POST['celular'];
    $cantidad__personas = $_POST['cantidad__personas'];
    $email = $_POST ['email'];
    $consulta = $_POST['consulta'];
    $header ="from: elhorreoapart@gmail.com" . "\r\n";
    $header ="from: consultas@elhorreoapart.com.ar" . "\r\n";
    $header ="X-Mailer: PHP/". phpversion();
    $mail = @mail($email,$name,$date,$celular,$cantidad__personas,$consulta,$header);
    if ($mail){
        echo "<h7> Mail enviado correctamente!</h7>";
    }
}
?>