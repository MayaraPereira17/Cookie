  <!Doctype html>
  <html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <title>AMAZING</title>
    <link rel="stylesheet" href="loja.css">
  </head>

  <body>

    <nav class="navbar navbar-light " style="background-color:	#32CD32">
      <div class="container-fluid">
        <img src="img/logo_amazing.png" href="" class="logodaloja" width="90px">
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
          <button type="button" class="btn btn-outline-dark">Pesquisar</button>
        </form>
      </div>
    </nav>

    <p class="placeholder-glow">
      <span class="placeholder col-12 " style="background-color:	#32CD32"></span>
    </p>

    <img src="img/carrossel1.jpg" href="" class="logodaloja">
    <b>
      <p>
      <h1>CATEGORIAS</h1>
    </b>

    <form method="post" action="loja.php">
      <select class="form-select" name='slcCategoria' aria-label="Default select example" data-bs-toggle="dropdown" style="width: 60%;">

        <option selected value="1">Camisas de Times</option>
        <option value="2">Acessórios</option>
        <option value="3">Calçados</option>
        <option value="4">Calças</option>
      </select>
      <BR>
      <input class="btn btn-outline-dark" type="submit" value="Pesquisar">
    </form>

    <?php
      include('array.php');

    if(isset($_COOKIE['codcategoria'])){
      if($_COOKIE['codcategoria'] == 1){
        echo("<br>
        <p>
        <h2>Camisas de times</h2>
      </b>
      <br>
      <!-- inicio da categoria camisa de time-->
      <div class='container'>
        <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
        ");
          
          foreach ($camisadeTimes as $produto_indice => $value) {
            echo ("<div class='col'>
              <div class='card' style='width: 90%;'>
                <img src=" . $value[0] . " class='card-img-top'>
                <div class='card-body'>
                <h5 class='card-title'>" . $value[1] . "</h5>
                <p class='card-text'> " . $value[2] . "</p>
                <a href='#' class='btn btn-primary'>Selecionar</a>
                </div>
              </div>
            </div>
          ");
          }
          echo(" </div>
          </div>
          <!-- fim da categoria camisa de time-->");

          echo(" <br>
          <!--acessorios-->
          <div class='container'>
            <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'> ") ;
               
           
              foreach ($acessorio as $produto_indice => $value) {
               echo("<div class='col'>
                <div class='card' style='width:90% ;'>
                  <img src=".$value[0]." class='card-img-top'>
                  <div class='card-body'>
                    <h5 class='card-title'>".$value[1]."</h5>
                    <p class='card-text'>".$value[2]."</p>
                    <a href='#' class='btn btn-primary'>Selecionar</a>
                  </div>
                </div>
              </div>
              ");
              }
              echo("
            </div>
          </div>
          <!-- fim da categoria acessórios-->
          <br>");


          echo("
          <!-- inicio da categoria calçados-->
          <div class='container'>
            <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>");
            
              foreach ($calcados as $produto_indice => $value) {
             echo(" <div class='col'>
                <div class='card' style='width: 90%;'>
                  <img src='".$value[0]." ' class='card-img-top' >
                  <div class='card-body'>
                    <h5 class='card-title'>".$value[1]."</h5>
                    <p class='card-text'> ".$value[2]."</p>
                    <a href='#' class='btn btn-primary'>Selecionar</a>
                  </div>
                </div>
              </div>
            ");
              }
          echo("
            </div>
          </div>
          <!-- fim da categoria calçados-->
              ");

          echo("   <br>
              <!-- inicio da categoria calças-->
              <div class='container'>
                <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                 
               
                  foreach ($calca as $produto_indice => $value) {
                 echo(" <div class='col'>
                    <div class='card' style='width: 90%;'>
                      <img src='".$value[0]." ' class='card-img-top' >
                      <div class='card-body'>
                        <h5 class='card-title'>".$value[1]."</h5>
                        <p class='card-text'> ".$value[2]."</p>
                        <a href='#' class='btn btn-primary'>Selecionar</a>
                      </div>
                    </div>
                  </div>
                 
                ");
                  }
                 
                  echo(" </div>
                  </div>
                  <!-- fim da categoria calças-->");
               
        
         
        } else if($_COOKIE['codcategoria'] == 2){
          echo("<br>
          <p>
          <h2>Camisas de times</h2>
        </b>
        <br>
     <br>
            <!--acessorios-->
            <div class='container'>
              <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'> ") ;
                 
             
                foreach ($acessorio as $produto_indice => $value) {
                 echo("<div class='col'>
                  <div class='card' style='width:90% ;'>
                    <img src=".$value[0]." class='card-img-top'>
                    <div class='card-body'>
                      <h5 class='card-title'>".$value[1]."</h5>
                      <p class='card-text'>".$value[2]."</p>
                      <a href='#' class='btn btn-primary'>Selecionar</a>
                    </div>
                  </div>
                </div>
                ");
                }
                echo("
              </div>
            </div>
            <!-- fim da categoria acessórios-->
            <br>");
  
  
            echo("
            <!-- inicio da categoria calçados-->
            <div class='container'>
              <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>");
              
                foreach ($calcados as $produto_indice => $value) {
               echo(" <div class='col'>
                  <div class='card' style='width: 90%;'>
                    <img src='".$value[0]." ' class='card-img-top' >
                    <div class='card-body'>
                      <h5 class='card-title'>".$value[1]."</h5>
                      <p class='card-text'> ".$value[2]."</p>
                      <a href='#' class='btn btn-primary'>Selecionar</a>
                    </div>
                  </div>
                </div>
              ");
                }
            echo("
              </div>
            </div>
            <!-- fim da categoria calçados-->
                ");
  
            echo("   <br>
                <!-- inicio da categoria calças-->
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                  ");
                   
                 
                    foreach ($calca as $produto_indice => $value) {
                   echo(" <div class='col'>
                      <div class='card' style='width: 90%;'>
                        <img src='".$value[0]." ' class='card-img-top' >
                        <div class='card-body'>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <p class='card-text'> ".$value[2]."</p>
                          <a href='#' class='btn btn-primary'>Selecionar</a>
                        </div>
                      </div>
                    </div>
                   
                  ");
                    }
                   
                    echo(" </div>
                    </div>
                    <!-- fim da categoria calças-->");
                 
                 
          echo("<br><!-- inicio da categoria camisa de time-->
        <div class='container'>
          <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
          ");
            
            foreach ($camisadeTimes as $produto_indice => $value) {
              echo ("<div class='col'>
                <div class='card' style='width: 90%;'>
                  <img src=" . $value[0] . " class='card-img-top'>
                  <div class='card-body'>
                  <h5 class='card-title'>" . $value[1] . "</h5>
                  <p class='card-text'> " . $value[2] . "</p>
                  <a href='#' class='btn btn-primary'>Selecionar</a>
                  </div>
                </div>
              </div>
            ");
            }
            echo(" </div>
            </div>
            <!-- fim da categoria camisa de time-->");

        }else if($_COOKIE['codcategoria'] ==3 ){
          echo("<br>
          <p>
          <h2>Calçados</h2>
        </b>
        <br>
     <br>
      <!-- inicio da categoria calçados-->
            <div class='container'>
              <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>");
              
                foreach ($calcados as $produto_indice => $value) {
               echo(" <div class='col'>
                  <div class='card' style='width: 90%;'>
                    <img src='".$value[0]." ' class='card-img-top' >
                    <div class='card-body'>
                      <h5 class='card-title'>".$value[1]."</h5>
                      <p class='card-text'> ".$value[2]."</p>
                      <a href='#' class='btn btn-primary'>Selecionar</a>
                    </div>
                  </div>
                </div>
              ");
                }
            echo("
              </div>
            </div>
            <!-- fim da categoria calçados-->
                ");
  
            echo("   <br>
                <!-- inicio da categoria calças-->
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                  ");
                   
                 
                    foreach ($calca as $produto_indice => $value) {
                   echo(" <div class='col'>
                      <div class='card' style='width: 90%;'>
                        <img src='".$value[0]." ' class='card-img-top' >
                        <div class='card-body'>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <p class='card-text'> ".$value[2]."</p>
                          <a href='#' class='btn btn-primary'>Selecionar</a>
                        </div>
                      </div>
                    </div>
                   
                  ");
                    }
                   
                    echo(" </div>
                    </div>
                    <!-- fim da categoria calças-->");
                 
                 
          echo("<br><!-- inicio da categoria camisa de time-->
        <div class='container'>
          <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
          ");
            
            foreach ($camisadeTimes as $produto_indice => $value) {
              echo ("<div class='col'>
                <div class='card' style='width: 90%;'>
                  <img src=" . $value[0] . " class='card-img-top'>
                  <div class='card-body'>
                  <h5 class='card-title'>" . $value[1] . "</h5>
                  <p class='card-text'> " . $value[2] . "</p>
                  <a href='#' class='btn btn-primary'>Selecionar</a>
                  </div>
                </div>
              </div>
            ");
            }
            echo(" </div>
            </div>
            <!-- fim da categoria camisa de time-->");

            echo("
               <br>
              <!--acessorios-->
              <div class='container'>
                <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'> ") ;
                   
               
                  foreach ($acessorio as $produto_indice => $value) {
                   echo("<div class='col'>
                    <div class='card' style='width:90% ;'>
                      <img src=".$value[0]." class='card-img-top'>
                      <div class='card-body'>
                        <h5 class='card-title'>".$value[1]."</h5>
                        <p class='card-text'>".$value[2]."</p>
                        <a href='#' class='btn btn-primary'>Selecionar</a>
                      </div>
                    </div>
                  </div>
                  ");
                  }
                  echo("
                </div>
              </div>
              <!-- fim da categoria acessórios-->
              <br>");
        }else if($_COOKIE['codcategoria']==4 ){
          echo("<br>
          <p>
          <h2>Calças</h2>
        </b>
        <br>
     <br>
      <!-- inicio da categoria calças-->
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                  ");
                   
                 
                    foreach ($calca as $produto_indice => $value) {
                   echo(" <div class='col'>
                      <div class='card' style='width: 90%;'>
                        <img src='".$value[0]." ' class='card-img-top' >
                        <div class='card-body'>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <p class='card-text'> ".$value[2]."</p>
                          <a href='#' class='btn btn-primary'>Selecionar</a>
                        </div>
                      </div>
                    </div>
                   
                  ");
                    }
                   
                    echo(" </div>
                    </div>
                    <!-- fim da categoria calças-->");
                 
                 
          echo("<br><!-- inicio da categoria camisa de time-->
        <div class='container'>
          <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
          ");
            
            foreach ($camisadeTimes as $produto_indice => $value) {
              echo ("<div class='col'>
                <div class='card' style='width: 90%;'>
                  <img src=" . $value[0] . " class='card-img-top'>
                  <div class='card-body'>
                  <h5 class='card-title'>" . $value[1] . "</h5>
                  <p class='card-text'> " . $value[2] . "</p>
                  <a href='#' class='btn btn-primary'>Selecionar</a>
                  </div>
                </div>
              </div>
            ");
            }
            echo(" </div>
            </div>
            <!-- fim da categoria camisa de time-->");

            echo("
               <br>
              <!--acessorios-->
              <div class='container'>
                <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'> ") ;
                   
               
                  foreach ($acessorio as $produto_indice => $value) {
                   echo("<div class='col'>
                    <div class='card' style='width:90% ;'>
                      <img src=".$value[0]." class='card-img-top'>
                      <div class='card-body'>
                        <h5 class='card-title'>".$value[1]."</h5>
                        <p class='card-text'>".$value[2]."</p>
                        <a href='#' class='btn btn-primary'>Selecionar</a>
                      </div>
                    </div>
                  </div>
                  ");
                  }
                  echo("
                </div>
              </div>
              <!-- fim da categoria acessórios-->
              <br>");


              echo("<br>
          <!-- inicio da categoria calçados-->
                <div class='container'>
                  <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>");
                  
                    foreach ($calcados as $produto_indice => $value) {
                   echo(" <div class='col'>
                      <div class='card' style='width: 90%;'>
                        <img src='".$value[0]." ' class='card-img-top' >
                        <div class='card-body'>
                          <h5 class='card-title'>".$value[1]."</h5>
                          <p class='card-text'> ".$value[2]."</p>
                          <a href='#' class='btn btn-primary'>Selecionar</a>
                        </div>
                      </div>
                    </div>
                  ");
                    }
                echo("
                  </div>
                </div>
                <!-- fim da categoria calçados-->
                    ");
      
        }else {
          echo("<br>
        <p>
        <h2>Categorias</h2>
      </b>
      <br>
      <!-- inicio da categoria camisa de time-->
      <div class='container'>
        <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
        ");
          
          foreach ($camisadeTimes as $produto_indice => $value) {
            echo ("<div class='col'>
              <div class='card' style='width: 90%;'>
                <img src=" . $value[0] . " class='card-img-top'>
                <div class='card-body'>
                <h5 class='card-title'>" . $value[1] . "</h5>
                <p class='card-text'> " . $value[2] . "</p>
                <a href='#' class='btn btn-primary'>Selecionar</a>
                </div>
              </div>
            </div>
          ");
          }
          echo(" </div>
          </div>
          <!-- fim da categoria camisa de time-->");

          echo(" <br>
          <!--acessorios-->
          <div class='container'>
            <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'> ") ;
               
           
              foreach ($acessorio as $produto_indice => $value) {
               echo("<div class='col'>
                <div class='card' style='width:90% ;'>
                  <img src=".$value[0]." class='card-img-top'>
                  <div class='card-body'>
                    <h5 class='card-title'>".$value[1]."</h5>
                    <p class='card-text'>".$value[2]."</p>
                    <a href='#' class='btn btn-primary'>Selecionar</a>
                  </div>
                </div>
              </div>
              ");
              }
              echo("
            </div>
          </div>
          <!-- fim da categoria acessórios-->
          <br>");


          echo("
          <!-- inicio da categoria calçados-->
          <div class='container'>
            <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>");
            
              foreach ($calcados as $produto_indice => $value) {
             echo(" <div class='col'>
                <div class='card' style='width: 90%;'>
                  <img src='".$value[0]." ' class='card-img-top' >
                  <div class='card-body'>
                    <h5 class='card-title'>".$value[1]."</h5>
                    <p class='card-text'> ".$value[2]."</p>
                    <a href='#' class='btn btn-primary'>Selecionar</a>
                  </div>
                </div>
              </div>
            ");
              }
          echo("
            </div>
          </div>
          <!-- fim da categoria calçados-->
              ");

          echo("   <br>
              <!-- inicio da categoria calças-->
              <div class='container'>
                <div class='row row-cols-8 row-cols-lg-4 g-2 g-lg-3'>
                ");
                 
               
                  foreach ($calca as $produto_indice => $value) {
                 echo(" <div class='col'>
                    <div class='card' style='width: 90%;'>
                      <img src='".$value[0]." ' class='card-img-top' >
                      <div class='card-body'>
                        <h5 class='card-title'>".$value[1]."</h5>
                        <p class='card-text'> ".$value[2]."</p>
                        <a href='#' class='btn btn-primary'>Selecionar</a>
                      </div>
                    </div>
                  </div>
                 
                ");
                  }
                 
                  echo(" </div>
                  </div>
                  <!-- fim da categoria calças-->");

        }
                 
        }
         
        
      
         ?>
     
      

    
  
      
 






<!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

 
    </body>
    </html>