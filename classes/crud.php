<?php
include_once "config.php";

class Crud extends Config
{

	function __construct()
	{
		parent::__construct();
	}


//Display All
	public function displayAll($table)
	{
		$query = "SELECT * FROM {$table}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}



	public function displayAllWithOrder($table,$orderValue,$orderType)
	{
		$query = "SELECT * FROM {$table} ORDER BY {$orderValue} {$orderType}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}


	public function displayAllSpecific($table,$value,$item)
	{
		$query = "SELECT * FROM {$table} WHERE $value='$item' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}


	public function displayAllSpecificWithOrder($table,$value,$item,$orderValue,$orderType)
	{
		$query = "SELECT * FROM {$table} WHERE $value='$item' ORDER BY {$orderValue} {$orderType}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}

	

	public function displayOneSpecific($table,$item,$value)
	{
		$item = $this->cleanse($item);
		$value = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where $item='$value' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}



	
	public function displayWithLimit($table,$limit)
	{
		$query = "SELECT * FROM {table} limit {$limit}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}




	//Display Specific
	public function displayName($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT name FROM login where email='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['name'];
		}else{
			return "No found records";
		}
	}

	public function displayBalance($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT bal FROM balance where ano='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['bal'];
		}else{
			return "No found records";
		}
	}



	public function displayOne($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where email='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}

	public function displayNameById($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['name'];
		}else{
			return 0;
		}
	}

	public function displayNameByUserId($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['name'];
		}else{
			return 0;
		}
	}

	public function displayIdByEmail($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where email='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['id'];
		}else{
			return 0;
		}
	}


	

	public function state_one($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT id,name FROM state where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['name'];
		}else{
			return "No found records";
		}
	}

	

//Counting All
	public function countAll($table)
	{
		$q=$this->con->query("SELECT id FROM {$table}");
		if ($q) {
			return $q->num_rows;
		} else {
			return 0;
		}
		
		
	}



	public function countAllWithTwo($table,$item,$value)
	{
		$q=$this->con->query("SELECT id FROM {$table} where $item='$value' ");
		if ($q) {
			return $q->num_rows;
		} else {
			return 0;
		}
		
		
	}



		public function checkPin($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM customer where password='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$d=$result->fetch_assoc();
			$h=$d['ano'];
		header("Location:finger.php?ano=$h");
		}else{
		header("Location:verify.php?msg=Invalid pin try again&type=error");
		}
	}

		public function processMoney($ano,$money)
	{
		$query = "SELECT * FROM customer where ano='$ano' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$d=$result->fetch_assoc();
			$h=$d['bal'];
			if ($money > $h) {
			header("Location:withdraw.php?msg=Requested money exceeds balance&type=error&ano=$ano");
			} else {
			$ttype='2';
			$balancef=$h - $money;
			$query="INSERT INTO transaction(ano,ttype,amount,bal) VALUES('$ano','$ttype','$money','$balancef')";
			$query2="UPDATE balance SET bal='$balancef' WHERE ano='$ano'";
		    $query3="UPDATE customer SET bal='$balancef' WHERE ano='$ano'";
		    $this->con->query($query);
		    $this->con->query($query2);
		    $this->con->query($query3);

			header("Location:success.php?msg=Take your cash&type=success&ano=$ano");
			}
			
	}

}




		public function processMoney2($ano,$money)
	{
		$query = "SELECT * FROM customer where ano='$ano' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$d=$result->fetch_assoc();
			$h=$d['bal'];
			if ($money > $h) {
			header("Location:others.php?msg=Requested money exceeds balance&type=error&ano=$ano");
			} else {
			$ttype='2';
			$balancef=$h - $money;
			$query="INSERT INTO transaction(ano,ttype,amount,bal) VALUES('$ano','$ttype','$money','$balancef')";
			$query2="UPDATE balance SET bal='$balancef' WHERE ano='$ano'";
		    $query3="UPDATE customer SET bal='$balancef' WHERE ano='$ano'";
		    $this->con->query($query);
		    $this->con->query($query2);
		    $this->con->query($query3);

			header("Location:success.php?msg=Take your cash&type=success&ano=$ano");
			}
			
	}

}


		public function processMoney3($ano,$money)
	{
		$query = "SELECT * FROM customer where ano='$ano' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$d=$result->fetch_assoc();
			$h=$d['bal'];
			if ($money > $h) {
			header("Location:transfer.php?msg=Requested money exceeds balance&type=error&ano=$ano");
			} else {
			$ttype='2';
			$balancef=$h - $money;
			$query="INSERT INTO transaction(ano,ttype,amount,bal) VALUES('$ano','$ttype','$money','$balancef')";
			$query2="UPDATE balance SET bal='$balancef' WHERE ano='$ano'";
		    $query3="UPDATE customer SET bal='$balancef' WHERE ano='$ano'";
		    $this->con->query($query);
		    $this->con->query($query2);
		    $this->con->query($query3);

			header("Location:tsuccess.php?msg=Transfer was successful&type=success&ano=$ano");
			}
			
	}

}



	
// Inserting


	
	public function addUser($value)
	{
		$ano = $this->cleanse($post['ano']);
		$name = $this->cleanse($post['name']);
		$email = $this->cleanse($post['email']);
		$phone = $this->cleanse($post['phone']);
		$address = $this->cleanse($post['address']);
		$password = $this->cleanse($post['password']);
		$gender = $this->cleanse($post['gender']);

		$query="INSERT INTO customer(ano,name,email,phone,address,password,gender,bal) VALUES('$ano','$name','$email','$phone','$address','$password','$gender','0')";
		$query2="INSERT INTO login(name,email,password,role) VALUES('$name','$email','$password','3')";
		$query3="INSERT INTO balance(ano,bal) VALUES('$ano','0')";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:view-user.php?msg=Account was created successfully&type=success");
			$this->con->query($query2);
			$this->con->query($query3);
		}else{
			header("Location:view-user.php?msg=Error adding data try again!&type=error");
		}
	}


		public function addTransaction($value)
	{
		$ano = $this->cleanse($post['ano']);
		$amount = $this->cleanse($post['amount']);
		$ttype = $this->cleanse($post['ttype']);
		$balancen = $this->cleanse($this->displayBalance($ano));
		if ($ttype =='1') {
		$balancef= $balancen + $amount;
		} else {
		$balancef= $balancen - $amount;
		}
		

		

		$query="INSERT INTO transaction(ano,ttype,amount,bal) VALUES('$ano','$ttype','$amount','$balancef')";
		$query2="UPDATE balance SET bal='$balancef' WHERE ano='$ano'";
		$query3="UPDATE customer SET bal='$balancef' WHERE ano='$ano'";
		$sql = $this->con->query($query);
		if ($sql==true) {
			 $this->con->query($query2);
			 $this->con->query($query3);
			header("Location:view-transaction.php?msg=Transaction was created successfully&type=success");

		}else{
			header("Location:view-transaction.php?msg=Error creating Transaction&type=error");
		}
	}


	

	public function updateAdmin($post)
	{
		
		$email=$this->cleanse($post['email']);
		$password=$this->cleanse($post['password']);
		$query="UPDATE login SET email='$email',password='$password' WHERE email='$email' ";
		$sql=$this->con->query($query);
		if ($sql==true) {
			header("Location:profile.php?msg=Account was updated successfully&type=success");
		}else{
			header("Location:profile.php?msg=Error updating account try again!&type=error");
		}
	}




	public function displayProfile($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM login where email='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return "No found records";
		}
	}



//Empty Table
	public function emptyTable($table,$url) 
	{ 
		$id = $this->cleanse($id);
		$query = "TRUNCATE {$table}";

		$result = $this->con->query($query);

		if ($result == true) {
			header("Location:$url?msg=Data was successfully deleted&type=success");
		} else {
			header("Location:$url?msg=Error deleting data&type=error");
		}
	}



//Delete Items
	public function delete($id, $table,$url) 
	{ 
		$id = $this->cleanse($id);
		$query = "DELETE FROM {$table} WHERE id = $id";

		$result = $this->con->query($query);

		if ($result == true) {
			header("Location:$url?msg=Data was successfully deleted&type=success");
		} else {
			header("Location:$url?msg=Error deleting data&type=error");
		}
	}
	

	public function deleteTwoTable($email,$table,$table2,$url) 
	{ 
		$email = $this->cleanse($email);
		$query = "DELETE FROM {$table} WHERE email= '$email'";
		$query2 = "DELETE FROM {$table2} WHERE email= '$email'";

		$result = $this->con->query($query);

		if ($result == true) {
			header("Location:$url?msg=Data was successfully deleted&type=success");
			$this->con->query($query2);
		} else {
			header("Location:$url?msg=Error deleting Data&type=error");
		}
	}


//Search
	public function displaySearch($value)
	{
	//Search box value assigning to $Name variable.
		$Name = $this->cleanse($value);
		$query = "SELECT * FROM product WHERE pid LIKE '%$Name%'";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return false;
		}
	}



	public function cleanse($str)
	{
   #$Data = preg_replace('/[^A-Za-z0-9_-]/', '', $Data); /** Allow Letters/Numbers and _ and - Only */
		$str = htmlentities($str, ENT_QUOTES, 'UTF-8'); /** Add Html Protection */
		$str = stripslashes($str); /** Add Strip Slashes Protection */
		if($str!=''){
			$str=trim($str);
			return mysqli_real_escape_string($this->con,$str);
		}
	}




	

	public function greeting()
	{
      //Here we define out main variables 
		$welcome_string="Welcome!"; 
		$numeric_date=date("G"); 

 //Start conditionals based on military time 
		if($numeric_date>=0&&$numeric_date<=11) 
			$welcome_string="Good Morning!,"; 
		else if($numeric_date>=12&&$numeric_date<=17) 
			$welcome_string="Good Afternoon!,"; 
		else if($numeric_date>=18&&$numeric_date<=23) 
			$welcome_string="Good Evening!,"; 

		return $welcome_string;

	}



}

?>

