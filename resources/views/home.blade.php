@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <a href="{{ route('gasto.create')}}"><button type="button" class="btn btn-success text-uppercase mb-2 boton">agregar nuevo gasto</button></a>
        </div>
    </div>
</div>

<table id="table">
    <tr class="text-capitalize table__tr">
        <th class="table__th-head">descripción</th>
        <th class="table__th-head">gastado</th>
        <th class="table__th-head">fecha</th>
        <th class="table__th-head">opciones</th>
    </tr>
    <tr>
        <td>Jill</td>
        <td>Smith</td>
        <td>50</td>
        <td><button type="button" class="btn btn-primary text-uppercase">modificar</button></td>
    </tr>
    <tr>
        <td>Jill</td>
        <td>Smith</td>
        <td>50</td>
        <td><button type="button" class="btn btn-primary text-uppercase">modificar</button></td>
    </tr>
    <tr>
        <td>Jill</td>
        <td>Smith</td>
        <td>50</td>
        <td><button type="button" class="btn btn-primary text-uppercase">modificar</button></td>
    </tr>
    
</table>

@endsection