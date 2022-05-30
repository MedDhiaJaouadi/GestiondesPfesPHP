   
        <div class="col-9 mt-1">
            <div class="card text.light ">
                <div class="card-body">

                    <table class="table"> 
                        <div class="thead bg-success text-white" style="padding: 20px; "> Liste des PFEs  </div>
                        <a  class="btn btn-warning mt-2" href="add.php">Ajouter un PFE</a>

                        <tbody id="p">
                            </tbody>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <table class="table bg-light" >
                                        <thead>
                                            <tr>
                                                <th width="60">ID</th>
                                                <th width="100">Titre</th>
                                                <th width="50">Etudiant</th>
                                                <th width="50">Enseignant</th>
                                                <th width="50"></th>


                                            </tr>
                                        </thead>
                                       
                                </div>
                            </div>
                        </div>
                            
                    </div>
        </div>
        </div>
        <?php
        require_once("functions.php");
    $pfe=getAllPfes();
    foreach($pfe as $k=>$v){
        //$nom_etd=getEtudiantById($v->id_etd);
        //$nom_ens=getEnseignantById($v->id_ens);
        
        echo "<tr>";
        echo "<td>".$v->id."</td>";
        echo "<td>".$v->titre."</td>";
        echo "<td>".$v->id_etd."</td>";
        echo "<td>".$v->id_ens."</td>";
        echo "<td><a class='btn btn-danger' href='del.php?id={$v->id}'>Supp</a></td>";
        echo "</tr>";
    }
    ?>