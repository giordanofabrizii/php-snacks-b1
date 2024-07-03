<?php 

class premiumUser extends utente{
    private $rewards;

    public function __construct($rewards) {
        $this->rewards = $rewards;
    }

    /**
     * Return the rewwards of the user
     *
     * @return string
     */
    public function getrewwards(){
        return $this->rewwards;
    }

    /**
     * change the rewards of the user
     *
     * @param string $rewards
     * @return none
     */
    public function setrewards($rewards){
        $this->rewards = $rewards;
    }
}