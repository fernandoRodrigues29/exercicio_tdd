<?php
namespace QueryBuilder\Mysql;
class FilterTest extends \PHPUnit\Framework\TestCase
{
    public function testWhere(){
        $filters = new Filters;
        $filters->where('id','=',1);
            $actual = $filters->getSql();
            $expected = 'WHERE id=1';
                $this->assertEquals($expected,$actual);

    }
}
   