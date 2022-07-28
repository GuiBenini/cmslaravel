
<div class="container">
    <footer class="py-3 my-4">
        <?php if(Auth::check()): ?>
            <p class="text-center text-muted">
                Bem vindo(a) de volta 
                <?= auth()->user()->first ?> <?= auth()->user()->last ?> 
            </p>
        <?php endif; ?>

        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <?php if(Auth::check()): ?>      
            <li class="nav-item"><a href="/console/dashboard" class="nav-link px-2 text-muted">Dashboar</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Minha Conta</a></li>
            <li class="nav-item"><a href="/console/logout" class="nav-link px-2 text-muted">Sair</a></li>
        <?php else: ?>  
            <li class="nav-item"><a href="/console/login" class="nav-link px-2 text-muted">Login</a></li>
        <?php endif; ?>
        
        </ul>
        <p class="text-center text-muted">© 2022 Guilherme Benini - 20171130167</p>
    </footer>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>