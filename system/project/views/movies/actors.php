<div class="container-right">
    <h3>Top Rated Actors</h3>
    
    <ol>
        <?php foreach ($actors_list as $actor) : ?>
            <li class="space-between">
                <a href="?page=actor&amp;id=<?php echo $actor->imdb_id; ?>">
                    <?php echo $actor->fullname; ?>
                </a>
            </li>    
        <?php endforeach; ?>
    </ol>

    <p><a href="?page=actors_list">See the complete list of actors</a></p>  
    <br>
    <hr>
    <br>
</div>       