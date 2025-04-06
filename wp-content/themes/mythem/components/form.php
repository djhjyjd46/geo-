<form class="contact-form__form">
    <input name="name" type="text" placeholder="Ваше имя" required>
    <input name="tel" type="tel" placeholder="Ваш телефон" required>
    <input type="hidden" name="action" value="mail_to">
    <button type="submit">Отправить</button>
    <div class="contact-form__conf">
        <label class="custom-checkbox">
            <input type="checkbox" required>
            <span></span>
            <p>Согласен (а) на&nbsp;<a class="policy">обработку персональных данных</a></p>
        </label>
    </div>
</form>