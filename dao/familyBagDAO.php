<?php

require_once "db/connection.php";
require_once "classes/familyBag.php";

class familyBagDAO
{
    public function remover($familyBag)
    {
        global $pdo;
        try{
            $statement = $pdo->prepare("DELETE FROM tb_familyBag_pbf WHERE id_familyBag_pbf = :id");
            $statement->bindValue(":id", $familyBag->getIdfamilyBagPbf());
            if ($statement->execute()) {
                return "<script> alert('Registro foi excluído com êxito !'); </script>";
            } else {
                throw new PDOException("<script> alert('Não foi possível executar a declaração SQL !'); </script>");
            }
        }catch (PDOException $erro) {
            return "Erro: " . $erro->getMessage();
        }
    }

    public function salvar($familyBag)
    {
        global $pdo;
        try {
            if ($familyBag->getIdfamilyBagPbf() != "") {
                $statement = $pdo->prepare("UPDATE tb_familyBag_pbf SET str_month=:str_month, str_year=:str_year, str_month_reference=:str_month_reference, str_year_reference=:str_year_reference, tb_city_id_city=:tb_city_id_city, tb_beneficiaries_id_beneficiaries=:tb_beneficiaries_id_beneficiaries, str_date_service=:str_date_service, db_value_service=:db_value_service WHERE id_familyBag_pbf = :id;");
                $statement->bindValue(":id", $familyBag->getIdfamilyBagPbf());
            } else {
                $statement = $pdo->prepare("INSERT INTO tb_familyBag_pbf (str_month, str_year, str_month_reference, str_year_reference, tb_city_id_city, tb_beneficiaries_id_beneficiaries, str_date_service, db_value_service) VALUES (:str_month, :str_year, :str_month_reference, :str_year_reference, :tb_city_id_city, :tb_beneficiaries_id_beneficiaries, :str_date_service, :db_value_service)");
            }
            $statement->bindValue(":str_month", $familyBag->getStrMonth());
            $statement->bindValue(":str_year", $familyBag->getStrYear());
            $statement->bindValue(":str_month_reference", $familyBag->getStrMonthReference());
            $statement->bindValue(":str_year_reference", $familyBag->getStrYearReference());
            $statement->bindValue(":tb_city_id_city", $familyBag->getTbCityIdCity());
            $statement->bindValue(":tb_beneficiaries_id_beneficiaries", $familyBag->getTbBeneficiariesIdBeneficiaries());
            $statement->bindValue(":str_date_service", $familyBag->getStrDateService());
            $statement->bindValue(":db_value_service", $familyBag->getDbValueService());

            if ($statement->execute()) {
                if ($statement->rowCount() > 0) {
                    return "<script> alert('Dados cadastrados com sucesso !'); </script>";
                } else {
                    return "<script> alert('Erro ao tentar efetivar cadastro !'); </script>";
                }
            } else {
                throw new PDOException("<script> alert('Não foi possível executar a declaração SQL !'); </script>");
            }
        }catch (PDOException $erro) {
            return "Erro: " . $erro->getMessage();
        }
    }

    public function atualizar($familyBag)
    {
        global $pdo;
        try {
            $statement = $pdo->prepare("SELECT id_familyBag_pbf, str_month, str_year, str_month_reference, str_year_reference, tb_city_id_city, tb_beneficiaries_id_beneficiaries, str_date_service, db_value_service FROM tb_familyBag_pbf WHERE id_familyBag_pbf = :id");
            $statement->bindValue(":id", $familyBag->getIdfamilyBagPbf());
            if ($statement->execute()) {
                $rs = $statement->fetch( PDO::FETCH_OBJ);
                $familyBag->setIdfamilyBagPbf($rs->id_familyBag_pbf);
                $familyBag->setStrMonth($rs->str_month);
                $familyBag->setStrYear($rs->str_year);
                $familyBag->setStrMonthReference($rs->str_month_reference);
                $familyBag->setStrYearReference($rs->str_year_reference);
                $familyBag->setTbCityIdCity($rs->tb_city_id_city);
                $familyBag->setTbBeneficiariesIdBeneficiaries($rs->tb_beneficiaries_id_beneficiaries);
                $familyBag->setStrDateService($rs->str_date_service);
                $familyBag->setDbValueService($rs->db_value_service);

                return $familyBag;
            } else {
                throw new PDOException("<script> alert('Não foi possível executar a declaração SQL !'); </script>");
            }
        }catch (PDOException $erro) {
            return "Erro: " . $erro->getMessage();
        }
    }

    public function tabelapaginada()
    {
        //carrega o banco
        global $pdo;

        //endereço atual da página
        $endereco = $_SERVER ['PHP_SELF'];

        /* Constantes de configuração */
        define('QTDE_REGISTROS', 10);
        define('RANGE_PAGINAS', 2);

        /* Recebe o número da página via parâmetro na URL */
        $pagina_atual = (isset($_GET['page']) && is_numeric($_GET['page'])) ? $_GET['page'] : 1;

        /* Calcula a linha inicial da consulta */
        $linha_inicial = ($pagina_atual - 1) * QTDE_REGISTROS;

        /* Instrução de consulta para paginação com MySQL */
        // $sql = "SELECT C.id_city, S.str_uf as tb_state, C.str_name_city, C.str_cod_siafi_city FROM tb_city C INNER JOIN tb_state S ON S.id_state = C.tb_state_id_state LIMIT {$linha_inicial}, " . QTDE_REGISTROS;

        //$sql = "SELECT id_familyBag_pbf, str_month, str_year, str_month_reference, str_year_reference, tb_city_id_city, tb_beneficiaries_id_beneficiaries, str_date_service, db_value_service FROM tb_familyBag_pbf LIMIT {$linha_inicial}, " . QTDE_REGISTROS;

        $sql = "SELECT f.id_familyBag_pbf, f.str_month, f.str_year, f.str_month_reference, f.str_year_reference, c.str_name_city, b.str_name_person ,f.str_date_service, f.db_value_service
        FROM tb_familyBag_pbf f, tb_city c, tb_beneficiaries b 
        WHERE f.tb_city_id_city = c.id_city and f.tb_beneficiaries_id_beneficiaries = b.id_beneficiaries LIMIT {$linha_inicial}, " . QTDE_REGISTROS;


        $statement = $pdo->prepare($sql);
        $statement->execute();
        $dados = $statement->fetchAll(PDO::FETCH_OBJ);

        /* Conta quantos registos existem na tabela */
        $sqlContador = "SELECT COUNT(*) AS total_registros FROM tb_familyBag_pbf";
        $statement = $pdo->prepare($sqlContador);
        $statement->execute();
        $valor = $statement->fetch(PDO::FETCH_OBJ);

        /* Idêntifica a primeira página */
        $primeira_pagina = 1;

        /* Cálcula qual será a última página */
        $ultima_pagina = ceil($valor->total_registros / QTDE_REGISTROS);

        /* Cálcula qual será a página anterior em relação a página atual em exibição */
        $pagina_anterior = ($pagina_atual > 1) ? $pagina_atual - 1 : 0;

        /* Cálcula qual será a pŕoxima página em relação a página atual em exibição */
        $proxima_pagina = ($pagina_atual < $ultima_pagina) ? $pagina_atual + 1 : 0;

        /* Cálcula qual será a página inicial do nosso range */
        $range_inicial = (($pagina_atual - RANGE_PAGINAS) >= 1) ? $pagina_atual - RANGE_PAGINAS : 1;

        /* Cálcula qual será a página final do nosso range */
        $range_final = (($pagina_atual + RANGE_PAGINAS) <= $ultima_pagina) ? $pagina_atual + RANGE_PAGINAS : $ultima_pagina;

        /* Verifica se vai exibir o botão "Primeiro" e "Pŕoximo" */
        $exibir_botao_inicio = ($range_inicial < $pagina_atual) ? 'mostrar' : 'esconder';

        /* Verifica se vai exibir o botão "Anterior" e "Último" */
        $exibir_botao_final = ($range_final > $pagina_atual) ? 'mostrar' : 'esconder';

        if (!empty($dados)):
            echo "
       <table class='table table-striped table-bordered'>
       <thead>
         <tr style='text-transform: uppercase;' class='active'>
            <th style='text-align: center; font-weight: bolder;'>Code</th>
            <th style='text-align: center; font-weight: bolder;'>Month</th>
            <th style='text-align: center; font-weight: bolder;'>Year</th>
            <th style='text-align: center; font-weight: bolder;'>Month Reference</th>
            <th style='text-align: center; font-weight: bolder;'>Year Reference</th>
            <th style='text-align: center; font-weight: bolder;'>City</th>
            <th style='text-align: center; font-weight: bolder;'>Beneficiarie</th>            
            <th style='text-align: center; font-weight: bolder;'>Data Service</th>
            <th style='text-align: center; font-weight: bolder;'>Value Service</th>
            <th style='text-align: center; font-weight: bolder;' colspan='2'>Actions</th>
       </tr>
       </thead>
       <tbody>";
            foreach ($dados as $familyBag):

                $valor = "R$ " . number_format($familyBag->db_value_service, 2, ',', '.');

                echo "<tr>
          
          <td style='text-align: center'>$familyBag->id_familyBag_pbf</td>
          <td style='text-align: center'>$familyBag->str_month</td>
          <td style='text-align: center'>$familyBag->str_year</td>
          <td style='text-align: center'>$familyBag->str_month_reference</td>
          <td style='text-align: center'>$familyBag->str_year_reference</td>
          <td style='text-align: center'>$familyBag->str_name_city</td>
          <td style='text-align: center'>$familyBag->str_name_person</td>
          <td style='text-align: center'>$familyBag->str_date_service</td>
          <td style='text-align: center'>$valor</td>
          <td style='text-align: center'><a href='?act=upd&id=$familyBag->id_familyBag_pbf' title='Alterar'><i class='ti-reload'></i></a></td>
          <td style='text-align: center'><a href='?act=del&id=$familyBag->id_familyBag_pbf' title='Remover'><i class='ti-close'></i></a></td>
          </tr>";
            endforeach;
            echo "
</tbody>  
     </table> 
        
        <div class='box-paginacao' style='text-align: center'>
        <a class='box-navegacao  $exibir_botao_inicio' href='$endereco?page=$primeira_pagina' title='Primeira Página'> FIRST  |</a>
        <a class='box-navegacao  $exibir_botao_inicio' href='$endereco?page=$pagina_anterior' title='Página Anterior'> PREVIOUS  |</a>
 ";

            for ($i = $range_inicial; $i <= $range_inicial; $i++):
                $destaque = ($i == $pagina_atual) ? 'destaque' : '';
                echo "<a class='box-numero $destaque' href='$endereco?page=$i'> ( $i ) </a>";
            endfor;

            echo "<a class='box-navegacao $exibir_botao_final' href='$endereco?page=$proxima_pagina' title='Próxima Página'>| NEXT  </a>
                  <a class='box-navegacao $exibir_botao_final' href='$endereco?page=$ultima_pagina'  title='Última Página'>| LAST  </a>
               
    </div>";
        else:
            echo "<p class='bg-danger'>Nenhum registro foi encontrado!</p>
         ";
        endif;

    }

}