@extends('layouts.app', ["current" => "licitacoes"])

@section('content')


<div class="container">
    <div class="row justify-content">
        <div class="col col-12">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('licitacao') }}">Licitações</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Exibir Licitações</li>
                </ol>
            </nav>
        </div>

        <div class="col col-12">
            <div class="card mb-3">
                <div class="card-body">
                    <form action="{{ route('licitacoes') }}" method="GET">
                        <div class="row">
                            <div class="col col-3">
                                <div class="form-group">
                                    <label for="uf">Estado</label>
                                    <select class="form-control" id="uf" name="uf">

                                        @if($filtro->getUf() == "AC")
                                        <option selected="selected" value="AC">Acre</option>
                                        @else
                                        <option value="AC">Acre</option>
                                        @endif

                                        @if($filtro->getUf() == "AL")
                                        <option selected="selected" value="AL">Alagoas</option>
                                        @else
                                        <option value="AL">Alagoas</option>
                                        @endif

                                        @if($filtro->getUf() == "AP")
                                        <option selected="selected" value="AP">Amapá</option>
                                        @else
                                        <option value="AP">Amapá</option>
                                        @endif

                                        @if($filtro->getUf() == "AM")
                                        <option selected="selected" value="AM">Amazonas</option>
                                        @else
                                        <option value="AM">Amazonas</option>
                                        @endif

                                        @if($filtro->getUf() == "BA")
                                        <option selected="selected" value="BA">Bahia</option>
                                        @else
                                        <option value="BA">Bahia</option>
                                        @endif

                                        @if($filtro->getUf() == "CE")
                                        <option selected="selected" value="CE">Ceará</option>
                                        @else
                                        <option value="CE">Ceará</option>
                                        @endif

                                        @if($filtro->getUf() == "DF")
                                        <option selected="selected" value="DF">Distrito Federal</option>
                                        @else
                                        <option value="DF">Distrito Federal</option>
                                        @endif

                                        @if($filtro->getUf() == "ES")
                                        <option selected="selected" value="ES">Espírito Santo</option>
                                        @else
                                        <option value="ES">Espírito Santo</option>
                                        @endif

                                        @if($filtro->getUf() == "GO")
                                        <option selected="selected" value="GO">Goiás</option>
                                        @else
                                        <option value="GO">Goiás</option>
                                        @endif

                                        @if($filtro->getUf() == "MA")
                                        <option selected="selected" value="MA">Maranhão</option>
                                        @else
                                        <option value="MA">Maranhão</option>
                                        @endif

                                        @if($filtro->getUf() == "MT")
                                        <option selected="selected" value="MT">Mato Grosso</option>
                                        @else
                                        <option value="MT">Mato Grosso</option>
                                        @endif

                                        @if($filtro->getUf() == "MS")
                                        <option selected="selected" value="MS">Mato Grosso do Sul</option>
                                        @else
                                        <option value="MS">Mato Grosso do Sul</option>
                                        @endif

                                        @if($filtro->getUf() == "MG")
                                        <option selected="selected" value="MG">Minas Gerais</option>
                                        @else
                                        <option value="MG">Minas Gerais</option>
                                        @endif

                                        @if($filtro->getUf() == "PA")
                                        <option selected="selected" value="PA">Pará</option>
                                        @else
                                        <option value="PA">Pará</option>
                                        @endif

                                        @if($filtro->getUf() == "PB")
                                        <option selected="selected" value="PB">Paraíba</option>
                                        @else
                                        <option value="PB">Paraíba</option>
                                        @endif

                                        @if($filtro->getUf() == "PR")
                                        <option selected="selected" value="PR">Paraná</option>
                                        @else
                                        <option value="PR">Paraná</option>
                                        @endif

                                        @if($filtro->getUf() == "PE")
                                        <option selected="selected" value="PE">Pernambuco</option>
                                        @else
                                        <option value="PE">Pernambuco</option>
                                        @endif

                                        @if($filtro->getUf() == "PI")
                                        <option selected="selected" value="PI">Piauí</option>
                                        @else
                                        <option value="PI">Piauí</option>
                                        @endif

                                        @if($filtro->getUf() == "RJ")
                                        <option selected="selected" value="RJ">Rio de Janeiro</option>
                                        @else
                                        <option value="RJ">Rio de Janeiro</option>
                                        @endif

                                        @if($filtro->getUf() == "RN")
                                        <option selected="selected" value="RN">Rio Grande do Norte</option>
                                        @else
                                        <option value="RN">Rio Grande do Norte</option>
                                        @endif

                                        @if($filtro->getUf() == "RS")
                                        <option selected="selected" value="RS">Rio Grande do Sul</option>
                                        @else
                                        <option value="RS">Rio Grande do Sul</option>
                                        @endif

                                        @if($filtro->getUf() == "RO")
                                        <option selected="selected" value="RO">Rondônia</option>
                                        @else
                                        <option value="RO">Rondônia</option>
                                        @endif

                                        @if($filtro->getUf() == "RR")
                                        <option selected="selected" value="RR">Roraima</option>
                                        @else
                                        <option value="RR">Roraima</option>
                                        @endif

                                        @if($filtro->getUf() == "SC")
                                        <option selected="selected" value="SC">Santa Catarina</option>
                                        @else
                                        <option value="SC">Santa Catarina</option>
                                        @endif

                                        @if($filtro->getUf() == "SP")
                                        <option selected="selected" value="SP">São Paulo</option>
                                        @else
                                        <option value="SP">São Paulo</option>
                                        @endif

                                        @if($filtro->getUf() == "SE")
                                        <option selected="selected" value="SE">Sergipe</option>
                                        @else
                                        <option value="SE">Sergipe</option>
                                        @endif

                                        @if($filtro->getUf() == "TO")
                                        <option selected="selected" value="TO">Tocantins</option>
                                        @else
                                        <option value="TO">Tocantins</option>
                                        @endif

                                    </select>
                                </div>
                            </div>

                            <div class="col col-3">
                                <div class="form-group">
                                    <label for="municipio">Município</label>
                                    <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Município" value="{{ $filtro->getMunicipio() }}">
                                </div>
                            </div>

                            <div class="col col-3">
                                <div class="form-group">
                                    <label for="palavra_chave">Palavra Chave</label>
                                    <input type="text" class="form-control" id="palavra_chave" name="palavra_chave" placeholder="Palavra Chave" value="{{ $filtro->getPalavra_chave() }}">
                                </div>
                            </div>

                            <div class="col col-3">
                                <div class="form-group">
                                    <label for="tipo">Tipo</label>
                                    <select class="form-control" id="tipo" name="tipo">

                                        @if(is_null($filtro->getTipo()) || $filtro->getTipo() == "")
                                            <option selected="selected" value="">-- Selecione --</option>
                                        @else
                                           <option value="">-- Selecione --</option>
                                        @endif 

                                        @foreach($filtro->getListaTipos() as $row)
                                            @if($filtro->getTipo() == $row->tipo)
                                                <option selected="selected" value="{{ $row->tipo }}">{{ $row->tipo }}</option>
                                            @else                
                                                <option value="{{ $row->tipo }}">{{ $row->tipo }}</option>
                                            @endif
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="col col-3">
                                <div class="form-group">
                                    <label for="data_inicio">De</label>
                                    <input type="date" class="form-control" id="data_inicio" name="data_inicio" value="{{ $filtro->getData_inicio() }}">
                                </div>
                            </div>

                            <div class="col col-3">
                                <div class="form-group">
                                    <label for="data_final">Até</label>
                                    <input type="date" class="form-control" id="data_final" name="data_final" value="{{ $filtro->getData_final() }}">
                                </div>
                            </div>

                            <div class="col col-3">
                                <button type="submit" class="btn btn-primary" style="margin-top: 31px;">Buscar Licitações</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @if(isset($licitacoes) && count($licitacoes) > 0)
        <div class="col col-12">
            <div class="card mb-3">

                <div class="card-body">
                    <div class="row">
                        <div class="col col-12 text-right font-italic font-weight-bold">
                            @if( count($licitacoes) > 1)
                            {{ count($licitacoes) }} Licitações Encontradas
                            @else
                            {{ count($licitacoes) }} Licitação Encontrada
                            @endif
                        </div>
                    </div>

                    <table class="table table-hover display" id="table_licitacoes">
                        <thead>

                        </thead>
                        <tbody>
                            @foreach($licitacoes as $licitacao)
                            <tr>
                                <td>
                                    <strong>{{ $licitacao->id_licitacao }}</strong>
                                    <strong>{{ $licitacao->titulo }} </strong> <br />
                                    <strong>Ôrgão: </strong> {{ $licitacao->orgao}} <br />
                                    <strong>Município: </strong> {{ $licitacao->municipio }} - {{ $licitacao->uf }} <br />
                                    <strong>Data de Abertura: </strong> {{ $licitacao->abertura_datetime}} <br />
                                    <strong>Descrição: </strong> <br />
                                    {{ $licitacao->objeto }} <br />
                                    <strong>Link: </strong> <a href="{{ $licitacao->link }}" target="_black">{{ $licitacao->link }}</a> <br />
                                    <strong>Tipo: </strong> {{ $licitacao->tipo }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>

            </div>


        </div>
        @endif
    </div>
</div>

@endsection