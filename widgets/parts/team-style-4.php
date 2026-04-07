<div class="team-area-4">
    <div class="team-card-4">
        <div class="team-photo-4">
            <img src="<?php echo $team_image['url'];?>" alt="team">
            <div class="team-overlay-4">
                <ul class="team-social-4">
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
        <div class="team-info-4">
            <h3><?php echo $team_name;?></h3>
            <p><?php echo $team_designation;?></p>
        </div>
    </div>
</div>