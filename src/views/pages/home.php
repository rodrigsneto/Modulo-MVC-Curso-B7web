<?php $render('header');?>

<a href="<?php echo $base ?>/novo"><button>Novo Usuário</button></a><br/><br/>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($usuarios as $usuario): ?>
    <tr>
        <td><?= $usuario['id']; ?></td>
        <td><?= $usuario['nome']; ?></td>
        <td><?= $usuario['email']; ?></td>
        <td>
            <button>
                <a href="<?= $base; ?>/usuario/<?= $usuario['id']; ?>/editar">
                <img width='20' src="<?= $base; ?>/assets/images/document.png" alt="" /></a>
            </button>
            <button onclick="return confirm('Tem certeza que deseja excluir?')">
                <a href="<?= $base; ?>/usuario/<?= $usuario['id']; ?>/excluir">
                <img width='20' src="<?= $base; ?>/assets/images/trash.png" alt="" /></a>
            </button>
        </td>
    </tr>
    <?php endforeach; ?>

</table>

<?php $render('footer'); ?>