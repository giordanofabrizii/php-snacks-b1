<?php 

class membership {
    private $grade;
    private $duration;

    public function __construct($grade, $duration) {
        $this->grade = $grade;
        $this->duration = $duration;
    }

    /**
     * Return the grade of the user
     *
     * @return string
     */
    public function getGrade(){
        return $this->grade;
    }

    /**
     * Return the duration of the user
     *
     * @return string
     */
    public function getDuration(){
        return $this->duration;
    }

    /**
     * change the grade of the user
     *
     * @param string $grade
     * @return none
     */
    public function setGrade($grade){
        $this->grade = $grade;
    }

    /**
     * change the duration of the user
     *
     * @param string $duration
     * @return none
     */
    public function setDuration($duration){
        $this->duration = $duration;
    }
}
