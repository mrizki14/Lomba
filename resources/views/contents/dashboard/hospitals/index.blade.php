@extends('templates.pages')
 
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12 margin-tb mb-3">
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('hospitals.create') }}"> Create New Product</a>
                </div>
            </div>
        </div>
       
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
       
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Lokasi</th>
                <th>Keahlian</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($hospitals as $d)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->lokasi }}</td>
                <td>{{ $d->keahlian_penyakit }}</td>
                <td>
                    <form action="{{ route('hospitals.destroy',$d->id) }}" method="POST">
       
                        <a class="btn btn-info" href="{{ route('hospitals.show',$d->id) }}">Show</a>
                        <a class="btn btn-primary " href="{{ route('hospitals.edit',$d->id) }}">Edit</a>
                        <a class="btn btn-warning " href="{{ route('galery',$d->id) }}">+Galery</a>
                       
       
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger w-0 ">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
  
    {!! $hospitals->links() !!}
      
@endsection