
<form id="resenha" action="" method="">


    <legend class="legendform">Informações do produto</legend>  
    <fieldset id="inform_produto">
        <label class="tituloform">Nome do Produto:</label>
        <input type="text" class="COD_PRODUTO" name="COD_PRODUTO" placeholder="ex: Iphone 6" id="inputpadraoresenha"><br>



        <label class="tituloform">Nota:</label>
        <input type="number" class="NOTA_PRODUTO" name="NOTA_PRODUTO" placeholder="classifique o produto de 0 a 5 pontos" min="0" max="5" required="required" id="inputpadraoresenha">


    </fieldset>
    <style>
        .tituloFormulario{display: block; width: 100%; height: 20px; color: #000; font-size: 18px; padding-top: 10px;}
        .inputQualidades{display: block; width: 150px; height: 20px; margin-top: 5px;}
        .qualidades{width: 200px; margin-left: 20px; height: auto;}
        .j_qualidades{width: 30px; height: 30px; border: none; cursor: pointer; background-color: #ccc;}
        .boxQualDef{width: 200px; height:  auto; margin-left: 20px;}

    </style>
    <legend class="legendform">Qualidades e defeitos</legend>
    <fieldset id="opiniao_geral">
        <div class="boxQualDef">
            <label class="tituloFormulario">Qualidades</label>

            <div class="qualidades">

                <input type="text" name="qualidades[]" class="inputQualidades" name="inputTitulo"/>

            </div>

            <button class="j_qualidades">+</button>

            <p class="msgQualidades"></p>
        </div>

        <div class="boxQualDef">
            <label class="tituloFormulario">Qualidades</label>

            <div class="defeitos">

                <input type="text" name="defeitos[]" class="inputQualidades" name="inputTitulo"/>

            </div>

            <button class="j_defeitos">+</button>

            <p class="msgDefeitos"></p>
        </div>

    </fieldset>
    <legend class="legendform">Opinião geral sobre o produto</legend>
    <fieldset id="opiniao_geral">
        <label class="tituloform">Conte-nos de forma mais detalhada o porque da sua avaliação:</label> <br>
        <textArea class="CORPO_RESENHA" name="CORPO_RESENHA" rows="6"  required="required" id="areadetextoresenha"></textArea><br>                    
    </fieldset>
                    <input type="submit" value="Resenhar" id="botaoresenha">
                </form>

            </form>

            
            

