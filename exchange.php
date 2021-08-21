<?php $data["title"] = "Exchange"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-container desposit withdraw exchange">
    <div class="uk-section-small">
        <div class="uk-margin desposit__margin1">
            <h2 class="uk-h2 desposit__title">Exchange</h2>
            <div>
                <span class="desposit__backLink__icon" uk-icon="icon: chevron-left; ratio: 0.7"></span>
                <a href="wallet.php" class="desposit__backLink uk-text-middle uk-link-toggle">Back to your wallet</a>
            </div>
        </div>

        <!--EXCHANGE XLM TO USDT-->
        <div class="uk-margin desposit__selectCoin uk-card uk-card-default uk-card-body uk-form-stacked">
            <div uk-grid>
                <div class="uk-width-expand">
                    <div class="uk-margin desposit__selectCoin__margin">
                        <h3 class="uk-h3 desposit__selectCoin__title">EXCHANGE XLM TO USDT</h3>
                        <div class="desposit__selectCoin__box">
                            <div class="uk-margin-small">
                                <label class="uk-form-label desposit__selectCoin__box__label" for="form-stacked-text">COINS</label>
                                <div class="uk-form-controls">
                                    <div class="uk-grid-collapse" uk-grid>
                                        <div class="uk-width-2-5@m">
                                            <div class="uk-padding-small exchange__box1">
                                                <div class="uk-flex-middle uk-grid-small" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <img style="width: 24px;" src="images/Coins/Bitcoin-Logo@2x.png" alt="">
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        <div class="uk-child-width-auto uk-flex-between uk-flex-middle uk-grid-collapse" uk-grid>
                                                            <div>
                                                                <div class="desposit__selectCoin__box__cardCheck__name">01 XLM</div>
                                                            </div>
                                                            <div>
                                                                <div class="desposit__selectCoin__box__cardCheck__name">=</div>
                                                            </div>
                                                            <div>
                                                                <div class="desposit__selectCoin__box__cardCheck__name"><span>0.32164</span> USDT</div>
                                                            </div>
                                                        </div>
                                                        <div class="desposit__selectCoin__box__cardCheck__desc line-clamp-1">Stellar Lumens</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-margin-small">
                                <label class="uk-form-label withdraw__selectCoin__label" for="form-stacked-text">
                                    <span class="withdraw__selectCoin__label__txt1">Available ballance:</span>
                                    <span class="withdraw__selectCoin__label__txt2">2,000,000.30482</span>
                                    <span class="withdraw__selectCoin__label__txt3">XLM</span>
                                </label>
                            </div>
                            <div class="uk-margin-small">
                                <div class="uk-form-label" style="margin-bottom: 12px;">
                                    <div class="uk-grid-6 uk-child-width-auto uk-grid">
                                        <?php
                                        $data = array(
                                            '100 XLM',
                                            '500 XLM',
                                            '1000 XLM',
                                            'Max',
                                        );
                                        foreach ($data as $k=>$v): ?>
                                        <label>
                                            <input class="uk-radio uk-hidden exchange__radio" type="radio" name="radio2" <?= ($k==3)?checked:'' ?>>
                                            <span class="uk-label exchange__label"><?= $v ?></span>
                                        </label>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div class="uk-form-controls">
                                    <div class="uk-position-relative">
                                        <input class="uk-input exchange__input" type="text" placeholder="" value="2,000,000.30482">
                                        <span class="uk-position-center-right uk-position-small">XLM</span>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-margin-small">
                                <span class="exchange__resultText">=</span>
                            </div>
                            <div class="uk-margin-small">
                                <div class="uk-position-relative">
                                    <input class="uk-input exchange__input" disabled type="text" placeholder="" value="12,4032.203051">
                                    <span class="uk-position-center-right uk-position-small">USDT</span>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <div class="uk-child-width-auto@m" uk-grid>
                                    <div>
                                        <div class="withdraw__selectCoin__withdraw__txt1">
                                            Network fee
                                            <span class="uk-label exchange__percent">1%</span>
                                        </div>
                                        <div class="withdraw__selectCoin__label__txt2 withdraw__selectCoin__label__txt2--c1">
                                            3 XLM
                                        </div>
                                    </div>
                                    <div>
                                        <div class="withdraw__selectCoin__withdraw__txt1">24h remaining limit</div>
                                        <div class="withdraw__selectCoin__withdraw__txt2">10,000,000 USDT / 10,000,000 USDT</div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <button type="button" class="uk-button uk-button-primary withdraw__Authentication__btn">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-3@m">
                    <h3 class="uk-h3 desposit__selectCoin__faqBox__title">F.A.Q</h3>
                    <ul class="uk-list">
                        <?php
                        $data = array(
                            'Video Tutorial',
                            'SIB 2FA Guide / Google 2FA Guide',
                            'Supported SMS countries',
                            'Using a YubiKey for Two-Factor Authentication (2FA)',
                            'Not Receiving SMS Auth Codes',
                        );
                        foreach ($data as $k=>$v): ?>
                        <li>
                            <div class="uk-flex-middle uk-grid-small" uk-grid>
                                <div class="uk-width-auto">
                                    <div>
                                        <?php if ($k==0): ?>
                                            <span class="desposit__selectCoin__faqBox__list__icon" uk-icon="icon: play-circle; ratio: 1"></span>
                                        <?php else: ?>
                                            <span class="desposit__selectCoin__faqBox__list__icon" uk-icon="icon: file; ratio: 1"></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <a href="" class="uk-link-toggle desposit__selectCoin__faqBox__list__a"><?= $v ?></a>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <!--/EXCHANGE XLM TO USDT-->

        <!--Total Exchanged-->
        <div class="uk-margin uk-card uk-card-body uk-card-default desposit__totalDeposited">
            <h2 class="uk-h2 desposit__totalDeposited__title">Total Exchanged</h2>
            <div class="uk-grid-62-m uk-grid-match uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <div class="uk-text-center desposit__totalDeposited__card">
                        <div class="uk-child-width-auto uk-grid-5 uk-flex-center uk-flex-middle" uk-grid>
                            <div><img style="width: 24px;" src="images/Coins/Bitcoin-Logo@2x.png" alt=""></div>
                            <div><span class="desposit__totalDeposited__card__txt">BTC</span></div>
                        </div>
                        <div class="desposit__totalDeposited__card__number">0.2304020202</div>
                    </div>
                </div>
                <div class="uk-width-auto@m">
                    <span class="exchange__resultText">=</span>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-text-center desposit__totalDeposited__card">
                        <div class="uk-child-width-auto uk-grid-5 uk-flex-center uk-flex-middle" uk-grid>
                            <div><img style="width: 24px;" src="images/Coins/Bitcoin-Logo@2x.png" alt=""></div>
                            <div><span class="desposit__totalDeposited__card__txt">BTC</span></div>
                        </div>
                        <div class="desposit__totalDeposited__card__number">0.2304020202</div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Total Exchanged-->

        <!--Exchange History-->
        <div class="uk-margin uk-card uk-card-body uk-card-default">
            <h2 class="uk-h2 desposit__totalDeposited__title">Exchange History</h2>
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
                    <div class="uk-width-expand@s">

                    </div>
                    <div>
                        <a href="" class="desposit__recentDeposits__link">Withdraw hasn't arrived? Click here</a>
                        <a href="" class="wallet__Transaction__link__txt2 wallet__Transaction__link__txt">
                            <span uk-icon="icon: push; ratio: 1" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon points="12.15,4 9.5,1.4 6.85,4 6.15,3.3 9.5,0 12.85,3.3"></polygon><line fill="none" stroke="#000" x1="9.5" y1="10" x2="9.5" y2="1"></line><polyline fill="none" stroke="#000" points="6 5.5 3.5 5.5 3.5 18.5 15.5 18.5 15.5 5.5 13 5.5"></polyline></svg></span>
                            Export Deposit History
                        </a>
                    </div>
                </div>
            </div>
            <div uk-toggle="cls: uk-overflow-auto; mode: media; media: (max-width: 959px)">
                <table class="uk-table uk-table-middle uk-table-divider myacc__asset__table">
                    <thead>
                    <tr>
                        <th>Time</th>
                        <th>XML Amount</th>
                        <th>USDT AMOUNT</th>
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
                                <span class="wallet__Transaction__txtaMount">15,000</span>
                            </td>
                            <td>
                                <span class="wallet__Transaction__txtaMount">1520.23012</span>
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
        <!--/Exchange History-->
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>