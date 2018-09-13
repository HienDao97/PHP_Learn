<?php 
	
	include_once('models/Connection.php');
	class Model{
		var $model_conn;
		var $table_name='';
		var $primary_key='';

		public function __construct(){
			$connection = new Connection();
			$this->model_conn = $connection->conn;
		}

		public function All(){
			
		 	$data = array();

			// cau lenh truy van co so du lieu

			$query ="SELECT * from ".$this->table_name;


			// thuc thi cau lenh truy van co so du lieu

			$result = $this->model_conn->query($query);

			 while($row= $result->fetch_assoc()){
			 	$data[] = $row;
			
			 }
			 return $data;
		}

		public function find($id){
			

			// cau lenh truy van co so du lieu

			$query ="SELECT * from ".$this->table_name." WHERE ".$this->primary_key." = '".$id."'";
			

			// thuc thi cau lenh truy van co so du lieu

			$result = $this->model_conn->query($query);
			$object = $result->fetch_assoc();

			
			return $object;
		}

		public function Delete($id){
			
			// cau lenh truy van co so du lieu

			$query ="DELETE  from ".$this->table_name." WHERE ".$this->primary_key." = '".$id."'";


			// thuc thi cau lenh truy van co so du lieu

			$result = $this->model_conn->query($query);
			
			return $result;
		}

		public function Creat($data){

			$fields='';
			$values='';

			foreach ($data as $key => $value) {
						$fields .= $key.",";
						$values.= "'". $value."',";
					}
			$fields=trim($fields,',');
			$values= trim($values,',');

			// cau lenh truy van co so du lieu

			$query ="INSERT INTO ".$this->table_name." (".$fields.")
                    VALUES (".$values.")";

                   // echo $query;
                   // die; 
			// thuc thi cau lenh truy van co so du lieu

			$result = $this->model_conn->query($query);
			return $result;
			
		}


		public function update($data){

			$string='';

			foreach ($data as $key => $value) {
						//$fields .= $key.",";
						//$values.= "'". $value."',";

						$string = $string .$key."='".$value."',";

					}
					$string=trim($string,',');

					
			
			
			// cau lenh truy van co so du lieu

			$query ="UPDATE ".$this->table_name." SET ".$string." WHERE ".$this->primary_key." = '".$data[$this->primary_key]."'";


			// thuc thi cau lenh truy van co so du lieu

			$result = $this->model_conn->query($query);
			return $result;
		}

		
		
		
		
	}
 ?>