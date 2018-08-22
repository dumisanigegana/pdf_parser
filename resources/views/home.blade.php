@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                    

                    <form enctype="multipart/form-data" method="post" action="{{ route('uploadfile') }}">
                        @csrf
                        <div class="form-group">
                          <label for="fileToUpload">Select a PDF File to extract form data</label><br />
                          <input type="file" class="form-control" name="fileToUpload"/>
                        </div>
                          <input class="btn btn-info" type="submit" />
                        </div>
                    </form>
                    <br>
                       <!-- {{--<hr>
                      <br>
                      <h2>Uploded files</h2>            
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>File Name</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($pdfs as $pdf)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$pdf->name}}</td>
                            <td><button class="btn btn-info">View</button></td>
                          </tr> 
                        @endforeach                         
                        </tbody>
                      </table>--}} -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
