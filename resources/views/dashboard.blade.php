@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <section class="row box-1">
        <div class="col-md-6 offset-md-3">
            <header>
                <h3>Upload de Projeto</h3>
            </header>

            <form action="{{ route('document.create') }}" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="doc">File (only .zip)</label>
                    <input type="file" name="doc" id="doc" class="form-control-file">
                    <br>
                    
                    <button type="submit" class="btn btn-primary">Upload File</button>
                    <input type="hidden" value="{{ Session::token() }}" name="_token">
                </div>            

            </form>

        </div>
    </section>    
@endsection