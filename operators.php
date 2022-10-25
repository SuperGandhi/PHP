
<?php 
    // operators arithmetic
    $a = 20;
    $b = 30;


    $resta = $a - $b;
    $suma = $a + $b;
    $multiplicacion = $a * $b;
    $division = $a / $b;
    $modula_resto_div = $a % $b;
    $potencia = $a ** 2;
    ++$b; // incremento 
    --$a; // decremento

?>


<?php
    // Repair operators

    $x = 20;

    $x += 10;
    $x -= 30;
    $x *= 2;
    $x /= 2;
    $x %= 2;
    $x .= 2;
?>

<?php
    // Comparison operators

    $z = 10;
    $y = 20;

    $z == $y;
    $z != $y;
    $z > $y;
    $z <  $y;
    $z >= $y;
    $z <= $y;
    $z <> $y;
    $z === $y;
    $z !== $y;
?>



<?php
    // Logic Operators



    $z=10 && $y=20; 
    $z=10 and $y=20; // low priority
    $z=10 || $y=20;
    $z=10 or $y=20; // low priority
    !($z=10 == $y=20);
    $z=10 xor $y=20; // low priority

?>