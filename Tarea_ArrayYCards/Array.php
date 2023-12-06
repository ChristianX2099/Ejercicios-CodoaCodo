<?php 

$sonicfriends=[];
$p1=[
    "id"=>1,
    "Nombre"=>"Sonic",
    "img"=>"cards/sonic.jpeg",
    "descripcion"=>"Velocista",
    "cumpleaños"=>"23 de Junio"
];

$p2=[
    "id"=>2,
    "Nombre"=>"Shadow",
    "img"=>" cards/shadow.jpeg",
    "descripcion"=>"AntiHeroe",
    "cumpleaños"=>"18 de Junio"
];

$p3=[
    "id"=>3,
    "Nombre"=>"Tails",
    "img"=>"cards/tails.jpeg",
    "descripcion"=>"Ingeniero",
    "cumpleaños"=>"23 de Diciembre"
];

$p4=[
    "id"=>4,
    "Nombre"=>"Amy",
    "img"=>"cards/amy.jpeg",
    "descripcion"=>"Martillazo",
    "cumpleaños"=>"23 de Septiembre"
];

$sonicfriends[]=$p1;
$sonicfriends[]=$p2;
$sonicfriends[]=$p3;
$sonicfriends[]=$p4;


function dameUnCard($item):string
{
    $grilla='
    <div class="col-sm-3 m-0 p-0">
        <div class="card h-100">
            <div class="relative overflow-x-hidden h-75">
                <img class="card-img-top h-100" src="'; $grilla.=$item["img"].'"/>
            </div>

            <div class="card-body">
                <h5 class="card-title">';$grilla.=$item["Nombre"].'</h5>
                <p class="card-text">Tipo: ';$grilla.=$item["descripcion"].'</p>
                <p class="card-text"><small class="text-body-secondary">
                Cumpleaños: ';$grilla.=$item["cumpleaños"].'</small></p>
            </div>
        </div> 
    </div>';
    return $grilla;

}
