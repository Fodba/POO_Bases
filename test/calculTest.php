<?php
require_once ".classes/calcul.class.php";

use PHPUnit\Framework\TestCase; // Charge le framework PhpUnit

class calculTest extends TestCase
{   
    public function testDivideOk()
    {
        $oCalcul = new Calcul();

        $number = 10;
        $divide = 2;

        $result = $oCalcul->divide($number, $divide);

        // On attend le que le résultat de 10/2 soit 5 :
        $this->assertEquals(5, $result);
    } 

    public function testDivideFail()
    {
        $oCalcul = new Calcul();

        $number = 0;
        $divide = 2;

        $result = $oCalcul->divide($number, $divide);

        // On attend le que le résultat de 10/2 soit 5 :
        $this->assertFalse($result);
    }        
}
?>