<div class="team-area-2">
    <div class="team-box">
        
        <div class="team-thumb">
            <img src="<?php echo esc_url($team_image['url']);?>" alt="<?php echo esc_attr($team_name);?>">
            
            <ul class="team-social">
                <?php 
                    foreach ($team_socials as $social) {
                        ?>
                            <li><a href="<?php echo esc_url($social['team_social_link']['url']); ?>"><i class="<?php echo esc_attr($social['team_social_icon']['value']); ?>"></i></a></li>
                        <?php
                    }
                ?>
            </ul>
        </div>

        <div class="team-info">
            <h3><?php echo esc_html($team_name);?></h3>
            <p><?php echo esc_html($team_designation);?></p>
        </div>

    </div>
</div>