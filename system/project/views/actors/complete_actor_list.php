<div class="container-left">
    <h2>Most Popular Females/Males</h2>
    <h6>Top 250 as rated by IMDb Users</h6>
        <table class="table table-striped">
            <tr>
                <td></td>
            </tr>
            <?php foreach ($list as $actor) : ?>
            <tr>   
                <td>
                    <a href="?page=actor&amp;id=<?php echo $actor->imdb_id; ?>">
                    <h3><?php echo $actor->fullname; ?> <?php echo ' <small> (' . $actor->birth_date . ')</small> '; ?></h3>
                    </a>
                <br>
                    <?php echo '<img src="' . $actor->image . '" class="mypicture2">'; ?>
                <br>
                    <?php echo $actor->bio; ?>    
                </td>
            </tr>        
            <?php endforeach; ?>
        </table>
    <hr>
</div>

