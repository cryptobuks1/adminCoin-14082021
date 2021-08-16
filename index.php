<?php $data["title"] = "My Account"; ?>
<?php $is_home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-container uk-container-expand">
    <div class="uk-section-small">

        <div class="uk-margin myacc__started">
            <h1 class="uk-h1 myacc__started__title">Get started, <span>Alex</span></h1>
            <div class="myacc__started__desc">Here's your report overview by today.</div>
        </div>

        <!--Market overview-->
        <div class="uk-margin myacc__market">
            <h2 class="uk-h2 myacc__common__title">Market overview</h2>
            <div class="uk-child-width-1-4@m uk-grid-small uk-grid-19-m" uk-grid>
                <?php for ($i=1;$i<=4;$i++): ?>
                <div>
                    <div class="uk-card uk-card-default uk-card-body myacc__market__card">
                        <div class="uk-position-top-right myacc__market__card__percent <?= ($i%2!==0)? 'raise':'reduce' ?>">
                            <img class="myacc__market__card__percent__img" src="<?= ($i%2!==0)? 'images/arrow/Icon1 feather-arrow-up-right@2x.png':'images/arrow/Icon feather-arrow-up-right@2x.png' ?>" alt="">
                            <span class="">2.06%</span>
                        </div>
                        <div class="uk-child-width-auto uk-grid-8 uk-flex-middle" uk-grid>
                            <div><img class="myacc__market__card__logo" src="images/Coins/bitcoin@2x.png" alt=""></div>
                            <div><span class="myacc__market__card__brandName">XLM/USDT</span></div>
                            <div><i class="fa fa-info-circle myacc__market__card__info" aria-hidden="true"></i></div>
                        </div>
                        <div class="myacc__market__card__number" uk-grid>
                            <div class="uk-width-1-3">
                                <div class="myacc__market__card__number__txt1">0.33221</div>
                                <div class="myacc__market__card__number__txt2">$0.332590</div>
                            </div>
                            <div class="uk-width-expand">
                                <canvas class="uk-visible@l" id="myChart<?= $i ?>" width="807" height="217"></canvas>
                                <script>
                                    var ctx = document.getElementById('myChart<?= $i ?>').getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'line',
                                        data: {
                                            labels: ['', '', '', '', '', ''],
                                            datasets: [{
                                                label: '',
                                                data: [<?= rand(10,1000) ?>, <?= rand(10,1000) ?>, <?= rand(10,1000) ?>, <?= rand(10,1000) ?>, <?= rand(10,1000) ?>, <?= rand(10,1000) ?>],
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(255, 206, 86, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(153, 102, 255, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgba(255, 99, 132, 1)',
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(75, 192, 192, 1)',
                                                    'rgba(153, 102, 255, 1)',
                                                    'rgba(255, 159, 64, 1)'
                                                ],
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
        <!--/Market overview-->

        <!--Investment-->
        <div class="uk-margin myacc__investment">
            <h2 class="uk-h2 myacc__common__title">Investment</h2>
            <div class="uk-child-width-1-2@m uk-grid-16-m" uk-grid>
                <?php
                $data = array(
                    array(
                        'title' => 'My invest',
                        'num1' => '1,000,000',
                        'num2' => '2,000,402.02234',
                    ),
                    array(
                        'title' => 'total community invest',
                        'num1' => '10,203,030,864.5466',
                        'num2' => '87,342,031,402.02334',
                    ),
                );
                foreach ($data as $k => $v): ?>
                <div>
                    <h5 class="uk-h5 uk-text-uppercase myacc__investment__title"><?= $v['title'] ?></h5>
                    <div class="uk-card uk-card-default uk-card-body myacc__investment__card">
                        <span class="uk-position-center myacc__investment__card__txt3">≈</span>
                        <div class="uk-child-width-auto uk-flex-between uk-flex-middle" uk-grid>
                            <div>
                                <span class="myacc__investment__card__txt1 uk-text-middle"><?= $v['num1'] ?></span>
                                <span class="myacc__investment__card__txt2 uk-text-middle">XLMS</span>
                            </div>
                            <div>
                                <span class="myacc__investment__card__txt1 myacc__investment__card__txt1--green uk-text-middle"><?= $v['num2'] ?></span>
                                <span class="myacc__investment__card__txt2 uk-text-middle">USDT</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!--/Investment-->

        <!--Asset-->
        <div class="uk-margin myacc__asset">
            <div class="uk-child-width-auto uk-flex-middle" uk-grid>
                <div><h2 class="uk-h2 myacc__common__title uk-margin-remove">Asset</h2></div>
                <div><button class="uk-button uk-button-default uk-button-small myacc__asset__btnShow"><i class="fa fa-eye" aria-hidden="true"></i> Show Balance</button></div>
            </div>
            <div class="uk-child-width-1-2@m uk-grid-16-m myacc__asset__margin" uk-grid>
                <?php
                $data = array(
                    array(
                        'title' => 'EsTIMASTED BALLANCE',
                        'num1' => '**********',
                        'num2' => '******************',
                    ),
                    array(
                        'title' => 'AVAILABLE BALLANCE',
                        'num1' => '1,000,000',
                        'num2' => '2,000,402.02234',
                    ),
                );
                foreach ($data as $k => $v): ?>
                    <div>
                        <h5 class="uk-h5 uk-text-uppercase myacc__investment__title"><?= $v['title'] ?></h5>
                        <div class="uk-card uk-card-default uk-card-body myacc__investment__card">
                            <span class="uk-position-center myacc__investment__card__txt3">≈</span>
                            <div class="uk-child-width-auto uk-flex-between uk-flex-middle" uk-grid>
                                <div>
                                    <span class="myacc__investment__card__txt1 uk-text-middle"><?= $v['num1'] ?></span>
                                    <span class="myacc__investment__card__txt2 uk-text-middle">XLMS</span>
                                </div>
                                <div>
                                    <span class="myacc__investment__card__txt1 myacc__investment__card__txt1--green uk-text-middle"><?= $v['num2'] ?></span>
                                    <span class="myacc__investment__card__txt2 uk-text-middle">USDT</span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="uk-card uk-card-default uk-card-body uk-padding-small myacc__asset__marginTop myacc__asset__card uk-overflow-auto">
                <table class="uk-table uk-table-divider myacc__asset__table">
                    <thead>
                    <tr>
                        <th>Coin</th>
                        <th>Total</th>
                        <th>Available</th>
                        <th>USDT Value</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $a=array("Bitcoin","Ethereum","TetherUS","Stellar Lumens","Stellar Lumens S");
                    $b=array("BTC","ETH","USDT","XLM","XLMS");
                    $random_keys=array_rand($a,5);
                    $random_key=array_rand($b,5);
                    ?>
                    <?php for ($i=0;$i<=4;$i++): ?>
                    <tr>
                        <td>
                            <div class="uk-grid-7 uk-flex-middle" uk-grid>
                                <div>
                                    <img class="myacc__asset__table__img" src="images/favicon.png" alt="">
                                </div>
                                <div>
                                    <div class="myacc__asset__table__c1"><?= $b[$random_key[$i]] ?></div>
                                    <div class="myacc__asset__table__c2"><?= $a[$random_keys[$i]] ?></div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="myacc__asset__table__txt">1.029384523</span>
                        </td>
                        <td>
                            <span class="myacc__asset__table__txt">1.029384523</span>
                        </td>
                        <td>
                            <span class="myacc__asset__table__txt"><?= rand(1,19) ?>,300.23424</span>
                        </td>
                    </tr>
                    <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!--/Asset-->

        <!--Community Stellar Lumens S-->
        <div class="uk-margin myacc__Community">
            <h2 class="uk-h2 myacc__common__title">Community Stellar Lumens S</h2>
            <div class="uk-child-width-1-2@m uk-grid-16-m" uk-grid>
                <?php
                $data = array(
                    array(
                        'title' => 'total community invest',
                        'num1' => '1,000,000',
                        'num2' => '2,000,402.02234',
                    ),
                    array(
                        'title' => 'YOUR LEVEL',
                        'num1' => '10,203,030,864.5466',
                        'num2' => '87,342,031,402.02334',
                    ),
                );
                foreach ($data as $k => $v): ?>
                    <div>
                        <h5 class="uk-h5 uk-text-uppercase myacc__investment__title"><?= $v['title'] ?></h5>
                        <?php if ($k==0): ?>
                        <div class="uk-card uk-card-default uk-card-body myacc__investment__card">
                            <span class="uk-position-center myacc__investment__card__txt3">≈</span>
                            <div class="uk-child-width-auto uk-flex-between uk-flex-middle" uk-grid>
                                <div>
                                    <span class="myacc__investment__card__txt1 uk-text-middle"><?= $v['num1'] ?></span>
                                    <span class="myacc__investment__card__txt2 uk-text-middle">XLMS</span>
                                </div>
                                <div>
                                    <span class="myacc__investment__card__txt1 myacc__investment__card__txt1--green uk-text-middle"><?= $v['num2'] ?></span>
                                    <span class="myacc__investment__card__txt2 uk-text-middle">USDT</span>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php if ($k==1): ?>
                        <div class="uk-child-width-1-2@m uk-grid-16-m" uk-grid>
                            <div>
                                <div class="uk-card uk-card-default uk-card-body myacc__investment__card">
                                    <div class="uk-position-relative uk-display-inline-block myacc__investment__card__star">
                                        <div class="uk-position-cover uk-text-nowrap uk-overflow-hidden" style="width: <?= (rand(1,100)) ?>%">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <div class="uk-display-inline-block uk-text-nowrap">
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default uk-card-body myacc__investment__card uk-text-center">
                                    <span class="myacc__investment__card__bannerTxt">BANNER</span>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!--/Community Stellar Lumens S-->

        <!--Stellar Lumens S Price Chart-->
        <div class="uk-margin myacc__Stellar">
            <h2 class="uk-h2 myacc__common__title">Stellar Lumens S Price Chart</h2>
            <div class="uk-display-inline-block myacc__Stellar__filterBox">
                <?php
                $data = array('1D','7D','1M','3M','1 YEAR','YTD','ALL TIME');
                $random = rand(0,count($data));
                foreach ($data as $k => $v): ?>
                <a href="" class="myacc__Stellar__filterBox__a <?= ($k == $random)? 'uk-active':'' ?>"><?= $v ?></a>
                <?php endforeach; ?>
            </div>
            <?php

            function generateRandomString($length = 10) {
                return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
            }

            $RandomString = generateRandomString();  // OR: generateRandomString(24)
            ?>
            <canvas id="myChart-<?= $RandomString ?>" width="1595" height="516"></canvas>
            <script>
                var ctx = document.getElementById('myChart-<?= $RandomString ?>').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                        datasets: [{
                            label: '# of Votes',
                            data: [12, 19, 3, 5, 2, 3],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>
        </div>
        <!--/Stellar Lumens S Price Chart-->
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>