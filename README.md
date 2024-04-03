code updated
<?php foreach ($manutencoes as $manutencao) : ?>
  <?php if (
    isset($_SESSION['logged_user']) &&
    $manutencao['id_usuario'] == $_SESSION['logged_user']['id_usuario'] || $_SESSION['logged_user']['tipo'] != 'cliente'
  ) : ?>
    <tr>
      <td><?= $manutencao['id_manutencao'] ?></td>
      <td><?= $manutencao['id_usuario'] . ' - ' . $manutencao['nome'] ?></td>
      <td>
        <a class="btn btn-sm btn-warning" href="<?= base_url('manutencao/show/' . $manutencao["id_manutencao"]); ?>">Detalhes</a>

      </td>
      <td><?= 'R$ ' . $manutencao['total'] ?></td>
      <td><?= $manutencao['status'] ?></td>
      <td>
        <?php
        if (isset($_SESSION['logged_user'])) {
          if (isset($_SESSION['logged_user']) && $_SESSION['logged_user']['tipo'] != 'cliente') {
            echo '<a class="btn btn-sm btn-warning" href="' . base_url() . 'manutencao/edit/' . $manutencao["id_manutencao"] . '">Status 
        <i class="fas fa-pencil-alt"></i></a> ';
          }
          if (isset($_SESSION['logged_user']) && $_SESSION['logged_user']['tipo'] != 'cliente') {
            echo '<button class="btn btn-danger btn-sm" onclick="goDelete(' . $manutencao['id_manutencao'] . ') ">Cancelar 	
            <i class="fas fa-trash-alt"></i>  
          </button>';
          }
          if (isset($_SESSION['logged_user']) && $_SESSION['logged_user']['tipo'] != 'cliente' && $manutencao['status'] == 'concluido') {
            echo ' <button class="btn btn-success btn-sm btn-concluido" onclick="goDelete(' . $manutencao['id_manutencao'] . ')">Concluído
            <i class="fas fa-check"></i> 
          </button>';
          }
        }
        ?>
      </td>
    </tr>
  <?php endif; ?>
<?php endforeach; ?>
