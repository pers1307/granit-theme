<!DOCTYPE html>
<html>
<head>
    <? get_template_part( 'templates/common/head'); ?>
</head>
<body>
<div class="main">
    <? get_template_part( 'templates/common/header'); ?>
    <section>
        <div class="seotext">
            <div class="centerFix">
                <div class="rewiew">
                    <div class="consultate">
                        <div class="menuTitle">
                            <span>Консультация:</span>
                        </div>
                        <div class="consform">
                            <form action="">
                                <label class="labelBlock">
                                    <span>Имя <i>*</i></span>
                                    <input type="text" class="error">
                                    <span class="errorText">Ошибка ввода</span>
                                </label>
                                <label class="labelBlock">
                                    <span>Телефон <i>*</i></span>
                                    <input type="text">
                                </label>
                                <label class="labelBlock">
                                    <span>E-mail</span>
                                    <input type="text">
                                </label>
                                <label class="labelBlock">
                                    <span>Комментарий</span>
                                    <textarea></textarea>
                                </label>
                                <button class="btn">Отправить</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="seocont">
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
</body>
<?php wp_footer(); ?>
</html>