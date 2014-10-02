<?php
//created by tormahiri 2014 10-2
interface name{
public function hello($name,$age);

}
class biz implements name{

	public function hello($name,$age){

         $var=array($name=>$age);
         foreach ($var as $key => $value) {
         	echo $key.":".$value."</br>";
         }

	}
}
$koz=new biz();
$koz->hello('tormahiri',23);
$koz->hello('uycyber',21);