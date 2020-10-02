@extends('layouts.app')

@section('content')

    <form action="{{url('create')}}" method="POST">
    @csrf
        <div class="container">
            <div class="">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h1>Add New Book</h1>
                        </div>
                        <div class="card-body">
                        <p>Book Name:</p>
                        <input type="text" name="Name"><br>
                        <p>Book Year</p>
                        <input type="number" name="Year" min="1990" max="2019"><br>
                        <p>Book Category</p>
                        <select name="Category">
                            <option value="comics">Comics</option>
                            <option value="science">Science</option>
                            <option value="sports">Sports</option>
                        </select>
                        <button>Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection