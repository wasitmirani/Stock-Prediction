
@extends('layouts.adminapp')
@section('content')


        <div class="container">


            <div class="row" >
                <div class="col-sm-10">
                <form action="{{ url('/store') }}" method="post"  >
                 @csrf
                     <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Company name') }}</label>

                            <div class="col-md-6">
                    <input type="text" class="form-control" name="comp">
                        </div>
                    </div>
                     <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('open value') }}</label>

                            <div class="col-md-6">
                    <input type="text" class="form-control" name="open">
                </div>
            </div> 
            <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('close value') }}</label>
                            <div class="col-md-6">
                    <input type="text" class="form-control" name="close">
                </div>
            </div>
            <div class="form-group row">

                 <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>
                <div class="col-md-6">
                    <input type="submit" class="btn btn-primary" name="submit" value="submit">
                </div>
            </div>

                </form>
            </div>
            </div>
            
        </div>
    
@endsection