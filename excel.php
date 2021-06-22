<?php
//membuat koneksi
include('koneksi.php');
require 'vendor/autoload.php'; // require file autoload.php dari folder vendor
//menggunakan phpOffice phpSpreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

//membuat Spreadsheet baru
$spreadsheet = new Spreadsheet();
//membuat variable sheet
$sheet = $spreadsheet->getActiveSheet();
// mengisi judul kolom pada spreadsheet
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Id Sewa');
$sheet->setCellValue('C1', 'Kategori');
$sheet->setCellValue('D1', 'Nama Produk');
$sheet->setCellValue('E1', 'Nama Pelanggan');
$sheet->setCellValue('F1', 'No. KTP');
$sheet->setCellValue('G1', 'Jenis Kelamin');
$sheet->setCellValue('H1', 'No. Telepon');
$sheet->setCellValue('I1', 'Alamat');
$sheet->setCellValue('J1', 'Ukuran');
$sheet->setCellValue('K1', 'Tanggal Sewa');
$sheet->setCellValue('L1', 'Tanggal Kembali');

foreach (range('A', $spreadsheet->getActiveSheet()->getHighestDataColumn()) as $col) {
    $spreadsheet->getActiveSheet()
                ->getColumnDimension($col)
                ->setAutoSize(true);
} 

//query sql untuk memasukan data
$query = mysqli_query($koneksi, "SELECT * FROM detail_sewa");
$i = 2;
$no = 1;
while($row = mysqli_fetch_array($query)){
    $sheet->setCellValue('A'.$i, $no++);
    $sheet->setCellValue('B'.$i, $row['id_sewa']);
    $sheet->setCellValue('C'.$i, $row['kategori']);
    $sheet->setCellValue('D'.$i, $row['nama_produk']);
    $sheet->setCellValue('E'.$i, $row['nama_user']);
    $sheet->setCellValue('F'.$i, $row['no_ktp']);
    $sheet->setCellValue('G'.$i, $row['jenkel']);
    $sheet->setCellValue('H'.$i, $row['no_telp']);
    $sheet->setCellValue('I'.$i, $row['alamat']);
    $sheet->setCellValue('J'.$i, $row['ukuran']);
    $sheet->setCellValue('K'.$i, $row['tgl_sewa']);
    $sheet->setCellValue('L'.$i, $row['tgl_kembali']);
    $i++;
}

// mengatur style pada border spreadsheet
$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];

//menampilkan border
$i = $i - 1;
$sheet->getStyle('A1:L'.$i)->applyFromArray($styleArray);

//membuat file Xlsx dengan nama Laporan Persewaan Ann's Clothing.xlsx
$writer = new Xlsx($spreadsheet);
$writer->save('Laporan Persewaan Anns Clothing.xlsx');

echo "<script> alert('Excel telah berhasil didownload') </script>";
header("location:report.php");
?>