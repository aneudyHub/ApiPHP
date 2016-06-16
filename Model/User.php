<?php
/**
 * Created by PhpStorm.
 * User: aneudy
 * Date: 5/16/2016
 * Time: 9:22 AM
 */

namespace Model;


class User
{
    private $id;
    private $Name;
    private $LastName1;
    private $LastName2;
    private $BDate;
    private $Cellphone;
    private $User;
    private $Password;
    private $UType;
    private $Email;
    private $Avatar;
    
    function __construct($params)
    {

            $this->setName($params->Name);
            $this->setLastName1($params->LastName1);
            $this->setLastName2($params->LastName2);
            $this->setBDate($params->BDate);
            $this->setUserName($params->NUser);
            $this->setCellphone($params->Cellphone);
            $this->setPassword($params->Password);
            $this->setUtype($params->UType);
            $this->setEmail($params->Email);
            $this->setAvatar($params->Avatar);

        

    }
    // convertir Objet a json
    function getJson(){
        $r = array('Name'=>self::getName(),
                    'LastName1'=>self::getLastName1(),
                    'LastName2'=>self::getLastName2(),
                    'BDate'=>self::getBDate(),
                    'NUser'=>self::getUserName(),
                    'Password'=>self::getPassword(),
                    'UType'=>self::getUtype(),
                    'Cellphone'=>self::getCellphone(),
                    'Email'=>self::getEmail(),
                    'Avatar'=>self::getAvatar()
            );




        return $r;
    }
    //setters
    public function setName($name){
        $this->Name=$name;
    }
    public function setLastName1($ln1){$this->LastName1=$ln1;}
    public function setLastName2($ln2){ $this->LastName2=$ln2;}
    public function setBDate($Bdt){

        $this->BDate=new \MongoDate(strtotime($Bdt));
    }
    public function setCellphone($Cp){$this->Cellphone=$Cp;}
    public function setUserName($U){$this->User=$U;}
    public function setPassword($p){$this->Password=$p;}
    public function setUtype($U){
        if(is_int($U)){
            $this->UType=$U;
        }else{
            die();
        }

    }
    public function setEmail($E){$this->Email=$E;}
    public function setAvatar($Avatar){$this->Avatar=$Avatar;}


    //getters
    public function getName(){return $this->Name;}
    public function getLastName1(){return $this->LastName1;}
    public function getLastName2(){ return $this->LastName2;}
    public function getBDate(){return $this->BDate;}
    public function getCellphone(){return $this->Cellphone;}
    public function getUserName(){return $this->User;}
    public function getPassword(){return $this->Password;}
    public function getUtype(){return $this->UType;}
    public function getEmail(){return $this->Email;}
    public function getAvatar(){return $this->Avatar;}














}