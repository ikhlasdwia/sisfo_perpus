 <!DOCTYPE html>
    <html>
    <head>
      <title></title>
    </head>
    <body>
    <!-- page content -->
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Cari!</button>
                    </span>
                  </div>
                </div>   
            <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <td><h2>Data Pengembalian</h2></td> 
                    <td>&nbsp;</td>
                    <td><small>
                      <a href="<?php
                          echo base_url('pengembalian/form_pengembalian');?>" button type="submit" class="btn btn-success"> Input Pengembalian</button></a>
                      </small></td>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <p>Daftar Pengembalian Buku UINAM-LIBRARY</p>
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action" id="hapus">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">No </th>
                            <th class="column-title">Kode Peminjaman </th>
                            <th class="column-title">Tanggal Pinjam </th>
                            <th class="column-title">Kode Buku </th>
                            <th class="column-title">Judul Buku </th>
                            <th class="column-title">Nama Anggota </th>
                            <th class="column-title">Tanggal Kembali </th>
                            <th class="column-title">Tanggal Dikembalikan </th>
                            <th class="column-title">Denda </th>
                            <th class="column-title">Aksi </th>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        <tbody>
                          <?php
                            $no=1;
                            foreach ($pengembalian as $index) {

                              echo "<tr>
                                <td>$no</td>
                                <td>$index->kd_pinjam</td>
                                <td>$index->tgl_pinjam</td>
                                <td>$index->kd_buku</td>
                                <td>$index->judul_buku</td>
                                <td>$index->nama_anggota</td>
                                <td>$index->tgl_kembali</td>
                                <td>$index->tgl_di_kembalikan</td>
                                <td>$index->denda</td>
                                <td>
                                  <a href=".base_url('pengembalian/edit_pengembalian/'.$index->kd_pinjam).">Edit</a>
                                  <a href=".base_url('pengembalian/hapus_pengembalian/'.$index->kd_pinjam).">Hapus</a>
                                </td>
                                </td>
                              <tr>";
                              $no++;
                            }
                          ?>
                        </tbody>
                      </table>
                    </div>
    </body>
    </html>