<div class="team-area-5">
    <div class="team-card-5">
        <div class="team-image-5">
            <img src="<?php echo esc_url($team_image['url']);?>" alt="<?php echo esc_attr($team_name);?>">
        </div>
        <div class="team-info-5">
            <h3><?php echo esc_html($team_name);?></h3>
            <span><?php echo esc_html($team_designation);?></span>
        </div>
        <ul class="team-social-5">
            <?php 
                foreach ($team_socials as $social) {
                    ?>
                        <li><a href="<?php echo esc_url($social['team_social_link']['url']); ?>"><i class="<?php echo esc_attr($social['team_social_icon']['value']); ?>"></i></a></li>
                    <?php
                }
            ?>
        </ul>
    </div>
</div>