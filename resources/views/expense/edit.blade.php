@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{ route('gasto.update', ['gasto' => $expense->id]) }}" method="post">
            @csrf
            @method('PUT')
              <div class="form-group">
                <label for="descriptionInput">Descripción</label>
                <input type="text" name="descriptionInput" class="form-control" id="descriptionInput" placeholder="Ejemplo: compra de videojuegos en Steam" value="{{ $expense->description }}">
              </div>
              <div class="form-group">
                <label for="amountInput">Monto</label>
                <input type="text" class="form-control" name="amountInput" id="amountInput" placeholder="Ejemplo: 999.999,99$" maxlength="11" value="{{ $expense->amount }}">
              </div>
              <div class="form-group">
                <label for="dateInput">Fecha</label>
                <input type="date" class="form-control" name="dateInput" id="dateInput" value="{{$expense->date}}">
              </div>
              <button type="submit" class="btn btn-success">GUARDAR</button>
            </form>

        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/dateFormat.js') }}"></script>
@endsection