<form class="send-form" id="sendForm" autocomplete="off">
    <div class="send-alert"></div>
    <input type="hidden" id="inputHidden" value="1">
    <div class="form-group">
        <div class="input-placeholder">
            <div class="placeholder">
                <label for="name">Twoje imię i nazwisko</label>
                <span class="star">*</span>
            </div>
            <input type="text" class="form-input" id="name" name="name">
            <span class="errorText">To pole jest wymagane</span>
        </div>
    </div>
    <div class="form-group">
        <div class="input-placeholder">
            <div class="placeholder">
                <label for="email">Twój adres e-mail</label>
                <span class="star">*</span>
            </div>
            <input type="email" class="form-input" id="email" name="email">
            <span class="errorText">To pole jest wymagane</span>
        </div>
    </div>
    <div class="form-group">
        <div class="input-placeholder">
            <div class="placeholder">
                <label for="phone">Numer telefonu</label>
                <span class="star">*</span>
            </div>
            <input type="text" class="form-input" id="phone" name="phone">
            <span class="errorText">To pole jest wymagane</span>
        </div>
    </div>
    <div class="form-group">
        <div class="input-placeholder">
            <div class="placeholder">
                <label for="company">Nazwa firmy</label>
                <span class="star">*</span>
            </div>
            <input type="text" class="form-input" id="company" name="company">
            <span class="errorText">To pole jest wymagane</span>
        </div>
    </div>
    <div class="form-group">
            <div class="input-placeholder">
            <div class="placeholder">
                <label for="txt">Ilu i jakich pracowników miesięcznie potrzebujesz?</label>
            </div>
            <textarea type="text" class="form-input" id="txt" name="txt"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="checkboxcontainer"> Wyrażam zgodę na przetwarzanie przez Tikrow Sp. z o.o. z siedzibą w Pruszkowie (05-803) przy ul. Kraszewskiego 32/4 podanych przeze mnie w formularzu danych w celu opracowania i jednorazowego przedstawienia mi oferty handlowej poprzez kontakt telefoniczny lub e-mail. <span> *</span> 
            <input type="checkbox" id="agree">
            <span class="checkmark"></span>
        </label>

        <div class="group-collapsible">
            <div class="collapsible">Rozwiń</div>
            <div class="content">
                <p>Podanie danych ma charakter dobrowolny. Dane osobowe będą przetwarzane na podstawie zgody osoby podającej dane. Osoba podająca dane ma prawo: zażądania od administratora dostępu do danych osobowych, której dane dotyczą, prawo ich sprostowania, usunięcia lub ograniczenia przetwarzania, prawo żądania sprzeciwu wobec przetwarzania, a także prawo do przenoszenia danych, prawo wniesienia skargi do organu nadzorczego oraz prawo do cofnięcia zgody w dowolnym momencie bez wpływu na zgodność z prawem przetwarzania, którego dokonała na podstawie zgody przed jej cofnięciem.</p>
            </div>
        </div>
        
    </div>
    <div class="form-group">
        <p class="small pt-5 pb-3"><span class="star">*</span> pola obowiązkowe</p>
        <button type="submit" id="send" class="btn btn_red"> <?php if (!empty($args['button'] )) { echo $args['button']; } else { echo 'Zacznij współpracę'; } ?></button>
    </div>
</form>