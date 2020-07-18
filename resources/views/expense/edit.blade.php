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
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteExpense">
          Borrar gasto
        </button>
      </form>

    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="deleteExpense" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¿Estas seguro que quieres eliminar este gasto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        El borrado sera permanente.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
        <form action="{{ route('gasto.destroy', ['gasto' => $expense->id]) }}" method="post">
        @csrf
        @method('DELETE')
          <button type="submit" class="btn btn-danger">SI</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/dateFormat.js') }}"></script>
@endsection