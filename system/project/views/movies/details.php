<div class="container-left">
    <h2>Top Rated Movies</h2>
    <h6>Top 250 as rated by IMDb Users</h6>
        <table class="table table-striped">
            <tr>
                <td><strong>Rank &amp; Title</strong></td>
                <td><strong>IMDB Rating</strong></td>
            </tr>
            <?php foreach ($movies as $movie) : ?>
            <tr>  
                <td>
                    <a href="?page=movie&amp;id=<?php echo $movie->imdb_id; ?>">
                        <?php echo $movie->name; ?> <?php echo ' <small> (' . $movie->year . ')</small> '; ?>
                    </a>    
                </td>
                <td>
                    <?php echo '&star; ' . $movie->rating; ?>
                </td>
            </tr>        
            <?php endforeach; ?>
        </table>
    <hr>
    <p>The Top Rated Movie list only includes theatrical features.</p>

    <ul>
        <li>Shorts, TV movies, and documentaries are not included</li>
        <li>The list is ranked by a formula which includes the number of ratings each movie received from users, and value of ratings received from regular users</li>
        <li>To be included on the list, a movie must receive ratings from at least 25000 users</li>  
    </ul>

    <p><a href="rankings.php">Learn more</a> about how list ranking is determined.</p>
</div>

