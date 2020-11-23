<form role="search" method="get" class="header__search-form" action="<?php echo esc_url( home_url() ) ?>">
                <label>
                    <span class="hide-content"><?php echo __('Search for:', 'wordsmith'); ?> </span>
                    <input type="search" class="search-field" placeholder="<?php echo __('Type Keywords', 'wordsmith') ?>" value="" name="s" 
                    title="<?php echo __('Search for:', 'wordsmith') ?>" autocomplete="off">
                </label>
                <input type="submit" class="search-submit" value="<?php echo __('Search', 'wordsmith') ?>">
</form>