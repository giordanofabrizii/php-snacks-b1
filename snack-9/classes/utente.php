<?php 

class Utente {
    protected $nome;
    protected $cognome; 
    protected $username; 
    protected $email;
    
    public function __construct($nome, $cognome, $username, $email) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->username = $username;
        $this->email = $email;
    }

    /**
     * Return the name of the user
     *
     * @return string
     */
    public function getNome(){
        return $this->nome;
    }

    /**
     * Return the surname of the user
     *
     * @return string
     */
    public function getCognome(){
        return $this->cognome;
    }

    /**
     * Return the username of the user
     *
     * @return string
     */
    public function getUsername(){
        return $this->username;
    }

    /**
     * Return the email of the user
     *
     * @return string
     */
    public function getEmail(){
        return $this->email;
    }

    /**
     * change the name of the user
     *
     * @param string $nome
     * @return none
     */
    public function setName($nome){
        $this->nome = $nome;
    }

    /**
     * change the surname of the user
     *
     * @param string $surnome
     * @return none
     */
    public function setSurname($cognome){
        $this->cognome = $cognome;
    }

    /**
     * change the username of the user
     *
     * @param string $username
     * @return none
     */
    public function setUsername($username){
        $this->username = $username;
    }

    /**
     * change the email of the user
     *
     * @param string $email
     * @return none
     */
    public function setEmail($email){
        $this->email = $email;
    }

}