<?php 


	require 'function.php';

	if(addData($_POST) > 0) {
		echo "
			<script>
				alert('artikel berhasil ditambah')
				document.location.href = '../index.php'
			</script>
		";
	} else {
		echo "
			<script>
				alert('gagal menambah artikel')
				document.location.href = '../index.php'
			</script>
		";
	}


?>