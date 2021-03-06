@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
    
                    <div class="card-body">
                        <form action="{{url('inventaris') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                    <label>tanggal</label>
                                    <input type="date" name="tanggal" class="form-control">
                                </div>
                            <div class="form-group">
                                <label>jumlah</label>
                                <input type="number" name="jumlah" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection