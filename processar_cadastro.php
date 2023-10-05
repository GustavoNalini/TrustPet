<?php
if (isset($_POST['submit'])) {
    $cpf = $_POST['cpf'];
    $fullName = $_POST['fullName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $street = $_POST['street'];
    $neighborhood = $_POST['neighborhood'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $cep = $_POST['cep'];
    $petName = $_POST['petName'];
    $animalType = $_POST['animalType'];
    $petBreed = $_POST['petBreed'];
    $petPhoto = $_POST['petPhoto'];
    echo "Dados recebidos via PHP:<br>";
    echo "CPF: $cpf<br>";
    echo "Nome Completo: $fullName<br>";
    echo "Telefone: $phone<br>";
    echo "E-mail: $email<br>";
    echo "Rua: $street<br>";
    echo "Bairro: $neighborhood<br>";
    echo "Cidade: $city<br>";
    echo "Estado: $state<br>";
    echo "CEP: $cep<br>";
    echo "Nome do animal: $petName<br>";
    echo "Tipo de animal: $animalType<br>";
    echo "Raça do cão: $petBreed<br>";
    echo "Foto do animal: $petPhoto<br>";
}
?>
