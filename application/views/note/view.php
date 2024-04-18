<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-body-tertiary rounded-3">
      <li class="breadcrumb-item"><a href="<?= site_url('note/index') ?>">Notes</a></li>
    </ol>
  </nav>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2><?= $note['title'] ?></h2>
            <p><?= $note['content'] ?></p>
        </div>
    </div>
</div>