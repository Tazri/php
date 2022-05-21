<?php 
$num = 40;

// indention dose't matter here
if ($num > 0) : 
    echo "num is greaterthen 40\n";
elseif($num == 0):
    echo "num is zero!!\n";
else:
    echo "num is less than 0\n";
endif;
?>



<?php
$result = "Hello";
// alternative syntax use like this

if ($result == "Bye"):
?>
<h1> html syntax can run here. (Bye) </h1>

<?php
elseif($result =="Hello"):
?>
<h1> html syntax can run here. (Hello) </h1>

<?php
endif;
echo PHP_EOL;
?>