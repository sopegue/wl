
@include('head')
@include ('headersigned')
<div class="container" id="my-cr">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" id="head">Ajouter un cours</div>

                <div class="card-body">
                        <div class="form-group row">
                            <label for="tire" class="col-md-4 col-form-label text-md-right">Titre du cours</label>

                            <div class="col-md-6">
                                <input id="titre" type="text" class="form-control" name="titre"autofocus>

                            </div>
                        </div>
                        <div class="form-group row">
            <label  for="categ" class="col-md-4 col-form-label text-md-right">Catégorie </label>
            <div class="col-md-6">
                <select class="form-control" name="categ">
                    <option>Programmation</option>
                    <option>Réseaux</option>
                    <option>Base de données</option>
                </select>
            </div>
        </div>
                        <div class="form-group row">
                            <label for="resume" class="col-md-4 col-form-label text-md-right">Resume du cours</label>

                            <div class="col-md-6">
                               <textarea name="resume" class="form-control" id="resume" placeholder="Entrer votre message"></textarea>

                            </div>
                        </div>
                         <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4" >
                                <input type="file" name="file"/>
                                 <p style="position: relative; top: 8px; left: 8px;">(sous forme de PDF) <img src="/img/other/pdf.svg" alt="" style="with: 20px; height:20px;" ></p>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" id="btn-coc">
                                    Ajouter
                                </button>
                            </div>
                        </div>
                       
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@include('footer')