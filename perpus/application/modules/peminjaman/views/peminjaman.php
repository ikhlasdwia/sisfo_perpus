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
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>   
            <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <td><h2>Data Peminjaman</h2></td> 
                    <td>&nbsp;</td>
                    <td><small>
                      <a href="<?php
                          echo base_url('peminjaman/form_peminjaman/');?>" button type="submit" class="btn btn-success"> Input Data Peminjaman</button></a>
                      </small></td>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <p>Daftar Peminjaman Buku UINAM-LIBRARY</p>
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">No </th>
                            <th class="column-title">Kode Peminjaman </th>
                            <th class="column-title">Tanggal Pinjam </th>
                            <th class="column-title">Kode Buku </th>
                            <th class="column-title">Judul Buku </th>
                            <th class="column-title">Nama Anggota </th>
                            <th class="column-title">Tanggal Kembali </th>
                            <th class="column-title">Aksi </th>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            $no=1;
                            foreach ($peminjaman as $index) {

                              echo "<tr>
                                <td>$no</td>
                                <td>$index->kd_pinjam</td>
                                <td>$index->tgl_pinjam</td>
                                <td>$index->kd_buku</td>
                                <td>$index->judul_buku</td>
                                <td>$index->nama_anggota</td>
                                <td>$index->tgl_kembali</td>
                                <td>
                                  <a href=".base_url('peminjaman/edit_peminjaman/'.$index->kd_pinjam).">Edit</a>
                                  <a href=".base_url('peminjaman/hapus_peminjaman/'.$index->kd_pinjam).">Hapus</a>
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