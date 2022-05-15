<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dao extends CI_Model{
    public function find($columns,$table,$filter){
        $tab=array();
        //where id in (select max(id) from etat)
        $sql="select %s from %s%s";
        $sql=sprintf($sql,$columns,$table,$filter);
            // echo $sql;
    
        $query=$this->db->query($sql);
        $result=array();
		foreach($query->result_array() as $row)
		{
			$result[]=$row;
		}
        return $result;
    }
    public function insert($table,$values){
        try{
        $sql="insert into %s values (%s)";
        $sql=sprintf($sql,$table,$values);
        $query=$this->db->query($sql);}
        catch(Exception $e){
            echo $e;
        }
    }
    public function find2($columns,$table,$filter){
        $tab=array();
        $sql="select %s from %s%s";
        $sql=sprintf($sql,$columns,$table,$filter);
            // echo $sql;
    
        $query=$this->db->query($sql)->result_array();
        
        return $query;
    }
    public function login($username,$password){
        $response=false;
        $sql="select count(id) from user where (nom='%s' or email='%s') and password='%s'";
        $sql=sprintf($sql,$username,$username,$password);
        // var_dump($sql);

        // echo $sql;    
        $query=$this->db->query($sql);
        $result=array();
		foreach($query->result_array() as $row)
		{
			$result[]=$row;
		}   
        if(count($result)==1){
            if ($result[0]["count(id)"]=="1") $response=true;
        }
        return $response;
    }
}
?>