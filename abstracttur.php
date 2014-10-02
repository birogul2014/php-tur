<?php
interface hatlar{
public	function tom($string);
}
trait salam{

	public function tiz(){

		echo 323;
	}
}
class yegi implements hatlar{
use salam;
	public function tom($string){

		echo preg_replace('/[^0-9]/i', '', $string);
	}
}
$k=new yegi();
$k->tiz();
//$k->tom("a'asdfsa234234,sdaf'sadf!%#$@#21a;f23");
abstract class islam{

	abstract public function xariat($tima);
}
class is extends islam{
	public function xariat($tima){

		echo $tima;
	}
}
$i=new is();
$i->xariat("islamnig ozi bir xairat");
