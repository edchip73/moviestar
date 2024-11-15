<link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">

<style>
  /* ...CSS */

/* Vamos definir o corpo da página */
html, body{
  width:100%;
  overflow-x: hidden;
  background-color:#000;
  font-family: 'Inconsolata', monospace;
}

/* Agora definimos as característica do título */
h1 {
  padding-top:100px;
  font-size: 60px;
  color:#fff;
}

/* Agora definimos as característica do parágrafo. */
p {
  font-size: 20px;
  color:#fff;
  white-space: nowrap;
  border-right: solid 3px #fff;
  overflow: hidden; 
}

/* Animação, sua velocidade... */
p {
  animation: animated-text 4s steps(25) 1s 1 normal both, animated-cursor 600ms steps(25) infinite; 
}

/* Animação do Parágrafo */

@keyframes animated-text{
  from{width: 0;}
  to{width: 340px;}
}

/* cursor animations */

@keyframes animated-cursor{
  from{border-right-color: #fff;}
  to{border-right-color: transparent;}
}
</style>

<body>
<div class="container">
  <div class="row">
  <center>
    <h1>Error 404</h1>
    <p>Página não encontrada ¯\_(ツ)_/¯</p>
  </center>
  </div>
</div>
</body>