<?= view('layout.header') ?>

<div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Faça seu Login!</h2>

        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

            <form method="post" action="/console/login" novalidate>
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                
                <?php if($errors->first('email')): ?>
                    <small id="emailHelp" class="form-text text-muted"><?= $errors->first('email'); ?></small>
                <?php endif; ?>

            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">

                <?php if($errors->first('password')): ?>
                    <small id="emailHelp" class="form-text text-muted"><?= $errors->first('password'); ?></small>
                <?php endif; ?>

            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Lembra de mim</label>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
        </div>
    </div>

<?= view('layout.footer') ?>