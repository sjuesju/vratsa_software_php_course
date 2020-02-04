<?php
    $da = ["Monday", "Tuesday", "Wednesday", "Friday", "Saturday", "Sunday"];

    echo json_encode($da);
    echo "<br> <br>";
    echo "longest string has " . max(array_map('strlen', $da)) . " characters";
    echo "<br>";
    echo "shortest string has " . min(array_map('strlen', $da)). " characters";
?>
