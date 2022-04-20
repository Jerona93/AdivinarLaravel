<head>
  <title>Adivina</title>
  <style type="text/css">
  body {
    
    text-align: center;
    background-color: #E4FAFF;
  }

  </style>
</head>
<body>
     <h1>Adivina</h1>
    <h3>Introduce un numero entre 1 y 10000000000 </h3>
    <form method="POST" >
        @csrf
        <input name="numero" type="number" placeholder="Numero...">
        <button>Enviar</button>
    @if($warning == true)
        {{$error}} 
        
        @endif
    </form>
</body>
   
