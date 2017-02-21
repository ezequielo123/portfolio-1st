<div class="left">

    <?php 
        if(isset($_GET['id'])) 
        { 

            $unique_actor_id = request::get('id');

        }
     ?>   
        
    <h2><?php echo $actor->fullname; ?><?php echo ' <small> (' . $actor->birth_date . ')</small>'; ?></h2>
    <?php echo '<img src="' . $actor->image . '" class="mypicture2">'; ?>
    <h3>Biography</h3>
    <h4><?php echo $actor->bio; ?></h4>
    <br><br>
    <hr>
    <h4>Filmography</h4>


    <table class="table table-striped">
            <tr>
                <td></td>
            </tr>
            <?php foreach($actors_movie_list as $movie_item) : ?>
            <tr>   
                <td>
                    <a href="?page=movie&amp;id=<?php echo $movie_item->imdb_movie_id; ?>" class="genre">
                    <h5><?php echo '<img src="' . $movie_item->image . '" class="mypicture-small"> '; ?><?php echo $movie_item->name; ?> <?php echo ' <small> (' .  $movie_item->year . ')</small> '; ?></h5>
                    </a>
                </td>
            </tr>        
            <?php endforeach; ?>
        </table>

    

        

</div>

