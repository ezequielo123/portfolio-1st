<div class="left">

    <?php 
        if(isset($_GET['id'])) 
        { 

            $unique_id = request::get('id');

        }
     ?>   
        
    <h2>
        <?php echo $movie_name->name; ?><?php echo ' <small> (' . $movie_name->year . ')</small>'; ?>
    </h2>

    <?php echo '<img src="' . $movie_name->image . '" class="mypicture2">'; ?>
    
    <h4>
        <?php echo $movie_name->description; ?>
    </h4>
    
    <h6>
        <a href="?page=genre" class="genre"><?php echo $movie_genre->name . '. '; ?></a>
        <?php if (!empty ($movie_language)): ?>
            <?php echo date('F j, Y') . ' (' . $movie_language->name . ')'; ?>
        <?php endif; ?>
    </h6>
    <br>
    <br>
    <br>
    <hr>
    <h4>Cast</h4> 
    <?php foreach ($all_movie_actors as $movieactor) : ?>
    
    <table class="table table-condensed">
        <tr>
            <td>
                <a href="?page=actor&amp;id=<?php echo $movieactor->imdb_person_id; ?>" class="genre">
                    <?php echo '<img src="' . $movieactor->image . '" class="mypicture-small">'; ?>
                    <?php echo $movieactor->fullname; ?>
                </a>    
                    
            </td> 
            <td>     
                    
            </td>
            <td>     
                    
            </td>
            <td>     
                  ....  
            </td>
            <td>     
                    
            </td>
            <td>     
                    
            </td>
            <td>     
                    
            </td>
            <td>     
                    
            </td>
            <td>
                <?php echo $movieactor->description; ?>
            </td>
            
        </tr>
    </table>             

     <?php endforeach; ?>

        

</div>

