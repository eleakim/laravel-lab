@extends('layouts.admin')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Tags</h2>
            </div>

            <div class="row clearfix">
                <div class="card">
                    <div class="header">
                        <h2>
                            Todas as tags

                            <a class="btn btn-primary pull-right" href="{{ route('admin.tag.create') }}">Adicionar novo item</a>
                        </h2>
                    </div>

                    <div class="body">

                       <div class="table-responsive">

                            <table class="table table-bordered table-striped table-hover dataTable">

                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Created at</th>
                                        <th>Updated at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Created at</th>
                                        <th>Updated at</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>

                                <tbody>

                                    @foreach( $tags as $key => $tag )

                                        <tr>
                                            <td>{{ $tag->id }}</td>
                                            <td>{{ $tag->name }}</td>
                                            <td>{{ $tag->created_at }}</td>
                                            <td>{{ $tag->updated_at }}</td>
                                            <td class="text-center js-sweetalert">
                                                <a href="{{ route('admin.tag.edit', $tag->id) }}" class="btn btn-info waves-effect">
                                                    <i class="material-icons">edit</i>
                                                </a>

                                                <button type="button" class="btn btn-delete waves-effect" data-id="{{ $tag->id }}" data-type="cancel">
                                                    <i class="material-icons">delete</i>
                                                </button>

                                                <form id="delete-form-{{ $tag->id }}" class="hidden" action="{{ route('admin.tag.destroy', $tag->id) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}

                                                </form>
                                            </td>
                                        </tr>

                                    @endforeach

                                </tbody>
                            
                            </table>

                        </div>


                    </div>                    
                </div>                  
            </div>
        </div>
    </section>
@endsection
