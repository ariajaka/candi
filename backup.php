<?php
// //hosting
// $host ='localhost';
// //username mysql/mariadb/sejenisnya
// $user ='root';
// //password mysql/mariadb/sejenisnya
// $pass ='';
// //lokasi peyimpanan backup file
// $drive = 'backup/';
// //database yang tidak ingin di backup
// $lewati = array('mysql', 'information_schema','test','performance_schema','phpmyadmin');
// //Proses Di Mulai
// $conn=mysqli_connect($host,$user,$pass);
// if (mysqli_connect_errno())
// {echo "Koneksi Gagal: " . mysqli_connect_error();}
// $goummi = null;$ummigo=0;$hitung = time();
// $sql = 'show databases';
// $hasil = mysqli_query($conn,$sql);
// if(!$hasil){die('Tidak dapat menemukan database: '. mysqli_connect_error());}
// $db = array();
// while ($row = mysqli_fetch_assoc($hasil)) {$db[] = $row['Database'];}
// foreach($db as $database) {
// if(in_array($database, $lewati)) {continue;}
// exec("c:/xampp/mysql/bin/mysqldump --complete-insert --create-options --add-locks --disable-keys --extended-insert --quick --quote-names -u $user --password=$pass $database -c>{$drive}/$database.sql 2>&1", $goummi, $hasil);
// if($hasil){echo("Error $lokasi: $hasil");}$ummigo=$ummigo+1;}
// echo('Database yang di proses '.$ummigo.'</br> Dalam Tempo: '.(time() - $hitung).' detik.'); 


backup_tables('localhost','root','','surat');

/* backup the db OR just a table */
function backup_tables($host,$user,$pass,$name,$tables = '*')
{
	
	$link = mysql_connect($host,$user,$pass);
	mysql_select_db($name,$link);
	
	//get all of the tables
	if($tables == '*')
	{
		$tables = array();
		$result = mysql_query('SHOW TABLES');
		while($row = mysql_fetch_row($result))
		{
			$tables[] = $row[0];
		}
	}
	else
	{
		$tables = is_array($tables) ? $tables : explode(',',$tables);
	}
	
	//cycle through
	foreach($tables as $table)
	{
		$result = mysql_query('SELECT * FROM '.$table);
		$num_fields = mysql_num_fields($result);
		
		@$return.= 'DROP TABLE '.$table.';';
		$row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
		$return.= "\n\n".$row2[1].";\n\n";
		
		for ($i = 0; $i < $num_fields; $i++) 
		{
			while($row = mysql_fetch_row($result))
			{
				$return.= 'INSERT INTO '.$table.' VALUES(';
				for($j=0; $j < $num_fields; $j++) 
				{
					$row[$j] = addslashes($row[$j]);
					$row[$j] = str_replace("\n","\\n",$row[$j]);
					if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
					if ($j < ($num_fields-1)) { $return.= ','; }
				}
				$return.= ");\n";
			}
		}
		$return.="\n\n\n";
	}
	
	//save file
	$handle = fopen('backup/db-backup-'.time().'-'.(md5(implode(',',$tables))).'.sql','w+');
	fwrite($handle,$return);
	fclose($handle);

	header('location:index.php');
}
?>