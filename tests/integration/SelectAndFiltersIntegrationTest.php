<?php
namespace QueryBuilder\Mysql;

class SelectAndFiltersIntegrationTest extends \PHPUnit\Framework\TestCase
{
    public function testSelectComFiltrosWhereEOrder(){
        $select = new Select;
        $select->table('paginas');
        $actual = $select->getSql();
        $expected = 'SELECT * FROM paginas';

        $filters = new Filters;
        $filters->where('id','=',1);
        $filters->orderBy('created','desc');

        $select->filter($filters);

        $actual = $select->getSql();
        $expected = 'SELECT *  FROM paginas WHERE id=1 ORDER BY created desc';

        $this->assertEquals($expected,$actual);
    }
}