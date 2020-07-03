@extends('layout')
@section('title',"Pasakuma pieteikšana")
@section('script')
    <script>
        $(document).ready(function() {
            $("#show").click(function () {
                $('#add').modal('show');
            })
        });
    </script>
@stop

@section('asideLeft')
    <form  method="POST" action="/gramatvediba/filiales">
        {{ csrf_field() }}
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <label for="">Pasākuma nosaukums:</label>
                </div>
                <div class="col-md-12">
                    <input type="text" class="form-control" id="" aria-describedby="" placeholder="" name="pasakuma_">
                </div>
            </div>
            <div class="form_button">
                <button type="submit" class="btn btn-primary" >Saglabāt</button>
            </div>
        </div>
    </form>
@stop
@section('asideLeft')
    <form  method="POST" action="/gramatvediba/filiales">
        {{ csrf_field() }}
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <label for="">Datums no::</label>
                </div>
                <div class="col-md-12">
                    <input type="text" class="form-control" id="" aria-describedby="" placeholder="" name="filiales_nosaukums">
                </div>
            </div>
            <div class="form_button">
                <button type="submit" class="btn btn-primary" >Saglabāt</button>
            </div>
        </div>
    </form>
@stop
