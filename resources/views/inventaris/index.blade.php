@extends('layouts.master')
@section('title')
    
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <a href="{{ url('inventaris/create') }}" class="btn btn-warning mb-3">create new</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>tanggal</th>
                                    <th>jumlah</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inventaris as $item)
                                <tr>
                                    <td>{{ $row++ }}</td>
                                    <td>{{ $item->name}}</td>
                                    <td>{{ $item->tanggal}}</td>
                                    <td>{{ $item->jumlah}}</td>
                                    <td>
                                        <form action="{{ url('inventaris', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        <div class="buttons">
                                            <a href="{{ url('inventaris/'. $item->id. '/edit') }}" class="btn btn-primary btn-sm">edit</a><br>
                                            <button type="submit" class="btn btn-danger btn-sm">delete</button>
                                        </div>
                                    </form>
                            </td>
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection