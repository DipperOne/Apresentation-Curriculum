<?php include('connect.php'); ?>
<!doctype html>
<html lang="pt-Br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Alan" content="Alan Chistofer">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Meus Styles -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/png" href="http://cdn.onlinewebfonts.com/svg/img_382848.png">

    <title>Presentation curriculum</title>
    <style>
      select {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 20px auto;
        padding: 5px;
        border-radius: 10px;
        cursor: pointer;
      }

      /* Class da div tag select */
      .selector {
        display: flex !important;
        flex-wrap: nowrap !important;
        flex-direction: row !important;
        align-items: center !important; 
      }

      /* Class da span tag select */
      .spanSelector {
        padding: 0 20px !important;       
      }

      .btn-search {
        background-color: white;
        color: black;
        padding: 4px;
        border-radius: 5px;
        width: 120%;
      }

      .btn-search:hover {
        background-color: #555555;
        color: white;
        border: 1px solid #555555;
        border-radius: 10px;
        transition: .3s;
        padding: 4.5px;
      }

      label {
        margin: auto -25px auto 5px;
        display: flex;
        flex-wrap: nowrap;
        align-items: flex-end;
        justify-content: flex-start;
        font-weight: bold;
        color: grey;
        font-size: larger;
      }

      #table {
        width: 85%;
        margin: -4% auto;
        padding: 2rem;
      }

      .lineEffect {
        background-image: linear-gradient(to right, transparent, black, transparent);
        width: 110%;
        height: 2px;
        display: flex;
        margin: 20px -5%;
        flex-wrap: nowrap;
        flex-direction: row;
        transition: opacity 0.5s ease;
        opacity: 0;
      }

      .lineEffect.visible {
        opacity: 1;
      }

      .rodape {
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: #f1f1f100;
        color: #333;
        text-align: center;
        padding: 0;
        height: 7%;
      }

      .autoria {
        float: right;
        margin: 0px 20px;
      }

    </style>
  </head>
  <body>
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-dark p-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand fa fa-home" href="#" style="float: left;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav nav-tabs me-auto mb-2 mb-lg-0" role="tablist">
                <li role="presentation" class="active">
                    <a id="btn-galeria" class="nav-link" href="#galeria" aria-controls="galeria" data-toggle="tab">
                        <b>Galeria</b>
                    </a>
                </li>
                <li role="presentation">
                    <a id="btn-formacoes" class="nav-link" href="#formation" aria-controls="formation" data-toggle="tab">
                        <b>Formações</b>
                    </a>
                </li>
                <li role="presentation">
                  <a id="btn-projetos" class="nav-link" href="#project" aria-controls="project" data-toggle="tab">
                      <b>Projetos</b>
                  </a>
                </li>
            </ul>
              <span class="midia">
                <a class="dropdown-item fa fa-instagram" href="https://www.instagram.com/_alanchristofer/" target="_blank"></a>  
              </span>
              <span class="midia">
                <a class="dropdown-item fa fa-facebook-square" href="https://www.facebook.com/alan.christofer.7/" target="_blank"></a>  
              </span>
              <span class="midia">
                <a class="dropdown-item fa fa-linkedin-square" href="https://www.linkedin.com/in/alan-christofer-700612227" target="_blank"></a>  
              </span>
              <span class="midia">
                <a class="dropdown-item fa fa-github" href="https://github.com/DipperOne" target="_blank"></a>  
              </span>
              <span>
                <img class="midia-social" src="../img/midia-social.png" alt="Varias redes sociais">
              </span>      
            </div>
          </div>
        </nav>
      </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <h2 class="nameNavBar" style="color: white; float: left;">Alan Christofer</h2>
        <h2 class="saudacao typing">Seja bem vindo!</h2>
        <h2 class="gallery d-none">Galeria</h2>
        <h2 class="formation d-none">Formações</h2>
        <h2 class="project d-none">Projetos futuros</h2>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
   
    <div class="tab-content">
      <div class="tab-pane active" id="galeria">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
  
            <div class="carousel-item active" >
              <img class="d-block w-100" src="https://i0.wp.com/www.kearipan.com/wp-content/uploads/2022/07/black-clover-anime.jpg?fit=1000%2C625&amp;ssl=1" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://m.media-amazon.com/images/I/71vr4al9WGL._AC_SY679_.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://criticalhits.com.br/wp-content/uploads/2020/09/naruto-tudo-o-que-voce-precisa-saber.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://cdn.maioresemelhores.com/imagens/mm-animes-mais-populares-05.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://1.bp.blogspot.com/-rT2oIGJKJes/X3JaB6FxH2I/AAAAAAAAom0/000O_JlX3R0UBmiO26M72kvPDyBd-KuywCNcBGAsYHQ/s1280/jujutsu-kaisen-anime-divulga-primeiras-imagens-episodio-estreia-armadura-nerd.webp" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://i.pinimg.com/736x/14/4c/e8/144ce8b03f3d62fdbad5153b234b8d35.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://www.torredevigilancia.com/wp-content/uploads/2019/10/coringa-55.jpg" alt="First slide">
            </div>
  
            <div class="carousel-item">
              <img class="d-block w-100" src="https://1.bp.blogspot.com/-rT2oIGJKJes/X3JaB6FxH2I/AAAAAAAAom0/000O_JlX3R0UBmiO26M72kvPDyBd-KuywCNcBGAsYHQ/s1280/jujutsu-kaisen-anime-divulga-primeiras-imagens-episodio-estreia-armadura-nerd.webp">
            </div>
  
            <div class="carousel-item">
              <img class="d-block w-100" src="https://imagens.mdig.com.br/thbs/45184mn.jpg" alt="Third slide">
            </div>
            
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <div class="tab-pane" id="formation">
        <div class="selector">
          <span class="spanSelector">
            <label for="unidade">Selecione a unidade de estudo:</label>            
          </span>
          <span class="spanSelector">
            <select name="unidade" id="unidade">
              <option name="unidade" value="all">Selecionar todos</option>
              <?php
                try {
                  $conn = $pdo->query("SELECT * FROM public.information");
                  $lines = $conn->fetchAll(PDO::FETCH_ASSOC);               
                  
                  foreach ($lines as $line) {
                    $id_unidade = $line['id_unidade'];
                    $unidade = $line['unidade'];  
                    echo '<option name="unidade" value="' . $id_unidade . '">' . $unidade . '</option>';
                  }
                } catch(PDOException $e) {
                    echo "Erro ao executar consulta: " . $e->getMessage();
                }
              ?>
            </select>          
          </span>
          <span class="spanSelector">
            <button id="search" type="submit" class="button btn-search">Pesquisar</button>
          </span>
        </div>
        <div id="table"></div>
      </div>
      <div class="tab-pane" id="project">
        <span class="spanSelector" style="font-size: x-large;">
          Em breve projetos serão postados aqui!
        </span>
      </div>
    </div>
    <footer class="rodape">
      <p class="autoria">&copy; 2023 Apresentation Alan Christofer.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script>
    <script src="../js/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script>
      function showEffect() {
        setTimeout(function() {
          document.querySelector('.lineEffect').classList.add('visible');
        }, 500);
      }

      $('#search').on('click', function() {
        showEffect();
        var unidade = $('#unidade').val();

        $.ajax({
          url: 'formation.php',
          type: 'POST',
          data: { id: unidade },
          
          success: function(response) {
            $('#table').html(response);
          },

          
          error: function(xhr, status, error) {
            console.error('Erro:', error);
          }
        });
      });
    </script>
  </body>
</html>
