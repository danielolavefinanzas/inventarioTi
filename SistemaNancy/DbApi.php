<?php
    include_once "Db.php";
    class DbApi extends Db{
        public function getRim(){
            $data =  mysqli_query($this->my_Connect(), "select * from rim");
            $dataArray = [];
            while($consulta = mysqli_fetch_array($data)){
                $dataArray[] = $consulta;
            }
            return $dataArray;
        }
    }
