<?php 
	Class DBConfig
	{

        private $Server="localhost";
        private $DBUser="root";
        private $DBPassword="";
        public $Database="tshirtlab";
        public $con="";

		
		public function __construct()
		{
			try
			{
				$this->con=mysqli_connect($this->Server, $this->DBUser,$this->DBPassword,$this->Database) or die('Cannot connect to the database because: '.mysqli_connect_error());
                //mysqli_set_charset($this->Conn,"utf8");
                if(!mysqli_select_db($this->con,$this->Database))
				{
					die('Can not connecto to the Database'.mysqli_error($this->con));
				}
			}
			catch(Exception $ex)
			{
				echo $ex->message.mysqli_connect_error();
			}
		}

		public function safeParameters($array)
		{
			$output = array();
			foreach($array as $key=>$value)
			{
				if(is_array($value)){
					$value = $this->safeParameters($value);
					$output[$key] = $value;
				}
				else {
                    $output[$key] = mysqli_real_escape_string($this->Conn, trim($value));
                }
			}
			return $output;
		}
		
	}
?>
