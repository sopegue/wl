@include('head')
@include ('headersigned')
<div class="container" id="my-cr">
      <div id="lst-cr" style="text-align: center;">
          <p><a href="#"><button class="btn btn-primary" id="voir-courss" >Trouver un nouveau cours</button></a></p>
          <hr style="width: 30%;">
      </div>
      <div id="mes-cr">
          <h4>Mes cours</h4>
          <hr>
          <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Catégorie</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="actt">Token Ring</td>
      <td class="actt">Réseaux</td>
      <td class="act"><a href="#"><button class="btn btn-primary" id="voir-courss" >Voir le cours</button></a> <a href="#"><button class="btn btn-primary" id="btn-cocc" >Refaire le test</button></a></td>
    </tr>
    <tr>
      <td class="actt">Token Ring</td>
      <td class="actt">Réseaux</td>
      <td class="act"><a href="#"><button class="btn btn-primary" id="voir-courss" >Voir le cours</button></a> <a href="#"><button class="btn btn-primary" id="btn-cocc" >Refaire le test</button></a></td>
    </tr>
    <tr>
     <td class="actt">Token Ring</td>
      <td class="actt">Réseaux</td>
      <td class="act"><a href="#"><button class="btn btn-primary" id="voir-courss" >Voir le cours</button></a>
          <p style="font-size: 18px; font-weight: bold; color: #004466; position: relative; top: 8px; left: 50px;">Validé </p>
           <p> 
            <img src="/img/checkgreen.svg"alt="" style="with: 32px; height:32px; position: relative; top: 5px; right: 20px; " >
          </p>
      </td>
    </tr>
  </tbody>
</table>
      </div>
      <div id="new-cr" style="text-align: center;">
          <hr style="width: 30%;">
          <p><a href="#"><button class="btn btn-primary" id="voir-courss" >Trouver un nouveau cours</button></a></p>
      </div>
</div>
@include('footer')