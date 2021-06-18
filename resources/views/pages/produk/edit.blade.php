@extends('app')
@section('title','edit pelanggan')


@section('content')
<div class="row">

    <div class="col-md-2  mt-5">
    </div>
    <div class="col-md-8  mt-5">
        <form class="form" method="POST" action="{{route('pelanggan.update',$data->id)}}">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" class="form-control" value="{{$data->name}}">
            </div>
            <div class="form-group">
                <label for="email">Email </label>
                <input type="email" class="form-control" name="email" value="{{$data->email}}">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" name="alamat">{{$data->alamat}}</textarea>
            </div>
            
        
            <button type="submit" class="btn btn-primary">update</button>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
               delete
              </button>
        </form>
    
    </div>
    <div class="col-md-2  mt-5">
    </div>
</div>

<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah Kamu Ingin Menghapus</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            
            {{$data->name}}

        </div>
        <div class="modal-footer">
        
          <a href="{{route('pelanggan.destroy',$data->id)}}" class="btn btn-danger"> hapus</a>
        </div>
      </div>
    </div>
  </div>
  


  
    
@endsection