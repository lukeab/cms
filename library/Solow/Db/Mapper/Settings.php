<?php
class Solow_Db_Mapper_Settings extends Solow_Db_Mapper_Abstract
{
    public function init()
    {
        $this->setDbTable('Solow_Db_Table_Settings');
    }

    public function getOption($option)
    {
        if($this->checkExistence('id',1))
        {
           # echo 'row found!';
        }
        $result = $this->fetchValue($option, 1);
        return $result;
    }
}