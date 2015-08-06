<?php

class Consultas {

//banco
    var $servidor = "mysql.hostinger.com.br"; // Servidor, no caso poderia ser também localhost
    var $usuario = "u304881331_root"; // usuário do banco de dados
    var $senha = "emduvida"; // senha do banco de dados
    var $banco = "u304881331_duvid"; // nome do banco de dados
//se desejar ativar conexão local use:
    var $ativa_local = 1; //1 - usa conexao local, 0 - usa conexao remota
    var $usuario_local = "u304881331_root";
    var $senha_local = "emduvida";
    var $conexao = null; // armazena a nossa conexao
    var $conexaoBanco = null; // armazena a selecao do nosso banco
//querys
    var $query;
    var $tabela;
    var $ordem = null;
    var $limite = null;
    var $sql;
    var $registros;
    var $acao;
//PARA ATIVAR A URL AMIGÁVEL
    var $ativaSEO = 0;
    var $total_registros = 0;

    /* ------------------CONEXAO -------------------- */

    public function conecta() {

        if ($this->ativa_local == 1) {
            $this->servidor ? $_SERVER['HTTP_HOST'] : "localhost";
            $this->usuario = $this->usuario_local;
            $this->senha = $this->senha_local;
        }

        $this->conexao = @mysql_connect($this->servidor, $this->usuario, $this->senha) or die("Falha ao conectar com o banco de dados");
        $this->conexaoBanco = mysql_select_db($this->banco, $this->conexao) or die("Falha ao selecionar banco de dados");
        return $this->conexaoBanco;
    }

    public function desconecta() {
        mysql_close($this->conexao);
    }

    /* ------------------CONEXAO -------------------- */

//FUNÇÃO QUE RECEBE A QUERY
    public function query($sql) {
        $this->sql = $sql;
        return $this->actQuery();
    }

//FUNÇÃO DE URL AMIGÁVEL
    public function seo($url, $seo) {
        if ($this->ativaSEO == 1)
            return $seo;
        else
            return $url;
    }

//PAGINAÇÃO DE DADOS
    public function setPage($n_paginas, $url, $seourl) {

        $pagina = addslashes(strip_tags(trim($_REQUEST["pagina"])));
        if ($pagina == "") {
            $pagina = 1;
        }
//define a qtde de registro por página
        $max = $n_paginas;
//organiza paginação
        $inicio = $pagina - 1;
        $inicio = $max * $inicio;

        $total_da_lista = $this->total();
        $this->sql .=" LIMIT $inicio,$max";
        $this->acao = mysql_query($this->sql) or die("Erro na consulta!<br>Verifique a query executada:<br>" . $this->sql . " -> Erro: " . mysql_error());

        if (strpos($url, "?") > 0)
            $ligamento = "&";
        else
            $ligamento = "?";

        if ($max != 0) {
            $pag = "<div align=\"center\" style=\"display:block; padding:6px;clear:both;\">";
// Calculando pagina anterior
            $menos = $pagina - 1;
// Calculando pagina posterior
            $mais = $pagina + 1;
            $pgs = ceil($total_da_lista / $max);

            if ($pgs > 1) {
                if ($menos > 0)
                    $pag.="<a href=\"" . $this->seo($url . $ligamento . "pagina=$menos", $seourl . "/pg/$menos") . "\" class='texto_paginacao'>&laquo; Anterior</a> ";

                if (($pagina - 4) < 1)
                    $anterior = 1;
                else
                    $anterior = $pagina - 1;

                if (($pagina + 4) > $pgs)
                    $posterior = $pgs;
                else
                    $posterior = $pagina + 1;

                for ($i = $anterior; $i <= $posterior; $i++)
                    if ($i != $pagina)
                        $pag.=" <a href=\"" . $this->seo($url . $ligamento . "pagina=$i", $seourl . "/pg/$i") . "\" class='texto_paginacao'>$i</a>";
                    else
                        $pag.=" <strong class='texto_paginacao_pgatual'>" . $i . "</strong>";
                if ($mais  <=$pgs){
                    
                     $i = $pagina + 1;
                
                    $pag.=" <a href=\"" . $this->seo($url . $ligamento . "pagina=$i", $seourl . "/pg/$i") . "\" class='texto_paginacao'>Pr&oacute;xima &raquo;</a>";
                }
                    
                }
            $pag.="</div>";
        }
        return $pag;
    }

//EXECUTA A QUERY DE MODO PRIVADO
    private function actQuery() {
        $this->acao = mysql_query($this->sql) or die("Erro na consulta!<br>Verifique a query executada:<br>" . $this->sql . " -> Erro: " . mysql_error());
    }

//FAZ A CONSULTA NO BANCO, CASO o $exibe=1, mostra resultados não encontrados em caso de nulo.
    public function resultados($titulo = "", $exibe = 0) {
        if (mysql_num_rows($this->acao) == 0 && $exibe == 1) {
            echo $titulo;
        } else {
            $this->registros = mysql_fetch_array($this->acao);
            return $this->registros;
        }
    }

//EXIBE O TOTAL DE REGISTROS DA CONSULTA
    public function total() {
        $this->total_registros = mysql_num_rows($this->acao);
        return $this->total_registros;
    }

    public function exibeRegistros() {
        if ($this->total() == 1)
            return "Foi encotrado <strong>" . $this->total() . "</strong> registro.";
        else
            return "Foram encotrados <strong>" . $this->total() . "</strong> registros.";
    }

}

?>
