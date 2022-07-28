<?= view('layout.header') ?>
<div class="container">

    <a href="/console/users/list" class="btn btn-primary " >Usuarios</a>
    <hr>
    <h2>Editar <?= old('first', $user->first) ?></h2>


            <form method="post" action="/console/users/edit/<?= $user->id ?>" novalidate class="w3-margin-bottom">

                <?= csrf_field() ?>

                <div class="w3-margin-bottom">
                    <label for="first">First Name:</label>
                    <input type="text" name="first" id="first" value="<?= old('first', $user->first) ?>" required>
                    
                    <?php if($errors->first('first')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('first'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for="last">Last Name:</label>
                    <input type="text" name="last" id="last" value="<?= old('last', $user->last) ?>" required>
                    
                    <?php if($errors->first('last')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('last'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" value="<?= old('email', $user->email) ?>">

                    <?php if($errors->first('email')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('email'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password">

                    <?php if($errors->first('password')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('password'); ?></span>
                    <?php endif; ?>

            <button type="submit" class="btn btn-success">Salvar</button>
    </form>
<hr>
<?= view('layout.footer') ?>