@extends('dashboard.layouts.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-registration w-100 m-auto">
            <form action="/register" method="post">
                @csrf
              <img class="mb-4 center" src="/img/logo.png" alt="" width="72" height="57"> 
              PT. Rifan Financindo Berjangka
              <h1 class="h3 mb-3 fw-normal" style="color: white">Marketing Registration</h1>
              <div class="form-floating mb-2">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name..." required value="{{old('name')}}">
                <label for="name">Name</label>
                @error('name')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
                </div>

              <div class="form-floating mb-2">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username..." required value="{{old('username')}}">
                
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>
              
              @can('user')
              <select class="form-select mb-2" aria-label="Default select example" name = "team_id" id="team_id" style="height:55px;" required value="{{old('team_id')}}">
                <option selected>Pilih Team</option>
                @foreach ($teams as $team)
                <option value="{{$team->id}}">{{$team->nama_team}}</option>
                @endforeach
                
              </select>
              @endcan

              @can('admin')
              <select class="form-select mb-2" aria-label="Default select example" name = "team_id" id="team_id" style="height:55px;" required value="{{old('team_id')}}">
                <option selected>Pilih Team</option>
                @foreach ($teams as $team)
                <option value="{{$team->id}}">{{$team->nama_team}}</option>
                @endforeach
                
              </select>
              @endcan

              @can('superadmin')
              <select class="form-select mb-2" aria-label="Default select example" name = "team_id" id="team_id" style="height:55px;" required value="{{old('team_id')}}">
                <option selected>Pilih Team</option>
                @foreach ($teamsuper as $team)
                <option value="{{$team->id}}">{{$team->nama_team}}</option>
                @endforeach
                
              </select>
              @endcan

              @can('kadiv')
              <select class="form-select mb-2" aria-label="Default select example" name = "team_id" id="team_id" style="height:55px;" required value="{{old('team_id')}}">
                <option selected>Pilih Team</option>
                @foreach ($teamdiv as $team)
                <option value="{{$team->id}}">{{$team->nama_team}}</option>
                @endforeach
                
              </select>
              @endcan

              <div class="mb-2">
                <input type="hidden" id="divisi_id" class="form-control" name="divisi_id" value="" readonly>
              </div>


              
              {{-- <div class="form-floating mb-2">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{old('email')}}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div> --}}
              <div class="form-floating mb-2">
                <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" id="password"  placeholder="Password" name="password" required value="{{old('password')}}">
                
                <label for="password-field">Password</label>
                @error('password')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>
              <input class="checkbox" type="checkbox" onclick="myFunction()" style="color: white"> Show Password
          
              <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
            </form>
          </main>
    </div>
</div>

<script src="/assets/js/jquery-3.7.0.min.js"></script>
<script>
  $(document).ready(function(){
    $('#team_id').on('change', function(){
      var team_id = $(this).val();
    if (team_id) {
      $.ajax({
        url: '/div/' + team_id,
        type: 'GET',
        data : {
          '_token' : '{{csrf_token()}}'
        },
        dataType : 'json',
        success: function(data)
        {
          $('#divisi_id').val(data.divisi_id);
        }
      })
    }
    })
  })
</script>
<script>
  function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  </script>
    
@endsection