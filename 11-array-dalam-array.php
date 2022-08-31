<?php

include 'menu.php';

$names = [
  'namaDepan' => 'Muhammad',
  'namaTengah' => 'Zuz',
  'namaBelakang' => 'Ubaidillah',
  'alamat' => [
    'kecamatan' => 'jombang',
    'nomor' => 20,
    'kabupaten' =>'jombang',
    'negara' => [
      'indonesia',
      'palestina'
    ],
  ],
];

echo json_encode($names);
