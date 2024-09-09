<div class="container py-5">
  <div class="mb-4">
    <h1><?php
        if (isset($data['produto'])) {
          echo 'Editar';
        } else {
          echo 'Novo';
        } ?> produto</h1>
  </div>
  <div class="w-50 mt-2">
    <form action="/app/estoque/salvar<?php
                                      if (isset($data['produto'])) {
                                        echo "?id=" . $data['produto']['id'];
                                      } else {
                                        echo "";
                                      } ?>" method="POST">
      <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="<?= $data['produto']['nome'] ?>">
      </div>
      <div class="mb-3">
        <label for="descricao" class="form-label">Descrição:</label>
        <textarea class="form-control" id="descricao" name="descricao" style="resize:none;" rows="5" placeholder="<?= $data['produto']['descricao'] ?>"></textarea>
      </div>
      <div class="row">
        <div class="mb-3 col-4">
          <label for="categoriaId" class="form-label">Categoria Id:</label>
          <input type="number" class="form-control" id="categoriaId" name="categoriaId" placeholder="<?= $data['produto']['categoria_id'] ?>">
        </div>
        <div class="mb-3 col-4">
          <label for="quantidade" class="form-label">Quantidade:</label>
          <input type="number"
            <?php
            if (isset($data['produto'])) {
              echo 'disabled';
            } else {
              echo '';
            } ?>
            class="form-control" id="quantidade" name="quantidade" placeholder="<?= $data['produto']['quantidade_disponivel'] ?>">
        </div>
        <div class="mb-3 col-4">
          <label for="valor" class="form-label">Valor:</label>
          <input type="text" class="form-control" id="valor" name="valor" placeholder="<?= $data['produto']['valor'] ?>">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">
        <?php
        if (isset($data['produto'])) {
          echo 'Atualizar';
        } else {
          echo 'Salvar';
        } ?>
      </button>
    </form>
  </div>
</div>