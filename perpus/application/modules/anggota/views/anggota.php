<!DOCTYPE html>
    <html>
    <head>
      <title></title>
    </head>
    <body-->
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
                    <td><h2>Data Anggota</h2></td> 
                    <td>&nbsp;</td>
                    <td><small>
                      <a href="<?php
                          echo base_url('anggota/tambah_anggota');?>" button type="submit" class="btn btn-success"> Tambah Anggota</button></a>
                    </small></td>
                    
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <p>Daftar Anggota UINAM-LIBRARY</p>
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">No. </th>
                            <th class="column-title">Id </th>
                            <th class="column-title">Nama </th>
                            <th class="column-title">Jenis Kelamin </th>
                            <th class="column-title">Fakultas </th>
                            <th class="column-title">Alamat </th>
                            <th class="column-title">Foto</th>
                            <th class="column-title">Aksi </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                          </tr>
                        </thead>
                        <tbody>

                          <?php
                            $no=1;
                            foreach ($anggota as $index) {
                              
                              echo "<tr>
                                <td>$no</td>
                                <td>$index->id_anggota</td>
                                <td>$index->nama_anggota</td>
                                <td>$index->jk_anggota</td>
                                <td>$index->fak_anggota</td>
                                <td>$index->alamat_anggota</td>
                                <td><img src=".base_url('assets/image/upload/'.$index->foto_upload)." width=\"70px\"></td>
                                <td>
                                  <a href=".base_url('anggota/edit_anggota/'.$index->id_anggota).">Edit</a>
                                  <a href=".base_url('anggota/hapus_anggota/'.$index->id_anggota).">Hapus</a>
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