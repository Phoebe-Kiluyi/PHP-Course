<?php
class Fruit{
public $name;
public $color; 
function set_name($name) {//public function (default)
$this->name = $name;
}
function get_name(){
return $this->name;
}
function set_color($color){
$this->color = $color;
}
function get_color() {
return $this->color;
}
}
$mango = new Fruit();
$mango->set_name('Mango');
$mango->set_color('Yellow');

echo "Name: " . $mango->get_name();
echo "<br>";
echo "Color:" . $mango->get_color();
?>