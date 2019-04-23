@extends('layouts.web')
@section('content')
<header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading" class="prim_tlt"><i>{{$categoria->name}}</i></h1>  
            </div>
        </div>
</header>

<descripcion></descripcion>


@stop
@push('style')
<link href="/css/categoria_productos.css" rel="stylesheet">
@endpush