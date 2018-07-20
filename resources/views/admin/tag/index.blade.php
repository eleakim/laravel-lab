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
                                    </tr>
                                </thead>

                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Created at</th>
                                        <th>Updated at</th>
                                    </tr>
                                </tfoot>

                                <tbody>

                                    @foreach( $tags as $key => $tag )

                                        <tr>
                                            <td>{{ $tag->id }}</td>
                                            <td>{{ $tag->name }}</td>
                                            <td>{{ $tag->created_at }}</td>
                                            <td>{{ $tag->updated_at }}</td>
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
