<?php 
require_once(__DIR__ . '/partials/head.php');

abstract class User 
{
    private string $pseudo;
    private string $password;
    private string $mail;

    public function __construct(string $pseudo, string $password, string $mail,)
    {
        $this->pseudo = $pseudo;
        $this->password = $password;
        $this->mail = $mail;
    }

    public function getPseudo() : string
    {
        return $this->pseudo;
    }

    public function getPassword() : string
    {
        return $this->password;
    }

    public function getMail() : string
    {
        return $this->mail;
    }
    public function setPseudo(string $pseudo) :static
    {
        $this->pseudo = $pseudo;
        return $this;
    }

    public function setPassword(string $password) :static
    {
        $this->password = $password;
        return $this;
    }

    public function setMail(string $mail) :static
    {
        $this->mail = $mail;
        return $this;
    }
}

class Kid extends User
{

}
