@extends('layouts.admin')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>CATEGORIES</h2>
            </div>

            <div class="row clearfix">
                <div class="card">
                    <div class="header">
                        <h2>Editar category</h2>
                    </div>

                    <div class="body">

                        <div class="card-inside-title">Informações Gerais</div>

                        <div class="row clearfix">

                            <form action="{{ route('admin.category.update', $category->id) }}" method="POST">
                                
                                <div class="col-xs-12">

                                    {{ csrf_field() }}

                                    {{ method_field('PUT') }}

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input id="name" name="name" type="text" class="form-control" placeholder="Nome da category" value="{{ $category->name }}" />
                                        </div>
                                    </div>

                                    <a href="{{ route('admin.category.index') }}" class="btn btn-danger m-t-15 waves-effect">Cancelar</a>

                                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Atualizar</button>
                                
                                </div>

                            </form>
                            
                        </div>

                    </div>                    
                </div>                  
            </div>
        </div>
    </section>
@endsection
