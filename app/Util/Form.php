<?php
namespace App\Util;
/**
 * Created by PhpStorm.
 * User: diomedes
 * Date: 16/10/16
 * Time: 9:37 PM
 */
class Form
{
   public static function getStates() 
   {
       return [1 => 'Activo', 0 => 'Baja'];
   }
}