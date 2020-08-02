@include('NiceAdmin.layouts.menu')
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="icon_genius"></i>Formulaire</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_genius"></i>Formulaire</li>

          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <section class="panel">
              <form action="" method="post">
                @csrf
                    <div class="row form-group">
                        <div class="col-md-8">
                            <label for="make">Nom:</label>
                            <input type="text" name="make" id="make" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-8">
                            <label for="model">Prénom:</label>
                            <input type="text" name="modele" id="model" class="form-control">
                        </div>
                        
                    <div class="row form-group">
                        <div class="col-md-8">
                            <label for="prod">Date de Naissance:</label>
                            <input type="date" name="produce_on" id="prod" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-8">
                          <label for="model">Ville D'origine:</label>
                          <input type="text" name="modele" id="model" class="form-control">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-8">
                          <label for="model">Formation:</label>
                          <input type="text" name="modele" id="model" class="form-control">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-8">
                          <label for="model">EtablissementPrécedent:</label>
                          <input type="text" name="modele" id="model" class="form-control">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-8">
                          <label for="model">Télephone:</label>
                          <input type="text" name="modele" id="model" class="form-control">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-8">
                          <label for="model">Mail:</label>
                          <input type="text" name="modele" id="model" class="form-control">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-md-8">
                          <label for="model">Genre:</label>
                          <input type="text" name="modele" id="model" class="form-control">
                      </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-success w-40 float-right">Enrégistrer</button>
                        </div>
                    </div>
                </form>
            </section>
          </div>
          
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </section>
  <!-- container section end -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery knob -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>

  <script>
    //knob
    $(".knob").knob();
  </script>

</body>

</html>
