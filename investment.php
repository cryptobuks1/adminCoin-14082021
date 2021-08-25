<?php $data["title"] = "Investment"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-container desposit withdraw exchange investment">
    <div class="uk-section-small">


        <!--EXCHANGE XLM TO USDT-->
        <div class="uk-card uk-card-default uk-card-body uk-margin investment__card">
            <div class="uk-child-width-1-4@m uk-grid-match uk-grid-small uk-grid-31-m" uk-grid="margin: margin1">
                <div>
                    <div class="investment__card__box1 investment__card__box1--total uk-flex uk-flex-middle uk-flex-center">
                        <span class="uk-position-top-center investment__card__box1__title">Total Invest</span>
                        <div class="uk-width-1-1 uk-text-center investment__card__box1__profit__box">
                            <div>
                                <div class="uk-display-inline-block uk-position-relative">
                                    <div style="max-width: inherit;color: #444fa1;" class="investment__card__box1__profit__txtLeft uk-position-center-left-out uk-text-nowrap">1.000.000</div>
                                    <img class="investment__card__box1__profit__img" style="width: 24.6px;" src="images/Coins/Bitcoin-Logo@2x.png" alt="">
                                    <div style="max-width: inherit" class="investment__card__box1__profit__txtRight uk-position-center-right-out uk-text-nowrap">XLM</div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-display-inline-block uk-position-relative">
                                    <div style="max-width: inherit;color: #444fa1;" class="investment__card__box1__profit__txtLeft uk-position-center-left-out uk-text-nowrap">400.000</div>
                                    <img class="investment__card__box1__profit__img" style="width: 24.6px;" src="images/Coins/Bitcoin-Logo@2x.png" alt="">
                                    <div style="max-width: inherit" class="investment__card__box1__profit__txtRight uk-position-center-right-out uk-text-nowrap">USDT</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="investment__card__box1 investment__card__box1--profit uk-flex uk-flex-middle uk-flex-center">
                        <span class="uk-position-top-center investment__card__box1__title">Profit</span>
                        <div class="uk-width-1-1 uk-text-center investment__card__box1__profit__box">
                            <div>
                                <div class="uk-display-inline-block uk-position-relative">
                                    <div style="max-width: inherit;color: #3fc03b;" class="investment__card__box1__profit__txtLeft uk-position-center-left-out uk-text-nowrap">100.000</div>
                                    <img class="investment__card__box1__profit__img" style="width: 24.6px;" src="images/Coins/Bitcoin-Logo@2x.png" alt="">
                                    <div style="max-width: inherit" class="investment__card__box1__profit__txtRight uk-position-center-right-out uk-text-nowrap">XLM</div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-display-inline-block uk-position-relative">
                                    <div style="max-width: inherit;color: #3fc03b;" class="investment__card__box1__profit__txtLeft uk-position-center-left-out uk-text-nowrap">20.000</div>
                                    <img class="investment__card__box1__profit__img" style="width: 24.6px;" src="images/Coins/Bitcoin-Logo@2x.png" alt="">
                                    <div style="max-width: inherit" class="investment__card__box1__profit__txtRight uk-position-center-right-out uk-text-nowrap">USDT</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="investment__card__box1 uk-flex uk-flex-middle uk-flex-center">
                        <span class="uk-position-top-center investment__card__box1__title">Number packs</span>
                        <span class="investment__card__box1__txtNumber">03</span>
                    </div>
                </div>
                <div>
                    <div class="investment__card__box1 investment__card__box1--wallet uk-flex uk-flex-middle uk-flex-center">
                        <span class="uk-position-top-center investment__card__box1__title">SIB Wallet</span>
                        <div class="uk-width-1-1 uk-text-center investment__card__box1__wallet">
                            <div>
                                <span class="investment__card__box1__wallet__txt investment__card__box1__wallet__txt--c1">2.030.412,02031</span>
                                <span class="investment__card__box1__wallet__txt investment__card__box1__wallet__txt--c2">XLMS</span>
                            </div>
                            <div>
                                <a href="desposit.php" class="investment__card__box1__btn uk-button uk-button-small uk-button-primary">Deposit</a>
                                <a href="withdraw.php" class="investment__card__box1__btn uk-button uk-button-small uk-button-primary">Withdraw</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/EXCHANGE XLM TO USDT-->

        <!--JOIN NOW TO RECIEVE BEST ENDOW!-->
        <div class="desposit__boxStep uk-alert" uk-alert="">
            <a class="uk-alert-close uk-icon uk-close" uk-close=""><svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"><line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line><line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line></svg></a>
            <div class="uk-flex-middle uk-grid" uk-grid="">
                <div class="uk-width-auto@m uk-first-column">
                    <img src="images/Asset 1@2x.png" alt="">
                </div>
                <div class="uk-width-expand">
                    <h3 class="uk-h3 withdraw__Authentication__title">JOIN NOW TO RECIEVE BEST ENDOW!</h3>
                    <div uk-grid>
                        <div class="uk-width-3-5@m">
                            <p class="withdraw__Authentication__desc">Activate at least one more authentication to increase your account security. Funds can be withdrawn once Two-Factor Authentication is enabled.</p>
                            <button class="uk-button uk-button-primary withdraw__Authentication__btn">JOIN NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/JOIN NOW TO RECIEVE BEST ENDOW!-->

        <!--Investment Package-->
        <div class="uk-margin uk-card uk-card-body uk-card-default desposit__totalDeposited investment__packege">
            <h2 class="uk-h2 desposit__totalDeposited__title">Investment Package</h2>
            <div class="uk-grid-small uk-grid-51-m" uk-grid>
                <div class="uk-width-2-5@m">
                    <div class="blue">
                        <h3 class="uk-h3 investment__packege__title">Package</h3>
                        <div class="uk-overflow-auto">
                            <table class="uk-table investment__packege__table">
                                <thead>
                                <tr>
                                    <th>From</th>
                                    <th>To</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php for ($i=0;$i<=4;$i++): ?>
                                <tr>
                                    <td>
                                        <div class="uk-flex-middle uk-grid-10 uk-grid" uk-grid="">
                                            <div class="uk-first-column">
                                                <span class="investment__table__txt1"><?= (rand(0,100)) ?>.000</span>
                                            </div>
                                            <div>
                                                <img style="width: 19px;" src="images/Coins/Bitcoin-Logo@2x.png" alt="">
                                            </div>
                                            <div>
                                                <span class="investment__packege__table__txt1">XLMS</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="uk-flex-middle uk-grid-10 uk-grid" uk-grid="">
                                            <div class="uk-first-column">
                                                <span class="investment__table__txt1"><?= (rand(0,100)) ?>.000</span>
                                            </div>
                                            <div>
                                                <img style="width: 19px;" src="images/Coins/Bitcoin-Logo@2x.png" alt="">
                                            </div>
                                            <div>
                                                <span class="investment__packege__table__txt1">XLMS</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php endfor; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="uk-width-expand">
                    <div class="green">
                        <h3 class="uk-h3 investment__packege__title">Profit</h3>
                        <div class="uk-overflow-auto">
                            <table class="uk-table investment__packege__table">
                                <thead>
                                <tr>
                                    <th>6 months</th>
                                    <th>12 months</th>
                                    <th>18 months</th>
                                    <th>24 months</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php for ($i=0;$i<=4;$i++): ?>
                                <tr>
                                    <td>
                                        <span class="investment__packege__table__txt"><?= (rand(0,100)) ?>,50%</span>
                                    </td>
                                    <td>
                                        <span class="investment__packege__table__txt"><?= (rand(0,100)) ?>,00%</span>
                                    </td>
                                    <td>
                                        <span class="investment__packege__table__txt"><?= (rand(0,100)) ?>,00%</span>
                                    </td>
                                    <td>
                                        <span class="investment__packege__table__txt"><?= (rand(0,100)) ?>,00%</span>
                                    </td>
                                </tr>
                                <?php endfor; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Investment Package-->

        <!--Demo-->
        <div class="uk-margin uk-hidden">
            <div class="investment__tooltip">
                <div class="uk-child-width-auto uk-grid-small uk-flex-middle" uk-grid>
                    <div>
                        <i style="font-size: 23px;color: #676767;" class="fa fa-info-circle" aria-hidden="true"></i>
                    </div>
                    <div>
                        <div class="investment__tooltip__title">Investment Detail</div>
                    </div>
                </div>
                <div class="investment__tooltip__box1">
                    <table class="uk-table uk-table-small investment__tooltip__box1__table1 uk-margin-remove">
                        <tbody>
                        <tr>
                            <td class="investment__tooltip__box1__table1__td" colspan="2"></td>
                        </tr>
                        <tr>
                            <th class="investment__tooltip__box1__table1__th">DATE</th>
                            <td class="investment__tooltip__box1__table1__td">
                                <span class="myacc__asset__table__txt">22/09/2021</span>
                            </td>
                        </tr>
                        <tr>
                            <th class="investment__tooltip__box1__table1__th">STATUS</th>
                            <td class="investment__tooltip__box1__table1__td">
                                <span class="wallet__Transaction__txtStatus" style="color: #f6b64a;">Pending</span>
                            </td>
                        </tr>
                        <tr>
                            <th class="investment__tooltip__box1__table1__th">AMOUNT INVESTMENT</th>
                            <td class="investment__tooltip__box1__table1__td">
                                <div class="uk-flex-middle uk-grid-10 uk-grid" uk-grid="">
                                    <div class="uk-first-column">
                                        <span class="investment__table__txt1">100.000</span>
                                    </div>
                                    <div>
                                        <img style="width: 19px;" src="images/Coins/Bitcoin-Logo@2x.png" alt="">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="investment__tooltip__box1__table1__th">TERM</th>
                            <td class="investment__tooltip__box1__table1__td">
                                <span class="myacc__asset__table__txt">24 month</span>
                            </td>
                        </tr>
                        <tr>
                            <th class="investment__tooltip__box1__table1__th">PRICE XLMS</th>
                            <td class="investment__tooltip__box1__table1__td">
                                <span class="myacc__asset__table__txt">0,5$</span>
                            </td>
                        </tr>
                        <tr>
                            <th class="investment__tooltip__box1__table1__th">USDT Value Investment</th>
                            <td class="investment__tooltip__box1__table1__td">
                                <div class="uk-flex-middle uk-grid-10 uk-grid" uk-grid="">
                                    <div class="uk-first-column">
                                        <span class="investment__table__txt1 investment__table__txt1--c1">50.000</span>
                                    </div>
                                    <div>
                                        <img style="width: 21px;" src="images/Coins/Bitcoin-Logo@2x.png" alt="">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="investment__tooltip__box1__table1__th" colspan="2">INVESTMENT</th>
                        </tr>
                        <tr>
                            <td class="investment__tooltip__box1__table1__td" colspan="2">
                                <table class="uk-table uk-table-small investment__tooltip__box1__table2">
                                    <tbody>
                                    <tr>
                                        <th>SIB Wallet</th>
                                        <td>500 XLMS</td>
                                    </tr>
                                    <tr>
                                        <th>XLMS Wallet</th>
                                        <td>5000 XLMS</td>
                                    </tr>
                                    <tr>
                                        <th>Buy XLMS</th>
                                        <td>4500 XLMS</td>
                                    </tr>
                                    <tr>
                                        <th>USDT Wallet</th>
                                        <td>500 XLMS</td>
                                    </tr>
                                    <tr>
                                        <th>USDT Deposit</th>
                                        <td>8000 USDT</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="investment__tooltip__box1__table1__td" colspan="2"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <table class="uk-table uk-table-small investment__tooltip__table3 uk-margin-remove-bottom">
                    <caption>You need to top up USDT to activate the investment package</caption>
                    <tbody>
                    <tr>
                        <th>AMOUNT</th>
                        <td>1000 USDT</td>
                    </tr>
                    <tr>
                        <th>NETWORK</th>
                        <td>TRX</td>
                    </tr>
                    <tr>
                        <th>ADDRESS</th>
                        <td>TLw6VF359nmutQ3KbG7EcLCnkRC4b7NYmR</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--/Demo-->

        <!--Open Invest-->
        <div class="uk-margin uk-card uk-card-body uk-card-default">
            <h2 class="uk-h2 desposit__totalDeposited__title">Open Invest</h2>
            <div class="wallet__Transaction__filter">
                <div class="uk-child-width-1-2 uk-child-width-auto@s uk-grid-small uk-grid-20-m" uk-grid>
                    <div>
                        <div class="uk-inline">
                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: calendar"></span>
                            <input class="uk-input time_range" type="text" placeholder="Time">
                        </div>
                    </div>
                    <div>
                        <div class="filterOption">
                            <select name="foo" class="uk-sortable-placeholder">
                                <option value="">Amount</option>
                                <option value="1">Completed</option>
                                <option value="2">Pending</option>
                                <option value="3">Cancel</option>
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
            <div uk-toggle="cls: uk-overflow-auto; mode: media; media: (max-width: 959px)">
                <table class="uk-table uk-table-middle uk-table-divider myacc__asset__table">
                    <thead>
                    <tr>
                        <th>DATE</th>
                        <th>AMOUNT</th>
                        <th>VALUE INVEST</th>
                        <th>TERM</th>
                        <th>MOnthly interest</th>
                        <th>STATUS</th>
                        <th>VIEW</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $status=array('Actived','Pending','Cancel');
                    ?>
                    <?php for ($i=0;$i<=8;$i++): ?>
                        <tr>
                            <td>
                                <span class="myacc__asset__table__txt">22/09/2021</span>
                            </td>
                            <td>
                                <div class="uk-flex-middle uk-grid-10" uk-grid>
                                    <div>
                                        <span class="investment__table__txt1">100.000</span>
                                    </div>
                                    <div>
                                        <img style="width: 19px;" src="images/Coins/Bitcoin-Logo@2x.png" alt="">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="uk-flex-middle uk-grid-10" uk-grid>
                                    <div>
                                        <span class="investment__table__txt1 investment__table__txt1--c1">50.000</span>
                                    </div>
                                    <div>
                                        <img style="width: 21px;" src="images/Coins/Bitcoin-Logo@2x.png" alt="">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="myacc__asset__table__txt">12 month</span>
                            </td>
                            <td>
                                <span class="myacc__asset__table__txt">12,00%</span>
                            </td>
                            <td>
                                <?php if ($status[array_rand($status)] === 'Actived'): ?>
                                    <span class="wallet__Transaction__txtStatus" style="color: #3fc03b;">Actived</span>
                                <?php elseif ($status[array_rand($status)] === 'Pending'): ?>
                                    <span class="wallet__Transaction__txtStatus" style="color: #f6b64a;">Pending</span>
                                <?php elseif ($status[array_rand($status)] === 'Cancel'): ?>
                                    <span class="wallet__Transaction__txtStatus" style="color: #e86666;">Cancel</span>
                                <?php else: ?>
                                    <span class="wallet__Transaction__txtStatus">N/A</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="" class="investment__table__detail">Details</a>
                            </td>
                        </tr>
                    <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!--/Open Invest-->

        <!--Profit Today-->
        <div class="uk-margin uk-card uk-card-body uk-card-default">
            <h2 class="uk-h2 desposit__totalDeposited__title">Profit Today</h2>
            <div class="wallet__Transaction__filter">
                <div class="uk-child-width-1-2 uk-child-width-auto@s uk-grid-small uk-grid-20-m" uk-grid>
                    <div>
                        <div class="uk-inline">
                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: calendar"></span>
                            <input class="uk-input time_range" type="text" placeholder="Time">
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
            <div uk-toggle="cls: uk-overflow-auto; mode: media; media: (max-width: 959px)">
                <table class="uk-table uk-table-middle uk-table-divider myacc__asset__table">
                    <thead>
                    <tr>
                        <th>DATE</th>
                        <th>CONTENT</th>
                        <th>AMOUNT</th>
                        <th>UNIT</th>
                        <th>STATUS</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $status=array('Accepted','Pending','Cancel');
                    ?>
                    <?php for ($i=0;$i<=8;$i++): ?>
                        <tr>
                            <td>
                                <span class="myacc__asset__table__txt">22/09/2021</span>
                            </td>
                            <td>
                                <span class="myacc__asset__table__txt">Profit today</span>
                            </td>
                            <td>
                                <span class="investment__table__txt1">100</span>
                            </td>
                            <td>
                                <span class="myacc__asset__table__txt">XLMS</span>
                            </td>
                            <td>
                                <?php if ($status[array_rand($status)] === 'Accepted'): ?>
                                    <span class="wallet__Transaction__txtStatus" style="color: #3fc03b;">Accepted</span>
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
        <!--/Profit Today-->
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>