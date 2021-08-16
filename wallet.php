<?php $data["title"] = "Wallet"; ?>
<?php $is_home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-container">
    <div class="uk-section-small">

        <div class="uk-margin wallet__btnBox">
            <div class="uk-grid-small uk-child-width-1-2 uk-child-width-auto@s uk-grid-23-m" uk-grid>
                <div>
                    <a href="" class="uk-button uk-button-primary wallet__btnBox__btn">Desposit</a>
                </div>
                <div>
                    <a href="" class="uk-button uk-button-primary wallet__btnBox__btn">Withdraw</a>
                </div>
                <div>
                    <a href="" class="uk-button uk-button-primary wallet__btnBox__btn">Transfer</a>
                </div>
                <div>
                    <a href="" class="uk-button uk-button-primary wallet__btnBox__btn">Exchange</a>
                </div>
            </div>
        </div>

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
                <table class="uk-table uk-table-middle uk-table-divider myacc__asset__table">
                    <thead>
                    <tr>
                        <th>Coin</th>
                        <th>Total</th>
                        <th>Available</th>
                        <th>USDT Value</th>
                        <th>Action</th>
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
                            <td>
<!--                                <div uk-form-custom="target: > * > span:first-child">-->
<!--                                    <select>-->
<!--                                        <option value="">Choose action</option>-->
<!--                                        <option value="1">Desposit</option>-->
<!--                                        <option value="2">Withdraw</option>-->
<!--                                        <option value="3">Transfer</option>-->
<!--                                        <option value="4">Exchange</option>-->
<!--                                    </select>-->
<!--                                    <button class="uk-button uk-button-default uk-button-small wallet__selectOption" type="button" tabindex="-1">-->
<!--                                        <span></span>-->
<!--                                        <span uk-icon="icon: chevron-down"></span>-->
<!--                                    </button>-->
<!--                                </div>-->
                                <select name="foo" id="my-select<?= $i ?>">
                                    <option value="">Select</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                            </td>
                        </tr>
                    <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!--/Asset-->
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>