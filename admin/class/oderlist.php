<?php 
if (!defined('HOST')) exit;
class oderlist extends Db
{


    function getAll()
    {
        return $this->selectQuery('SELECT * FROM hoadon JOIN chitiethd ON hoadon.mahd=chitiethd.mahd JOIN product ON product.idProduct=chitiethd.idProduct');
    }

    

    
   
   

   

    

}