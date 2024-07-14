<?php

namespace user;

class user1
{
    private $name;
    private $lastname;
    private $sex;
    private $age;
    private $country;
    private $language;
    private $email;
    private $phone;
    private $height;
    private $weight;
    private $job;
    private $city;
    private $pet;
    private $hobby;

    public function __construct($name, $lastname, $sex, $age, $country, $language, $email, $phone, $height, $weight, $job, $city, $pet, $hobby)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->sex = $sex;
        $this->age = $age;
        $this->country = $country;
        $this->language = $language;
        $this->email = $email;
        $this->phone = $phone;
        $this->height = $height;
        $this->weight = $weight;
        $this->job = $job;
        $this->city = $city;
        $this->pet = $pet;
        $this->hobby = $hobby;
    }

    public function setName($name) {
        $this->name = $name;
    }
    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }
    public function setSex($sex) {
        $this->sex = $sex;
    }
    public function setAge($age) {
        $this->age = $age;
    }
    public function setCountry($country) {
        $this->country = $country;
    }
    public function setLanguage($language) {
        $this->language = $language;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function setPhone($phone) {
        $this->phone = $phone;
    }
    public function setHeight($height) {
        $this->height = $height;
    }
    public function setWeight($weight) {
        $this->weight = $weight;
    }
    public function setJob($job) {
        $this->job = $job;
    }
    public function setCity($city) {
        $this->city = $city;
    }
    public function setPet($pet) {
        $this->pet = $pet;
    }
    public function setHobby($hobby) {
        $this->hobby = $hobby;
    }

    public function getName() {
        return $this->name;
    }
    public function getLastname() {
        return $this->lastname;
    }
    public function getSex() {
        return $this->sex;
    }
    public function getAge() {
        return $this->age;
    }
    public function getCountry() {
        return $this->country;
    }
    public function getLanguage() {
        return $this->language;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getPhone() {
        return $this->phone;
    }
    public function getHeight() {
        return $this->height;
    }
    public function getWeight() {
        return $this->weight;
    }
    public function getJob() {
        return $this->job;
    }
    public function getCity() {
        return $this->city;
    }
    public function getPet() {
        return $this->pet;
    }
    public function getHobby() {
        return $this->hobby;
    }

    public function displayPersonalInfo() {
        echo "First Name: " . $this->getName() . "<br>";
        echo "Last Name: " . $this->getLastname() . "<br>";
        echo "Sex: " . $this->getSex() . "<br>";
        echo "Age: " . $this->getAge() . "<br>";
        echo "Country: " . $this->getCountry() . "<br>";
        echo "Language: " . $this->getLanguage() . "<br>";
        echo "Email: " . $this->getEmail() . "<br>";
        echo "Phone: " . $this->getPhone() . "<br>";
        echo "Height: " . $this->getHeight() . "<br>";
        echo "Weight: " . $this->getWeight() . "<br>";
        echo "Job: " . $this->getJob() . "<br>";
        echo "City: " . $this->getCity() . "<br>";
        echo "Pet: " . $this->getPet() . "<br>";
        echo "Hobby: " . $this->getHobby() . "<br>";
    }
}

$person1 = new user1("Pavel", "Matiuchov", "Male", 25, "Lithuania", "Lithuanian", "matiuchov@gmail.com", "867037372", 194, 100, "Php Developer", "Vilnius", "dog", "photoshop");
$person1->displayPersonalInfo();
echo "<br>";


$person1->setName("Yasha");
$person1->setLastname("Gatalskij");
$person1->setAge(28);
$person1->setLanguage("Russian");
$person1->displayPersonalInfo();
echo "<br>";


$person2 = new user1("Sasha", "Ivanova", "Female", 30, "USA", "English", "sasha.ivanova@gmail.com", "414124124124", 165, 60, "Software Engineer", "New York", "cat", "reading");
$person2->displayPersonalInfo();
echo "<br>";


$person2->setName("Valeria");
$person2->setLastname("Mostova");
$person2->setAge(32);
$person2->setJob("Data Scientist");
$person2->displayPersonalInfo();
?>
