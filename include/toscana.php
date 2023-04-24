<?php
require './db.php';

$indexes = [
    'Sezioni'                       => 'sezione',
    'Codice'                        => 'codice',
    'Istuzioni Att. 2001'           => 'istruzioni2001',
    'Istuzioni Att. 2011'           => 'istruzioni2011',
    'Variazione Istruzioni'         => 'variazioneIstruzioni',
    'Addetti 2001'                  => 'addetti2001',
    'Addetti 2011'                  => 'addetti2011',
    'Variazione Addetti'            => 'variazioneAddetti',
    'Lavoratori Esterni 2001'       => 'lavoratoriEsterni2001',
    'Lavoratori Esterni 2011'       => 'lavoratoriEsterni2011',
    'Variazione Lavoratori Esterni' => 'variazioneLavoratoriEsterni',
    'Volontari 2001'                => 'volontari2001',
    'Volontari 2011'                => 'volontari2011',
    'Variazione Volontari'          => 'variazioneVolontari'
];

$dirs = [
    "ASC",
    "DESC"
];

$sort = $_GET['sort'] ?? NULL;
$sortDir = $_GET['sortDir'] ?? NULL;
$limit = $_GET['limit'] ?? NULL;

$q = "SELECT * FROM Toscana";

if (array_key_exists($sort, $indexes) and in_array($sortDir, $dirs)) {
    $q .= " ORDER BY " . $indexes[$sort] . " " . $sortDir;
}

if (is_numeric($limit)) {
    $q .= ' LIMIT ' . $limit;
}

$toscana = mysqli_query($mysqli, $q);
while($row = $toscana->fetch_assoc()) {
    $toscanaArr[] = $row;
}

echo json_encode($toscanaArr);
?>