<div class="team-area-2">
    <div class="team-box">
        
        <div class="team-thumb">
            <img src="<?php echo $team_image['url'];?>" alt="team">
            
            <ul class="team-social">
                <?php 
                    foreach ($team_socials as $social) {
                        ?>
                            <li><a href="<?php echo $social['team_social_link']['url']; ?>"><i class="<?php echo $social['team_social_icon']['value']; ?>"></i></a></li>
                        <?php
                    }
                ?>
            </ul>
        </div>

        <div class="team-info">
            <h3><?php echo $team_name;?></h3>
            <p><?php echo $team_designation;?></p>
        </div>

    </div>
</div>