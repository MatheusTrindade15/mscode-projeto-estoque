<div class="container py-5">
  <div class="mb-4">
    <?php
    if (isset($data['categoria'])) {
      echo "<h1>Editar categoria</h1>";
    } else {
      echo "<h1>Nova categoria</h1>";
    } ?>
  </div>
  <div class="w-50 mt-2">
    <form action="/app/categoria/salvar" method="POST">
      <div class="mb-3">
        <label for="id" class="form-label">Id: </label>
        <input type="email" class="form-control" id="id"
          <?php
          if (isset($data['categoria'])) {
            echo "readonly";
          } else {
            echo "disabled";
          } ?>
          value="
            <?php
            if (isset($data['categoria'])) {
              echo $data['categoria']['id'];
            } else {
              echo 0;
            } ?>" name="id" style="background-color: #bcbcbc;">
      </div>
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="<?= $data['categoria']['nome'] ?>">
      </div>
      <button type="submit" class="btn btn-primary">
        <?php
        if (isset($data['categoria'])) {
          echo "Atualizar";
        } else {
          echo "Salvar";
        } ?>
      </button>
    </form>
  </div>
</div>