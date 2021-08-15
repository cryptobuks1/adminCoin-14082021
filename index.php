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
                        <div class="uk-child-width-auto uk-flex-between uk-flex-middle" uk-grid>
                            <div>
                                <span class="myacc__investment__card__txt1"><?= $v['num1'] ?></span>
                                <span class="myacc__investment__card__txt2">XLMS</span>
                            </div>
                            <div>
                                <span class="myacc__investment__card__txt1 myacc__investment__card__txt1--green"><?= $v['num2'] ?></span>
                                <span class="myacc__investment__card__txt2">USDT</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!--/Investment-->
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>