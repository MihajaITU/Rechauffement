<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class fonction extends CI_Model{

    public function find($columns,$table,$filter){
        $tab=array();
        $sql="select %s from %s%s";
        $sql=sprintf($sql,$columns,$table,$filter);
        $query=$this->db->query($ql);
        $result=array();
		foreach($query->result_array() as $row)
		{

			$result[]=$row;
		}
        return $result;
    }
    public function countRec($tab){
		$freq = array_count_values($tab);
		$resultat=array();
		foreach ($freq as $v => $f) {
			$resultat[$v]=$f;
			// printf('%s se trouve %d fois dans le tableau.<br />', $v, $f);
		}
		
		return $resultat;
	}
	public function devideArray($array){
		$resultat=array();
		$i=0;
		while ($fruit_name = current($array)) {
				$resultat[$i]['Nom']=key($array);
				// var_dump(key($array)));
				$resultat[$i]['Unite']=$array[key($array)];
				$i++;
				next($array);
				
		}
		return $resultat;
	}
	public function randomColor() {
		$str = '#';
		for ($i = 0; $i < 6; $i++) {
			$randNum = rand(0, 15);
			switch ($randNum) {
				case 10: $randNum = 'A';
					break;
				case 11: $randNum = 'B';
					break;
				case 12: $randNum = 'C';
					break;
				case 13: $randNum = 'D';
					break;
				case 14: $randNum = 'E';
					break;
				case 15: $randNum = 'F';
					break;
			}
			$str .= $randNum;
		}
		return $str;
	}
	public function getTabColors($nombre){
		$retour=array();
		while(count($retour)<$nombre){
			$a=$this->fonction->randomColor();
				if(!(in_array($a,$retour))){
					$retour[]=$a;
				}
		}
		return $retour;
	}
}
?>