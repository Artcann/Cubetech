<?php
$this->title = 'Affichage Json';
$this->style = 'public/css/index.css';

echo json_encode($data, JSON_PRETTY_PRINT);
