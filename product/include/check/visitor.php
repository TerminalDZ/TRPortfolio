<?php

require '../init.php';


//delete all Visitors


if (isset($_POST['delet'])) {
    $visitor_ids = isset($_POST['visitor_ids']) ? $_POST['visitor_ids'] : array();
    if (count($visitor_ids) > 0) {
        $formatted_visitor_ids = implode(',', $visitor_ids);
        $sql = "DELETE FROM visitor WHERE id IN ($formatted_visitor_ids)";
        if (mysqli_query($db, $sql)) {
            header("Location: " . BASEURL . "backend/?msg=delet#visitors");
            exit();
        } else {
            header("Location: " . BASEURL . "backend/?msg=deleterr#visitors");
            exit();
        }
    }
};



