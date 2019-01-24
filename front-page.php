<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <? get_template_part( 'templates/common/head'); ?>
</head>
<body>
<div class="main">
    <? get_template_part( 'templates/home/header'); ?>
    <section>
        <div class="seotext indexSeo">
            <div class="centerFix">
                <div class="popular">
                    <div class="okh1">
                        Популярный камень
                        <div><span>продукция</span></div>
                    </div>
                    <div class="wrap3">
                        <div class="line">
                            <div>
                                <div class="wrapImg">
                                    <div>
                                        <img src="images/wrap.png" alt=""/>
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
                                        <img src="images/wrap.png" alt=""/>
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
                                        <img src="images/wrap.png" alt=""/>
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
                                        <img src="images/wrap.png" alt=""/>
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
                                        <img src="images/wrap.png" alt=""/>
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
                                        <img src="images/wrap.png" alt=""/>
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
                                        <img src="images/wrap.png" alt=""/>
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
                                        <img src="images/wrap.png" alt=""/>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="wrapname">
                                    Плитняк Режевской
                                </div>
                            </div>
                        </div>
                    </div>
                    <p style="text-align: center">
                        В строительстве и декорировании, а также в ландшафтном дизайне всегда великолепно выглядит натуральный
                        камень. Вы можете подчеркнуть уникальность вашего дома, добавить новые элементы из камня в
                        архитектуру. Мы готовы предложить вам натуральный камень любой породы со всех уголков нашей страны.
                        У нас вы можете купить натуральный камень для фасада, ландшафта и мощения дорожек.
                    </p>
                </div>
                <div class="preim">
                    <div class="okh1">
                        Преимущества
                        <div><span>почему мы</span></div>
                    </div>
                    <div class="wrap4">
                        <div>
                            <div>
                                <div class="wrap4Img">
                                    <div>
                                        <img src="images/wrap41.png" alt=""/>
                                    </div>
                                </div>
                                <div class="wrap4name">
                                    Мы доставляем нашу продукцию максимально быстро
                                </div>
                            </div><!--
                         --><div>
                                <div class="wrap4Img">
                                    <div>
                                        <img src="images/wrap42.png" alt=""/>
                                    </div>
                                </div>
                                <div class="wrap4name">
                                    Лучшие цены на рынке — наше достижение
                                </div>
                            </div><!--
                         --><div>
                                <div class="wrap4Img">
                                    <div>
                                        <img src="images/wrap43.png" alt=""/>
                                    </div>
                                </div>
                                <div class="wrap4name">
                                    На наших складах в наличии самый большой ассортимент камня
                                </div>
                            </div><!--
                         --><div>
                                <div class="wrap4Img">
                                    <div>
                                        <img src="images/wrap41.png" alt=""/>
                                    </div>
                                </div>
                                <div class="wrap4name">
                                    Ваш персональный менеджер всегда будет на связи
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="question">
                <div class="centerFix">
                    <div class="quest">
                        Остались вопросы?
                    </div>

                    <div class="number">
                        <? $headerPhoneOne = get_theme_mod('header_phone_one', ''); ?>
                        <? $headerPhoneTwo = get_theme_mod('header_phone_two', ''); ?>
                        <? if(!empty($headerPhoneOne) && !empty($headerPhoneTwo)): ?>
                            <div><span><?= $headerPhoneOne ?> </span><?= $headerPhoneTwo ?></div>
                        <? endif; ?>

                        <? $timeWork = get_theme_mod('time_work', ''); ?>
                        <? if(!empty($timeWork)): ?>
                            <span><?= $timeWork ?></span>
                        <? endif; ?>
                    </div>

                    <? $email = get_theme_mod('header_email', ''); ?>
                    <? if(!empty($email)): ?>
                        <div class="emailfoot">
                            <div>E-mail:</div>
                            <a href="mailto:<?= $email ?>"><?= $email ?></a>
                        </div>
                    <? endif; ?>

                    <div class="callbackf">
                        <a class="callback" href="#">Обратный звонок</a>
                    </div>
                </div>
            </div>

            <div class="centerFix">
                <div class="indexSeoText">
                    <? if (have_posts()): ?>
                        <?php while(have_posts()): ?>
                            <? the_post(); ?>
                            <? the_content(); ?>
                        <? endwhile; ?>
                    <? endif; ?>
                </div>
            </div>
        </div>
    </section>
    <? get_template_part( 'footer'); ?>
</div>
<?php wp_footer(); ?>
</body>
</html>