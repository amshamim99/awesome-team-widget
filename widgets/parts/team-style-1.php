<div class="team-area">
    <div class="team-card">
        <div class="team-img">
            <img src="<?php echo esc_url($team_image['url']);?>" alt="<?php echo esc_attr($team_name);?>">
        </div>

        <div class="team-content">
            <h3><?php echo esc_html($team_name);?></h3>
            <span><?php echo esc_html($team_designation);?></span>
            
            <ul class="social-icons">
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
</div>