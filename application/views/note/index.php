<main>
  <div class="container">
    <a href="<?php echo site_url('note/create'); ?>" class="btn btn-primary my-3">+ Add Note</a>
    <div class="p-5 mb-4 bg-body-tertiary rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold"><?= $last['title'] ?></h1>
        <p class="col-md-8 fs-4"><?= $last['content'] ?></p>
        <a href="<?= site_url('note/view/'.$last['slug']); ?>"><button class="btn btn-primary btn-lg" type="button">Note Detail</button></a>
        <a href="<?= site_url('note/edit/'.$last['slug']); ?>"><button class="btn btn-warning btn-lg" type="button">Edit</button></a>
      </div>
    </div>

    <div class="row align-items-md-stretch">
      <?php foreach ($notes as $note): ?>
      <div class="col-md-6 mt-3">
        <div class="h-100 p-5 text-bg-dark rounded-3">
          <h2><?= $note['title'] ?></h2>
          <p><?= $note['content'] ?></p>
          <a href="<?= site_url('note/view/'.$note['slug']); ?>"><button class="btn btn-outline-light" type="button">Note Detail</button></a>
          <a href="<?= site_url('note/delete/'.$note['slug']); ?>"><button class="btn btn-outline-danger" type="button" onclick="return confirm('Are you sure want to delete this note?')">Delete</button></a>
          <a href="<?= site_url('note/edit/'.$note['slug']); ?>"><button class="btn btn-outline-warning" type="button">Edit</button></a>
        </div>
      </div>
      <?php endforeach; ?>
      <!-- <div class="col-md-6">
        <div class="h-100 p-5 bg-body-tertiary border rounded-3">
          <h2>Add borders</h2>
          <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
          <button class="btn btn-outline-secondary" type="button">Note Detail</button>
          <button class="btn btn-outline-danger" type="button">Delete</button>
          <button class="btn btn-outline-warning" type="button">Edit</button>
        </div>
      </div> -->
    </div>
  </div>
</main>