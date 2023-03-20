<?php 
    include('connect.php');

    $id = $_POST['id'];

    if ($id != 'all'):
        $allData = false;
        $conn = $pdo->query(
            "select id_unidade
                ,unidade
                ,intro
                ,duracao	
            from  public.information
    
            where id_unidade = $id"
        );
    else:
        $allData = true;
        $conn = $pdo->query("select * from  public.information");
    endif;

    $lines = $conn->fetchAll(PDO::FETCH_ASSOC);               
    
    foreach ($lines as $line):
        $unidade = $line['unidade'];
        $intro = $line['intro'];
        $duracao = $line['duracao'];
    endforeach;

    if ($allData === true):
        echo '
        <div class="lineEffect"></div>
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Unidade</th>
                    <th scope="col">Sobre</th>
                    <th scope="col">Duração</th>
                </tr>
            </thead>
            <tbody>';
                for ($i = 1; $i <= 4; $i++):
                    $unidade = $lines[$i-1]['unidade'];
                    $intro = $lines[$i-1]['intro'];
                    $duracao = $lines[$i-1]['duracao'];
                    echo 
                    '<tr>
                        <th scope="row">'.$i.'</th>
                        <td>'.$unidade.'</td>
                        <td>'.$intro.'</td>
                        <td>'.$duracao.'</td>
                    </tr>';
                endfor;
            echo '</tbody>
        </table>';
    else:
        $unidade = $lines[0]['unidade'];
        $intro = $lines[0]['intro'];
        $duracao = $lines[0]['duracao'];
        echo '
        <div class="lineEfect"></div>
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Unidade</th>
                    <th scope="col">Sobre</th>
                    <th scope="col">Duração</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$unidade.'</td>
                    <td>'.$intro.'</td>
                    <td>'.$duracao.'</td>
                </tr>
            </tbody>
        </table>';
    endif;
    
?>