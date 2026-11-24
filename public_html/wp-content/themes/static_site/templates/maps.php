<?php
$layout = $args;

$title_1 = option('title_addres_1');
$icon_1 = option("adres_icon_1");
$adres_1 = option("adres_1");

$title_2 = option('title_addres_2');
$icon_2 = option("adres_icon_2");
$adres_2 = option("adres_2");
?>
<section class="location" id="maps-<?= get_row_index(); ?>">
    <div class="container">

        <?php logic_func('title', 'title'); ?>
        <div class="location__grid">
            <div class="location__item">
                <?php if ($title_1): ?>
                    <h3 class="location__item-title"> <?php if ($icon_1) ?> <i
                            class="icon_maps fontello-<?= $icon_1; ?>"></i>
                        <?= $title_1; ?> </h3>
                <?php endif; ?>
                <?php if ($adres_1) ?>
                <address class="location__item-address"><?= $adres_1; ?></address>
                <br>
                <?php logic_func('maps', 'maps'); ?>

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
                <?php logic_func('maps_2', 'maps'); ?>
            </div>
        </div>
    </div>
</section>


<script>
    ymaps.ready(function () {
        var myMap = new ymaps.Map('map', {
            center: [55.76, 37.64],
            zoom: 10,
            controls: ['zoomControl']
        });

        myMap.behaviors.disable(['scrollZoom', 'drag', 'multiTouch']);

        // При клике включаем перетаскивание, чтобы человек мог "поиграться" с картой
        myMap.events.add('click', function () {
            myMap.behaviors.enable(['drag', 'multiTouch']);
        });
    });
</script>