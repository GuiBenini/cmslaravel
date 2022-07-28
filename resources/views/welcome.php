<?= view('layout.header') ?>



<div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Meus Projetos</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
    
    <!-- Listagem dos projetos -->
    <?php foreach($projects as $project): ?>
    
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
        <?php if($project->image): ?> 
            style="background-image: url('<?= asset($project->image) ?>');background-size: cover;"
        <?php else: ?>
            style="background-image: url('unsplash-photo-1.jpg');"
        <?php endif; ?>
        >
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <a href='/view/project/<?= $project->slug ?>'  style="text-decoration: none; color: #fff">
                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"><?= $project->title ?></h2>
            </a>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto"> 
                <a href="<?= $project->url ?>" >
                    <img src="https://github.githubassets.com/images/modules/site/icons/footer/github-mark.svg" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                </a>
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small><?= $project->type->title ?></small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small><?= $project->created_at->format('M j, Y') ?></small>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    <!--- Fim listagem projetos -->
    </div>
  </div>

<?= view('layout.footer') ?>