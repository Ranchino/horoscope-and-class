<?php

    class Person{
        public $firstN; 
        public $lastN;
        public $dateNR; 
        public $horo; 
        
        public function __construct($firstN, $lastN, $dateNR){
            $this->firstname = $firstN;
            $this->lastname = $lastN;
            $this->birthday = $dateNR;
            $this->horoscope = $this->getIt($dateNR);
        }
        function getIt($personId){
            $month = substr($personId, 2, 2);
            $day = substr($personId, 4, 2);

            if($month == 3 && 21 <=$day || $month == 4 && 19 >= $day) {
                return "Väduren";
            }if($month == 4 && 20 <=$day || $month == 5 && 21 >= $day) {
                return "Oxen";
            }if($month == 5 && 22 <=$day || $month == 6 && 21 >= $day) {
                return "Tvillingarna";
            }if($month == 6 && 22 <=$day || $month == 7 && 22 >= $day) {
                return "Kräftan";
            }if($month == 7 && 23 <=$day || $month == 8 && 22 >= $day) {
                return "Lejonet";
            }if($month == 8 && 23 <=$day || $month == 9 && 22 >= $day) {
                return "Jungfrun";
            }if($month == 9 && 23 <=$day || $month == 10 && 22 >= $day) {
                return "Vågen";
            }if($month == 10 && 23 <=$day || $month == 11 && 22 >= $day) {
                return "Skorpionen";
            }if($month == 11 && 23 <=$day || $month == 12 && 21 >= $day) {
                return "Skytten";
            }if($month == 12 && 22 <=$day || $month == 1 && 19 >= $day) {
                return "Stenbocken";
            }if($month == 1 && 20 <=$day || $month == 2 && 18 >= $day) {
                return "Vattumannen";
            }if($month == 2 && 19 <=$day || $month == 3 && 20 >= $day) {
                return "Fiskarna";
            }
            
        }
    } 

    if(isset($_COOKIE["myCookie"])){
        $user = unserialize($_COOKIE["myCookie"]);
        $firstN =  $user["firstname"];
        $lastN = $user["lastname"];
        $dateNR = $user["dateNR"];

        $person = new Person($firstN, $lastN, $dateNR);
        echo $user["firstname"]." ".$user["lastname"] . "<br>" . "Ditt stjärntecken är: ". $person->horoscope; 
    } else{
        echo "Ladda om sidan";
    }


?>