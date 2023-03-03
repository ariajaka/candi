<?php
include('../config/config.php');
include ('../sql/cetak-surat.php');
require_once "../TCPDF/tcpdf.php";
$bulan =  substr ($tgl_berangkat, 0,2);
if ($bulan == '1' or $bulan == '01') 
{
    $sebut = 'Januari';
}
elseif ($bulan == '2' or $bulan == '02') 
{
    $sebut = 'Februari';
}
elseif ($bulan == '3' or $bulan == '03') 
{
    $sebut = 'Maret';
}
elseif ($bulan == '4' or $bulan == '04') 
{
    $sebut = 'April';
}
elseif ($bulan == '5' or $bulan == '05') 
{
    $sebut = 'Mei';
}
elseif ($bulan == '6' or $bulan == '06') 
{
    $sebut = 'Juni';
}
elseif ($bulan == '7' or $bulan == '07') 
{
    $sebut = 'Juli';
}
elseif ($bulan == '8' or $bulan == '08') 
{
    $sebut = 'Agustus';
}
elseif ($bulan == '9' or $bulan == '09') 
{
    $sebut = 'September';
}
elseif ($bulan == '10' or $bulan == '10')
{
    $sebut = 'Oktober';
}
elseif ($bulan == '11' or $bulan == '11')
{                    
    $sebut = 'November';
}
elseif ($bulan == '12' or $bulan == '12') 
{                    
    $sebut = 'Desember';
};
$bulan1 =  substr ($tgl_kembali, 0,2);
if ($bulan1 == '1' or $bulan1 == '01') 
{
    $sebut1 = 'Januari';
}
elseif ($bulan1 == '2' or $bulan1 == '02') 
{
    $sebut1 = 'Februari';
}
elseif ($bulan1 == '3' or $bulan1 == '03') 
{
    $sebut1 = 'Maret';
}
elseif ($bulan1 == '4' or $bulan1 == '04') 
{
    $sebut1 = 'April';
}
elseif ($bulan1 == '5' or $bulan1 == '05') 
{
    $sebut1 = 'Mei';
}
elseif ($bulan1 == '6' or $bulan1 == '06') 
{
    $sebut1 = 'Juni';
}
elseif ($bulan1 == '7' or $bulan1 == '07') 
{
    $sebut1 = 'Juli';
}
elseif ($bulan1 == '8' or $bulan1 == '08') 
{
    $sebut1 = 'Agustus';
}
elseif ($bulan1 == '9' or $bulan1 == '09') 
{
    $sebut1 = 'September';
}
elseif ($bulan1 == '10' or $bulan1 == '10')
{
    $sebut1 = 'Oktober';
}
elseif ($bulan1 == '11' or $bulan1 == '11')
{                    
    $sebut1 = 'November';
}
elseif ($bulan1 == '12' or $bulan1 == '12') 
{                    
    $sebut1 = 'Desember';
};
if($jumlah_hari == 1)
{
    $hari = 'Selama '.$jumlah_hari.' hari tanggal '.substr($tgl_berangkat, 3,2).' '.$sebut.' '.substr($tgl_berangkat, 6,4).'';
}
else if($jumlah_hari > 1)
{
    $hari = 'Selama '.$jumlah_hari.' hari tanggal '.substr($tgl_berangkat, 3,2).' '.$sebut.' '.substr($tgl_berangkat, 6,4).' s/d '.substr($tgl_kembali, 3,2).' '.$sebut1.' '.substr($tgl_kembali, 6,4).'';
}


if ($level == 1)
{                
    $kepala_balai =  'Plt. Kepala Balai Pengawas Obat dan Makanan <br> di Jambi';
}
else if ($level != 1)
{
    $kepala_balai = 'Plh. Kepala Balai Pengawas Obat dan Makanan <br> di Jambi'; 
}

$bulan3 =  substr ($tgl_st, 0,2);
if ($bulan3 == '1' or $bulan3 == '01') 
{
    $sebut3 = 'Januari';
}
elseif ($bulan3 == '2' or $bulan3 == '02') 
{
    $sebut3 = 'Februari';
}
elseif ($bulan3 == '3' or $bulan3 == '03') 
{
    $sebut3 = 'Maret';
}
elseif ($bulan3 == '4' or $bulan3 == '04') 
{
    $sebut3 = 'April';
}
elseif ($bulan3 == '5' or $bulan3 == '05') 
{
    $sebut3 = 'Mei';
}
elseif ($bulan3 == '6' or $bulan3 == '06')
{
    $sebut3 = 'Juni';
}
elseif ($bulan3 == '7' or $bulan3 == '07')
{
    $sebut3 = 'Juli';
}
elseif ($bulan3 == '8' or $bulan3 == '08') 
{
    $sebut3 = 'Agustus';
}
elseif ($bulan3 == '9' or $bulan3 == '09')
{
  $sebut3 = 'September';
}
elseif ($bulan3 == '10' or $bulan3 == '10')
{
    $sebut3 = 'Oktober';
}
elseif ($bulan3 == '11' or $bulan3 == '11') 
{
    $sebut3 = 'November';
}
elseif ($bulan3 == '12' or $bulan3 == '12')
{
    $sebut = 'Desember';
};
$tgl_tugas = substr($tgl_st, 3,2).' '.$sebut3.' '.substr($tgl_st, 6,4).'';

class PDF extends TCPDF
{
    public function Header(){
        
        // get the current page break margin
        $bMargin = $this->getBreakMargin();
        // get current auto-page-break mode
        $auto_page_break = $this->AutoPageBreak;
        // disable auto-page-break
        $this->SetAutoPageBreak(false, 0);
        
        //font name size style
        $this->SetFont('Times','BU', 14);
        $this->Ln(45);
        //189 total width a4, height, border, line,
        //Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0,
        //$ignore_min_height=false, $calign='T', $valign='M')
        // $this->Cell(182,5,'SURAT TUGAS',0, 1,'C');
        
        // restore auto-page-break status
        $this->SetAutoPageBreak($auto_page_break, $bMargin);
        // set the starting point for the page content
        $this->setPageMark();

    }

    public function footer(){
        // $this->SetFont('Times','I',9);
        // $this->Cell(189, 5, 'Halaman '.$this->getAliasNumPage().' dari '.$this->getAliasNbPages().' Halaman.',
        // 0, false, 'R', 0, '', 0, false, 'T', 'M');
    }
}

// create new PDF document
// $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false, true);
$pdf = new PDF('p', 'mm', 'A4', true, 'UTF-8', false, true);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('BPOM JAMBI');
$pdf->SetTitle('Surat Tugas');
$pdf->SetSubject('');
$pdf->SetKeywords('');


// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 065', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// remove default header/footer
$pdf->setPrintHeader(true);
$pdf->setPrintFooter(true);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT+10, PDF_MARGIN_TOP+20, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
$pdf->SetFont('helvetica', '', 14, '', true);

// Add a page
$pdf->AddPage();

$tbl_st = '<table>
        <tr>
            <td width="100%" style="text-align:center;"><h1><u>SURAT TUGAS</u></h1></td>
        </tr>
        <tr>
            <td width="100%" style="text-align:center;">No. '.$kepala_st.''.$nomor_surat.'</td>
        </tr>
</table>';


$pdf->SetFont('Times','',11);
$pdf->writeHTML($tbl_st, true, false, false, false, ''); 

//isi Surat
$tbl_st = '<table>
        <tr>
            <td width="24%" style="text-align:left;">Menimbang</td>

            <td width="1%" style="text-align:left;">:</td>
            
            <td width="75%" style="text-align:left; cell-padding:100px;"><ol type="a">';
            $sql2 = "SELECT * FROM detail_st_menimbang WHERE id_sk='$id'";
            $query2 = mysql_query($sql2);
            while($data2 = mysql_fetch_array($query2)){
            $menimbang = $data2['menimbang'];
            
                $tbl_st .= '<li>'.$menimbang.'</li>';
            }
            $tbl_st .=
            '</ol></td>
        </tr>
</table>';

$pdf->SetFont('Times','',11);
$pdf->writeHTML($tbl_st, true, false, false, false, ''); 

//isi Surat
$tbl_st = '<table>
        <tr>
            <td width="24%" style="text-align:left;">Dasar</td>

            <td width="1%" style="text-align:left;">:</td>
            
            <td width="75%" style="text-align:left; "><ol type="1">';
            $sql2 = "SELECT * FROM detail_st_dasar WHERE id_sk='$id'";
            $query2 = mysql_query($sql2);
            while($data2 = mysql_fetch_array($query2)){
            $dasar = $data2['dasar'];
            
                $tbl_st .= '<li>'.$dasar.'</li>';
            }
            $tbl_st .=
            '</ol></td>
        </tr>
</table>';

$pdf->SetFont('Times','',11);
$pdf->writeHTML($tbl_st, true, false, false, false, ''); 


//Memberi Perintah
$tbl_st = '<table>
        <tr>
            <td style="text-align:center;">Memberi Perintah :</td>
        </tr>
</table>';


$pdf->SetFont('Times','',11);
$pdf->writeHTML($tbl_st, true, false, false, false, ''); 


//Kepada
$tugas = "SELECT * FROM pegawai, detail_st WHERE `detail_st`.`id_sk` = '$id' and `detail_st`.`petugas_nip` = `pegawai`.`nip` ORDER BY `pegawai`.`level` ASC ";
        $execute = mysql_query($tugas);

$tbl_st = '<table>
        <tr>
            <td width="24%" style="text-align:left;">Kepada</td>

            <td width="1%" style="text-align:left;">:</td>
            <td width="75%" style="text-align:left; "><ol type="1">';
            $sql2 = "SELECT * FROM pegawai, detail_st WHERE `detail_st`.`id_sk` = '$id' and `detail_st`.`petugas_nip` = `pegawai`.`nip` ORDER BY `pegawai`.`level` ASC";
            $query2 = mysql_query($sql2);
            while($data2 = mysql_fetch_array($query2)){
            $nama_petugas = $data2['nama'];
            $nip = $data2['nip'];
            $pangkat = $data2['pangkat'];
            $jabatan = $data2['jabatan'];
            
            if($jabatan != 'PPNPN')
                {
                    $nip_peg = $nip; 
                }
                else 
                {
                    $nip_peg = '-'; 
                }
            if($jabatan != 'PPNPN')
                {
                    $pangkat_peg = $pangkat; 
                }
                else 
                {
                    $pangkat_peg = '-'; 
                }
            
                $tbl_st .= '<li>'.$nama_petugas.', '.$nip_peg.', '.$pangkat_peg.', '.$jabatan.'</li>';
            }
            $tbl_st .=
            '</ol></td>
        </tr>

</table>';

$pdf->SetFont('Times','',11);
$pdf->writeHTML($tbl_st, true, false, false, false, '');  


$tbl_st = '<table>
        <tr>
            <td width="24%" style="text-align:left;">Untuk</td>

            <td width="1%" style="text-align:left;">:</td>
            <td width="4%" style="text-align:left;"></td>
            <td width="75%" style="text-align:left; padding-left:1%;">'.$kegiatan.' '.$hari.', tempat '.$tempat_st.' tujuan '.$tujuan_st.', MAK ';
            $sql2 = "SELECT * FROM detail_st_anggaran a INNER JOIN surat_tugas b ON b.id_sk=a.id_sk WHERE a.id_sk='$id'";
            $query2 = mysql_query($sql2);
            while ($data2 = mysql_fetch_assoc($query2))
            {
                if ($data2['anggaran'] == 'DIPA Balai POM di Jambi')
                {
                    $tbl_st .= $data2["anggaran"].' '.$data2["mak"].' ';
                }        
                else if ($data2['anggaran'] == 'DIPA Pusat')
                {
                    $tbl_st .= 'dan '.$data2["anggaran"].' ';
                }
            }

            $tbl_st .=
            '</td>
        </tr>
</table>';

$pdf->SetFont('Times','',11);
$pdf->writeHTML($tbl_st, true, false, false, false, ''); 
$pdf->Ln(3);

$tbl_st = '<table>
        <tr>
            <td style="text-align:left;">Agar yang bersangkutan melaksanakan tugas dengan baik dan penuh tanggungjawab.</td>
        </tr>
</table>';

$pdf->SetFont('Times','',11);
$pdf->writeHTML($tbl_st, true, false, false, false, '');  

$pdf->SetFont('Times','',11);
$pdf->Ln(5);

$tbl_st = '<table>
        <tr>
            <td width="55%" style="text-align:left;"></td>
            <td width="45%" style="text-align:left;">Jambi, '.$tgl_tugas.'</td>
        </tr>
        <tr>
            <td width="55%" style="text-align:left;"></td>
            <td width="45%" style="text-align:left;">'.$kepala_balai.'</td>
        </tr>
        <tr>
            <td width="65%" style="text-align:left;"></td>
            <td width="35%" style="text-align:left;"></td>
        </tr>
        <tr>
            <td width="65%" style="text-align:left;"></td>
            <td width="35%" style="text-align:left;"></td>
        </tr>
                <tr>
            <td width="65%" style="text-align:left;"></td>
            <td width="35%" style="text-align:left;"></td>
        </tr>
                <tr>
            <td width="65%" style="text-align:left;"></td>
            <td width="35%" style="text-align:left;"></td>
        </tr>
        <tr>
            <td width="55%" style="text-align:left;"></td>
            <td width="45%" style="text-align:left;">'.$nama.'</td>
        </tr>

</table>';

$pdf->SetFont('Times','',11);
$pdf->writeHTML($tbl_st, true, false, false, false, '');  

// ---------------------------------------------------------

// Close and output PDF document
$pdf->Output('Surat_Tugas_BPOM_.pdf', 'I');

//isset session login
?>