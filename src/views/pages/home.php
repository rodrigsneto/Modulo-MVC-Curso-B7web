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
            <a href="<?= $base; ?>/usuario/<?= $usuario['id']; ?>/editar"><button>Editar</button></a>
            <a href="<?= $base; ?>/usuario/<?= $usuario['id']; ?>/excluir"><button onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button></a>
        </td>
    </tr>
    <?php endforeach; ?>

</table>

<?php $render('footer'); ?>