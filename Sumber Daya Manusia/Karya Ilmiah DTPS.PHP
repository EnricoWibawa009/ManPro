<html>
    <body>
        <?php 
//Connect Database
include "Kinerja Dosen.php";
include 'connection.php';
include "style.html";

// PARAM DENGAN SQLSRV (DELETE)
// settype($NamaDosen, "String");
// settype($JudulArtikel, "String");
// settype($JumlahSitasi, "integer");
// $procedure_params = array(
//     array($NamaDosen, SQLSRV_PARAM_OUT),
//     array($JudulArtikel, SQLSRV_PARAM_OUT),
//     array($JumlahSitasi, SQLSRV_PARAM_OUT)
// );
// $param = array($NamaDosen,$JudulArtikel,$JumlahSitasi);

$query = "EXEC dbo.Tabel3b5_KaryaIlmiahDisitasi";
$noCount = sqlsrv_query($conn,"SET NOCOUNT ON");
$stmt = sqlsrv_query($conn,$query);

// FETCH ARRAY
//Table Header
echo "<table>";
echo "<tr>";
    echo "<th>No</th>";
    echo "<th>Nama Dosen</th>";
    echo "<th>Judul Artikel";
    echo "<th>Jumlah Sitasi</th>";
echo "</tr>";
$nomor=1;

//Table Content
while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
  echo "<tr>";
      echo "<td>" . $nomor . "</td>";
      echo "<td>" . $row['NamaDosen'] . "</td>";
      echo "<td>" . $row['JudulArtikel'] . "</td>";
      echo "<td>" . $row['JumlahSitasi'] . "</td>";
  echo "</tr>";
  $nomor++;
}
echo "</table>";


?>
        </div>
        </div>
        <br>
        <div class="">
            <a href="Grafik/Grafik Karya Ilmiah DTPS.php" target="_blank">Tampilkan Grafik Karya ilmiah DTPS yang disitasi dalam 3 tahun terakhir</a> 
        </div>
    </body>
</html>

<script>
    var x = document.getElementById("change1");
    x.innerHTML = "Karya ilmiah DTPS yang disitasi dalam 3 tahun terakhir";
</script>