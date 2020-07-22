<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src='/var/www/project/gearshifter/main.js'></script>
    <link href="/var/www/project/gearshifter/gearbox.scss" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="position-relative overflow-hidden">
        <div class="grid text-block position-relative gearbox-wrapper">
            <div class="row">
                <div class="col-md gearbox-object">
                    <p class="gearbox-placeholder">Click a gear</p>
                    <div class="position-relative z-index-1">
                        <?php foreach($objects as $key => $object): ?>
                            <div class="position-relative object-<?= $key ?> d-none">
                                <a href="<?= ($object['url']); ?>">
                                    <img src="<?= $object['image'] ?>" class="w-100">
                                    <h3 class="my-2">
                                        <?= $object['title'] ?>
                                    </h3>
                                    <span class="gearbox-lead overflow-hidden">
                                        <?= $object['lead'] ?>
                                    </span>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md gear-box">
                    <div class="row gear-shift top-gear">
                        <div class="col px-0 text-center gear-shift-position" data-gear="0"><a>R</a></div>
                        <div class="col px-0 text-center gear-shift-position" data-gear="1"><a>1</a></div>
                        <div class="col px-0 text-center gear-shift-position" data-gear="3"><a>3</a></div>
                        <div class="col px-0 text-center gear-shift-position" data-gear="5"><a>5</a></div>
                    </div>
                    <svg class="gear-svg-desktop" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 293.33 131.8">
                        <defs>
                            <style>.cls-1{fill:none;stroke:#73afff;stroke-linecap:round;stroke-linejoin:round;stroke-width:4px;}</style>
                        </defs>
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="Layer_1-2" data-name="Layer 1">
                                <polyline class="cls-1" points="291.33 64.64 2 64.64 2 2"/>
                                <line class="cls-1" x1="98.44" y1="2" x2="98.44" y2="129.8"/>
                                <line class="cls-1" x1="194.89" y1="2" x2="194.89" y2="129.8"/>
                                <line class="cls-1" x1="291.33" y1="2" x2="291.33" y2="129.8"/>
                            </g>
                        </g>
                    </svg>
                    <div class="row gear-shift bot-gear">
                        <div class="col px-0 text-center"><a href=""></a></div>
                        <div class="col px-0 text-center gear-shift-position" data-gear="2"><a>2</a></div>
                        <div class="col px-0 text-center gear-shift-position" data-gear="4"><a>4</a></div>
                        <div class="col px-0 text-center gear-shift-position" data-gear="6"><a>6</a></div>
                    </div>
                    <div class="gear-shift-knob position-absolute idle-position"></div>
                </div>
            </div>
        </div>
    </div>
</body>
