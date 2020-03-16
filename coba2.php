<?php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Penjumlahan Nilai Mahasiswa</title><link rel="stylesheet"
href="bootstrap.min.css"
integrity="sha384-
MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
crossorigin="anonymous">

</head>
<body class="container-fluid" style="margin: 40px 80px">
	<form name="form-1" method="POST">
		<h2><center>Jumlah</center></h2>
        <br> ID :<input type="text" name="id" placeholder="Gabisa diisi" readonly><br>
		Nilai 1 : <input type="number" name="a"><br>
		Nilai 2 : <input type="number" name="b"><br>
        ket : <input type="text" name="ket" placeholder="Gabisa diisi" readonly><br>
		<input type="submit" name="submit" value="submit">
		<input type="submit" name="hitung" value="hitung">

        </form>
        <form method="GET" action="">
        <input type="submit" name="tampil" value="tampil">
        <input type="submit" name="reset" value="reset">
		
                </form>
                <?php
if(isset($_GET['reset'])){
$del = mysqli_query($koneksi, "DELETE FROM jumlah");
}
?>    
 <?php
if(isset($_GET['reset'])){
$del = mysqli_query($koneksi, "DELETE FROM jumlahbiasa");
}
?>    
		<?php
		if(isset($_POST['submit'])){
			$a=$_POST['a'];
			$b=$_POST['b'];
			$c=$a+$b;

			if($c>=8){
				$ket='A';
			} elseif($c>=6){
				$ket='B';
			}elseif($c>=4) {
				$ket='C';

			} elseif($c>=2) {
				$ket='D';

			}
			for($i=0;$i<=10;$i++){
				
				$c=$a+$b;
				if($c>=8){
					$ket='A';
			} elseif($c>=6){
				$ket='B';
			}elseif($c>=4) {
				$ket='C';

			} elseif($c>=2) {
				$ket='D';
				}
				$sql = mysqli_query($koneksi, "INSERT INTO jumlah (a, b, c,ket) VALUES('$a', '$b', '$c','$ket')") or die(mysqli_error($koneksi));
				$a=$b;
				$b=$c;
			}
			/*echo "<br><input type='text' value=$c>";*/
		}

		?>
		

	<br>
	<table border="3">
		<thead>
		<tr>
			<td width   >No</td>
			<td>Nilai 1</td>
			<td>Nilai 2</td>
			<td>Hasil Penjumlahan</td>
			<td>Keterangan</td>
            <td> Fitur </td>
		</tr>
	</thead>
	<tbody>
    <?php
if (isset($_GET['tampil'])){
//query ke database SELECT tabel mahasiswa urut berdasarkan idyang paling besar
$sql = mysqli_query($koneksi,
"SELECT * FROM jumlah



") or die(mysqli_error($koneksi));
//jika query diatas menghasilkan nilai > 0 maka menjalankan script dibawah if...
if(mysqli_num_rows($sql) > 0){
//membuat variabel $no untuk menyimpan nomor urut
$no = 1;
//melakukan perulangan while dengan dari dari query $sql
while($data = mysqli_fetch_assoc($sql)){
//menampilkan data perulangan
echo '
<tr>
<td>'.$no.'</td>
<td>'.$data['a'].'</td>
<td>'.$data['b'].'</td>
<td>'.$data['c'].'</td>
<td>'.$data['ket'].'</td>
<td> <a href="delete.php?id='.$data['id'].'" class="badge badge-danger" onclick="return confirm(\'Yakin ingin
menghapus data ini?\')">Delete</a>
</td>
</tr>
';
$no++;
}
//jika query menghasilkan nilai 0
}else{
echo '
<tr>
<td colspan="6">Tidak ada data.</td>
</tr>
';
}

}
?>
   </tbody>
	</table>
<br>
	<table border="3">
		<thead>
		<tr>
			<td width   >No</td>
			<td>Nilai 1</td>
			<td>Nilai 2</td>
			<td>Hasil Penjumlahan</td>
			<td>Keterangan</td>
            <td> Fitur </td>
		</tr>
	</thead>
	<tbody>
    <?php
if (isset($_GET['tampil'])){
//query ke database SELECT tabel mahasiswa urut berdasarkan idyang paling besar
$sql = mysqli_query($koneksi,
"SELECT * FROM jumlahbiasa



") or die(mysqli_error($koneksi));
//jika query diatas menghasilkan nilai > 0 maka menjalankan script dibawah if...
if(mysqli_num_rows($sql) > 0){
//membuat variabel $no untuk menyimpan nomor urut
$no = 1;
//melakukan perulangan while dengan dari dari query $sql
while($data = mysqli_fetch_assoc($sql)){
//menampilkan data perulangan
echo '
<tr>
<td>'.$no.'</td>
<td>'.$data['a'].'</td>
<td>'.$data['b'].'</td>
<td>'.$data['c'].'</td>
<td>'.$data['ket'].'</td>
<td> <a href="delete.php?id='.$data['id'].'" class="badge badge-danger" onclick="return confirm(\'Yakin ingin
menghapus data ini?\')">Delete</a>
</td>
</tr>
';
$no++;
}
//jika query menghasilkan nilai 0
}else{
echo '
<tr>
<td colspan="6">Tidak ada data.</td>
</tr>
';
}

}
?>
   </tbody>
	</table>
    
	<?php
		if(isset($_POST['submit'])){
			$a=$_POST['a'];
			$b=$_POST['b'];
			$c=$a+$b;

			if($c>=8){
				$ket='A';
			} elseif($c>=6){
				$ket='B';
			}elseif($c>=4) {
				$ket='C';

			} elseif($c>=2) {
				$ket='D';

			}
			$sql = mysqli_query($koneksi, "INSERT INTO jumlahbiasa (a, b, c,ket) VALUES('$a', '$b', '$c','$ket')") or die(mysqli_error($koneksi));
		}
		?>

</body>
</html>