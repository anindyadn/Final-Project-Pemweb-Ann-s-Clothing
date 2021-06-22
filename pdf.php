<?php
//membuat koneksi
include ('koneksi.php');
// require file autoload.inc.php dari folder dompdf
require_once ("dompdf/autoload.inc.php");
//menggunakan dompdf
use Dompdf\Dompdf;

//membuat dompdf baru
$dompdf = new Dompdf();

//query sql untuk mengambil data pada database
$query = mysqli_query($koneksi, "SELECT * FROM detail_sewa");

//membuat isi judul kolom pada pdf
$html = '<center> <h3> Laporan Persewaan Ann Clothing </h3> </center> <br>';

$html = '<table border="1" width="100%">
            <tr>
            <th> No </th>
            <th> Id Sewa </th>
            <th> Kategori </th>
            <th> Nama Produk </th>
            <th> Nama Pelanggan </th>
            <th> No. KTP </th>
            <th> Jenis Kelamin </th>
            <th> No. Telepon </th>
            <th> Alamat </th>
            <th> Ukuran </th>
            <th> Jumlah Sewa </th>
            <th> Tanggal Sewa </th>
            <th> Tanggal Kembali </th>
            </tr>';
$no = 1;

//memasukan data dari database ke pdf
while($row = mysqli_fetch_array($query)){
    $html .= " <tr> 
                <td> " .$no. " </td>
                <td> " .$row['id_sewa']. " </td>
                <td> " .$row['kategori']. " </td>
                <td> " .$row['nama_produk']. " </td>
                <td> " .$row['nama_user']. " </td>
                <td> " .$row['no_ktp']. " </td>
                <td> " .$row['jenkel']. " </td>
                <td> " .$row['no_telp']. " </td>
                <td> " .$row['alamat']. " </td>
                <td> " .$row['ukuran']. " </td>
                <td> " .$row['jumlah_sewa']. " </td>
                <td> " .$row['tgl_sewa']. " </td>
                <td> " .$row['tgl_kembali']. " </td>
                </tr> ";
    $no++;
}

$html .= "</html>";
$dompdf -> loadHtml($html);
//Setting ukuran dan orientasi kertas
$dompdf -> setPaper('A4', 'landscape');
//Rendering dari HTML ke PDF
$dompdf -> render();
//Melakukan output file PDF
$dompdf -> stream('laporan_persewaan.pdf');
?>