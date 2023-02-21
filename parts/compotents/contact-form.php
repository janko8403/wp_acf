<form class="send-form <?php if (!empty($args['class'] )) { echo $args['class']; } else { echo 'pt-0 pt-md-5 mt-0 mt-md-5'; } ?>" id="sendForm" autocomplete="off">
    <div class="send-alert"></div>
    <input type="hidden" id="inputHidden" value="0">
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
        <button type="submit" id="send" class="btn btn_red"> <?php if (!empty($args['button'] )) { echo $args['button']; } else { echo 'Prześlij'; } ?></button>
    </div>
</form>