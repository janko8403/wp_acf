<form class="send-form pt-4" id="registerForm" autocomplete="off">
    <div class="send-alert"></div>
    <input type="hidden" name="referer" value="https://tikrow.com/">
    <input type="hidden" name="id" value="">
    <input type="hidden" name="regulations" value="1">
    <input type="hidden" name="invite">
    <div class="form-group">
        <div class="input-placeholder">
            <div class="placeholder">
                <label for="phone">Numer telefonu</label>
                <span class="star">*</span>
            </div>
            <input type="text" class="form-input" id="phone" name="login">
            <span class="errorText">To pole jest wymagane</span>
        </div>
    </div>
    <div class="form-group">
        <div class="input-placeholder">
            <div class="placeholder">
                <label for="zip">Kod pocztowy</label>
                <span class="star">*</span>
            </div>
            <input type="text" class="form-input" id="zip" name="post_code">
            <input type="text" name="number_zip" style="display:none;">
            <span class="errorText">To pole jest wymagane</span>
        </div>
    </div>
    <div class="form-group">
        <?php $policy = get_field('policy', 'options'); ?>
        <label class="checkboxcontainer"> Zapoznała/em się z treścią informacji o przetwarzaniu danych osobowych zawartych w <a target="_blank" href="<?php if($policy) { echo $policy; } ?>">Polityce Prywatności</a> i wyrażam zgodę na ich przetwarzanie w celu obsługi zgłoszenia. <span> *</span> 
            <input type="checkbox" id="agree">
            <span class="checkmark"></span>
        </label>

        <!-- <div class="group-collapsible">
            <div class="collapsible">Rozwiń</div>
            <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, odit? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium maxime odit obcaecati quos praesentium optio temporibus totam id voluptates doloribus.</p>
            </div>
        </div> -->
    </div>
    <div class="form-group">
        <p class="small pt-5 pb-3"><span class="star">*</span> pola obowiązkowe</p>
        <button type="submit" id="send" class="btn btn_red">Załóż konto</button>
    </div>
</form>