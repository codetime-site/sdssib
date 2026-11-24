<?php


$title_1 = 'title_addres_1';
$icon_1 = "adres_icon_1";
$adres_1 = "adres_1";

$title_2 = 'title_addres_2';
$icon_2 = "adres_icon_2";
$adres_2 = "adres_2";
?>
<section class="location" id="maps>">
    <div class="container">

        <h2 class="location__title">h2 location__title</h2>

        <div class="location__grid">
            <div class="location__item">
                <?php if ($title_1): ?>
                    <h3 class="location__item-title">
                        <?php if ($icon_1) ?>
                        <i class="icon_maps fontello-<?= $icon_1; ?>"></i>
                        <?= $title_1; ?>
                    </h3>
                <?php endif; ?>
                <?php if ($adres_1) ?>
                <address class="location__item-address"><?= $adres_1; ?></address>
                <br>

                <div class="location__map-wrapper">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5604684.473920667!2d50.982556863510084!3d54.77558013663325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2z0KDQvtGB0YHQuNGP!5e0!3m2!1sru!2sru!4v1795536968632!5m2!1sru!2sru"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="strict-origin-when-cross-origin">
                    </iframe>
                </div>

            </div>
            <div class="location__item">
                <?php if ($title_2): ?>
                    <h3 class="location__item-title">
                        <?php if ($icon_2) ?><i class="icon_maps fontello-<?= $icon_2; ?>"></i>
                        <?= $title_2; ?>
                    </h3>
                <?php endif; ?>
                <?php if ($adres_2): ?>
                    <address class="location__item-address"><?= $adres_2; ?></address>
                <?php endif; ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5604684.473920667!2d50.982556863510084!3d54.77558013663325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2z0KDQvtGB0YHQuNGP!5e0!3m2!1sru!2sru!4v1795536968632!5m2!1sru!2sru"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="strict-origin-when-cross-origin">
                </iframe>
            </div>
        </div>
    </div>
</section>
