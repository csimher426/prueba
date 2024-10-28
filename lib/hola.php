<?php
// Autor: Cristina <csimher426@g.educaand.es>

require('HolaMundo.php');

print "introduce tu nombre"
$nombre = trim(fgets(STDIN));
print new HolaMundo($nombre);

?>
