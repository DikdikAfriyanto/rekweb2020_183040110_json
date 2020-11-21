<?php

$mahasiswa = [
    [
        "nama" => "Dikdik Afriyanto",
        "nrp" => "183040110",
        "email" => "afriyanto.183040110@mail.unpas.ac.id"
    ],
    [
        "nama" => "Angga",
        "nrp" => "183040130",
        "email" => "angga39@gmail.com"
    ]
];

$data = json_encode($mahasiswa);
echo $data;
