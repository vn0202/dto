<?php
namespace  vendor\src\interfaces;
interface  Accessable {
    public function offsetUnset($offset);
    public function offsetGet($offset);
    public  function  offsetExists($offset);
    public  function offsetSet($offset, $value);

}