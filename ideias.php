<?php
    require 'DAO/dbconection.php';
?>
<div class="fullContainer">
    <div class="conteudoContainer">

        <!--botão para cadastrar só aparece se academico estiver logado-->
        <?php
            if ($_COOKIE['logado'] == 'true'){
                echo "<a href=\"#!cadIdeia\" class=\"btn btn-dark btnCadIdeia\">+ Cadastrar Ideia</a>";
                $idAcademico = base64_decode($_COOKIE['idMecer']);
                $sql = "SELECT I.nome, I.objetivo, I.justificativa, I.informacoes, I.caracteristicas FROM ideias I JOIN ideia_academico IA ON I.id = IA.idideia WHERE IA.idacademico = '$idAcademico'";
                $sql = $pdo->query($sql);

                echo "<div class=\"accordion\" id=\"accordionId\">";

                foreach ($sql as $row){
                    $nome = str_replace(' ', '_', $row['nome']);
                    $objetivo = $row['objetivo'];
                    $justificativa = $row['justificativa'];
                    $informacoes = $row['informacoes'];
                    $caracteristicas = $row['caracteristicas'];

                    echo " <div class=\"card\">";
                    echo "    <div class=\"card-header\" id=\"a$nome\">";
                    echo "        <h2 class=\"mb-0\">";
                    echo "            <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#$nome\" aria-expanded=\"false\" aria-controls=\"$nome\">";
                    echo $row['nome'];
                    echo "            </button>";
                    echo "        </h2>";
                    echo "    </div>";
                    echo "    <div id=\"$nome\" class=\"collapse\" aria-labelledby=\"a$nome\" data-parent=\"#accordionId\">";
                    echo "        <div class=\"card-body\">";
                    echo "            <h4 class=\"tituloIdeia\">Objetivos</h4>";
                    echo "            <p>$objetivo</p>";
                    echo "            <h4 class=\"tituloIdeia\">Justificativa</h4>";
                    echo "            <p>$justificativa</p>";
                    echo "            <h4 class=\"tituloIdeia\">Informações</h4>";
                    echo "            <p>$informacoes</p>";
                    echo "            <h4 class=\"tituloIdeia\">Caracteristicas</h4>";
                    echo "            <p>$caracteristicas</p>";
                    echo "        </div>";
                    echo "    </div>";
                    echo "</div>";

                }

                echo "</div>";
            }
        ?>
</div>