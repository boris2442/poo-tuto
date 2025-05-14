<?php
class Employe
{
    public $nom;
    public $prenom;
    private $age;
    public function setAge($age)
    {
        if (is_int($age) && $age > 20 && $age < 100) {
            $this->age = $age;
        } else {
            throw new Exception("L age est un entier entre 20 et 120");
        }
    }
    public function getAge()
    {
        return $this->age;
    }
    public function __construct($prenom, $nom, $age)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->setAge($age);
    }
    public function presentation()
    {
        var_dump("bonjour je suis $this->prenom $this->nom et j'ai $this->age ans");
    }
}





$employe1 = new Employe('Aubin', 'Simo', 'hello');


$employe1->setAge(30);
$employe2 = new Employe('Boris', 'Tsebo', 20);
$employe1->presentation();





class Patron
{
    public $nom;
    public $prenom;
    private $age;
    public $voiture;
    public function setAge($age)
    {
        if (is_int($age) && $age > 20 && $age < 100) {
            $this->age = $age;
        } else {
            throw new Exception("L age est un entier entre 20 et 120");
        }
    }
    public function getAge()
    {
        return $this->age;
    }
    public function __construct($prenom, $nom, $age, $voiture)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->setAge($age);
    }
    public function presentation()
    {
        var_dump("bonjour je suis $this->prenom $this->nom et j'ai $this->age ans");
    }
}











// $nom = "boris";
// $prenom = "Aubin";
// $age = 20;

// $nom2 = "Simo";
// $prenom2 = "Tsebo";
// $age2 = "19";
//la methode ici est la presentation
// function presentation($nom, $prenom, $age)
// {
//     var_dump("bonjour je suis $nom $prenom et j'ai $age ans");
// }
// presentation($nom, $prenom, $age);
// presentation($nom2, $prenom2, $age2);
