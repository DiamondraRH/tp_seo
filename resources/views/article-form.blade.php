@extends("layouts.master")
@section("content")
<script src="assets/js/ckeditor.js"></script>

<div class="breadcrumb-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <h2 class="lg-title">Nouvel Article</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="pt-5 padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <form id="contact-form" class="contact-form" action="{{url('/')}}/article/" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Titre</label>
                                        <input class="form-control form-control-name" name="titre"
                                               type="text" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Resume</label>
                                        <textarea class="form-control form-control-message" name="resume"
                                                   rows="7" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Contenu</label>
                                        <textarea name="contenu" id="editor" rows="10" cols="80">
                                        </textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Categorie</label>
                                        <select class="form-control dropdown" name="id_categorie">
                                            <?php foreach ($categories as $categorie) { ?>
                                                <option  class="dropdown-item" value="{{$categorie->id_categorie}}">{{$categorie->libelle}}</option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <button class="btn btn-primary solid blank mt-3" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection
