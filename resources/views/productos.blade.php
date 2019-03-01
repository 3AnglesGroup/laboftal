@extends('layouts.web')
@section('content')
 <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading" class="prim_tlt">PRODUCTOS</h1>
            </div>
        </div>
    </header>
 
    <productos></productos>
@stop
@push('style')
<link href="css/productos.css" rel="stylesheet">
@endpush
