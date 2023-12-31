<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Surat Pengantar | Log in</title>

  {{-- <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> --}}
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <style>
    
    table{
      height: 100%;
      width: 100%;
    }
    table, tr, td {
      
    }
    body { 
      width: 100%;
      background-image: url("../../dist/img/pilah.jpg")
    }
    .login-box {
      background: white;
      box-sizing: border-box;
      height: 100%;
      margin-left: 20%;
    }
    .logo-amandok {
      margin-left: 20%;
    }
    .table2{
      
    }
    table2, th, td {
      padding: 8px 40px;
    }
  </style>
</head>
<body class="hold-transition login-page">
    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }} 
        
          <a href="https://wa.me/6282316567767" class="alert-link"><i class="fab fa-whatsapp"></i></a>
       
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
<table>
<tr>
  <td>
      <div class="logo-amandok">
          <img src="../../dist/img/aman dok login.png" height="150">
      </div>
  </td>
<td>
<div class="login-box" >
  <div class="login-logo">
    <a><b>SURAT</b> PENGANTAR</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <form action="{{ route('proseslogin') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
          <input type="nip" class="form-control @error('nip') is-invalid @enderror" placeholder="NIP" name="nip" id="nip" autofocus required value="{{old('nip')}}">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" required>
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        
          <!-- /.col -->

          <div class="col-4">
           <a><button type="submit" class="btn btn-primary btn-block">Sign In</button></a>
            </div>
          <!-- /.col -->
        </div>
      </form>

      
    </div>
    <!-- /.login-card-body -->
  </div>
</td>
<!-- /.login-box -->
</tr>
</table>
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
</body>
</html>
