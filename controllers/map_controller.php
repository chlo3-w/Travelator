<?php

require_once('../models/map_search.php');
$results = Search::searchResults($_GET['city']);
print json_encode($results);


