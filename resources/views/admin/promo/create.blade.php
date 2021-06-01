@extends('layouts.master')
@section('title')
            dashboard attendance
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">

            <div class="col-md-12">
              <div class="card">

                <div class="card-header card-header-primary">

                  <h4 class="card-title ">ajoute

            <form  action="{{url('/promo')}}" method="post" >
                {{ csrf_field() }}

                <div class="form-group" >
                    <label >Année :</label>
                    <input type="text" name="annee" class="form-control">
                    @if($errors->get('annee'))
                    @foreach ($errors ->get('annee') as $message )
                        <li> {{$message}}</li>
                    @endforeach
                    @endif


                </div>
                   <br/>
                   <div class="form-group">

                    <input type="submit"  class="form-control btn btn-primary" value="Enregistrer ">
                </div>
            </form>
        </div>
    </div>
</div>


</div>
</div>
</div>


@endsection
