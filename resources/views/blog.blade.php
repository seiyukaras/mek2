@extends('app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12 text-center">
        <h2 class="title"><i class="material-icons">forum</i> Listado de Blogs</h2>
    </div>   
    <div class="col-md-12">
        <div class="container">
            @foreach($blogs as $blog)
                <div class="card card-plain card-blog">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card-header card-header-image">
                                <a href="{{route('viewBlog', ['id' => $blog->id])}}">
                                    <img class="img img-raised" src="/images_blog/{{$blog->foto}}">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="card-category text-info">Comida</h6>
                            <h3 class="card-title">
                                <a href="{{route('viewBlog', ['id' => $blog->id])}}">{{$blog->titulo}}</a>
                            </h3>
                            <p class="card-description">
                                {{$blog->getDescrip300()}}
                                <a href="{{route('viewBlog', ['id' => $blog->id])}}"> Leer más<i class="fa fa-angle-double-right" aria-hidden="true"></i> </a>
                            </p>
                            <p class="author">
                                Por
                                <b>Por M`ka, {{$blog->getDateDiferencia()}}, <i class="fa fa-comments-o"></i> {{count($blog->comments)}} Comentarios</b>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $blogs->links() }}
        </div> 
    </div>    
</div>
@endsection
