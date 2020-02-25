@extends('layout')

@section('content')
<?php
$i = 0;
?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Check all Category</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('categories.create') }}"> Create new Category</a>
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
            <th>ID</th>
            <th>Name</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($categories as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>
                <form action="{{ route('categories.destroy',$item->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('categories.show',$item->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('categories.edit',$item->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure ?') " >Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>



@endsection