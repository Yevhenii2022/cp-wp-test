      <div class="work__line">
        <?php
        $circles = get_field('tooltip', 'options');

        foreach ($circles as $index => $circle) {
        ?>
          <div class="circle" data-index="<?php echo $index + 1; ?>" style="--index: <?php echo $index + 1; ?>;">
            <span class="circle-number"><?php echo sprintf('%02d', $index + 1); ?></span>

            <div class="popup">
              <?php
              $popup_text = $circle['popup_text'];
              $popup_description = $circle['description'];
              $popup_icon = $circle['popup_icon'];
              ?>
              <img class="popup-img" src="<?php echo esc_url($popup_icon['url']); ?>" alt="<?php echo esc_attr($popup_icon['alt']); ?>">
              <p class="popup-text"><?php echo esc_html($popup_text); ?></p>
            </div>
            <p class="circle-description"><?php echo esc_html($popup_description); ?></p>
          </div>
        <?php } ?>
      </div>