@extends("layouts.master")
@section("metadata") "liste des articles"@endsection
@section("content")
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <?php foreach ($articles as $article) { ?>
                            <div class="col-lg-4 col-md-6">
                                <article class="post-grid mb-5 sidebar-widget subscribe">
                                    <span class="cat-name text-color font-extra text-sm text-uppercase letter-spacing-1">{{$article->categorie->libelle}}</span>
                                    <h3 class="post-title mt-1 mb-0"><a href="{{url('')}}/article/{{$article->slug()}}" >{{$article->titre}}</a></h3>
                                    <div class="post-content"><p>{{$article->resume}}</p></div>
                                </article>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
