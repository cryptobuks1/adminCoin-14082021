<?php $data["title"] = "Wallet"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-container wallet">
    <div class="uk-section-small">

        <div class="uk-margin wallet__btnBox">
            <div class="uk-grid-small uk-child-width-1-2 uk-child-width-auto@s uk-grid-23-m" uk-grid>
                <div>
                    <a href="desposit.php" class="uk-button uk-button-primary wallet__btnBox__btn">Desposit</a>
                </div>
                <div>
                    <a href="withdraw.php" class="uk-button uk-button-primary wallet__btnBox__btn">Withdraw</a>
                </div>
                <div>
                    <a href="transfer.php" class="uk-button uk-button-primary wallet__btnBox__btn">Transfer</a>
                </div>
                <div>
                    <a href="exchange.php" class="uk-button uk-button-primary wallet__btnBox__btn">Exchange</a>
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
            <div class="uk-card uk-card-default uk-card-body uk-padding-small myacc__asset__marginTop myacc__asset__card" uk-toggle="cls: uk-overflow-auto; mode: media; media: (max-width: 959px)">
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
                                <div class="wallet__selectOption">
                                    <select name="foo" class="uk-sortable-placeholder">
                                        <option value="">Choose action</option>
                                        <option value="1">Desposit</option>
                                        <option value="2">Withdraw</option>
                                        <option value="3">Transfer</option>
                                        <option value="4">Exchange</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                    <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!--/Asset-->

        <!--Transaction History-->
        <div class="uk-margin wallet__Transaction">
            <h2 class="uk-h2 myacc__common__title">Transaction History</h2>
            <div class="wallet__Transaction__filter">
                <div class="uk-child-width-1-2 uk-child-width-auto@s uk-grid-small uk-grid-20-m" uk-grid>
                    <div>
                        <div class="filterOption">
                            <select name="foo" class="uk-sortable-placeholder">
                                <option value="">Type</option>
                                <option value="1">Desposit</option>
                                <option value="2">Withdraw</option>
                                <option value="3">Transfer</option>
                                <option value="4">Exchange</option>
                                <option value="5">Received</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="uk-inline">
                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: calendar"></span>
                            <input class="uk-input time_range" type="text" placeholder="Time">
                        </div>
                    </div>
                    <div>
                        <div class="filterOption">
                            <select name="foo" class="uk-sortable-placeholder">
                                <option value="">Asset</option>
                                <option value="1">BTC</option>
                                <option value="2">ETH</option>
                                <option value="3">USDT</option>
                                <option value="4">XLM</option>
                                <option value="5">XLMS</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="filterOption">
                            <select name="foo" class="uk-sortable-placeholder">
                                <option value="">Status</option>
                                <option value="1">Completed</option>
                                <option value="2">Pending</option>
                                <option value="3">Cancel</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wallet__Transaction__link">
                <div class="uk-child-width-auto uk-grid-13" uk-grid>
                    <div>
                        <a href="" class="wallet__Transaction__link__txt1 wallet__Transaction__link__txt">Deposit hasn't arrived? Click here</a>
                    </div>
                    <div>
                        <a href="" class="wallet__Transaction__link__txt2 wallet__Transaction__link__txt">
                            <span uk-icon="icon: push; ratio: 1"></span>
                            Export Deposit History
                        </a>
                    </div>
                </div>
            </div>
            <div class="uk-card uk-card-default uk-card-body uk-padding-small myacc__asset__card" uk-toggle="cls: uk-overflow-auto; mode: media; media: (max-width: 959px)">
                <table class="uk-table uk-table-middle uk-table-divider myacc__asset__table">
                    <thead>
                    <tr>
                        <th>Time</th>
                        <th>type</th>
                        <th>asset</th>
                        <th>amount</th>
                        <th>STATUS</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $status=array('Completed','Pending','Cancel');
                    ?>
                    <?php for ($i=0;$i<=8;$i++): ?>
                        <tr>
                            <td>
                                <span class="myacc__asset__table__txt">20-07-2020 13:30</span>
                            </td>
                            <td>
                                <span class="myacc__asset__table__txt">Deposit</span>
                            </td>
                            <td>
                                <div class="uk-child-width-auto uk-flex-middle uk-grid-5" uk-grid>
                                    <div>
                                        <img style="width: 16px" src="images/Coins/USDT Logo@2x.png" alt="">
                                    </div>
                                    <div>
                                        <span class="wallet__Transaction__txtAsset">USDT</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="wallet__Transaction__txtaMount">15,000</span>
                            </td>
                            <td>
                                <?php if ($status[array_rand($status)] === 'Completed'): ?>
                                    <span class="wallet__Transaction__txtStatus" style="color: #3fc03b;">Completed</span>
                                <?php elseif ($status[array_rand($status)] === 'Pending'): ?>
                                    <span class="wallet__Transaction__txtStatus" style="color: #f6b64a;">Pending</span>
                                <?php elseif ($status[array_rand($status)] === 'Cancel'): ?>
                                    <span class="wallet__Transaction__txtStatus" style="color: #e86666;">Cancel</span>
                                <?php else: ?>
                                    <span class="wallet__Transaction__txtStatus">N/A</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!--/Transaction History-->
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>