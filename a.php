<?php

$data_hewan = [
  [
  "nama" => 'Gajah',
  "ukuran" => 'besar',
  ],
  [
  "nama" => 'Jerapa',
  "ukuran" => 'besar',
  ],
  [
  "nama" => 'Harimau',
  "ukuran" => 'kecil',
  ],
  [
  "nama" => 'Katak',
  "ukuran" => 'kecil',
  ],
  [
  "nama" => 'Lumba-lumba',
  "ukuran" => 'kecil',
  ],
];

// echo "<pre>";
// var_dump(count($data_hewan));
$jml_hewan = count($data_hewan);
$nomor_urut = 0;
for($i=0; $i < $jml_hewan; $i++){
    if ($data_hewan[$i]['nama']=="Jerapa" || $data_hewan[$i]['ukuran']=="kecil") {
        $nomor_urut++;
        echo "-----$nomor_urut----<br>";
        echo "Ini adalah nama hewan ".$data_hewan[$i]['nama']."<br>";
        echo "dengan ukuran ".$data_hewan[$i]['ukuran']."<br>";
    }
}

for ($i=0; $i < 5; $i++) { 
    echo "*<br>";
}
echo "___*___<br>";
echo "__***__<br>";
echo "_*****_<br>";
echo "*******";


