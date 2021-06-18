@extends('app')
@section('title','pelanggan')

@section('content')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
    {{session('sukses')}}
</div>
@endif

    <div class="row mt-2">
        <div class="col-md-6 mt-2 mb-5">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                Tambah
            </button>
        </div>
        <div class="col-md-6"></div>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($data as $item )

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->alamat}}</td>
                <td><a href="{{route('pelanggan.edit',$item->id)}}" class="btn btn-warning">edit</a></td>
            </tr>   

            @endforeach
        </tbody>
    </table>


    <!-- Modal Tambah Pelanggan -->

    <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Buat Pelanggan Baru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form class="form" method="POST" action="{{route('pelanggan.store')}}">
                @csrf
                <div class="form-group">
                  <label for="name">Nama</label>
                  <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email </label>
                  <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea type="text" class="form-control" name="alamat"></textarea>
                </div>
                
              
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('pelanggan')}}" class="btn btn-danger">close</a>
              </form>
        </div>     
      </div>
    </div>
  </div>
  


@endsection

@push('custom_js')

<script>
    $(document).ready(function() {
        window.setTimeout(function() {
            $(".alert.alert-success").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 1500);
    });    
</script>
    
@endpush