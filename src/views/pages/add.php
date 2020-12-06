<?php $render('header'); ?>

<h2>Adicionar Novo usuário</h2>

<form method="POST" action="<?php echo $base;?>/novo">
    <label>
        Nome:<br/>
        <input type="text" name="nome" />
    </label><br/><br/>
    <label>
        E-mail:<br/>
        <input type="email" name="email" />
    </label><br/><br/>

    <input type="submit" value="Enviar">
</form>

<?php $render('footer'); ?>
