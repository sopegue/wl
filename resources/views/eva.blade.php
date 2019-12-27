
@include('head')
@include ('headersigned')
<div class="container" id="my-cr">
      <div id="new-eva" style="text-align: center;">
          
          <p><a href="#"><button class="btn btn-primary" id="voir-courss" >Faire une nouvelle évaluation</button></a></p>
          <hr style="width: 30%;">
      </div>
      <div id="mes-eva">
          <h4>Mes évaluations</h4>
          <hr>
   <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Titre cours</th>
      <th scope="col">Catégorie cours</th>
      <th scope="col">Statut</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="actt">Token Ring</td>
      <td class="actt">Réseaux</td>
      <td class="act"><a href="#"><button class="btn btn-primary" id="btn-coc" >Refaire le test</button></a>
          <p style="font-size: 18px; font-weight: bold; color: #004466; position: relative; top: 8px; left: 30px;">Non validé </p>
           <p> 
            <img src="/img/multi.svg"alt="" style="with: 20px; height:20px; position: relative; top: 8px; right: 20px; " >
          </p>
      </td>
    </tr>
    <tr>
      <td class="actt">Token Ring</td>
      <td class="actt">Réseaux</td>
      <td class="act text-center">
          <p style="font-size: 18px; font-weight: bold; color: #004466; position: relative; left: 30%;">Validé <i style="color:gray; font-weight: normal; padding-left:20px;">le 20/02/2020</i></p>
           <p> 
            <img src="/img/checkgreen.svg"alt="" style="with: 32px; height:32px; position: relative; right: 50%; top:-3px;" >
          </p>
      </td>
    </tr>
    <tr>
     <td class="actt">Token Ring</td>
      <td class="actt">Réseaux</td>
      <td class="act">
          <p style="font-size: 18px; font-weight: bold; color: #004466; position: relative; left: 30%;">Validé <i style="color:gray; font-weight: normal; padding-left:20px;">le 20/02/2020</i></p>
           <p> 
            <img src="/img/checkgreen.svg"alt="" style="with: 32px; height:32px; position: relative; right: 50%; top:-3px;" >
          </p>
      </td>
    </tr>
  </tbody>
</table>
      </div>

       <div id="new-eva" style="text-align: center; position: relative; top: 30px;">
          <hr style="width: 30%;">
          <p><a href="#"><button class="btn btn-primary" id="voir-courss" >Faire une nouvelle évaluation</button></a></p>
      </div>
</div>
@include('footer')