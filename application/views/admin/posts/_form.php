<div class="box-body">
    <div class="form-group <?php echo has_error_class('title'); ?>">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="<?php echo isset($post->title) ? $post->title : set_value('title') ?>">
        <?php echo show_error_field('title'); ?>
    </div>
    <div class="form-group <?php echo has_error_class('category_id'); ?>">
        <label for="category_id">Category</label>
        <select name="category_id" id="category_id" class="form-control">
            <?php foreach ($categories as $category) { ?>
                <option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
            <?php } ?>
        </select>
        <?php echo show_error_field('category_id'); ?>
    </div>
    <div class="form-group <?php echo has_error_class('description'); ?>">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" id="description" rows="5">
            <?php echo isset($post->description) ? $post->description : set_value('description') ?>
        </textarea>
        <?php echo show_error_field('description'); ?>
    </div>
    <div class="form-group <?php echo has_error_class('body'); ?>">
        <label for="body">Body</label>
        <textarea name="body" class="form-control" id="body" rows="5">
            <?php echo isset($post->body) ? $post->body : set_value('body') ?>
        </textarea>
        <?php echo show_error_field('body'); ?>
    </div>
    <div class="form-group <?php echo has_error_class('tags'); ?>">
        <label for="tags">Tags</label>
        <input type="text" class="form-control" id="tags" name="tags" value="<?php echo isset($post->tags) ? $post->tags : set_value('tags') ?>">
        <?php echo show_error_field('tags'); ?>
    </div>
</div><!-- /.box-body -->

<div class="box-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="<?php echo site_url($this->router->fetch_class()) ?>" class="btn btn-default">
    Cancel
    </a>
</div>