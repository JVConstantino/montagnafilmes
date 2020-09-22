<div class="panel-content">
    <h4 class="titulo">EDITAR PUBLICAÇÃO</h4>

    <form method="POST" enctype="multipart/form-data">
        <p><label for="titulo">Titulo</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo getDadosPost($explode[1], "titulo");?>">
        </p>
        <p><label>Imagem</label><br>
            <img src="<?php echo getDadosPost($explode[1], "imagem");?>" width="200">
            <input type="file" name="userfile" class="form-control">
        </p>
        <p>
            <input type="text" id="post" name="post" required class="form-control" value="<?php echo getDadosPost($explode[1], "postagem");?>">
        </p>
        <p><label>Categoria</label>
            <select class="form-control" name="categoria">
                <?php getCategoriAtual(getDadosPost($explode[1], "categoria")); get_categorias();?>
            </select>
        </p>

        <p><input type="submit" value="Alterar" class="btn btn-primary btn-lg btn-block">
            <input type="hidden" name="env" value="alt">
        </p>
    </form>
    <?php editarPost($explode[1]);?>
</div>
