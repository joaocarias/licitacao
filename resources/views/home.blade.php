@extends('layouts.app', ["current" => "home"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col col-12">
            <div class="card">
                <div class="card-header">Licitações</div>

                <div class="card-body">

                    <form>
                        <div class="row">
                            <div class="col col-4">
                                <div class="form-group">

                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col col-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Palavra Chave">
                                </div>
                            </div>

                            <div class="col col-4">
                            <button type="button" class="btn btn-primary">Buscar Por Licitações</button>
                            </div>
                        </div>
                    </form>

                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @if(isset($licitacoes))

                    <table class="table table-hover" id="table_licitacoes">
                        <thead>

                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Descrição</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($licitacoes as $licitacao)
                            <tr>
                                <th scope="row">{{ $licitacao->id_licitacao }}</th>
                                <td>
                                    <strong>{{ $licitacao->titulo }} </strong> <br />
                                    <strong>Ôrgão: </strong> {{ $licitacao->orgao}} <br />
                                    <strong>Município: </strong> {{ $licitacao->municipio }} - {{ $licitacao->uf }} <br />
                                    <strong>Data de Abertura: </strong> {{ $licitacao->abertura_datetime}} <br />
                                    <strong>Descrição</strong> <br />
                                    {{ $licitacao->objeto }} <br />
                                    <strong>LinK: </strong> <a href="{{ $licitacao->link }}" target="_black">{{ $licitacao->link }}</a> <br />
                                    <strong>Tipo: </strong> {{ $licitacao->tipo }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @else
                    <p>error</p>
                    @endif
                </div>

            </div>
        </div>

    </div>
</div>

@endsection