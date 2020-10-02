@extends('layouts.app')
<style>
div a
{
    color: black;
}
.col-md-8
{
    padding-top:50px;
}
</style>
@section('content')
    <div class="container">
        <div class="">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1>Profile</h1>
                    </div>
                    <div class="card-body">
                        <h5>Nama : {{ Auth::user()->name }}</h5>
                        <h5>Email : {{ Auth::user()->email }}</h5>
                        <button>Change</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection