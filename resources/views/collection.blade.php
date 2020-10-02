@extends('layouts.app')

@section('content')

    @foreach($reads as $read)
        <div class="container">
            <div class="">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h1>{{$read->book_name}}</h1>
                        </div>
                        <div class="card-body">
                            <h5>Tahun :{{$read->book_year}}</h5>
                            <h5>Kategori :{{$read->book_category}}</h5>
                            <button>Pinjam</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
