<div class="team-area-4">
    <div class="team-card-4">
        <div class="team-photo-4">
            <img src="<?php echo esc_url($team_image['url']);?>" alt="<?php echo esc_attr($team_name);?>">
            <div class="team-overlay-4">
                <ul class="team-social-4">
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
        <div class="team-info-4">
            <h3><?php echo esc_html($team_name);?></h3>
            <p><?php echo esc_html($team_designation);?></p>
        </div>
    </div>
</div>