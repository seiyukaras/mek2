@extends('app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12 text-center">
        <h2 class="title"><i class="material-icons">note_add</i> Listado de Blogs</h2>
        <h4 class="title">Puede crear, modificar o eliminar los Blogs!</h4>
    </div>   
    <div class="col-md-12">
        <form action="{{ action('BlogController@createBlog')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="container mb-50">
                <div class="row text-center">
                    <div class="col-lg-8 col-md-8 col-sm-8 mb-auto mt-auto">
                        <div class="input-group form-group">
                            <label class="bmd-label-floating" style="margin-left: 55px;">Titulo...</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">edit</i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="titulo" required>
                        </div>
                        <div class="input-group form-group">
                            <label class="bmd-label-floating" style="margin-left: 55px;">Descripción...</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">edit</i>
                                </span>
                            </div>
                            <textarea class="form-control" rows="7" name="descripcion" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-rose btn-raised btn-round uppercase"> Crear</button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 mb-auto mt-auto">
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail img-raised">
                                <img src="/img/image_placeholder.jpg" alt="...">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                            <div>
                                <span class="btn btn-raised btn-round btn-rose btn-file">
                                    <span class="fileinput-new">Seleccionar imagen</span>
                                    <span class="fileinput-exists">Cambiar</span>
                                    <input type="file" name="..." />
                                </span>
                                <a href="#pablo" class="btn btn-round btn-rose fileinput-exists" data-dismiss="fileinput">Eliminar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="row col-md-12 justify-content-center"> 
            <div class="col-md-6">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Fecha creado</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td class="align-middle"><i class="fa fa-comment"></i> {{ $blog->titulo }}</td>
                                <td class="align-middle"><span class="badge badge-info"><i class="fa fa-calendar"></i> {{ $blog->getDiaFormat() }}</span></td>
                                <td class="text-center align-middle">
                                    <div class="flex content-between">

                                        <form action="{{action('BlogController@destroy', $blog)}}" method="post">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button data-toggle="tooltip" class="btn btn-fab btn-rose btn-round" title="Eliminar blog" onclick="return confirm('Esta seguro que desea eliminar el BLOG?')" type="submit">
                                                <i class="fa fa-trash fa-lg"></i>
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $blogs->links() }}
        </div>
    </div>    
</div>
@endsection
