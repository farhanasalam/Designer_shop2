
<?php

	class DbConnection
		{
			var $conn;
			public function __construct()
				{
					$this->conn=mysqli_connect("localhost","root","","designershop") or die("error");
				}
			public function executeQuery($sql)
				{
					$result=mysqli_query($this->conn,$sql);
					return $result;
				}
			public function executeNonQuery($sql)
				{
					try
					{
						mysqli_query($this->conn,$sql);
						return true;
					}
					catch(Exception $e)
					{
						return false;
					}
				}
			public function delMedia($mid)
				{
					try
					{
					@unlink('../Pictures/'.$mid);
						return true;
					}
					catch(Exception $e)
					{
						return false;
					}
				}

			public function disConnect()
			{
				mysqli_close($this->conn);
			}
		}
	?>
