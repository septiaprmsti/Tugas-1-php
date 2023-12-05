<?php
require_once "FormHandler.php";


class FormHandler
{
    private $name;
    private $email;
    private $pdo;

    //Buat Konstruktor
    public function__construct($pdo, $name, $email)
    {
        $this->pdo = $pdo;
        $this->name = htmlspecialchars($name);
        $this->email = htmlspecialchars($email);
    }

    public function saveData(){
        $queryStr ="INSERT INTO users (name, email) VALUES (:name, :email)";
        $connection = $this->pdo->prepare($queryStr);
        $connection->execute(['name=>' $this->name, 'email'=> $this->email])
    }
}

public function displayDate()
{
    echo "Name:" . $this->name . "<br>";
    echo "Email :" . $this->email . "<br>";

}