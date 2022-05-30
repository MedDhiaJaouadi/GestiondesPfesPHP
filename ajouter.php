  <div class="col-9">
  <div class="card text.light ">
                <div class="card-header bg-warning" >

<h1>Ajouter un PFE</h1>
</div>
                <div class="card-body">
             <form>
               <fieldset>
                 
                 <div class="form-group">
                   <label for="nom"><strong>Titre</strong></label>
                   <input type="text" class="form-control" id="nom" placeholder="Titre">
                 </div>
                 <div class="form-group">
                   <label for="selection"><strong>Etudiant</strong></label>
                   <select id="selection" class="form-control">
                     <option value=""><strong>Nom Etudiant</strong></option>
                     <optgroup label="Groupe d'options 1">
                       <option value=""><strong>RESEAUX</strong></option>
                       <option value=""><strong>DEVELOPEMENTS</strong></option>
                       <option value=""><strong>TELCOMS</strong></option>
                     </optgroup>
                    
                   </select>
                 </div>
                 <div class="form-group">
                   <label for="selection"><strong>Enseignant</strong></label>
                   <select id="selection" class="form-control">
                     <option value="">Nom Enseignant</option>
                     <optgroup label="Groupe d'options 1">
                       <option value=""></option>
                       <option value=""></option>
                       <option value=""></option>
                     </optgroup>
                    
                   </select>
                 </div>
                 <a  class="btn btn-warning mt-2" href="add.php"><strong>Enregistrer</strong></a>

               </fieldset>
             </form>
</div>
</div>