<!--AJOUT D'UNE NOUVELLE INFORMATION DANS LA BANQUE DE DONNEES-->
<div class="container-add">
  <div id="ajouterInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <!-- <div>
      <button type="button" data-dismiss="modal" aria-hidden="true" title="Annuler">&times;</button>
    </div> -->
    
    <form enctype="multipart/form-data" class="form-add" action="#" method="post">
    <h4 class="sousTitre">Ajouter une nouvelle information</h4>
      <div>
        <label for="exampleInputPassword1">Titre</label>
        <input type="text" placeholder="Entrez le titre du document" name="TITRE">
      </div>
      <div>
        <label for="exampleInputPassword1">Domaine</label>
        <div>
          <select name="DOMAINE" id="DOMAINE" onclick="">
            <option value="">Sélectionner un domain de document</option>
            <option value="sciences">Sciences</option>
            <option value="reseau telecom">Réseau Télécom</option>
            <option value="administration reseau">Administration Réseau</option>
            <option value="securite informatique">Securité Informatique</option>
            <option value="programmation web">Programmation Web</option>
            <option value="programmation java">Programmation JAVA</option>
            <option value="programmation procedurale">Programmation Procédurale</option>
            <option value="culture">Culture générale</option>
            <option value="gestion">Gestion</option>
          </select>
        </div>
      </div>

      <div>
        <label for="exampleInputPassword1">Niveau concerné</label>
        <!-- <label for="exampleInputEmail1">Quel est le format de votre document ? </label> <br> -->
        <div class="checkbox-add">
          <label for="L1"><input type="radio" name="NIVFIL" value="L1" onclick="met(this,'L1','L2','L3');"> Licence 1</label>
          <label for="L2"><input type="radio" name="NIVFIL" value="L2" onclick="met(this,'L2','L1','L3');"> Licence 2</label>
          <label for="L3"><input type="radio" name="NIVFIL" value="L3" onclick="met(this,'L3','L1','L2');"> Licence 3</label>
        </div>
      </div>
      <div id="L1" style="display: none;">
        <label for="exampleInputPassword1">Filière concernée</label>
        <div>
          <select type="text" name="FILIER" id="FILIERE">
            <option value="">Sélectionner la filière de Licence 1</option>
            <option value="11">Licence 1 : GLAR</option>
            <option value="12">Licence 1 : GEER</option>
            <option value="13">Licence 1 : TELECOM</option>
            <option value="14">Licence 1 : GESTION</option>
          </select>
        </div>
      </div>
      <div id="L2" style="display: none;">
        <label for="exampleInputPassword1">Filière concernée</label>
        <div>
          <select type="text" name="FILIERE" id="FILIERE" onclick="">
            <option value="">Sélectionner la filière de Licence 2</option>
            <option value="21">Licence 2 : GLAR</option>
            <option value="22">Licence 2 : GEER</option>
            <option value="23">Licence 2 : TELECOM</option>
            <option value="24">Licence 2 : GESTION</option>
          </select>
        </div>
      </div>
      <div id="L3" style="display: none;">
        <label for="exampleInputPassword1">Filière concernée</label>
        <div>
          <select type="text" name="FILIERES" id="FILIERE" onclick="">
            <option value="">Sélectionner la filière de Licence 3</option>
            <option value="31">Licence 3 : GLAR</option>
            <option value="32">Licence 3 : GEER</option>
            <option value="33">Licence 3 : TELECOM</option>
            <option value="34">Licence 3 : GESTION</option>
          </select>
        </div>
        <!-- <input type="hidden" name="MAX-FILE-ZISE" value="8388608"> -->
      </div>
      <div>
        <label for="exampleInputEmail1">Quel est le format de votre document ? </label>
        <div class="checkbox-add">
           <label for="img"><input type="radio" name="FORMAT" value="img" onclick="mets(this,'img','pdf','video','rapport');">IMAGE</label>
          <label for="pdf"><input type="radio" name="FORMAT" value="pdf" onclick="mets(this,'pdf','img','video','rapport');"> PDF</label>
          <label for="mp4"><input type="radio" name="FORMAT" value="video" onclick="mets(this,'video','img','pdf','rapport');"> VIDEO</label>
          <!-- <input type="radio" name="FORMAT" value="rapport" onclick="mets(this,'rapport','video','img','pdf');"> <label for="rapport" style="color: red">RAPPORT DE STAGE</label> -->
        </div>
      </div>
      <div id="img" style="display: none;">
        <label for="exampleInputFile">IMAGES</label>
        <input type="file" name="CONTENUDOC">
      </div>

      <div id="pdf" style="display: none;">
        <label for="exampleInputFile">PDF</label>
        <input type="file" name="PDF">
      </div>

      <div id="video" style="display: none;">
        <label for="exampleInputFile">VIDEOS</label>
        <input type="file" name="VIDEO">
      </div>

      <!-- <div id="rapport" style="display: none;">
        <label for="exampleInputFile">Rapport de stage</label>
        <input type="file" name="RAPPORT">
      </div> -->

      <h4 class="sousTitre">Source du document</h4>
      <div>
        <label for="exampleInputPassword1">Nom complet</label>
        <input type="text" name="AUTEUR" id="AUTEUR" placeholder="Entrez le nom complet">
      </div>
      <div>
        <label for="exampleInputEmail1">Niveau et filière </label>
        <input type="text" name="NIVEAU" id="NIVEAU" placeholder="Exemple : L2 GLAR">
      </div>

      <div>
        <!-- <h4> -->
        <button type="button" class="btn" onclick="toggle(event)">Close</button>
        <button type="submit" name="submit" class="btn">Ajouter l'information</button>
        <!-- </h4> -->
      </div>
    </form>
  </div>
</div>