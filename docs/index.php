<?php include '../layout/header.php'; ?>

<main class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">  

      <h1 class="display-4">Documentación <small>API Json</small></h1>
      <p class="lead">
        Documentación sobre como es el método de envio para conectarse con nuestras APIS por medio del standar JSON.
      </p>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Factura</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Boleta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Nota Crédito</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Nota Débito</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="resumen-tab" data-toggle="tab" href="#resumen" role="tab" aria-controls="resumen" aria-selected="false">Resumen Boletas</a>
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">

        <!-- Factura panel -->
        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <?php include './factura.php' ?>
        </div>

        <!-- Boleta panel -->
        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <?php include './boleta.php' ?>
        </div>

        <!-- Nota Credito -->
        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
          <?php include './nota_credito.php' ?>
        </div>

        <!-- Nota Debito -->
        <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">
          <?php include './nota_debito.php' ?>
        </div>

        <div class="tab-pane" id="resumen" role="tabpanel" aria-labelledby="resumen-tab">
          <?php include './resumen_boletas.php' ?>
        </div>

      </div>           
    </div>
  </div>    
</main>
<?php include '../layout/footer.php' ?>