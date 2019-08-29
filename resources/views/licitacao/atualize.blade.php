@extends('layouts.app', ['activePage' => 'atualize', 'titlePage' => __('Atualizar Base de Dados')])

@section('content')
<div class="content">
    <div class="container-fluid">

        @if($msg == 200)
        <div class="col col-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Atualização Realizada com Sucesso!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        @elseif($msg == 404)
        <div class="col col-12">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Recurso de API não Encontrado.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        @endif

        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('store') }}" method="GET"  >

                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('Atualizar') }}</h4>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">                                    
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
                                
                                <div class="col-md-6">                                
                                    <button type="submit" class="btn btn-primary">Atualizar</button>                               
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>
@endsection

@push('js')
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();
    });
</script>
@endpush