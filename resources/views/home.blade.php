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
    @foreach($expenses as $expense)
    <tr>
        <td>{{ $expense->description }}</td>
        <td>{{ $expense->amount }}</td>
        <td class="expenseDate">{{ $expense->date }}</td>
        <td><a href="{{ route('gasto.edit', ['gasto' => $expense->id]) }}"><button type="button" class="btn btn-primary text-uppercase">modificar</button></a></td>
    </tr>
    @endforeach
    
</table>

@section('script')
<script src="{{ asset('js/dateFormat.js') }}"></script>
@endsection

@endsection