<?php
// require_once('models/search_model.php');

// $searchModel = new Search();

// $results = $searchModel::searchResults($_GET['term']);
// $rows = array();
// while($r = mysqli_fetch_assoc($results)) {
//     $rows[] = $r;
// }
// print json_encode($rows);

print '[
    {
        "id": "1",
        "title": "Post 1"
    },
    {
        "id": "2",
        "title": "Post 2"
    }
]';