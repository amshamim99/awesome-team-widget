<div class="team-area">
    <div class="team-card">
        <div class="team-img">
            <img src="<?php echo $team_image['url'];?>" alt="team">
        </div>

        <div class="team-content">
            <h3><?php echo $team_name;?></h3>
            <span><?php echo $team_designation;?></span>
            

            <ul class="social-icons">
                <?php 
                    foreach ($team_socials as $social) {
                        ?>
                            <li><a href="<?php echo $social['team_social_link']['url']; ?>"><i class="<?php echo $social['team_social_icon']['value']; ?>"></i></a></li>
                        <?php
                    }
                ?>
            </ul>
        </div>
    </div>
</div>