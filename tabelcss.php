<!DOCTYPE html>
<html lang="id">
<head>
<title>Table Data Mahasiswa</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
 
<?php
//Index Numeric
$nama = array('Imam','Nunu','Zay');
//Index String
$jk = array('L' => 'Laki-Laki', 'P' => 'Perempuan');
//Multi Dimensi
$mhs = array('web' => array('Nurul Imam', 'Web'),
            'mm' => array('Nunu Nufus', 'Multimedia')
            );
?>
 
<table class="zebra">
<thead>
<tr>
<th>No</th>
<th>Nama</th>
<th>Jenis Kelamin</th>
<th>Konsentrasi</th>
</tr>
</thead>
<tbody>
<tr>
    <td>1</td>
    <td><?php echo $mhs['web']['0'];?></td>
    <td><?php echo $jk['L'];?></td>
    <td><?php echo $mhs['web']['1'];?></td>
</tr>
<tr>
    <td>2</td>
    <td><?php echo $mhs['mm']['0'];?></td>
    <td><?php echo $jk['P'];?></td>
    <td><?php echo $mhs['mm']['1'];?></td>
</tr>
<tr>
    <td>3</td>
    <td><?php echo $mhs['web']['0'];?></td>
    <td><?php echo $jk['L'];?></td>
    <td><?php echo $mhs['web']['1'];?></td>
</tr>
<tr>
    <td>4</td>
    <td><?php echo $mhs['mm']['0'];?></td>
    <td><?php echo $jk['P'];?></td>
    <td><?php echo $mhs['mm']['1'];?></td>
</tr>
</tbody>
</table>
</body>
</html>