    <section>
      <div class="container">
        <div id="accordion">
          <?php
          $accordion_items = get_field('accordion', 'options');

          if ($accordion_items) :
            foreach ($accordion_items as $accordion_item) :
              $accordion_title = $accordion_item['accordion_title'];
              $accordion_text = $accordion_item['accordion_text'];
          ?>
              <div class="acc2-item">
                <div class="acc2-wrapper">
                  <h3 class="acc2-head">
                    <?php echo esc_html($accordion_title); ?>
                  </h3>
                  <button class="toggle-btn2">+</button>
                </div>
                <p class="acc2-body">
                  <?php echo esc_html($accordion_text); ?>
                </p>
              </div>
          <?php
            endforeach;
          endif;
          ?>
        </div>
      </div>
    </section>