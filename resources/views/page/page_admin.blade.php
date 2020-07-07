@include("include.header2")
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Gestion de Stock</h1>
      <p>Créer un nouveau compte <span class="typed" data-typed-items="Administrateur,Utilisateur,de travail,"></span></p>
   
      <div class="divg">
        <form action="../models/eve1_traitementB.php" method="POST">
        <div class="form-group row">
                  
                  <div class="col-sm-10">
                      <label for="inputName" class="ecrit">Nom </label>
                    <input type="name" class="form-control" name="nomAdmin" id="inputName" require>
                  </div>
                </div>
                <div class="form-group row">
                  
                  <div class="col-sm-10">
                      <label for="inputName" class="ecrit">Prénom(S)</label>
                    <input type="name" class="form-control" name="nomAdmin" id="inputName" require >
                  </div>
                </div>
                <div class="form-group row">
                  
                  <div class="col-sm-10">
                      <label for="inputName" class="ecrit">E-mail</label>
                    <input type="email" class="form-control" name="email" id="inputName" require >
                  </div>
                </div>
                <div class="form-group row">
                  
                  <div class="col-sm-10">
                      <label for="inputName" class="ecrit">Nom d'utilisateur</label>
                    <input type="name" class="form-control" name="nomAdmin" id="inputName" require>
                  </div>
                </div>
                <div class="form-group row">
                 
                  <div class="col-sm-10">
                      <label for="inputPassword3"class="ecrit">Mot de passe</label>
                    <input type="password" name="password" class="form-control" id="inputPassword3" require >
                  </div>
                </div>

                <div class="form-group row">
                        
                        <div class="col-sm-10">
                            <label for="inputPassword3" class="ecrit">Confirmer son mot de passse</label>
                          <input type="password" name="repeat_password" class="form-control" id="inputPassword3" require placeholder="Nath426.b">
                        </div>
                </div>
            
                      <div  id="but">
                        <div class="form-group row">         
                            <div class="col-sm-10">
                               <button type="submit" class="btn btn-primary">Créer</button>
                             </div>
                           </div>
                     </div>
              </form>
            </div>
   
   
    </div>
  </section><!-- End Hero -->
  


  </main><!-- End #main -->

@include("include.footer")