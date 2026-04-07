<div class="team-area-5">
    <div class="team-card-5">
        <div class="team-image-5">
            <img src="<?php echo $team_image['url'];?>" alt="team">
        </div>
        <div class="team-info-5">
            <h3><?php echo $team_name;?></h3>
            <span><?php echo $team_designation;?></span>
        </div>
        <ul class="team-social-5">
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