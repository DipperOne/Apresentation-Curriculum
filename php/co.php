<!-- ARQUIVO DE TESTES... -->

<div class="parent-grid-container">

    <?php $count = 20; ?>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bloco-a"><span class="default-text">Bloco</span> <span class="hover-text">A</span></button>
    
    <div class="modal" id="bloco-a">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">BLOCO - A</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
    
                <div class="modal-body">
                    <div class="grid-container-20">
                        <?php
                            for ($i = 1; $i <= $count; $i++) { ?>
                                <div class="box" value="<?php echo $i; ?>"> <?php echo $i; ?> </div>
                        <?php } $count += 20; ?>
                    </div>
                        
                    <div id="tabela" class="col-md-12">
                        <button type="button" class="back-box fa fac-chevron-circle-left"></button>
                        <input type="hidden" name="ofst" id="ofst">
                        <table id="tabelaCabinet" style="width: 100%;" class="table table-sm table-dark display">
                            <thead id="tableHeader" class="thead-dark">
                                <tr>                                    
                                </tr>
                            </thead>
                        </table>                        
                    </div>
                </div>
    
                <div class="modal-footer">
                    <button type="button" class="btn-danger" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn-all">Ver todos</button>
                </div>
    
            </div>
        </div>
    </div>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bloco-b"><span class="default-text">Bloco</span> <span class="hover-text">B</span></button>
    
    <div class="modal" id="bloco-b">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">BLOCO - B</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
    
                <div class="modal-body">
                    <div class="grid-container-20">
                        <?php
                            for ($i = 1; $i <= $count; $i++) { ?>
                                <div class="box" value="<?php echo $i; ?>"> <?php echo $i; ?> </div>
                        <?php } $count += 20; ?>
                    </div>
                        
                    <div id="tabela" class="col-md-12">
                        <button type="button" class="back-box fa fac-chevron-circle-left"></button>
                        <input type="hidden" name="ofst" id="ofst">
                        <table id="tabelaCabinet" style="width: 100%;" class="table table-sm table-dark display">
                            <thead id="tableHeader" class="thead-dark">
                                <tr>                                    
                                </tr>
                            </thead>
                        </table>                        
                    </div>
                </div>
    
                <div class="modal-footer">
                    <button type="button" class="btn-danger" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn-all">Ver todos</button>
                </div>

            </div>
        </div>
    </div>
    
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bloco-c"><span class="default-text">Bloco</span> <span class="hover-text">C</span></button>
    
    <div class="modal" id="bloco-c">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">BLOCO - C</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
    
                <div class="modal-body">
                    <div class="grid-container-20">
                        <?php
                            for ($i = 1; $i <= $count; $i++) { ?>
                                <div class="box" value="<?php echo $i; ?>"> <?php echo $i; ?> </div>
                        <?php } $count += 20; ?>
                    </div>
                        
                    <div id="tabela" class="col-md-12">
                        <button type="button" class="back-box fa fac-chevron-circle-left"></button>
                        <input type="hidden" name="ofst" id="ofst">
                        <table id="tabelaCabinet" style="width: 100%;" class="table table-sm table-dark display">
                            <thead id="tableHeader" class="thead-dark">
                                <tr>                                    
                                </tr>
                            </thead>
                        </table>                        
                    </div>
                </div>
    
                <div class="modal-footer">
                    <button type="button" class="btn-danger" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn-all">Ver todos</button>
                </div>
    
            </div>
        </div>
    </div>
$(document).ready(function() {

    var armarios = $('.box');

    <?php 
        $matricula = json_encode($item[0]);
        $funcionario = json_encode($item[1]);
        $gestor = json_encode($item[2]);
        $setor = json_encode($item[3]);
        $numArmario = json_encode($item[4]);
    ?>
    
    armarios.click()function() {
        if($.fn.DataTable.isDataTable('#tableCabinet')) {
            tableCabinet.clear().destroy();
        }
    
        tableCabinet = $('#tableCabinet').DataTable({
            dom 'frtipB',
            order: [0, "desc"],
            searching: true,
            paging true,
            pageLenght: 10,
            info: true,
            columns: [
                { title: "Matrícula"},
                { title: "Funcionário" },
                { title: "Gestor" },
                { title: "Setor" },
                { title: "N° Armário" }
            ]
        });
        
        var arrayM = '<?php echo $matricula; ?>';
        var matricula = JSON.parse(arrayM);
        var arrayF = '<?php echo $funcionario; ?>';
        var funcionario = JSON.parse(arrayF);
        var arrayG = '<?php echo $gestor; ?>';
        var gestor = JSON.parse(arrayG);
        var arrayS = '<?php echo $setor; ?>';
        var setor = JSON.parse(arrayS);
        var arrayN = '<?php echo $numArmario; ?>';
        var numArmario = JSON.parse(arrayN);
    
        var index = $(this).index();
        var values = [
            matricula[index],
            funcionario[index],
            gestor[index],
            setor[index],
            numArmario[index] 
        ];
        tableCabinet.row.add(values).draw();
    }
})


<?php $count = 20; ?>

<div class="parent-grid-container">

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bloco-a"><span class="default-text">Bloco</span> <span class="hover-text">A</span></button>
    
    <div class="modal" id="bloco-a">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">BLOCO - A</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
    
                <div class="modal-body">
                    <div class="grid-container-20">
                        <?php
                            for ($i = 1; $i <= $count; $i++) { ?>
                                <div class="box" value="<?php echo $i; ?>"> <?php echo $i; ?> </div>
                        <?php } $count += 20; ?>
                    </div>
                        
                    <div id="tabela" class="col-md-12">
                        <button type="button" class="back-box fa fac-chevron-circle-left"></button>
                        <input type="hidden" name="ofst" id="ofst">
                        <table id="tabelaCabinet" style="width: 100%;" class="table table-sm table-dark display">
                            <thead id="tableHeader" class="thead-dark">
                                <tr>                                    
                                </tr>
                            </thead>
                        </table>                        
                    </div>
                </div>
    
                <div class="modal-footer">
                    <button type="button" class="btn-danger" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn-all">Ver todos</button>
                </div>
    
            </div>
        </div>
    </div>
</div>


<?php
// Definir o número total de caixas
$qtd_blocos = 100;

// Definir o número de caixas por bloco
$qtd_armarios = 18;

// Inicializar a variável de controle de bloco
$bloco = 'A';
?>

<div class="parent-grid-container">
    <?php for ($i = 0; $i < $qtd_blocos; $i += $qtd_armarios): ?>
        <?php
        // Definir o bloco atual
        $prox_bloco = chr(ord($bloco) + 1);
        $bloco = ($prox_bloco <= 'Z') ? $bloco . '-' . $prox_bloco : $bloco;

        // Definir o número de caixas neste bloco
        $caixas_neste_bloco = min($qtd_blocos - $i, $qtd_armarios);

        // Atualizar a variável de controle de bloco para o próximo bloco
        $bloco = $prox_bloco;
        ?>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bloco-<?php echo $bloco; ?>">
            <span class="default-text">Bloco</span> <span class="hover-text"><?php echo $bloco; ?></span>
        </button>

        <div class="modal" id="bloco-<?php echo $bloco; ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">BLOCO - <?php echo $bloco; ?></h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <div class="grid-container-<?php echo $caixas_neste_bloco; ?>">
                            <?php for ($j = 1; $j <= $caixas_neste_bloco; $j++): ?>
                                <div class="box" value="<?php echo $i + $j; ?>"><?php echo $i + $j; ?></div>
                            <?php endfor; ?>
                        </div>

                        <div id="tabela" class="col-md-12">
                            <button type="button" class="back-box fa fac-chevron-circle-left"></button>
                            <input type="hidden" name="ofst" id="ofst">
                            <table id="tabelaCabinet" style="width: 100%;" class="table table-sm table-dark display">
                                <thead id="tableHeader" class="thead-dark">
                                    <tr>                                    
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn-danger" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" class="btn-all">Ver todos</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endfor; ?>
</div>

<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active">
        <a href="#layout" aria-controls="layout" data-toggle="tab">
            <b>Layout</b>
        </a>
    </li>
    <li role="presentation" class="active">
        <a href="#cadastro" aria-controls="cadastro" data-toggle="tab">
            <b>Cadastro</b>
        </a>
    </li>
    <li role="presentation" class="active">
        <a href="#controll" aria-controls="controll" data-toggle="tab">
            <b>Controle</b>
        </a>
    </li>
    <li role="presentation" class="active">
        <a href="#editar" aria-controls="editar" data-toggle="tab">
            <b>Edição</b>
        </a>
    </li>
</ul>

<div class="tab-content">
    <div class="tab-pane active" id="layout">Layout</div>
</div>
<div class="tab-content">
    <div class="tab-pane active" id="cadastro">Cadatro</div>
</div>
<div class="tab-content">
    <div class="tab-pane active" id="controll">Controle</div>
</div>
<div class="tab-content">
    <div class="tab-pane active" id="editar">Editar</div>
</div>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Carrossel de Pop-ups Modais</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<h1>Carrossel de Pop-ups Modais</h1>
		<hr>

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicadores do Carrossel -->
			<ul class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ul>

			<!-- Slides do Carrossel -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Pop-up Modal 1</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
								<p>Conteúdo do Pop-up Modal 1.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="carousel-item">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Pop-up Modal 2</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
								<p>Conteúdo do Pop-up Modal 2.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="carousel-item">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Pop-up Modal 3</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
								<p>Conteúdo do Pop-up Modal 3.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Controles do Carrossel -->
			<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#myCarousel" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
	</div>

