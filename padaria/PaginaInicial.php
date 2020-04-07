<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Padoka </title>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/hover.css">
        <link rel="stylesheet" type="text/css" href="javascript/css/slider.css">
         <link rel="stylesheet" type="text/css" href="javascript/js/slidershow.js">
         <link rel="stylesheet" type="text/css" href="javascript/index.php">
        
    </head>
    <body>
        
        
        <!--  CABEÇALHO // MENU  -->
    
        
        
        <header id="container_cabecalho">
            <div class="menu">
                <div class="logo">
                
                </div>
                <div class="botoes">
                    <div class="home">
                            <a href="PaginaInicial.php">HOME</a>  
                    </div>
                    <div class="home">
                            <a href="sobre.php">SOBRE NÓS </a> 
                    </div>
                    <div class="home">
                            <a href="lojas.php">LOJAS </a> 
                    </div>
                    <div class="home">
                            <a href="eventos.php">EVENTOS</a>
                    </div>
                    <div class="home">
                           <a href="delivery.php">DELIVERY</a>  
                    </div>
                    <div class="home">
                            <a href="fidelidade.php">FIDELIDADE</a> 
                    </div>
                    <div class="home">
                           <a href="contato.php">CONTATO</a> 
                    </div>
                </div>
                
            <div class="login">
                
                <form name="frmlogin" method="post" action="PaginaInicial.php">
                   
                <div class="usuario">
                    Usuário: 
                    <input type="text" name="Login" style="width:100px">    
                </div>
                
                <div class="senha">
                    Senha:
                    <input type="password" name="Senha" style="width:100px"><br>    
                </div>
                
                <div class="submit"><input type="submit" value="Entrar"></div>
               
                    
                    
                </form>

            </div>
                
                
            </div>
        
        </header>
        
        <!-- CONTAINER GERAL //  SLIDER // CONTEUDO -->
        
        <div id="container_geral">
            
            <div id="container_slider">
                <?php require_once("javascript/index.php"); ?>
            </div>
    
            <div id="container_conteudo">
                <ul class="menu_vertical">
                    <li class="botao_itens">
                        <p>
                            ITENS 1
                        </p>
                    </li>
                    <li class="botao_itens">
                        <p>
                            ITENS 2 
                        </p>
                    </li>
                
                </ul>
                
            
                <div class="card">
                    <div class="img_card card1">
                        
                    </div>
                    <div class="descricao_card">
                        <div class="nome_card">Nome:</div>
                        <div class="descricao2_card">Descrição:</div>
                        <div class="preco_card">Preço:</div>
                        <div class="detalhe_card">Detalhes</div>
                        
                    </div>
                </div>
                <div class="card">
                    <div class="img_card card2">
                        
                    </div>
                    <div class="descricao_card">
                        <div class="nome_card">Nome:</div>
                        <div class="descricao2_card">Descrição:</div>
                        <div class="preco_card">Preço:</div>
                        <div class="detalhe_card">Detalhes</div>
                    </div>
                    
                </div>
                <div class="card">
                    <div class="img_card card3">
                        
                    </div>
                    <div class="descricao_card">
                        <div class="nome_card">Nome:</div>
                        <div class="descricao2_card">Descrição:</div>
                        <div class="preco_card">Preço:</div>
                        <div class="detalhe_card">Detalhes</div>
                    </div>
                </div>
                <div class="card">
                    <div class="img_card card4">
                        
                    </div>
                    <div class="descricao_card">
                        <div class="nome_card">Nome:</div>
                        <div class="descricao2_card">Descrição:</div>
                        <div class="preco_card">Preço:</div>
                        <div class="detalhe_card">Detalhes</div>
                    </div>
                </div>
                <div class="card">
                    <div class="img_card card5">
                        
                    </div>
                    <div class="descricao_card">
                        <div class="nome_card">Nome:</div>
                        <div class="descricao2_card">Descrição:</div>
                        <div class="preco_card">Preço:</div>
                        <div class="detalhe_card">Detalhes</div>
                    </div>
                </div>
                <div class="card">
                    <div class="img_card card6">
                        
                    </div>
                    <div class="descricao_card">
                        <div class="nome_card">Nome:</div>
                        <div class="descricao2_card">Descrição:</div>
                        <div class="preco_card">Preço:</div>
                        <div class="detalhe_card">Detalhes</div>
                    </div>
                </div>
                
                
                
                
            </div>
            <div id="container_rs">
                
                    <div class="icone_facebook">
                       
                    </div>
                
                    <div class="icone_insta">
                       
                    </div>
                               
                    <div class="icone_youtube">
                       
                    </div>

        
                </div>
            
        </div>
        
        <!-- FOOTER = RODAPÉ -->
        
        <footer id="container_footer">
            <div class="sistema_interno">
                <div class="formatacao">
                    Sistema Interno
                </div>
            </div>
            
            <div class="contatos">
                <h2>
                Endereço: Av. Luis Carlos Berrini, nº 666 --- Telefone: (11)xxxxx-xxxx --- WhatsApp: (11)xxxxx-xxxxx;
                </h2>
            </div>
            
            <div class="img_download">
            
            </div>
            
            <div class="baixe_o_app hvr-bubble-float-bottom">
                    Baixe o App
            </div>
            
            
        </footer>
        
    
      
        
    </body>
</html>