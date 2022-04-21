<?php 

	$db = mysqli_connect("localhost", "root", "", "website_artikel");
	// getData
	/*
	pada proses ini terjadi pemanggilan data pada index.php
	*/ 
	function getData($query){
		global $db;

		$rows = [];
		$result = mysqli_query($db, $query);

		while($row = mysqli_fetch_assoc($result)){
			$rows[] = $row;
		}

		return $rows;
	}

	// tambah data
	/*
	pada fungsi ini dilakukan tindakan tambah data
	input : menerima inputan data yang dikirimkan halaman add_artikel
			yang berisi data yang dikirimkan oleh variabel POST.
	output : berupa nilai boolean yang memberi tanda proses berhasil 
				penambahan data yang nilainya true apabila berhasil dan bernilai false
				apabila penambahan data tidak berhasil.
	*/
	function addData($data){

		global $db;

		$judul = $data["judul"];
		$isi = $data["isi"];
		$date = $data["date"];

		$query = "INSERT INTO artikel VALUES ('', '$judul', '$isi', '$date')";

		mysqli_query($db, $query);

		var_dump(mysqli_error($db));

		return mysqli_affected_rows($db);
	}

	// hapus data
	/*
	pada fungsi ini dilakukan tindakan hapus data
	input : menerima inputan data yang dikirimkan halaman delete
			yang berisi data yang dikirimkan oleh variabel GET.
	output : berupa nilai boolean yang memberi tanda proses berhasil 
				penghapusan data yang nilainya true apabila berhasil dan bernilai false
				apabila penghapusan data tidak berhasil.
	*/
	function delete($id){

		global $db;

		mysqli_query($db, "DELETE FROM artikel WHERE id = $id");

		return mysqli_affected_rows($db);

	}

	



?>

