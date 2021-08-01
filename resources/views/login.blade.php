<!DOCTYPE html>
<html lang="en">
    <style type="text/css">
   .satu {
   font-size: 100%;
   }
   .dua {
   font-size: 16px;
   }
   .tiga {
   font-size: 70%;
   }
   span {
   font-size: 80%;
   color: blue;
   }
   

   body{
       background-image: url('cekk.jpg');
       background-size: 100%;
       background-color: rgba(0,0,0,0.5) !important;"
       
       
   }
   
</style>
    <head>
       
        <title>Login Agrikita</title>
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
            crossorigin="anonymous"></script>
    </head>
    <body class="bg-success">
        <div id="">
            <div id="">
                <main>
                    <div class="container">
                        <br>
                        <div class="d-flex justify-content-center" >
                            <div class="col-lg-4  mt-5 p-4" style="background-color: rgba(0,0,0,0.5) !important;"  >
                                <div class=" border-2 ">
                                    {{-- Error Alert --}}
                                    @if(session('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{session('error')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif
                                    <br>
                                    <div class="card-title" >
                                        <h3 class="text-center font-weight my-4" style="color:#FFFFFF"  ><b><h3>WELCOME<h3></b></h3>
                                          <h9 class="text-center tiga">Balai Penyuluhan Pertanian Mamuju</h9>
                                    </div>
                                    <div class="card-body mb-0" style="background-color: rgba(0,0,0,0.7) !important;" >
                                        <form action="{{url('proses_login')}}" method="POST" id="logForm">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                @error('login_gagal')
                                                    {{-- <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span> --}}
                                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                        {{-- <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span> --}}
                                                        <span class="alert-inner--text"><strong>Warning!</strong> {{ $message }}</span>
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    @enderror
                                                <label class="small mb-1" style="color:#FFFFFF" for="inputEmailAddress">Username</label>
                                                <input
                                                    class="form-control py-4"
                                                    id="inputEmailAddress"
                                                    name="username"
                                                    type="text"
                                                    placeholder="Masukkan Username"/>
                                                @if($errors->has('username'))
                                                <span class="error">{{ $errors->first('username') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" style="color:#FFFFFF" for="inputPassword">Password</label>
                                                <input
                                                    class="form-control py-4"
                                                    id="inputPassword"
                                                    type="password"
                                                    name="password"
                                                    placeholder="Masukkan Password"/>
                                                @if($errors->has('password'))
                                                <span class="error">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                              <div
                                                class="form-group d-flex align-items-center justify-content-between mt-3 mb-0">
                                    
                                                <button class="btn btn-success btn-block" type="submit">Login</button>
                                            </div>
                                          
                                        </form>
                                    </div>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

        </div>
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
        <script src="{{url('assets/js/scripts.js')}}"></script>
    </body>
</html>