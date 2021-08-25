console.log(
  "%c" + "W E L C O M E   T O   C V . C A T H T M L C S S . N E T",
  "font-family:Montserrat ; font-size:14px; background: #009999; border-radius: 2px; padding: 6px 12px; margin: 5px 10px 7px 0px; color: #ffffff;"
);



window.addEventListener("load", ()=>{
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    if (!sidebar.classList.contains("open")){
        sidebar.classList.add("open");
    }

    if(closeBtn){
        closeBtn.addEventListener("click", ()=>{
            sidebar.classList.toggle("open");
            menuBtnChange();//calling the function(optional)
        });
    }

    if(searchBtn){
        searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });
    }

    // following are the code to change sidebar button(optional)
    const menuBtnChange = () => {
        if(sidebar.classList.contains("open")){
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
        }else {
            closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
        }
    }

    if (window.innerWidth <= 1280){
        sidebar.classList.remove("open");
    }


    easydropdown.all();

    document.querySelector(".time_range").flatpickr({
        mode: "range",
        dateFormat: "d/m/Y"
    });

    const contentHtml = '<div class="uk-child-width-auto uk-grid-small uk-flex-middle" uk-grid>\n' +
        '                    <div>\n' +
        '                        <i style="font-size: 23px;color: #676767;" class="fa fa-info-circle" aria-hidden="true"></i>\n' +
        '                    </div>\n' +
        '                    <div>\n' +
        '                        <div class="investment__tooltip__title">Investment Detail</div>\n' +
        '                    </div>\n' +
        '                </div>\n' +
        '                <div class="investment__tooltip__box1">\n' +
        '                    <table class="uk-table uk-table-small investment__tooltip__box1__table1 uk-margin-remove">\n' +
        '                        <tbody>\n' +
        '                        <tr>\n' +
        '                            <td class="investment__tooltip__box1__table1__td" colspan="2"></td>\n' +
        '                        </tr>\n' +
        '                        <tr>\n' +
        '                            <th class="investment__tooltip__box1__table1__th">DATE</th>\n' +
        '                            <td class="investment__tooltip__box1__table1__td">\n' +
        '                                <span class="myacc__asset__table__txt">22/09/2021</span>\n' +
        '                            </td>\n' +
        '                        </tr>\n' +
        '                        <tr>\n' +
        '                            <th class="investment__tooltip__box1__table1__th">STATUS</th>\n' +
        '                            <td class="investment__tooltip__box1__table1__td">\n' +
        '                                <span class="wallet__Transaction__txtStatus" style="color: #f6b64a;">Pending</span>\n' +
        '                            </td>\n' +
        '                        </tr>\n' +
        '                        <tr>\n' +
        '                            <th class="investment__tooltip__box1__table1__th">AMOUNT INVESTMENT</th>\n' +
        '                            <td class="investment__tooltip__box1__table1__td">\n' +
        '                                <div class="uk-flex-middle uk-grid-10 uk-grid" uk-grid="">\n' +
        '                                    <div class="uk-first-column">\n' +
        '                                        <span class="investment__table__txt1">100.000</span>\n' +
        '                                    </div>\n' +
        '                                    <div>\n' +
        '                                        <img style="width: 19px;" src="images/Coins/Bitcoin-Logo@2x.png" alt="">\n' +
        '                                    </div>\n' +
        '                                </div>\n' +
        '                            </td>\n' +
        '                        </tr>\n' +
        '                        <tr>\n' +
        '                            <th class="investment__tooltip__box1__table1__th">TERM</th>\n' +
        '                            <td class="investment__tooltip__box1__table1__td">\n' +
        '                                <span class="myacc__asset__table__txt">24 month</span>\n' +
        '                            </td>\n' +
        '                        </tr>\n' +
        '                        <tr>\n' +
        '                            <th class="investment__tooltip__box1__table1__th">PRICE XLMS</th>\n' +
        '                            <td class="investment__tooltip__box1__table1__td">\n' +
        '                                <span class="myacc__asset__table__txt">0,5$</span>\n' +
        '                            </td>\n' +
        '                        </tr>\n' +
        '                        <tr>\n' +
        '                            <th class="investment__tooltip__box1__table1__th">USDT Value Investment</th>\n' +
        '                            <td class="investment__tooltip__box1__table1__td">\n' +
        '                                <div class="uk-flex-middle uk-grid-10 uk-grid" uk-grid="">\n' +
        '                                    <div class="uk-first-column">\n' +
        '                                        <span class="investment__table__txt1 investment__table__txt1--c1">50.000</span>\n' +
        '                                    </div>\n' +
        '                                    <div>\n' +
        '                                        <img style="width: 21px;" src="images/Coins/Bitcoin-Logo@2x.png" alt="">\n' +
        '                                    </div>\n' +
        '                                </div>\n' +
        '                            </td>\n' +
        '                        </tr>\n' +
        '                        <tr>\n' +
        '                            <th class="investment__tooltip__box1__table1__th" colspan="2">INVESTMENT</th>\n' +
        '                        </tr>\n' +
        '                        <tr>\n' +
        '                            <td class="investment__tooltip__box1__table1__td" colspan="2">\n' +
        '                                <table class="uk-table uk-table-small investment__tooltip__box1__table2">\n' +
        '                                    <tbody>\n' +
        '                                    <tr>\n' +
        '                                        <th>SIB Wallet</th>\n' +
        '                                        <td>500 XLMS</td>\n' +
        '                                    </tr>\n' +
        '                                    <tr>\n' +
        '                                        <th>XLMS Wallet</th>\n' +
        '                                        <td>5000 XLMS</td>\n' +
        '                                    </tr>\n' +
        '                                    <tr>\n' +
        '                                        <th>Buy XLMS</th>\n' +
        '                                        <td>4500 XLMS</td>\n' +
        '                                    </tr>\n' +
        '                                    <tr>\n' +
        '                                        <th>USDT Wallet</th>\n' +
        '                                        <td>500 XLMS</td>\n' +
        '                                    </tr>\n' +
        '                                    <tr>\n' +
        '                                        <th>USDT Deposit</th>\n' +
        '                                        <td>8000 USDT</td>\n' +
        '                                    </tr>\n' +
        '                                    </tbody>\n' +
        '                                </table>\n' +
        '                            </td>\n' +
        '                        </tr>\n' +
        '                        <tr>\n' +
        '                            <td class="investment__tooltip__box1__table1__td" colspan="2"></td>\n' +
        '                        </tr>\n' +
        '                        </tbody>\n' +
        '                    </table>\n' +
        '                </div>\n' +
        '                <table class="uk-table uk-table-small investment__tooltip__table3 uk-margin-remove-bottom">\n' +
        '                    <caption>You need to top up USDT to activate the investment package</caption>\n' +
        '                    <tbody>\n' +
        '                    <tr>\n' +
        '                        <th>AMOUNT</th>\n' +
        '                        <td>1000 USDT</td>\n' +
        '                    </tr>\n' +
        '                    <tr>\n' +
        '                        <th>NETWORK</th>\n' +
        '                        <td>TRX</td>\n' +
        '                    </tr>\n' +
        '                    <tr>\n' +
        '                        <th>ADDRESS</th>\n' +
        '                        <td>TLw6VF359nmutQ3KbG7EcLCnkRC4b7NYmR</td>\n' +
        '                    </tr>\n' +
        '                    </tbody>\n' +
        '                </table>'

    // UIkit.tooltip('.investment__table__detail', {
    //     title: content,
    //     pos: 'bottom',
    // });

    tippy('.investment__table__detail', {
        content: contentHtml,
        allowHTML: true,
        followCursor: true,
        placement: 'right-start',
    });

    // UIkit.util.on(document, 'show', '.uk-tooltip.uk-active', function() {
    //     // do something
    //     console.log('do something');
    // });

    // UIkit.tooltip('.investment__table__detail').show();
});

window.addEventListener('resize', ()=>{
    let sidebar = document.querySelector(".sidebar");

    if (window.innerWidth <= 1280){
        sidebar.classList.remove("open");
    }else {
        sidebar.classList.add("open");
    }
});