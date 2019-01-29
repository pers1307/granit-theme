<header>
    <div class="header-wrap indexHead">
        <div class="centerFix">
            <div class="logo">
                <?php if(has_custom_logo()) : ?>

                    <?php the_custom_logo(); ?>

                <?php else : ?>
                    <img src="images/logo.png" alt=""/>
                <?php endif; ?>

                <a href="">
                </a>
            </div>
            <div class="headerMenu">
                <nav class="tophead">
                    <?php wp_nav_menu(array(
                        'them_location' => 'primary',
//                        'walker'        => new NavWalker()
                    )); ?>
                </nav>

                <?
                wp_nav_menu(array(
                    'them_location'  => 'primary',
//                    'menu_id'        => 'primary-menu',
//                    'depth'           => 2,
//                    'container'       => false,
//                    'menu_class'      => 'nav nav-pills pull-right',
                    'fallback'        => 'NavWalker::fallback',
                    'walker'          => new NavWalker()
                ));

                ?>

                <nav class="tophead">
                    <div><a href="">О компании</a></div>
                    <div><a href="">Доставка</a></div>
                    <div><a href="">Контакты</a></div>
                </nav>

                <div class="bothead">
                    <? $email = get_theme_mod('header_email', ''); ?>
                    <? if(!empty($email)): ?>
                        <div class="email">
                            Электронная почта: <a href="mailto:<?= $email ?>"><?= $email ?></a>
                        </div>
                    <? endif; ?>

                    <? $headerPhoneOne = get_theme_mod('header_phone_one', ''); ?>
                    <? $headerPhoneTwo = get_theme_mod('header_phone_two', ''); ?>

                    <? if(!empty($headerPhoneOne) && !empty($headerPhoneTwo)): ?>
                        <div class="number">
                            <a href="tel:<?= $headerPhoneOne ?><?= $headerPhoneTwo ?>"><span><?= $headerPhoneOne ?> </span><?= $headerPhoneTwo ?></a>
                        </div>
                    <? endif; ?>

                    <div class="callback">
                        <a href="">Обратный звонок</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mainMenu-wrap">
            <div class="centerFix">
                <nav class="mainMenu">
                    <div>
                        <a href="#" class="haveDrop">Плитняк</a>
                        <div class="dropMenu">
                            <div class="dropclose"></div>
                            <div class="wrap3">
                                <div class="line">
                                    <div>
                                        <div class="wrapImg">
                                            <div>
                                                <img src="images/dropmenu.png" alt=""/>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="wrapname">
                                            Златолит
                                        </div>
                                    </div><!--
                                            --><div>
                                        <div class="wrapImg">
                                            <div>
                                                <img src="images/dropmenu.png" alt=""/>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="wrapname">
                                            Плитняк Лемезит
                                        </div>
                                    </div><!--
                                      --><div>
                                        <div class="wrapImg">
                                            <div>
                                                <img src="images/dropmenu.png" alt=""/>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="wrapname">
                                            Плитняк Режевской
                                        </div>
                                    </div><!--
                                        --><div>
                                        <div class="wrapImg">
                                            <div>
                                                <img src="images/dropmenu.png" alt=""/>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="wrapname">
                                            Плитняк Режевской
                                        </div>
                                    </div><!--
                                    --><div>
                                        <div class="wrapImg">
                                            <div>
                                                <img src="images/dropmenu.png" alt=""/>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="wrapname">
                                            Плитняк Режевской
                                        </div>
                                    </div>
                                </div>
                                <div class="line">
                                    <div>
                                        <div class="wrapImg">
                                            <div>
                                                <img src="images/dropmenu.png" alt=""/>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="wrapname">
                                            Златолит
                                        </div>
                                    </div><!--
                                        --><div>
                                        <div class="wrapImg">
                                            <div>
                                                <img src="images/dropmenu.png" alt=""/>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="wrapname">
                                            Плитняк Лемезит
                                        </div>
                                    </div><!--
                                      --><div>
                                        <div class="wrapImg">
                                            <div>
                                                <img src="images/dropmenu.png" alt=""/>
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="wrapname">
                                            Плитняк Режевской
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span></span>
                    <div>
                        <a href=""><span>Галька</span></a>
                    </div>
                    <span></span>
                    <div>
                        <a href=""><span>Каменная-крошка</span></a>
                    </div>
                    <span></span>
                    <div>
                        <a href=""><span>Для бани</span></a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="centerFix">
            <div class="indexSlider">
                <div class="indexContentSlider">
                    <div class="main-slider-index">
                        <div>
                            <div class="dec"><span></span></div>
                            <span>Продажа натурального камня оптом</span>
                        </div>
                        <div>
                            <div class="dec"><span></span></div>
                            <span>Продажа натурального камня оптом</span>
                        </div>
                        <div>
                            <div class="dec"><span></span></div>
                            <span>Продажа натурального камня оптом</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>