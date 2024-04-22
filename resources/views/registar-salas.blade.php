@extends('layout')
@section('title', 'Desafio Front End - Registar Salas')
@section('content')
    <div class="col py-3 p-4">
        <h3 class="text-center">Registar Sala</h3>
        <div class="container">
            @include('msg.system')
            @include('msg.user')

            <form action="{{ route('registar.salas') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="designacao">Designação da Sala</label>
                            <input type="text" class="form-control" id="designacao" name="designacao"
                                placeholder="Ex: Salas de Aula Teóricas">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="funcionais">Funcionais</label>
                            <input type="number" class="form-control" id="funcionais" name="funcionais" min="0"
                                oninput="this.value = Math.abs(this.value)">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="NaoFuncionais">Não Funcionais</label>
                            <input type="number" class="form-control" id="NaoFuncionais" name="NaoFuncionais"
                                min="0" oninput="this.value = Math.abs(this.value)">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="NumeroTotalShow">Número total</label>
                            <input type="number" class="form-control" id="NumeroTotalShow" name="NumeroTotalShow" disabled
                                min="0" oninput="this.value = Math.abs(this.value)">
                            <input type="hidden" class="form-control" id="NumeroTotal" name="NumeroTotal" min="0"
                                oninput="this.value = Math.abs(this.value)">
                        </div>
                    </div>
                    <div class="col-sm-12 d-flex justify-content-center p-4">
                        <button type="submit" class="btn btn-primary">Registar Sala</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#funcionais, #NaoFuncionais').on('input', function() {
                var funcionais = parseInt($('#funcionais').val()) || 0;
                var naoFuncionais = parseInt($('#NaoFuncionais').val()) || 0;
                var numeroTotal = funcionais + naoFuncionais;
                $('#NumeroTotalShow').val(numeroTotal);
                $('#NumeroTotal').val(numeroTotal);
            });
        });
    </script>


@endsection
