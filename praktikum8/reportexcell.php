<?php
include('koneksi.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'jp');
$sheet->setCellValue('B1', 'tanggalmasuksekolah');
$sheet->setCellValue('C1', 'nis');
$sheet->setCellValue('D1', 'npu');
$sheet->setCellValue('E1', 'paud');
$sheet->setCellValue('F1', 'tk');
$sheet->setCellValue('G1', 'skhun');
$sheet->setCellValue('H1', 'ijazah');
$sheet->setCellValue('I1', 'hobi');
$sheet->setCellValue('J1', 'cita');
$sheet->setCellValue('K1', 'namalengkappribadi');
$sheet->setCellValue('L1', 'jk');
$sheet->setCellValue('M1', 'nisn');
$sheet->setCellValue('N1', 'nik');
$sheet->setCellValue('O1', 'tanggallahir');
$sheet->setCellValue('P1', 'tempatlahir');
$sheet->setCellValue('Q1', 'agama');
$sheet->setCellValue('R1', 'bk');
$sheet->setCellValue('S1', 'alamatjalan');
$sheet->setCellValue('T1', 'rt');
$sheet->setCellValue('U1', 'rw');
$sheet->setCellValue('V1', 'namadusun');
$sheet->setCellValue('W1', 'kelurahan');
$sheet->setCellValue('X1', 'kecamatan');
$sheet->setCellValue('Y1', 'kodepos');
$sheet->setCellValue('Z1', 'tt');
$sheet->setCellValue('AA1', 'mt');
$sheet->setCellValue('AB1', 'hp');
$sheet->setCellValue('AC1', 'telepon');
$sheet->setCellValue('AD1', 'emailpribadi');
$sheet->setCellValue('AE1', 'kip');
$sheet->setCellValue('AF1', 'nokip');
$sheet->setCellValue('AG1', 'kewarganegaraan');
$sheet->setCellValue('AH1', 'asing');
$sheet->setCellValue('AI1', 'namaayah');
$sheet->setCellValue('AJ1', 'tahunlahirayah');
$sheet->setCellValue('AK1', 'pendidikanayah');
$sheet->setCellValue('AL1', 'pekerjaanayah');
$sheet->setCellValue('AM1', 'penghasilanayah');
$sheet->setCellValue('AN1', 'bkayah');
$sheet->setCellValue('AO1', 'namaibu');
$sheet->setCellValue('AP1', 'tahunlahiribu');
$sheet->setCellValue('AQ1', 'pendidikanibu');
$sheet->setCellValue('AR1', 'pekerjaanibu');
$sheet->setCellValue('AS1', 'penghasilanibu');
$sheet->setCellValue('AT1', 'bkibu');
$sheet->setCellValue('AU1', 'tanggaldibuat');

$query = mysqli_query($conn, "select * from tb_form");
$i = 2;
$no = 1;
while($row = mysqli_fetch_array($query))
{
    $sheet->setCellValue('A'.$i, $no++);
    $sheet->setCellValue('A'.$i, $row['jp']);
    $sheet->setCellValue('B'.$i, $row['tanggalmasuksekolah']);
    $sheet->setCellValue('C'.$i, $row['nis']);
    $sheet->setCellValue('D'.$i, $row['npu']);
    $sheet->setCellValue('E'.$i, $row['paud']);
    $sheet->setCellValue('F'.$i, $row['tk']);
    $sheet->setCellValue('G'.$i, $row['skhun']);
    $sheet->setCellValue('H'.$i, $row['ijazah']);
    $sheet->setCellValue('I'.$i, $row['hobi']);
    $sheet->setCellValue('J'.$i, $row['cita']);
    $sheet->setCellValue('K'.$i, $row['namalengkappribadi']);
    $sheet->setCellValue('L'.$i, $row['jk']);
    $sheet->setCellValue('M'.$i, $row['nisn']);
    $sheet->setCellValue('N'.$i, $row['nik']);
    $sheet->setCellValue('O'.$i, $row['tanggallahir']);
    $sheet->setCellValue('P'.$i, $row['tempatlahir']);
    $sheet->setCellValue('Q'.$i, $row['agama']);
    $sheet->setCellValue('R'.$i, $row['bk']);
    $sheet->setCellValue('S'.$i, $row['alamatjalan']);
    $sheet->setCellValue('T'.$i, $row['rt']);
    $sheet->setCellValue('U'.$i, $row['rw']);
    $sheet->setCellValue('V'.$i, $row['namadusun']);
    $sheet->setCellValue('W'.$i, $row['kelurahan']);
    $sheet->setCellValue('X'.$i, $row['kecamatan']);
    $sheet->setCellValue('Y'.$i, $row['kodepos']);
    $sheet->setCellValue('Z'.$i, $row['tt']);
    $sheet->setCellValue('AA'.$i, $row['mt']);
    $sheet->setCellValue('AB'.$i, $row['hp']);
    $sheet->setCellValue('AC'.$i, $row['telepon']);
    $sheet->setCellValue('AD'.$i, $row['emailpribadi']);
    $sheet->setCellValue('AE'.$i, $row['kip']);
    $sheet->setCellValue('AF'.$i, $row['nokip']);
    $sheet->setCellValue('AG'.$i, $row['kewarganegaraan']);
    $sheet->setCellValue('AH'.$i, $row['asing']);
    $sheet->setCellValue('AI'.$i, $row['namaayah']);
    $sheet->setCellValue('AJ'.$i, $row['tahunlahirayah']);
    $sheet->setCellValue('AK'.$i, $row['pendidikanayah']);
    $sheet->setCellValue('AL'.$i, $row['pekerjaanayah']);
    $sheet->setCellValue('AM'.$i, $row['penghasilanayah']);
    $sheet->setCellValue('AN'.$i, $row['bkayah']);
    $sheet->setCellValue('AO'.$i, $row['namaibu']);
    $sheet->setCellValue('AP'.$i, $row['tahunlahiribu']);
    $sheet->setCellValue('AQ'.$i, $row['pendidikanibu']);
    $sheet->setCellValue('AR'.$i, $row['pekerjaanibu']);
    $sheet->setCellValue('AS'.$i, $row['penghasilanibu']);
    $sheet->setCellValue('AT'.$i, $row['bkibu']);
    $sheet->setCellValue('AU'.$i, $row['tanggaldibuat']);
    $i++;
}

$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];
$i = $i - 1;
$sheet->getStyle('A1:AT'.$i)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Siswa OKe Boss.xlsx');
