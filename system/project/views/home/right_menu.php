<div id="right-menu" class="container-right">
    <h3>Opening This Week</h3>
    
    <ol>
        <?php foreach ($new_movies as $movie) : ?>
            <li class="space-between">
                <a href="?page=movie&amp;id=<?php echo $movie->imdb_id; ?>">
                    <?php echo $movie->name; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ol>

    <p><a href="http://www.imdb.com/movies-in-theaters/?pf_rd_m=A2FGELUUNOQJNL&pf_rd_p=2750721702&pf_rd_r=0YSDPWS1H98ZWC8AWAPR&pf_rd_s=right-2&pf_rd_t=15061&pf_rd_i=homepage&ref_=hm_otw_sm" target="_blank">See more opening this week</a></p>
</div>      
