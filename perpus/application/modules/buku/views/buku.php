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
                    <td><h2>Data Buku</h2></td> 
                    <td>&nbsp;</td>
                    <td><small>
                      <a href="<?php
                          echo base_url('buku/tambah_buku');?>" button type="submit" class="btn btn-success"> Tambah Buku</button></a>
                    </small></td>
                    
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <p>Daftar Koleksi Buku UINAM-LIBRARY</p>
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">No </th>
                            <th class="column-title">Kode Buku </th>
                            <th class="column-title">Judul </th>
                            <th class="column-title">Pengarang </th>
                            <th class="column-title">Tahun Terbit </th>
                            <th class="column-title">Penerbit</th>
                            <th class="column-title">Foto </th>
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
                            foreach ($buku as $index) {

                              echo "<tr>
                                <td>$no</td>
                                <td>$index->kd_buku</td>
                                <td>$index->judul_buku</td>
                                <td>$index->pengarang_buku</td>
                                <td>$index->thn_terbit</td>
                                <td>$index->penerbit_buku</td>
                                <td><img src=".base_url('assets/image/upload/'.$index->foto_upload)." width=\"70px\"></td>
                                <td>
                                  <a href=".base_url('buku/edit_buku/'.$index->kd_buku).">Edit</a>
                                  <a href=".base_url('buku/hapus_buku/'.$index->kd_buku).">Hapus</a>
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