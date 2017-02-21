<div class="container-left">
    <h3>Top Rated Actors</h3>
        <div class="row">
            <?php foreach ($actors as $actor) : ?>
                    <div class="col-sm-3 spaces"><div class="name"><?php echo $actor->fullname; ?></div></div>
            <?php endforeach; ?>
        </div>
</div>       