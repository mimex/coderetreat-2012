<?php 
/**
 * Clase para hacer una suma de 2 enteros
 *
 * @author     mimeks <mimex@fipasoft.com.mx>
 * @license    http://www.gnu.org/licenses/gpl.html  GNU GPL
 */

class Sum {
	
	public function Sum( $a = null, $b = null ){
		
		$this->a = $a;
		$this->b = $b;
		
	}
	
	public function result(){
		return
			$this->a + $this->b;
	}
	
}?>
