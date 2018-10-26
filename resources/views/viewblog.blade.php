@extends('app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12 text-center">
        <h2 class="title"><i class="material-icons">forum</i> Blog</h2>
    </div>   
    <div class="col-md-12">
        <div class="container">
            <div class="card card-blog card-plain">
                <div class="card-header card-header-image">
                    <img class="img" src="/images_blog/{{$blog->foto}}">
                </div>
                <div class="card-body ">
                    <h6 class="card-category text-success">Comida</h6>

                    <h4 class="card-title">
                        {{$blog->titulo}}
                    </h4>
                    <p class="card-description">
                        <blockquote>
                            {{$blog->descripcion}}
                        </blockquote>
                    </p>
                </div>
                <div class="card-footer">
                    <div class="author">
                        <img src="/img/user.png" alt="..." class="avatar img-raised">
                        <span>M`ka</span>
                    </div>
                    <div class="stats ml-auto">
                        <i class="material-icons">comment</i> {{count($blog->comments)}} Comentarios&nbsp;
                        <i class="material-icons">schedule</i> {{$blog->getDateDiferencia()}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="blog-tags">
                        Tags:
                        <span class="badge badge-primary badge-pill">Historias</span>
                        <span class="badge badge-primary badge-pill">Comida</span>
                    </div>
                </div>
            </div>
            <hr>
            <form class="form-horizontal mt-40" action="{{ action('BlogController@createComments')}}" method="post">
            @csrf
                <input type="hidden" name="blog_id" value="{{$blog->id}}"/>
                <div class="row col-md-12 justify-content-center">
                    <div class="col-lg-8 col-md-8 col-sm-8 mb-auto mt-auto">
                        <div class="input-group form-group">
                            <label class="bmd-label-floating" style="margin-left: 55px;">Nombre...</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">person</i>
                                </span>
                            </div>
                            <input id="name" type="text" class="form-control" name="name">
                        </div>
                    </div>
                </div>
                <div class="row col-md-12 justify-content-center">
                    <div class="col-lg-8 col-md-8 col-sm-8 mb-auto mt-auto">
                        <div class="input-group form-group">
                            <label class="bmd-label-floating" style="margin-left: 55px;">Comentario...</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">edit</i>
                                </span>
                            </div>
                            <textarea class="form-control" rows="7" name="comentario"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row col-md-12 justify-content-center">
                    <div class="col-lg-8 col-md-8 col-sm-8 text-right">
                        <button type="submit" class="btn btn-round btn-raised btn-rose uppercase"> Enviar</button>
                    </div>
                </div>
            </form>
            <h3 class="title text-center"> <span class="text-orange">{{count($blog->comments)}} </span> Comentario(s)</h3>
            @foreach ($blog->comments as $comm)
            <form class="form-horizontal mt-40" action="{{ action('BlogController@createCommreply')}}" method="post">
            @csrf
                <input type="hidden" name="comments_id" value="{{$comm->id}}"/>
                <input type="hidden" name="blog_id" value="{{$blog->id}}"/>
                <div class="media-area">
                    <div class="media">
                        <a class="float-left" href="#">
                            <div class="avatar">
                                <img class="media-object" src="/img/user.png" alt="...">
                            </div>
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">{{$comm->name}} <small>&#xB7; {{$comm->getDateDiferencia()}}</small></h4>
                            <p>
                                {{$comm->comentario}}
                            </p>
                            @if (Auth::check() && count($comm->replys) == 0)
                            <div class="media-footer">
                                <div class="input-group form-group">
                                    <label class="bmd-label-floating" style="margin-left: 55px;">Responder Comentario...</label>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">edit</i>
                                        </span>
                                    </div>
                                    <textarea class="form-control" rows="7" name="reply"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-link float-right" rel="tooltip" title="Responder al Comentario">
                                    <i class="fa fa-reply"></i> Responder
                                </button>
                            </div>
                            @elseif (count($comm->replys) == 1)
                                <div class="media">
                                    <a class="float-left" href="#">
                                        <div class="avatar">
                                            <img class="media-object" src="/img/logo.png" alt="...">
                                        </div>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">M`ka <small>&#xB7; {{$comm->replys[0]->getDateDiferencia()}}</small></h4>
                                        <p>
                                            {{$comm->replys[0]->comentario}}
                                        </p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </form>
            @endforeach
        </div> 
    </div>    
</div>
@endsection
