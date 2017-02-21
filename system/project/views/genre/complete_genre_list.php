<div class="container-left">
    <h2>Most Popular Action Feature Films</h2>
        <table class="table table-striped">
            <tr>
                <td></td>
            </tr>
            <?php foreach ($list as $movie) : ?>
            <tr>   
                <td>
                    <a href="?page=movie&amp;id=<?php echo $movie->imdb_id; ?>">
                    <h6><?php echo $movie->name; ?></h6>
                    </a>    
                </td>
            </tr>        
            <?php endforeach; ?>
        </table>
    <hr>
</div>

