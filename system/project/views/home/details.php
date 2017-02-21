<div class="container-left">
    <h3>Top Rated Movies</h3>
        <div class="row">
            <?php foreach ($movies as $movie) : ?>
                <a href="?page=movie&amp;id=<?php echo $movie->imdb_id; ?>">
                <div class="col-sm-4 spaces"><div class="name"><?php echo '<img src="' . $movie->image . '" class="mypicture-home">'; ?><?php echo $movie->name; ?> <?php echo '<span class="year">' . $movie->year . '</span> '; ?><?php echo ' <span class="year">&star; ' . $movie->rating . '</span>'; ?></div></div>
                </a>
            <?php endforeach; ?>
        </div>
</div>      