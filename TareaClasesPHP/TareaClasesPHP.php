<?php
    class SonicFriends {
        public $Nombre;
        public $Tipo;
        public $Velocidad;
        public $Fuerza;
    
    function hablar(){
        echo "Hola, blablablabla";
    }

    function abrazo(){
        echo ' ';
        echo "Un abrazo nunca viene mal";
    }

    }

$Sonic = new SonicFriends();
$Sonic->Tipo = "Velocista";
$Sonic->Nombre = "Sonic";
$Sonic->Velocidad = 1000;
$Sonic->Fuerza = 400;

echo $Sonic->Nombre;
echo $Sonic->Tipo;
echo $Sonic->Velocidad;
echo $Sonic->Fuerza;

$Tails = new SonicFriends();
$Tails->Tipo = "Ingeniero";
$Tails->Nombre = "Tails";
$Tails->Velocidad = 800;
$Tails->Fuerza = 200;

echo "<br>Nombre: " . $Tails->Nombre . "<br>";
echo "Tipo: " . $Tails->Tipo . "<br>";
echo "Velocidad: " . $Tails->Velocidad . "<br>";
echo "Fuerza: " . $Tails->Fuerza . "<br>";
$Tails->hablar();

$Knuckles = new SonicFriends();
$Knuckles->Tipo = "Luchador";
$Knuckles->Nombre = "Knuckles";
$Knuckles->Velocidad = 600;
$Knuckles->Fuerza = 800;

echo "<br>Nombre: " . $Knuckles->Nombre . "<br>";
echo "Tipo: " . $Knuckles->Tipo . "<br>";
echo "Velocidad: " . $Knuckles->Velocidad . "<br>";
echo "Fuerza: " . $Knuckles->Fuerza . "<br>";

$Amy = new SonicFriends();
$Amy->Tipo = "Martillero";
$Amy->Nombre = "Amy";
$Amy->Velocidad = 700;
$Amy->Fuerza = 300;

echo "<br>Nombre: " . $Amy->Nombre . "<br>";
echo "Tipo: " . $Amy->Tipo . "<br>";
echo "Velocidad: " . $Amy->Velocidad . "<br>";
echo "Fuerza: " . $Amy->Fuerza . "<br>";

$Shadow = new SonicFriends();
$Shadow->Tipo = "Anti-Héroe";
$Shadow->Nombre = "Shadow";
$Shadow->Velocidad = 900;
$Shadow->Fuerza = 700;

echo "<br>Nombre: " . $Shadow->Nombre . "<br>";
echo "Tipo: " . $Shadow->Tipo . "<br>";
echo "Velocidad: " . $Shadow->Velocidad . "<br>";
echo "Fuerza: " . $Shadow->Fuerza . "<br>";

?>

?>