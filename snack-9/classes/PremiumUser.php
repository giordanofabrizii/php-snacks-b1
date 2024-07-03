<?php 

require_once __DIR__ . '/Membership.php';

class premiumUser extends utente{
    private $membership;
    private $rewards;

    public function __construct($nome, $cognome, $username, $email, $rewards, Membership $membership) {
        parent::__construct($nome, $cognome, $username, $email);
        $this->rewards = $rewards;
        $this->membership = $membership;
    }

    /**
     * Return the rewwards of the user
     *
     * @return string
     */
    public function getRewwards(){
        return $this->rewwards;
    }

    /**
     * change the rewards of the user
     *
     * @param string $rewards
     * @return none
     */
    public function setRewards($rewards){
        $this->rewards = $rewards;
    }
}
