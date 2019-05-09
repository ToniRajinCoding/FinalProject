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
                    
                    <div>
                        <ul class="pentol" style="list-style: none;"> 
                        <li><a href="">artikel 1</a></li>
                        <li><a href="">artikel 2</a></li>
                        <li><a href="">artikel 3</a></li>

                    </div></ul>
                       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
