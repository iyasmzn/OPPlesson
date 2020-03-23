<?php 
	namespace CRUD_OOP;

	class Database 
	{
		public $server	= "localhost";
		public $user	= "root";
		public $pass	= 'iyasmzn7';
		public $db 		= "latihan_OOP_CRUD";
		public $connect;

// menghubungkan ke database
		public function __construct(){
			$this->connect = mysqli_connect($this->server, $this->user, $this->pass, $this->db);

			// if($connect){
			// 	echo "You're success to connect";
			// } else {
			// 	echo "Failed to connect";
			// }

			if(mysqli_connect_error()){
				echo "You're failed to connecting";
			}

			// $this->connect = $connect;
		}

// menampilkan data
		public function show_data() {
			// $sql	= "SELECT * FROM users";
			$result	= mysqli_query($this->connect, 'SELECT * FROM users');
			while($row = mysqli_fetch_array($result)) {
				$data[] = $row;
			}
			return $data;
		}

// memasukkan data
		public function insert_data($name, $password, $email)
		{
			mysqli_query($this->connect, "INSERT INTO users (name, password, email) VALUES ('$name', '$password', '$email')");
		}

// mengambil id 
		public function get_by_id($id_users)
		{
			$query = mysqli_query($this->connect,"SELECT * FROM users where id='$id_users'");
			return $query->fetch_array();
		}

// edit data
		public function update_data($name, $password, $email, $id_users)
		{
			mysqli_query($this->connect, "UPDATE users SET name='$name', password='$password', email='$email' WHERE id='$id_users'");
		}

// menghapus data
		public function delete($id)
		{
			mysqli_query($this->connect, "DELETE FROM users WHERE id='$id'");
		}

	}
 ?>