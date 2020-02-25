@extends('layout')

@section('content')
<?php
$i = 0;
?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Category</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Name</th>
            <th>Quanlity</th>
            <th>Decription</th>
        </tr>
        @foreach ($product as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->quanlity }}</td>
            <td>{{ $item->decription }}</td>
        </tr>
        @endforeach
    </table>
@endsection