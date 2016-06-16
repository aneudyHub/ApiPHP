<?php
/**
 * Created by PhpStorm.
 * User: aneudy
 * Date: 5/16/2016
 * Time: 9:28 AM
 */



namespace Controller;




require "../Model/User.php";


class userController{

    public $GeneralCol = "Users";

    //list of users

    function Index(){
        $DB = new \MongoClient();
        $col= $DB->selectCollection("Proyecto","Users");
        $cursor = $col->find();
        foreach ($cursor as $doc){
            var_dump($doc);
        }

    }

    //signup create a user
    function create($User){
        $DB = new \MongoClient();
        $col = $DB->selectCollection("Proyecto","Users");
        $UV = new \Model\User($User);


        //Confirmar duplicados
        $confirm=$col->findOne($UV->getJson());
        if(is_null($confirm)) {
            return $col->insert($UV->getJson());

        }else{
            return 0;

        }
    }


    public function Update(){


    }

    public function Delete(){


    }



    function Authenticate($UserName,$password){
        $query = array('User'=>$UserName,
            'Password'=>$password
        );
        $cursor = $this->DBcol->findOne($query);
        if(empty($cursor)){
            return null;
        }else{
            $id = $cursor['_id'];
            return $this->loadUserData($id);

        }
    }

    function loadUserData($id){

        $cursor=$this->DBcol->findOne(array('_id'=>$id));
        if(empty($cursor)){
            echo "error loading data";
        }else{
            json_encode($cursor);
        }
    }


    
    
    

}