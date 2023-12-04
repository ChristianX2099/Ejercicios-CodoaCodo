<?php
    class SonicFriends {
        public $Nombre;
        public $Tipo;
        public $Velocidad;
        public $Fuerza;
    
    function hablar($Nombre,$Tipo){
        echo "Hola, Mi nombre es ". $Nombre." y soy ". $Tipo.". <br>";
    }

    function abrazo($Nombre){
        echo "Ven aca tu amig@ ".$Nombre." te dara un abrazo!. <br>";
    }

    }

$Sonic = new SonicFriends();
$Sonic->Tipo = "Velocista";
$Sonic->Nombre = "Sonic";
$Sonic->Velocidad = 1000;
$Sonic->Fuerza = 400;

echo "<br>Nombre: " . $Sonic->Nombre . "<br>";
echo "Tipo: " . $Sonic->Tipo . "<br>";
echo "Velocidad: " . $Sonic->Velocidad . "<br>";
echo "Fuerza: " . $Sonic->Fuerza . "<br>";
$Sonic->hablar($Sonic->Nombre,$Sonic->Tipo);

$Tails = new SonicFriends();
$Tails->Tipo = "Ingeniero";
$Tails->Nombre = "Tails";
$Tails->Velocidad = 800;
$Tails->Fuerza = 200;

echo "<br>Nombre: " . $Tails->Nombre . "<br>";
echo "Tipo: " . $Tails->Tipo . "<br>";
echo "Velocidad: " . $Tails->Velocidad . "<br>";
echo "Fuerza: " . $Tails->Fuerza . "<br>";
$Tails->abrazo($Tails->Nombre);

$Knuckles = new SonicFriends();
$Knuckles->Tipo = "Luchador";
$Knuckles->Nombre = "Knuckles";
$Knuckles->Velocidad = 600;
$Knuckles->Fuerza = 800;

echo "<br>Nombre: " . $Knuckles->Nombre . "<br>";
echo "Tipo: " . $Knuckles->Tipo . "<br>";
echo "Velocidad: " . $Knuckles->Velocidad . "<br>";
echo "Fuerza: " . $Knuckles->Fuerza . "<br>";
$Knuckles->hablar($Knuckles->Nombre,$Knuckles->Tipo);

$Amy = new SonicFriends();
$Amy->Tipo = "Martillero";
$Amy->Nombre = "Amy";
$Amy->Velocidad = 700;
$Amy->Fuerza = 300;

echo "<br>Nombre: " . $Amy->Nombre . "<br>";
echo "Tipo: " . $Amy->Tipo . "<br>";
echo "Velocidad: " . $Amy->Velocidad . "<br>";
echo "Fuerza: " . $Amy->Fuerza . "<br>";
$Amy->abrazo($Amy->Nombre);

$Shadow = new SonicFriends();
$Shadow->Tipo = "Anti-Héroe";
$Shadow->Nombre = "Shadow";
$Shadow->Velocidad = 900;
$Shadow->Fuerza = 700;

echo "<br>Nombre: " . $Shadow->Nombre . "<br>";
echo "Tipo: " . $Shadow->Tipo . "<br>";
echo "Velocidad: " . $Shadow->Velocidad . "<br>";
echo "Fuerza: " . $Shadow->Fuerza . "<br>";
$Shadow->hablar($Shadow->Nombre,$Shadow->Tipo);
?>