<!DOCTYPE html>
<html>
<head>
<title>CID</title><link rel="icon" type="image/png" href="https://i.imgur.com/QVvkr06.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
 /* Estilos para a mensagem de sucesso/erro */
 #mensagem {
            padding: 10px;
            margin-top: 20px;
            display: none;
            font-size: 16px;
            border-radius: 5px;
        }
        .sucesso {
            background-color: #4CAF50;  /* Verde para sucesso */
            color: white;
        }
        .erro {
            background-color: #f44336;  /* Vermelho para erro */
            color: white;
        }
</style>
</head>
<body class="w3-light-grey">

    <!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
        <img src="https://i.imgur.com/QVvkr06.png" alt="Nature" style="width:45px">
      <!-- Right-sided navbar links -->
      <div class="w3-right">
        <a href="http://cidnews.free.nf" class="w3-bar-item w3-button">Início</a>
        <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Usuário</a>
      </div>
    </div>
  </div>

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->

<header class="w3-container w3-center w3-padding-32"> 
<br>
  <h1><b>Conecta Idoso Digital</b></h1>
  <p>Conectando Sabedoria e Atualidade.</p>
</header>

<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    <img src="https://i.imgur.com/JpIJ5CG.jpeg" alt="Nature" style="width:100%">
    <div class="w3-container">
      <h3><b>Inteligência Artificial: Como essa Tecnologia Está Facilitando a Vida na Melhor Idade </b></h3>
      <h5>Por: Equipe CID , <span class="w3-opacity">12 de outubro, 2024</span></h5>
    </div>

    <div class="w3-container">
      <p>Você já ouviu falar sobre inteligência artificial, mas sabe como ela pode impactar o seu dia a dia? Desde assistentes que ajudam a lembrar compromissos até tecnologias que podem transformar cuidados de saúde, a IA está presente em muitos aspectos da nossa vida. Descubra neste artigo como essa inovação pode facilitar a sua rotina e trazer benefícios incríveis!</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><a href="https://g1.globo.com/jornal-nacional/noticia/2023/04/03/inteligencia-artificial-ja-e-realidade-na-vida-de-muitos-estudantes-brasileiros.ghtml"><button class="w3-button w3-padding-large w3-white w3-border"><b>Saiba mais »</b></button><a/></p>
        </div>
      </div>
    </div>
  </div>
  <hr>

  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
  <img src="https://i.imgur.com/fvomMYx.png" alt="Norway" style="width:100%">
    <div class="w3-container">
      <h3><b>8 Hábitos Saudáveis para Aumentar sua Longevidade</b></h3>
      <h5>Por: Equipe CID, <span class="w3-opacity">19 de outubro, 2024</span></h5>
    </div>

    <div class="w3-container">
      <p>MVocê quer viver mais e melhor? A chave pode estar em pequenos hábitos diários que, quando incorporados à sua rotina, trazem grandes benefícios para a saúde e bem-estar. Neste artigo, vamos explorar cinco hábitos saudáveis que podem ajudar a aumentar sua longevidade e melhorar sua qualidade de vida. Descubra como simples mudanças podem fazer uma grande diferença no seu dia a dia!</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><a href="https://www.metropoles.com/saude/longevidade-estudo-habitos-viver-mais"><button class="w3-button w3-padding-large w3-white w3-border"><b>Saiba Mais »</b></button></a></p>
        </div>
        
      </div>
    </div>
  </div>
<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card w3-margin w3-margin-top">
  <img src="https://i.imgur.com/eeBfT1q.png" style="width:100%">
    <div class="w3-container w3-white">
      <h4><b>Quem somos</b></h4>
      <p>Somos um projeto que tem como objetivo ser um portal de notícias confiável e acessível, principalmente para idosos que tem dificuldade de achar fontes confiáveis de notícias.</p>
    </div>
  </div><hr>

    <!-- Subscribe -->
    <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Cadastre-se</h4>
        </div>
        <form id="cadastroForm">
        <div class="w3-container w3-white">
          <p>Faça seu cadastro para receber uma notificação sempre que uma notícia nova for ao ar!</p>
          <p><input class="w3-input w3-border" style="width:100%" type="text" id="nome" name="nome" placeholder="Nome" required></p>
          <p><input class="w3-input w3-border" style="width:100%" type="email" id="email" name="email" placeholder="E-mail" required></p>
          <p><input class="w3-input w3-border" style="width:100%" type="password" id="senha" name="senha" placeholder="Senha" required></p>
          <p><button type="submit" class="w3-button w3-block w3-blue">Cadastre-se</button></p>
        </div>
        </form>

        <!-- Área para exibir mensagens de sucesso ou erro -->
    <div id="mensagem" class=""></div>

    <script>
    // Captura o formulário e a área de mensagem
    const form = document.getElementById('cadastroForm');
    const mensagemDiv = document.getElementById('mensagem');

    // Adiciona o evento para quando o formulário for enviado
    form.addEventListener('submit', function(event) {
        event.preventDefault();  // Impede o envio normal do formulário

        const formData = new FormData(form);

        // Faz a requisição AJAX para o PHP
        fetch('cadastrar.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())  // Espera a resposta como texto
        .then(data => {
            // Exibe a mensagem de sucesso ou erro
            mensagemDiv.style.display = 'block';
            if (data.includes('sucesso')) {
                // Se a resposta indicar sucesso
                mensagemDiv.className = 'sucesso';
                mensagemDiv.textContent = 'Cadastro realizado com sucesso!';
            } else {
                // Se a resposta indicar erro
                mensagemDiv.className = 'erro';
                mensagemDiv.textContent = data;  // Exibe a mensagem de erro
            }
        })
        .catch(error => {
            console.error('Erro ao cadastrar usuário:', error);
            mensagemDiv.style.display = 'block';
            mensagemDiv.className = 'erro';
            mensagemDiv.textContent = 'Houve um erro ao tentar cadastrar. Tente novamente.';
        });
    });
    </script>

      </div>
  
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
  <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Anterior</button>
  <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Próximo »</button>
  <p>Feito por: Giancarlo de Oliveira Augusto e Matheus Britto.</p>
</footer>

</body>
</html>
