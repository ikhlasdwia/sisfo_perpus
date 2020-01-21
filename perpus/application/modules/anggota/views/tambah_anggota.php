    <!DOCTYPE html>
    <html>
    <head>
      <title></title>
    </head>
    <body>
      <!-- page content -->

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registrasi Anggota</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form method="post" action="<?php echo base_url().'Anggota/aksi_tambah_anggota';?>" class="form-horizontal form-label-left" enctype="multipart/form-data" novalidate>

                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Id Anggota<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="text" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" id="id_anggota" name="id_anggota" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Anggota<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nama_anggota" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="radio" name="jk_anggota" value="Laki-laki"/>Laki-laki
                          <input type="radio" name="jk_anggota" value="Perempuan"/>Perempuan<br/>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fakultas Anggota<span class="required">*</span> 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="text" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" id="fak_anggota" name="fak_anggota" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Alamat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="textarea" required="required" name="alamat_anggota" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fileToUpload">Upload Foto <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="fileToUpload" type="file" name="foto_upload" />
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <input id="send" type="submit" class="btn btn-success" name="simpan" value="Simpan" />
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
    </body>
    </html>