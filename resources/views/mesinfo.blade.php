
@include('head')
@include ('headersigned')
<div class="container" id="my-cr">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" id="head">Mes informations.</div>

                <div class="card-body">
                        <div class="form-group row">
                            <label for="nom" class="col-md-3 col-form-label text-md-right">Nom :</label>

                            <div class="col-md-6">
                                <input id="iname" type="text" class="form-control" name="name" value="Soro" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="iprenom" class="col-md-3 col-form-label text-md-right">Prénom(s) :</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control" name="surname" value="Yaya Sopegue" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mail" class="col-md-3 col-form-label text-md-right">Adresse Email :</label>

                            <div class="col-md-6">
                                <input id="imail" type="email" class="form-control" name="mail" value="yayasopeguesoro@gmail.com" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  for="typep" class="col-md-3 col-form-label text-md-right">Vous êtes </label>
                            <div class="col-md-6">
                                <select id="typep"  class="form-control" disabled name="typep" required autoComplete="typep">
                                    <option value="stu">Etudiant</option>
                                </select>
                            </div>   
                        </div>
                        <div class="form-group row">
                            <label  for="niveau" class="col-md-3 col-form-label text-md-right">Niveau </label>
                            <div class="col-md-6">
                                <select id="niveau"  class="form-control" name="niveau" required>
                                    <option>Licence</option>
                                    <option>Master</option>
                                    <option>Doctorat</option>
                                </select>
                            </div>   
                        </div>
                        <div class="d-flex justify-content-between text-end ">
                            <div class="col-md-6 offset-md-1">
                                <button type="submit" class="btn btn-primary" id="btn-coc">
                                    Enregistrer mes infos
                                </button>
                            </div>
                            <div class="col-md-5">
                                <a href="/pwd">
                                <button type="submit" class="btn btn-primary" id="btn-cocc">
                                   Modifier le mot de passe
                                </button>
                                </a>
                            </div>
                        </div>
                       
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@include('footer')