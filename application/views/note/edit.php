<div class="container">
    <div class="row">
        <?php echo validation_errors(); ?>
        <?php echo form_open('note/edit/'.$note['slug']); ?>
        <div class="col-md-8 mx-auto">
            <h2>Add Note</h2>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="<?= $note['title'] ?>">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" rows="3" name="content"><?= $note['content'] ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
            <a href="<?= site_url('note/index') ?>" class="btn btn-link">back</a>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
