<?= view('layout.header') ?>

<div class="container">
<a href="/console/users/list" class="btn btn-primary " role="button" >Usuarios</a>
<hr>
    <h2>Adicionar usuario</h2>

    <form method="post" action="/console/users/add" novalidate class="w3-margin-bottom">

        <?= csrf_field() ?>

        <div class="w3-margin-bottom">
            <label for="first">Nome:</label>
            <input type="text" name="first" id="first" value="<?= old('first') ?>" required>
            
            <?php if($errors->first('first')): ?>
                <span class="w3-text-red"><?= $errors->first('first'); ?></span>
            <?php endif; ?>


            <label for="last">Sobrenome:</label>
            <input type="text" name="last" id="last" value="<?= old('last') ?>" required>

            <?php if($errors->first('last')): ?>
                <span class="w3-text-red"><?= $errors->first('last'); ?></span>
            <?php endif; ?>

            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" value="<?= old('email') ?>" required>

            <?php if($errors->first('email')): ?>
                <span class="w3-text-red"><?= $errors->first('email'); ?></span>
            <?php endif; ?>

            <label for="password">Senha:</label>
            <input type="password" name="password" id="password">

            <?php if($errors->first('password')): ?>
                <span class="w3-text-red"><?= $errors->first('password'); ?></span>
            <?php endif; ?>

        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>
<?= view('layout.footer') ?>