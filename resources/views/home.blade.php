@extends('layout')
@section('title', 'Desafio Front End')
@section('content')


    <div class="col py-3 p-4">
        <h3>Escola [Desafio Front-End]</h3>
        @include('msg.system')
        @include('msg.user')
        <div class="table-responsive">
            <form action="{{ route('escola.atualizar') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <table class="table">
                    <thead style="background: #C4C4C4;">
                        <tr>
                            <th scope="col" class="w-50">Designação</th>
                            <th scope="col" class="w-20">Funcionais</th>
                            <th scope="col" class="w-20">Não Funcionais</th>
                            <th scope="col" class="w-20">Número total</th>
                        </tr>
                    </thead>
                    <tbody style="background: #EAEAEA">

                        @foreach ($salas as $key => $sala)
                            <tr>
                                <td>
                                    <h6>{{ $sala->designacao }}</h6>
                                </td>
                                <td><input type="number" class="form-control funcionais"
                                        name="salas[{{ $sala->id }}][funcionais]" value="{{ $sala->funcionais }}"
                                        @if ($key == 0) disabled @endif min="0"></td>

                                <td><input type="number" class="form-control nao-funcionais"
                                        name="salas[{{ $sala->id }}][nao_funcionais]"
                                        value="{{ $sala->nao_funcionais }}"
                                        @if ($key == 0) disabled @endif min="0"></td>

                                <td>

                                @if ($key != 0)
                                    <input type="hidden" class="form-control numero-total"
                                        name="salas[{{ $sala->id }}][numero_total]" value="{{ $sala->numero_total }}"
                                        @if ($key != 0)  @endif min="0">
                                    <input type="number" class="form-control numero-total-show"
                                        name="salas-show[{{ $sala->id }}][numero_total]"
                                        value="{{ $sala->numero_total }}" @if ($key != 0) disabled @endif
                                        min="0">
                                @else
                                    <input type="hidden" class="form-control numero-total"
                                    name="salas[{{ $sala->id }}][numero_total]" value="1"
                                    @if ($key != 0)  @endif min="0">

                                    <input type="number" class="form-control numero-total-show"
                                        name="salas-show[{{ $sala->id }}][numero_total]"
                                        value="{{ $sala->numero_total }}" @if ($key != 0) disabled @endif
                                        min="0">

                                @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary btn-lg">Actualizar</button>
                </div>
            </form>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.funcionais, .nao-funcionais').on('input', function() {
                var tr = $(this).closest('tr');
                var funcionais = parseInt(tr.find('.funcionais').val()) || 0;
                var naoFuncionais = parseInt(tr.find('.nao-funcionais').val()) || 0;
                var numeroTotal = funcionais + naoFuncionais;
                tr.find('.numero-total-show').val(numeroTotal);
                tr.find('.numero-total').val(numeroTotal);
            });
        });
    </script>

@endsection
