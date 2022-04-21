<?php
	
	require 'function.php';

	if(delete($_GET["id"]) > 0){
		echo "
			<script>
				alert('artikel dihapus')
				document.location.href = '../views/pages/produk.php'
			</script>
		";
	} else {
		echo "
			<script>
				alert('artikel dihapus')
				document.location.href = '../views/pages/produk.php'
			</script>
		";
	}


?>