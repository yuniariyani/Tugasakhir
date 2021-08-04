

 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Edit Komoditas kelompok Tani</h3>
              </div>

              <!-- /.card-header -->

                 <div class="card-body">
                 
                    <form action="{{ url('update-komoditas', $pug->id) }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                        <select class="form-control select2" name="relation_group_id" id="relation_group_id" placeholder="Nama Kelompok">

                        <option disabled value>Pilih kelompok</option>
                            @foreach ($hun as $item)
                        <option value="{{$item->id}}"> {{$item->nama_kelompok}} </option>
                            @endforeach
                        </select>
                       </div>

                        <div class="form-group">
                            <input type="text" id="nama_blok" name="nama_blok" class="form-control" placeholder="Nama Blok" value="{{$pug -> nama_blok}}">
                        </div>
                        <div class="form-group">
                            <input type="text" id="luas_blok" name="luas_blok" class="form-control" placeholder="Luas Blok" value="{{$pug -> luas_blok}}">
                        </div>

                         <div class="form-group">
                            <input type="text" id="komoditas" name="komoditas" class="form-control" placeholder="Nama Komoditas" value="{{$pug -> komoditas}}">
                        </div>
                         <div class="form-group">
                            <input type="date" id="tanggal_tanam" name="tanggal_tanam" class="form-control" placeholder="Tanggal Tanam" value="{{$pug -> tanggal_tanam}}">
                        </div>

 
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm"> Ubah Data </button>
                        </div>

                    </form>
               
                </div>
              <!-- /.card-body -->
            </div>

