<?php 
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <title>Fastwork</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	
</head>
<body>
	<style>
.carousel-inner{
      width: 80%; 
	 
	  margin: auto;  
	    
  }
  #estado{
	
   -webkit-appearance: none; 
   width: 270px; /* Tamanho do select, maior que o tamanho da div "div-select" */
      height:32px; 
	  border-radius:4px;
  }
  
  #objetivo{
	  width:300px;
	  height:100px;
  }
  #mycaro{
    width:100%;
  }
  .label{
    font-color: black;
  }

	</style>
<!-- precisa arrumar a função de adicionar telefones  -->
  <script>
   var tel = 1, forma=1, expe=1;
  $(document).on('click','#primeiro',function(){
    
    if(tel>3){}
      else{
    $('#tels').append('<div class="col-md-3">Telefone <input type="text" name="tel[]" class="form-control" ><i class="btn btn-danger plus" id="menosp">-</i></div>');
    tel++;
  }
});

  $(document).on('click','#menosp',function(){
    $(this).parent().remove();
    tel--;
    
  });
 $(document).on('click','#segundo',function(){
    
    if(forma>3){}
      else{
    $('#forma').append(`<div class="col-md-3"><label for="nome">Formação</label><input type="nome" class="form-control" id="" placeholder="Ex:Desenvolvimento de Sistemas" name="formacao[]"><label for="nome">Instituição</label><input type="nome" class="form-control" id="" placeholder="Ex: ETEC " name="instituicao[]"><label for="periodo">Periodo de:</label><input type="date" name="anoperiodo" class="form-control"><label for="periodofinal">Até:</label><input type="date" name="anoperiodofinal" class="form-control"><i class="btn btn-danger plus" id="menos">-</i> </div>`);
    forma++;
      }

});
  $(document).on('click','#menos',function(){
    
        $(this).parent().remove();
        forma--;
      
  }
  );
  $(document).on('click','#plugexperiencia',function(){
      if (expe>3) {}
        else{

          $('plugexperiencia').append()
        }


  })
  </script>
<!-- navbar cabeçalho -->
<br>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Fastwork</a>
    </div>
    <ul class="nav navbar-nav" >
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Redes Sociais</a></li>
      <li><a href="#">Quem Somos</a></li>
      <li><a href="#">Contato</a></li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
<!-- titulo da pagina -->
<div class="col-md-12" id="titulo" style="text-align: center;"> 
<h1>Crie seu Curriculo com Agilidade.</h1>
<p>Rapidez e Qualidade, ja são mais de 18.000.000 de ususarios.</p>  
</div><br><br><br><br>

<!-- carousel  após o titulo -->
<div class="row">
<div class="container">
 <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" >
      <div class="item active" >
        <img src="img/img1.png" alt="Los Angeles" style="width:100%; height: 50%;">
      </div>

      <div class="item">
        <img src="img/img2.png" alt="Chicago" >
      </div>
    
      <div class="item">
        <img src="img/img3.png" alt="New york" style="width:100%;">
      </div>
    </div>
  </div>
</div>
</div>
<br><br>
<!-- titulo para iniciar -->
<div class="row">
	<div class="col-md-12" style="text-align:center;">
<h2 >Vamos la ?</h2>
</div>
</div><br><br>
<!-- campos para os dados -->
<form action="/action_page.php">
<div class="row">

    <div class="col-md-3">
      <label for="nome">Nome</label>
      <input type="nome" class="form-control" id="nome" placeholder="Ex: José Silva" name="nome">
	</div>
	<div class="col-md-3">
      <label for="data">Data de Nascimento</label>
      <input type="date" class="form-control" id="data"  name="data">
	</div>
	
	
	<div class="col-md-3">
      <label for="name">Cargo</label>
      <input type="text" class="form-control" placeholder="Ex: Gestor de TI" id="cargo"  name="cargo">
	</div>
</div><br><br>

<div class="row"> 

  <div class="col-md-3">
  <div class="form-group">
      <label for="exampleFormControlTextarea1">Descreva seu Objetivo</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="objetivo"></textarea>
  </div>
	</div>

</div><br>
<div class="row">
  <span id="tels">
    <div class="col-md-3" id="tels">
     Telefone <input type="text" name="tel[]" class="form-control" >
     <i class="btn btn-danger plus" id="primeiro">+</i>
    </div>
  </span>
  </div>
  </form>
</div><br><br>
<div class="container-fluid">
<div class="row" id="forma">
 
  <!-- formação escolar -->
 <div class="col-md-3" id="forma">
   <label for="nome">Formação</label>
      <input type="nome" class="form-control" id="" placeholder="Ex:Desenvolvimento de Sistemas" name="nome">

      <label for="nome">Instituição</label>
      <input type="nome" class="form-control" id="" placeholder="Ex: ETEC " name="nome">
      <label for="periodo">Periodo de:</label>
      <input type="date" name="anoperiodo" class="form-control">
      <label for="periodofinal">Até:</label>
      <input type="date" name="anoperiodofinal" class="form-control">
 <i class="btn btn-danger plus" id="segundo">+</i> 
</div>
</div>
<br><br>
<div class="row" id="expemais">

  <!-- experiencias  -->
    <div class="col-md-3">
      <h4>  Experiencias</h4>
      <label for="Profissão">Profissão </label>
      <input type="text" name="esperiencia" class="form-control" id="" placeholder="Ex: Gestor de TI" name="experiencia">
      <label for="empersa">Empresa</label>
      <input type="text" name="empresa" class="form-control" id="" placeholder="Ex: Google" name="empresa">
      <i class="btn-danger plus" id="plugexperiencia">
    </div>  
</div>
<br><br>
<div class="row">
  <div class="col-md-3">
    <label for="endereco">Endereço</label>
    <label for="rua">Rua</label>
    <input type="text" name="rua" class="form-control" id="" placeholder="Ex: Av. Cabuçu" name="rua">
  </div>
  <div class="col-md-3">
    <label for="cidade">Cidade</label>
    <input type="text" name="cidade" class="form-control" id="" placeholder="Ex: Itanhaem">
  </div>
  
  <div class="col-md-3">
    <label for="numerott">Numero</label><br>
    <input type="text" name="numeroend" class="form-control" id="" placeholder="Ex:123">    
  </div>
  <div class="col-md-3">
      <label for="data">Estado</label><br>
<select name="estado" id='estado'> 
    <option value="estado">Selecione o Estado</option> 
    <option value="ac">Acre</option> 
    <option value="al">Alagoas</option> 
    <option value="am">Amazonas</option> 
    <option value="ap">Amapá</option> 
    <option value="ba">Bahia</option> 
    <option value="ce">Ceará</option> 
    <option value="df">Distrito Federal</option> 
    <option value="es">Espírito Santo</option> 
    <option value="go">Goiás</option> 
    <option value="ma">Maranhão</option> 
    <option value="mt">Mato Grosso</option> 
    <option value="ms">Mato Grosso do Sul</option> 
    <option value="mg">Minas Gerais</option> 
    <option value="pa">Pará</option> 
    <option value="pb">Paraíba</option> 
    <option value="pr">Paraná</option> 
    <option value="pe">Pernambuco</option> 
    <option value="pi">Piauí</option> 
    <option value="rj">Rio de Janeiro</option> 
    <option value="rn">Rio Grande do Norte</option> 
    <option value="ro">Rondônia</option> 
    <option value="rs">Rio Grande do Sul</option> 
    <option value="rr">Roraima</option> 
    <option value="sc">Santa Catarina</option> 
    <option value="se">Sergipe</option> 
    <option value="sp">São Paulo</option> 
    <option value="to">Tocantins</option> 
</select>

  </div>

  </div>
  <br><br>
  <!-- contatos -->
  <div class="row">
    <div class="col-md-3">
      <h4>Contatos</h4>
      <label for="email">E-mail</label>
      <input type="text" name="email" id="" class="form-control" placeholder="Ex:josechavoso123@gmail.com">
    </div>
    <br><br>
    <div class="col-md-3">
      <label for="telefone">Telefone</label>
      <input type="text" name="telefone" placeholder="(13)98898-9898" class="form-control">
    </div>
  </div><br><br>
  <div class="row">
    <div class="col-md-3">
      <h4>Referencias</h4>
      <label for="nomeref">Nome</label>
        <input type="text" name="nomeref" class="form-control" id="" placeholder="Ex:Maria da Silva">
      <label for="numeroref">Numero</label>
        <input type="text" name="numeroref" class="form-control" id="" placeholder="Ex: (13)98898-9898">
    </div>
  </div>
    <br>

  </div>
</div>
</div>
<br>
</body>
</html>
