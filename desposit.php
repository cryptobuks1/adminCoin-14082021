<?php $data["title"] = "Desposit"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-container desposit">
    <div class="uk-section-small">
        <div class="uk-margin desposit__margin1">
            <h2 class="uk-h2 desposit__title">Deposit Crypto</h2>
            <div>
                <span class="desposit__backLink__icon" uk-icon="icon: chevron-left; ratio: 0.7"></span>
                <a href="" class="desposit__backLink uk-text-middle uk-link-toggle">Back to your wallet</a>
            </div>
        </div>

        <!--Easy deposit with 4 steps-->
        <div class="desposit__boxStep" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <h3 class="uk-h3 desposit__boxStep__title">Easy deposit with 4 steps</h3>
            <div uk-grid>
                <div class="uk-width-expand">
                    <!---->
                    <div class="desposit__boxStep__box1">
                        <div class="uk-child-width-expand@m" uk-grid>
                            <?php
                            $data = array(
                                array(
                                    'title' => 'Copy address',
                                    'desc' => 'Choose the crypto and its network on this page, and copy the deposit address.',
                                ),
                                array(
                                    'title' => 'Initiate a withdrawal',
                                    'desc' => 'Initiate a withdrawal on the withdrawal platform.',
                                ),
                                array(
                                    'title' => 'Network confirmation',
                                    'desc' => 'Wait for the blockchain network to confirm your transfer.',
                                ),
                                array(
                                    'title' => 'Deposit successful',
                                    'desc' => 'After the network confirmation, Binance will credit the crypto for you.',
                                ),
                            );
                            foreach ($data as $k => $v): ?>
                                <div class="desposit__boxStep__item">
                                    <div class="uk-position-relative desposit__boxStep__item__box">
                                        <div class="uk-flex-inline uk-flex-center uk-flex-middle desposit__boxStep__item__badge"><?= $k+1 ?></div>
                                    </div>
                                    <div>
                                        <h5 class="uk-h5 desposit__boxStep__item__name"><?= $v['title'] ?></h5>
                                        <div class="desposit__boxStep__item__desc"><?= $v['desc'] ?></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!--/-->
                </div>
                <div class="uk-width-auto@m">
                    <img src="images/tutorial@2x.png" alt="">
                </div>
            </div>
        </div>
        <!--/Easy deposit with 4 steps-->

        <!--Sellect coin-->
        <div class="uk-margin desposit__selectCoin uk-card uk-card-default uk-card-body uk-form-stacked">
            <div uk-grid>
                <div class="uk-width-expand">
                    <div class="uk-margin desposit__selectCoin__margin">
                        <h3 class="uk-h3 desposit__selectCoin__title">Sellect coin</h3>
                        <div class="desposit__selectCoin__box">
                            <div class="uk-margin">
                                <label class="uk-form-label desposit__selectCoin__box__label" for="form-stacked-text">COINS</label>
                                <div class="uk-form-controls">
                                    <div class="uk-child-width-1-2 uk-child-width-expand@m uk-grid-4 uk-grid-match" uk-grid>
                                        <?php
                                        $data = array(
                                            array(
                                                'name' => 'BTC',
                                                'desc' => 'Bitcoin',
                                            ),
                                            array(
                                                'name' => 'ETH',
                                                'desc' => 'Ethereum',
                                            ),
                                            array(
                                                'name' => 'USDT',
                                                'desc' => 'TetherUS',
                                            ),
                                            array(
                                                'name' => 'XLM',
                                                'desc' => 'Stellar Lumens',
                                            ),
                                            array(
                                                'name' => 'XLMS',
                                                'desc' => 'Stellar Lumens S',
                                            ),
                                        );
                                        foreach ($data as $k=>$v): ?>
                                        <div>
                                            <label>
                                                <input class="desposit__selectCoin__box__checkInput uk-radio uk-sortable-placeholder" name="radio2" type="radio" <?= ($k==0)?checked:'' ?>>
                                                <div class="desposit__selectCoin__box__cardCheck uk-height-1-1">
                                                    <div class="uk-flex-middle uk-grid-13" uk-grid>
                                                        <div class="uk-width-auto">
                                                            <img style="width: 27px;" src="images/Coins/Bitcoin-Logo@2x.png" alt="">
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <div class="desposit__selectCoin__box__cardCheck__name"><?= $v['name'] ?></div>
                                                            <div class="desposit__selectCoin__box__cardCheck__desc line-clamp-1"><?= $v['desc'] ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin desposit__selectCoin__margin">
                        <h3 class="uk-h3 desposit__selectCoin__title">Deposit to</h3>
                        <div class="desposit__selectCoin__box">
                            <div class="uk-margin">
                                <label style="margin-bottom: 4px;" class="uk-form-label desposit__selectCoin__box__label" for="form-stacked-text">NETWORK</label>
                                <div class="desposit__selectCoin__box__desc">Ensure the network you choose to deposit matches the withdrawal network, or assets may be lost.</div>
                            </div>
                            <div class="uk-margin">
                                <div class="desposit__selectCoin__box__select">
                                    <select name="foo" class="uk-sortable-placeholder">
                                        <option value="">Select withdrawal network</option>
                                        <option value="1">Desposit</option>
                                        <option value="2">Withdraw</option>
                                        <option value="3">Transfer</option>
                                        <option value="4">Exchange</option>
                                    </select>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <label class="uk-form-label desposit__selectCoin__box__label" for="form-stacked-text">ADdRESS</label>
                                <div class="uk-form-controls">
                                    <div class="uk-child-width-auto uk-grid-10" uk-grid>
                                        <div>
                                            <span class="desposit__selectCoin__box__address">0x716d9d96d80d8a5164d5b23e2b689b0ed988f87c</span>
                                        </div>
                                        <div>
                                            <a class="desposit__selectCoin__box__address__link" href=""><i class="fa fa-clone" aria-hidden="true"></i></a>
                                        </div>
                                        <div>
                                            <a class="desposit__selectCoin__box__address__link" href=""><i class="fa fa-qrcode" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <ul class="uk-list uk-list-circle desposit__selectCoin__box__note">
                                    <li>Send only BNB to this deposit address.</li>
                                    <li>Ensure the network is <span>TRC20</span> (Stellar Lumens).</li>
                                </ul>
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
                            'How to Deposit Crypto Step-by-step Guide',
                            'Why Has My Deposit Not Been Credited yet?',
                            'How to Retrieve Crypto Deposit with Wrong or Missing Tag/Memo',
                            'How to Buy Crypto and Get Started on SIB',
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
        <!--/Sellect coin-->

        <!--Total Deposited-->
        <div class="uk-margin uk-card uk-card-body uk-card-default desposit__totalDeposited">

        </div>
        <!--/Total Deposited-->
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>