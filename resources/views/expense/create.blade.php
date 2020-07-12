@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">

            <form action="{{ route('gasto.store') }}" method="post">
            @csrf
              <div class="form-group">
                <label for="descriptionInput">Descripción</label>
                <input type="text" name="descriptionInput" class="form-control" id="descriptionInput" placeholder="Ejemplo: compra de videojuegos en Steam">
              </div>
              <div class="form-group">
                <label for="amountInput">Monto</label>
                <input type="text" class="form-control" name="amountInput" id="amountInput" placeholder="Ejemplo: 999.999,99$" maxlength="11">
              </div>
              <div class="form-group">
                <label for="dateInput">Fecha</label>
                <input type="date" class="form-control" name="dateInput" id="dateInput" max="7/5/2020">
              </div>
              <button type="submit" class="btn btn-primary">CREAR</button>
            </form>

        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    
    // SCRIPT FOR FORMATTING AMOUNT INPUT

    var amountInput = document.getElementById('amountInput');

    amountInput.addEventListener('click',function(){
        console.log('asd');
    });

</script>
@endsection