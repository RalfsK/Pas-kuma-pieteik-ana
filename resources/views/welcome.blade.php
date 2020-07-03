@extends('layout')
@section('title','RVT pasakumi')
@section('asideLeft')
    <form  method="POST" action="/gramatvediba/filiales">
        {{ csrf_field() }}
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <label for="">Pasākuma nosaukums:</label>
                </div>
                <div class="col-md-12">
                    <input type="text" class="form-control" id="" aria-describedby="" placeholder="" name="pasakuma_nosaukums">
                </div>
            </div>
            <div class="form_button">
                <button type="submit" class="btn btn-primary" >Pieteikuma saglabāšana</button>
            </div>
        </div>
    </form>
@stop
