const ajaxurl = window.ajax_object?.ajax_url || '/wp-admin/admin-ajax.php';
const forms = document.querySelectorAll('form'); // Выбираем все формы на странице

if (forms.length > 0) {
    forms.forEach(form => {
        const submitBtn = form.querySelector('button[type="submit"]');

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            if (submitBtn) {
                submitBtn.setAttribute('disabled', 'disabled');
                submitBtn.classList.add('loading');
            }

            const formData = new FormData(form);

            fetch(ajaxurl, {
                method: 'POST',
                body: formData,
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Сетевая ошибка: ' + response.status);
                    }
                    return response.json();
                })
                .then(response => {
                    const message = response?.data?.message || 'Операция завершена';
                    const success = response?.data?.success || false;

                    if (success) {
                        console.log('Успех:', message);
                        form.reset();
                    } else {
                        console.error('Ошибка:', message);
                    }
                })
                .catch(error => {
                    console.error('Ошибка при отправке формы:', error.message);
                })
                .finally(() => {
                    if (submitBtn) {
                        submitBtn.removeAttribute('disabled');
                        submitBtn.classList.remove('loading');
                    }
                });
        });
    });
} else {
    console.warn('Формы не найдены');
}