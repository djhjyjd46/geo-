export function stopForm ()  {
    const forms = document.querySelectorAll('form');

    forms.forEach(form => {
        form.addEventListener('submit', (event) => {
            event.preventDefault(); // Отмена перезагрузки страницы
            console.log('Форма отправлена, но страница не перезагружается.');
            // Здесь можно добавить обработку данных формы
        });
    });
}
document.addEventListener('DOMContentLoaded', () => {
    stopForm();
});