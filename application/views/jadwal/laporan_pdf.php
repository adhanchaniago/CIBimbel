<!DOCTYPE html>
<html lang="en"><head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
  padding: 15px;
  
}

table th {
  height: 40px;
  background-color: #4CAF50;
  color: white;
}

.judul {
    text-align: center;
}
</style>
</head><body>
<h3 class="judul"> Jadwal Bimbingan Belajar Neuron Yogyakarta</h3>
<table width="100%" align="center">
        <tr>
            <th width="3%"> No</th>
            <th width="10%"> Kelas </th>
            <th width="40%"> Mata Pelajaran </th>
            <th width="10%"> Hari </th>
            <th width="25%"> Jam </th>
        </tr>

        <?php 
        $no = 1;
        foreach ($jadwal  as $row) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $row['nama_kelas'] ?></td>
            <td><?php echo $row['nama_pelajaran'] ?></td>
            <td><?php echo $row['hari'] ?></td>
            <td>
            
              <?php 
                $date = new DateTime($row['jam_mulai']);
                $date2 = new DateTime($row['jam_sls']);
                echo $date->format('H:i')." - ".$date2->format('H:i')  ?>
            
            </td>
        </tr>
        <?php endforeach; ?>
        </table>

</body></html>