<hmtl>
    <head>
        <meta charset="utf-8">
       <title>Admin</title>
       <link rel="stylesheet" href="css/stadm.css">
       <style>

       </style>
    </head>
    <body>
        <div class="hold">
        
            <button class="botIn">Adicionar Evento</button>
            <form action="back.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="data">
                <input type="file" name="imgem" required>
                <button type="submit">enviar</button>
            </form>
            <button class="botIn">Remover Evento</button>
       
        </div>
    </body>
</hmtl>