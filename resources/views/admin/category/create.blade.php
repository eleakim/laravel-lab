@extends('layouts.admin')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>CATEGORIAS</h2>
            </div>

            <div class="row clearfix">
                <div class="card">
                    <div class="header">
                        <h2>Nova categoria</h2>
                    </div>

                    <div class="body">

                        <div class="card-inside-title">Informações Gerais</div>

                        <div class="row clearfix">

                            <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                                
                                <div class="col-xs-12">

                                    {{ csrf_field() }}

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input id="name" name="name" type="text" class="form-control" placeholder="Nome da categoria">
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <input type="file" name="image" id="image" />

                                    </div>

                                    <a href="{{ route('admin.category.index') }}" class="btn btn-danger m-t-15 waves-effect">Cancelar</a>

                                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Adicionar</button>
                                
                                </div>

                            </form>
                            
                        </div>

                    </div>                    
                </div>                  
            </div>
        </div>
    </section>
@endsection
