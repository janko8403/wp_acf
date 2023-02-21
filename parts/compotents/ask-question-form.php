<form class="send-form" id="askForm" autocomplete="off">
    <div class="send-alert"></div>
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
                <label for="txt">Twoja wiadomość</label>
                <span class="star">*</span>
            </div>
            <textarea type="text" class="form-input" id="txt" name="txt"></textarea>
            <span class="errorText">To pole jest wymagane</span>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-12 col-md-9 col-lg-10">
                <?php $policy = get_field('policy', 'options'); ?>
                <label class="checkboxcontainer"> Zapoznała/em się z treścią informacji o przetwarzaniu danych osobowych zawartych w <a target="_blank" href="<?php if($policy) { echo $policy; } ?>">Polityce Prywatności</a> i wyrażam zgodę na ich przetwarzanie w celu obsługi zgłoszenia. <span> *</span> 
                    <input type="checkbox" id="agree">
                    <span class="checkmark"></span>
                </label>
                <p class="small pt-4 pb-3"><span class="star">*</span> pola obowiązkowe</p>
            </div>
            <div class="col-12 col-md-3 col-lg-2">
                <button type="submit" id="sendAsk" class="btn btn_ask mt-2">Prześlij</button>
            </div>
        </div>
       
    </div>
</form>