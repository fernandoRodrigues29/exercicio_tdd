<?php
namespace QueryBuilder\Mysql;
class SelectTest extends \PHPUnit\Framework\TestCase
{
	
	public function testSelectSemFiltro(){
		$select = new Select;
			$select->table('tabAprender');
				$actual = $select->getSql();
					$expected = "SELECT * FROM tabAprender";
						$this->assertEquals($expected, $actual);
	}
	/*
	e bom ao testar api externas 
	$mocado = $this->getMockBuilder(Filters::class)
	->disableOriginalConstructor()
	->getMock();
	$mocado->mwthod('getSql')->willReturn('bla bla bla')
	*/
	public function testSSelectEspecificandoOsCampos(){
		$select = new Select;
			$select->table('usuarios');
				$select->fields(['nome','email']);
					$actual = $select->getSql();
					$expected = 'SELECT nome, email FROM usuarios';
						$this->assertEquals($expected,$actual);
	}
}