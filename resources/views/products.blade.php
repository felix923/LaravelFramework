@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">products</div>

                <div class="panel-body">
                    displayed products are shown here
                </div>
                <form action="" class="inline-control">
                <div class="form-control">
                 <label for="">Enter your first products</label>
                 <input type="text" class="form-control">
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
