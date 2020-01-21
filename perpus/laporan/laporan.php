<?php

    $konek = mysqli_connect('localhost', 'root', '', 'perpus');
    $sql = mysqli_query($konek, "SELECT * FROM view_transaksi");


    $content = '
    <page>
        <div style="padding-top: 4mm; padding-bottom: 4mm; border: 1px solid;" align="center">
                <span>Laporan Transaksi</span><br>
                <span>SISTEM INFORMASI PERPUSTAKAAN</span><br>
                <span>UIN ALAUDDIN MAKASSSAR</span>
        </div>

        <hr><br>

        <table align="center" cellpadding="2" cellspacing="2" border="1" style="border-collapse: collapse;">
            <tr style="text-align: center; background-color: green;">
                <th style="padding: 8px 19px;">No</th>
                <th style="padding: 8px 10px; width:30px;">Kode Peminjaman</th>
                <th style="padding: 8px 19px;">Tanggal Peminjaman</th>
                <th style="padding: 8px 19px;">Kode Buku</th>
                <th style="padding: 8px 19px;">Judul Buku</th>
                <th style="padding: 8px 19px;">Nama Anggota</th>
                <th style="padding: 8px 19px;">Tanggal Kembali</th>
                <th style="padding: 8px 19px;">Tanggal Dikembalikan</th>
                <th style="padding: 8px 19px;">Denda</th>
            </tr>';
             $no=1;
            while ($row = mysqli_fetch_array($sql)) {
                $content .= '

                <tr style="text-align: center;"">
                    <td>'.$no.'</td>
                    <td>'.$row['kd_pinjam'].'</td>
                    <td>'.$row['tgl_pinjam'].'</td>
                    <td>'.$row['kd_buku'].'</td>
                    <td>'.$row['judul_buku'].'</td>
                    <td>'.$row['nama_anggota'].'</td>
                    <td>'.$row['tgl_kembali'].'</td>
                    <td>'.$row['tgl_di_kembalikan'].'</td>
                    <td>'.$row['denda'].'</td>
                    
                </tr>
                ';
                $no++;
            }

        $content .= '
            </table>


    </page>

    ';

    require_once('../assets/report/html2pdf.class.php');
    $html2pdf = new HTML2PDF('L', 'A4', 'en');
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('laporanTransaksi.pdf');

?>
