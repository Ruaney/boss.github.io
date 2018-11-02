<!DOCTYPE <!DOCTYPE html>
<html>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Boss Consultoria</title>
    <!--Referências aos arquivos CSS do Bootstrap.-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body>   
<div class="jumbotron">
    <div class="container">        
    <figure>
        <img class= "imagem1"src="img/boss-simplificada-preta.png" id="zoom">
        <p class="slogan"> <em>Boss Consultoria: Com você, sempre à frente.</em> </p>
    </figure>
    </div>
</div>
<br>
<br>
<div class="row">  
<!--inicio da descriçao-->
    <div class="col-md-4 colum container-fluid">
    <div class="col-sd-5" id="zoom">
    <figure >
        <img  class="imagem2" src="img/ebook-marketing-digital-para-eventos.png" alt = "logo preto " title="Foto do livro de marketing digital">
    </figure >  
    <p >  
        Mussum Ipsum, cacilds vidis litro abertis. Cevadis im ampola 
        pa arma uma pindureta. Atirei o pau no gatis, per gatis num 
        morreus. Praesent vel viverra nisi. Mauris aliquet nunc 
        non turpis scelerisque, eget. Copo furadis é disculpa de bebadis,
        arcu quam euismod magna.
        Mussum Ipsum, cacilds vidis litro abertis. Viva Forevis aptent taciti sociosqu ad litora torquent. Leite de capivaris, leite de mula manquis sem cabeça. In elementis mé pra quem é amistosis quis leo. Vehicula non. Ut sed ex eros. Vivamus sit amet nibh non tellus tristique interdum.
        Mussum Ipsum, cacilds vidis litro abertis. Pra lá , depois divoltis porris, paradis. Admodum accumsan disputationi eu sit. Vide electram sadipscing et per. Viva Forevis aptent taciti sociosqu ad litora torquent. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo!
        Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado.
    </p>
    </div>      
    </div>
<!--Fim da descriçao-->   
        <div class="col-sm-6"></div>  
</div>

<!--Formulario-->
<div class="row no-gutters ">     
    <div class="col-md-4 colum inp container container-fluid">                                   
    <div class="border border-dark rounded " id="zoom">                   
    <form>
    <div id="area" >
        <form id="formulario" autocomplete="off" method="POST" action="sendemail.php">
        <fieldset class="campo_nome ">
            <legend >Formulário</legend>
            <label>Nome:*</label><input class="form-control" type="text" style="padding-right:30px" placeholder="Nome"><br>
            <label>E-mail:*</label><input class="form-control"  type="text" style="padding-right:30px" placeholder="E-mail"><br>
            <label>Celular:*</label><input class="form-control"  type="text" style="padding-right:30px" placeholder="(xx)xxxxx-xxxx"><br>   
            <label>Mensagem:*</label><br><textarea class="msg " cols="35" rows="8" placeholder="Digite aqui sua mensagem."></textarea><br>
            <input class="btn_submit form-control btn-primary" type="submit" value="Enviar">
            <a href="">deixe uma avaliação para nosso serviço.</a>
        </fieldset>
        </form>
       
    </div> 
    </form>
    </div>
    <div class="col-sm-2"></div>   
</div>
<!--FimFormulario-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script> 

</body>
</html>