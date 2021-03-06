<!DOCTYPE html>
<html>
    <head>
        <title>Wise Planner | Início</title>
        <?php include_once "nichos/head.php"; ?>
    </head>
    <body style='background-image: url(img/fundoneutro.jpg);'>
        <header>
            <?php include_once "nichos/headerusr.php"; ?>
        </header>
        <main>
            <div class='section no-pad-bot'>
                <div class='row container' style='margin-top: 4%;'>
                    <div class='col m4 s12 center'>
                        <img class='circle responsive-img white' src='img/coruja.png' style='width: 30%;height: 30%;border: 3px solid #005274;'/>
                        <h5>Olá! Seja bem vindo <u><?php echo $nome; ?></u>.</h5>
                        <p style='margin-bottom: 20px;'>Segue abaixo os seus últimos registros.</p>
                        <div class="row">
                            <div class="col s12">
                              <div class='card white darken-1' style='border-top-left-radius: 15px;border-top-right-radius: 15px;border: 1px solid #005274;'>
                                <div class="card-content white-text">
                                  <span class="card-title grey-text text-darken-4">Últimos recursos registros</span>
                                  <div class='divider'></div>
                                  <table class='centered striped white black-text' style='border: 1px solid #005274;'>
                                    <thead>
                                      <tr>
                                          <th style='border-right: 1px solid #005274;border-bottom: 1px solid #005274;'>Tipo</th>
                                          <th style='border-right: 1px solid #005274;border-bottom: 1px solid #005274;'>Transação</th>
                                          <th style='border-bottom: 1px solid #005274;'>Valor</th>
                                      </tr>
                                    </thead>

                                    <tbody>
                                      <tr>
                                        <td>Banco</td>
                                        <td class='green-text'><b>+</b></td>
                                        <td>R$ 87.00</td>
                                      </tr>
                                      <tr>
                                        <td>Cartão de Crédito</td>
                                        <td class='orange-text'><b>1/10</b></td>
                                        <td>R$ 10.99</td>
                                      </tr>
                                      <tr>
                                        <td>Carteira</td>
                                        <td class='red-text'><b>-</b></td>
                                        <td>R$ 50.00</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class='col m8 s12'>
                      <div class="card-panel" style='border-top-left-radius: 15px;border-top-right-radius: 15px;border: 1px solid #005274;'>
                        <div class='row'>
                            <div class='col m6 s12'>
                              <h5 class='grey-text text-darken-4'>Alertas</h5>
                            <p class='grey-text text-darken-4'>Segue abaixo os cartões de crédito/banco que estão perto do vencimento ou atrasados, fique atento a tabela abaixo para que não perca o controle de suas contas ;).</p>
                            <p class='grey-text text-darken-4'>Para que não fique muito confuso, ainda temos esta tabela ao lado explicando o significado dos símbolos ao lado dos avisos >>></p>
                            </div>
                            <div class='col m6 s12'>
                                <table class='centered striped white black-text'>
                                    <thead>
                                      <tr>
                                          <th>Tipo</th>
                                          <th>Significado</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td><i class="material-icons red-text text-darken-4">warning</i></td>
                                          <td>Aviso para contas que já passaram da sua data de vencimento</td>
                                      </tr>
                                      <tr>
                                        <td><i class="material-icons red-text text-darken-4">warning</i></td>
                                          <td>Aviso para contas que já passaram da sua data de vencimento</td>
                                      </tr>
                                      <tr>
                                        <td><i class="material-icons red-text text-darken-4">warning</i></td>
                                          <td>Aviso para contas que já passaram da sua data de vencimento</td>
                                      </tr>
                                    </tbody>
                                  </table>
                            </div>
                          </div>
                      </div>
                      <div class='card-panel' style='border: 1px solid #005274;'>
                        <table class='centered striped white black-text'>
                                    <thead>
                                      <tr>
                                          <th>Alerta</th>
                                          <th>Tipo</th>
                                          <th>Data de vencimento</th>
                                          <th>Valor</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td><i class="material-icons red-text text-darken-4">warning</i></td>
                                          <td>Banco</td>
                                          <td>Dia 10</td>
                                          <td>R$ 399.99</td>
                                      </tr>
                                    </tbody>
                                  </table>  
                      </div>
                    </div>
                </div>
            </div>
        </main>
        
        <footer class='page-footer white' style='border-top: 5px solid #005274;'>
            <?php include_once "nichos/footer.php"; ?>
        </footer>
        <!--JavaScript at end of body for optimized loading-->
        <?php include_once "nichos/scripts.php"; ?>
    </body>
</html>    