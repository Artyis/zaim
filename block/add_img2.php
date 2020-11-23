<? if( isset( $_POST['my_file_upload'] ) ){
	// ВАЖНО! тут должны быть все проверки безопасности передавемых файлов и вывести ошибки если нужно
		if(($_FILES['file']['type'] == 'image/gif' || $_FILES['file']['type'] == 'image/jpeg' || $_FILES['file']['type'] == 'image/png') && ($_FILES['file']['size'] != 0 and $_FILES['file']['size']<=512000)){
			$error = false;
			$uploaddir = './img/'; // . - текущая папка где находится submit.php

			// cоздадим папку если её нет
			if( ! is_dir( $uploaddir ) ) mkdir( $uploaddir, 0777 );

			$file = $_FILES;
			$done_files = array();

			// переместим файлы из временной директории в указанную
			foreach( $files as $file ){
				$file_name = $file['name'];

				if( move_uploaded_file( $file['tmp_name'], "$uploaddir/$file_name" ) ){
					$done_files[] = realpath( "$uploaddir/$file_name" );
				}
				else {
					$error = true;
				}
			}
		}



	$data = $error ? array('error' => 'Ошибка загрузки файлов.') : array('files' => $files );

	echo json_encode( $data ) ;
}
?>
