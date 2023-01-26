<?php

class Product {
    
    private $name;
    private $code;
    private $cost;
    private Category $category;


    public function __construct($name, $code, $cost, Category $category) {

        $this -> setName($name);
        $this -> setCode($code);
        $this -> setCost($cost);
        $this -> setCategory($category);

    }


    public function getName() {

        return $this -> name;
    }
    public function setName($name) {
    
        $this -> name = $name;
    }

    public function getCode() {

        return $this -> code;
    }
    public function setCode($code) {
    
        $this -> code = $code;
    }

    public function getCost() {

        return $this -> cost;
    }
    public function setCost($cost) {
    
        $this -> cost = $cost;
    }

    public function getCategory() {

        return $this -> category;
    }
    public function setCategory($category) {
    
        $this -> category = $category;
    }


    public function getHtml() {

        return $this -> getName() . "<br>"
             . $this -> getCode() . "<br>"
             . $this -> getCost() . "<br>"
             . $this -> getCategory() -> name;

    }

}

class Category {

    public $name;
    public $description;


    public function __construct($name, $description) {

        $this -> setName($name);
        $this -> setDescription($description);

    }


    public function getName() {

        return $this -> name;
    }
    public function setName($name) {
    
        $this -> name = $name;
    }

    public function getDescription() {

        return $this -> description;
    }
    public function setDescription($description) {
    
        $this -> description = $description;
    }


    public function getHtml() {                

        return $this -> getName() . "<br>"
        . $this -> getDescription();
    }

}

class Food extends Product {

    private $ingredients;
    private $allergeni;
    private $paese;

    public function __construct($name, $code, $cost, Category $category, $ingredients, $allergeni, $paese) {

        parent :: __construct($name, $code, $cost, $category);

        $this -> setIngredients($ingredients);
        $this -> setAllergeni($allergeni);
        $this -> setPaese($paese);

    }

    public function getIngredients() {

        return $this -> ingredients;
    }
    public function setIngredients($ingredients) {

        $this -> ingredients = $ingredients;
    }

    public function getAllergeni() {

        return $this -> allergeni;
    }
    public function setAllergeni($allergeni) {

        $this -> allergeni = $allergeni;
    }

    public function getPaese() {

        return $this -> paese;
    }
    public function setPaese($paese) {

        $this -> paese = $paese;
    }

    
    public function getHtml() {

        return parent :: getHtml() . "<br>"
            . $this -> getIngredients() . "<br>"
            . $this -> getAllergeni() . "<br>"
            . $this -> getPaese() . "<br>"
            . "<br>";
    }

}


class Toy extends Product {

    private $color;
    private $minimumAge;
    private $description;

    public function __construct($name, $code, $cost, $category, $color, $minimumAge, $description) {

        parent :: __construct($name, $code, $cost, $category);

        $this -> setColor($color);
        $this -> setMinimumAge($minimumAge);
        $this -> setDescription($description);

    }

    public function getColor() {

        return $this -> color;
    }
    public function setColor($color) {

        $this -> color = $color;
    }

    public function getMinimumAge() {

        return $this -> minimumAge;
    }
    public function setMinimumAge($minimumAge) {

        $this -> minimumAge = $minimumAge;
    }

    public function getDescription() {

        return $this -> description;
    }
    public function setDescription($description) {

        $this -> description = $description;
    }

    
    public function getHtml() {

        return parent :: getHtml() . "<br>"
            . $this -> getColor() . "<br>"
            . $this -> getMinimumAge() . "<br>"
            . $this -> getDescription() . "<br>"
            . "<br>";
    }

}


$category1 = new Category("Cani", "Prodotti per cani");
$category2 = new Category("Gatti", "Prodotti per gatti");



$toy1 = new Toy("Osso", "LF746", "10", $category1, "Pink", "2+", "Il cane mangia l'osso");

/* $name, $code, $cost, Category $category, $ingredients, $allergeni, $paese */
$food1 = new Food("Croccantini", "CK674", "20", $category2, "Gdgdg, ddhhdhd, fffjj.", "gdgdg", "Croccantini al tonno.");



echo $toy1 -> getHtml();

echo $food1 -> getHtml();