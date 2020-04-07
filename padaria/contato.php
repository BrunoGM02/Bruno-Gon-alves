<html lang="pt-br">
    <head>
        <title> Padoka </title>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/hover.css">
    </head>
    <body>
          <!--  CABEÇALHO // MENU  -->
         <?php require_once("require/menu.php")?>
        
            <div id="container_conteudo_contato">
                
                <div class="entre_em_contato">
                    Mande sua SUGESTÃO/CRITICA e entraremos em contato, nossa equipe agradece desde já! :D
                </div>
                
                <div class="duvidas_contato">
                    <div class="nome_contato">
                        Nome*: <input type="text" name="Nome" id="cNome" placeholder="Nome Completo">
                    </div>
                    <div class="nome_contato">
                        Telefone: <input type="text" name="Nome" id="cNome" >
                    </div>
                    <div class="nome_contato">
                        Celular*: <input type="text" name="Nome" id="cNome">
                    </div>
                    <div class="nome_contato">
                        Email*: <input type="email" name="Nome" id="cNome">
                    </div>
                    <div class="nome_contato">
                        Home Page: <input type="text" name="Nome" id="cNome">
                    </div>
                    <div class="nome_contato">
                        Link no Facebook: <input type="text" name="Nome" id="cNome">
                    </div>
                    <div class="nome_contato">
                        Profissão*: <input type="text" name="Nome" id="cNome">
                    </div>
                     <div class="nome_contato">
                        Sugestão/Criticas  
                         <select name="SeC" id="cSeC">
                            <option>Sugestão</option>
                             <option>Critica</option>
                         </select>
                    </div>
                    <div class="nome_contato1">
                       Sexo: <input type="radio" name="tMasc" id="cMasc">Masculino
                       <input type="radio" name="tFem" id="cFem">Feminino
                    </div>
                    
                    <div class="nome_contato" >
                        Menssagem: <textarea name="tMsg" id="cMsg" cols="20" rows="5"> </textarea>
                    </div>
                    
                    
                </div>
                
                <div class="foto_contato">
                   
                </div>
            </div>
        
        <?php require_once("require/rodape.php")?>
        
    </body>
</html>