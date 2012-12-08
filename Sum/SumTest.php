<?php 
/**
 * Clase para hacer pruebas de la clase Sum
 *
 * @author     mimeks <mimex@fipasoft.com.mx>
 * @license    http://www.gnu.org/licenses/gpl.html  GNU GPL
 */
require './Sum.php';

class SumTest extends PHPUnit_Framework_TestCase {
	
	public function testSumResult()
	{
		
		$a = 1;
		$b = 1;
		
		$s = new Sum( $a, $b );

		$this->assertEquals( $s->result(), 2 );
		
	}
	
}?>
