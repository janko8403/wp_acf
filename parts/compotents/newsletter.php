<div class="newsletter">
    <div class="form-flex">

        <div class="img-fluid d-block mx-auto d-md-none" style="width:50%;" id="newsletter-content-mobile"></div>

        <div class="header-title"><?php if (!empty($args['title'] )) { echo $args['title']; } ?></div>

        <p class="pt-4"><?php if (!empty($args['desc'] )) { echo $args['desc']; } ?></p>

        <form class="send-form" id="newsletterForm" autocomplete="off">
            <div class="send-alert"></div>
            <div class="form-group">
                <?php if (!empty($args['type'] )) : ?>
                    <input type="hidden" id="type" name="type" value="<?php echo $args['type']; ?>">
                <?php else: ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="typeRadio" value="partner" id="type-partner" checked>
                        <label class="form-check-label" for="type-partner">
                            Dla szukających pracy
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="typeRadio" value="company" id="type-company">
                        <label class="form-check-label" for="type-company">
                            Dla firm
                        </label>
                    </div>
                <?php endif; ?>
            </div>
            <div class="form-group d-flex justify-content-between">
                <div class="input-placeholder">
                    <div class="placeholder">
                        <label for="emailNew">Podaj swój adres e-mail</label>
                        <span class="star">*</span>
                    </div>
                    <input type="email" class="form-input" id="emailNew" name="email">
                    <span class="errorText">To pole jest wymagane</span>
                </div>
                <button type="submit" class="sendNewsletter btn btn_red-submit d-none d-md-block">Zapisz się</button>
            </div>
            <div class="form-group">
                <label class="checkboxcontainer"> Chcę otrzymywać wiadomości marketingowo-handlowe od Tikrow Sp. z o.o. Klikając w przycisk „Zapisz się”, wyrażasz zgodę na otrzymywanie newslettera od Tikrow sp. z o.o.<span> *</span> 
                    <input type="checkbox" id="agreeNewsletter">
                    <span class="checkmark"></span>
                </label>

                <div class="group-collapsible">
                    <div class="collapsible">Rozwiń</div>
                    <div class="content">
                        <?php $policy = get_field('policy', 'options'); ?>
                        <p>ul. Kraszewskiego 32/4, 05-803 Pruszków, zawierającego w szczególności materiały edukacyjne i informacje o produktach i usługach Tikrow. Administratorem Twoich danych osobowych jest Tikrow sp. z o.o., adres do kontaktu: kontakt@tikrow.com. Więcej informacji o przetwarzaniu Twoich danych osobowych, znajdziesz w naszej <a target="_blank" href="<?php if($policy) { echo $policy; } ?>">Polityce Prywatności</a>.</p>
                    </div>
                </div>
            </div>
            <div class="form-group d-block d-md-none">
                <button type="submit" class="sendNewsletter btn btn_red-submit">Zapisz się</button>
            </div>
        </form>
    </div>
    <div class="img-right">
        <div class="img-fluid d-block mx-auto pt-5 <?php if (empty($args['type'] )): ?> mt-5 <?php endif; ?> ?>" id="newsletter-content"></div>
    </div>
</div>