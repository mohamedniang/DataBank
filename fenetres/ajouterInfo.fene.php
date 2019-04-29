<!--AJOUT D'UNE NOUVELLE INFORMATION DANS LA BANQUE DE DONNEES-->
  <div id="ajouterInfo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true" title="Annuler">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Ajouter une nouvelle information</h4>
        </div>

      <div class="bs-example" data-example-id="basic-forms">
        <form enctype="multipart/form-data" action="#" method="post">
            <div class="form-group modal-body">
              <label for="exampleInputPassword1">Titre</label>
              <input type="text" class="form-control" id="TITRE" placeholder="Entrez le titre du document" name="TITRE">

              <label for="exampleInputPassword1">Domaine</label>
              <select class="form-control" name="DOMAINE" id="DOMAINE" onclick="">
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

              <label for="exampleInputPassword1">Niveau concerné</label>
              <!-- <label for="exampleInputEmail1">Quel est le format de votre document ? </label> <br> -->
              <input type="radio" name="NIVFIL" value="L1" onclick="met(this,'L1','L2','L3');"> <label for="L1">L1</label>
              <input type="radio" name="NIVFIL" value="L2" onclick="met(this,'L2','L1','L3');"> <label for="L2">L2</label>
              <input type="radio" name="NIVFIL" value="L3" onclick="met(this,'L3','L1','L2');"> <label for="L3">L3</label>
              <br>
              <div class="modal-body" id="L1" style="display: none;">
              <label for="exampleInputPassword1">Filière concernée</label>
                <select type="text" class="form-control" name="FILIER" id="FILIERE">
                  <option value="">Sélectionner la filière de Licence 1</option>
                  <option value="11">Licence 1 : GLAR</option>
                  <option value="12">Licence 1 : GEER</option>
                  <option value="13">Licence 1 : TELECOM</option>
                  <option value="14">Licence 1 : GESTION</option>
                </select>
             </div>
             <div class="modal-body" id="L2" style="display: none;">
              <label for="exampleInputPassword1">Filière concernée</label>
                  <select type="text" class="form-control" name="FILIERE" id="FILIERE" onclick="">
                    <option value="">Sélectionner la filière de Licence 2</option>
                    <option value="21">Licence 2 : GLAR</option>
                    <option value="22">Licence 2 : GEER</option>
                    <option value="23">Licence 2 : TELECOM</option>
                    <option value="24">Licence 2 : GESTION</option>
                </select>
              </div>
              <div class="modal-body" id="L3" style="display: none;">
                <label for="exampleInputPassword1">Filière concernée</label>
                <select type="text" class="form-control" name="FILIERES" id="FILIERE" onclick="">
                  <option value="">Sélectionner la filière de Licence 3</option>
                  <option value="31">Licence 3 : GLAR</option>
                  <option value="32">Licence 3 : GEER</option>
                  <option value="33">Licence 3 : TELECOM</option>
                  <option value="34">Licence 3 : GESTION</option>
                </select>
            </div>

              <label for="exampleInputEmail1">Quel est le format de votre document ? </label> <br>
              <input type="radio" name="FORMAT" value="img" onclick="mets(this,'img','pdf','video','rapport');"> <label for="img">IMAGE</label>
              <input type="radio" name="FORMAT" value="pdf" onclick="mets(this,'pdf','img','video','rapport');"> <label for="pdf">PDF</label>
              <input type="radio" name="FORMAT" value="video" onclick="mets(this,'video','img','pdf','rapport');"> <label for="mp4">VIDEO</label>
              <input type="radio" name="FORMAT" value="rapport" onclick="mets(this,'rapport','video','img','pdf');"> <label for="rapport" style="color: red">RAPPORT DE STAGE</label>
              
              <br>
            <!-- <input type="hidden" name="MAX-FILE-ZISE" value="8388608"> -->

            <div class="modal-body" id="img" style="display: none;">
                <label for="exampleInputFile">IMAGES</label>
                <input type="file" name="CONTENUDOC">
            </div>
        
            <div class="modal-body" id="pdf" style="display: none;">
                <label for="exampleInputFile">PDF</label>
                <input type="file" name="PDF">
            </div>

            <div class="modal-body" id="video" style="display: none;">
                <label for="exampleInputFile">VIDEOS</label>
                <input type="file" name="VIDEO">
            </div>

            <div class="modal-body" id="rapport" style="display: none;">
                <label for="exampleInputFile">Rapport de stage</label>
                <input type="file" name="RAPPORT">
            </div>
          
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Source du document</h4>
              <label for="exampleInputPassword1">Nom complet</label>
              <input type="text" class="form-control" name="AUTEUR" id="AUTEUR" placeholder="Entrez le nom complet">

              <label for="exampleInputEmail1">Niveau et filière </label>
              <input type="text" class="form-control" name="NIVEAU" id="NIVEAU" placeholder="Exemple : L2 GLAR">
          </div>

            <div class="modal-footer">
              <!-- <h4> -->
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="btn btn-primary">Ajouter l'information</button>
            <!-- </h4> -->
            </div>
          </div>
        </form>
    </div>

      </div>
    </div>
  </div>