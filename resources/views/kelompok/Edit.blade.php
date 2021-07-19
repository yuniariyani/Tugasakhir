

 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Edit Anggota kelompok Tani</h3>
              </div>

              <!-- /.card-header -->

                 <div class="card-body">
                 
                    <form action="{{ url('update-anggota', $peg->id) }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" id="nama_petani" name="nama_petani" class="form-control" placeholder="Nama Petani" value="{{$peg -> nama_petani}}">
                        </div>
                        <div class="form-group">
                            <input type="text" id="nohp" name="nohp" class="form-control" placeholder="No.HP" value="{{$peg -> nohp}}">
                        </div>
                        <div class="form-group">
                            <input type="text" id="jabatan" name="jabatan" class="form-control" placeholder="Jabatan" value="{{$peg -> jabatan}}">
                        </div>
                        <div class="form-group">
                            <input type="text" id="nama_kelompok" name="nama_kelompok" class="form-control" placeholder="Nama Kelompok" value="{{$peg -> nama_kelompok}}">
                       
                        
                        <div class="form-group">
                            <input type="text" id="wilayah_lahan" name="wilayah_lahan" class="form-control" placeholder="Luas Blok" value="{{$peg -> wilayah_lahan}}">
                        </div>

                        <div class="form-group">
                            <input type="text" id="alamat_lahan_contoh" name="alamat_lahan_contoh" class="form-control" placeholder="Luas Blok" value="{{$peg -> alamat_lahan_contoh}}">
                        </div>
                       
                       
                       
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm"> Ubah Data </button>
                        </div>

                    </form>
               
              </div>
              <!-- /.card-body -->
            </div>
