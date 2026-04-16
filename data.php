<?php

header("Content-Type: application/json");

$data = [
    ["id"=>1, "nom"=>"Jean"],
    ["id"=>2, "nom"=>"Paul"],
    ["id"=>3, "nom"=>"Marie"]
];

echo json_encode($data);

?>
