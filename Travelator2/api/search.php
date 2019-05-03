<?php
require_once('/models/search_model.php');

$results = Search::searchResults($_GET['query']);
print json_encode($results);


