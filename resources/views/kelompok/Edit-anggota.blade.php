

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
                        <select class="form-control select2" name="relation_group_id" id="relation_group_id" placeholder="Nama Kelompok">

                        <option disabled value>Pilih kelompok</option>
                            @foreach ($hin as $item)
                        <option value="{{$item->id}}"> {{$item->nama_kelompok}} </option>
                            @endforeach
                        </select>
                       </div>

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
                            <button type="submit" class="btn btn-success btn-sm"> Ubah Data </button>
                        </div>

                    </form>
               
              </div>
              <!-- /.card-body -->
            </div>
