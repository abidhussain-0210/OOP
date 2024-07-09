<!-- <?php

    $data = ["Karachi" , "Pakistan" , "Banana" , "Mango"];

    array_shift($data);
    echo "<pre>";
    print_r($data);
    echo "</pre>";

?> -->
<?php

$data = ["Karachi" , "Pakistan" , "Banana" , "Mango"];

array_unshift($data , "Pakistan" , "Lahore");
echo "<pre>";
print_r($data);
echo "</pre>";

?>