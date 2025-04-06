document.addEventListener("DOMContentLoaded", () => {
  const modalCalForm = document.getElementById("modalCalForm");
  const modalPolicy = document.getElementById("modalPolicy");
  const modalThnx = document.getElementById("modalThnx");
  const modalConsult = document.getElementById("modalConsult");
  const modalCookie = document.getElementById("modalCookie");

  // Кнопки открытия модальных окон
  const openModalPhoneButtons = document.querySelectorAll(".openModalPhone");
  const openModalConsultButtons = document.querySelectorAll(".openModalConsult");
  const policyLinks = document.querySelectorAll(".policy");
  const policyCookieLinks = document.querySelectorAll(".policyCookie"); // Новый селектор

  // Кнопки закрытия модальных окон
  const closeButtons = document.querySelectorAll(".modal .close");
  const closeBigButtons = document.querySelectorAll(".close--big"); // Новый селектор для больших кнопок закрытия

  // Открытие модального окна "Заказать звонок"
  openModalPhoneButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      modalCalForm.style.display = "block";
    });
  });

  // Открытие модального окна политики конфиденциальности
  policyLinks.forEach((link) => {
    link.style.textdecoration = "underline";
    link.addEventListener("click", () => {
      modalPolicy.style.display = "block";
    });
  });

  // Открытие модального окна "Консультация"
  openModalConsultButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      modalConsult.style.display = "block";
    });
  });

  // Открытие модального окна политики куки
  policyCookieLinks.forEach((link) => {
    link.style.textdecoration = "underline";
    link.addEventListener("click", () => {
      modalCookie.style.display = "block";
    });
  });

  // Закрытие модальных окон при нажатии на кнопку "Закрыть"
  closeButtons.forEach((closeButton) => {
    closeButton.addEventListener("click", () => {
      const modal = closeButton.closest(".modal");
      if (modal) {
        modal.style.display = "none";
      }
    });
  });

  // Закрытие модальных окон при нажатии на кнопку close--big
  closeBigButtons.forEach((closeButton) => {
    closeButton.addEventListener("click", () => {
      const modal = closeButton.closest(".modal");
      if (modal) {
        modal.style.display = "none";
      }
    });
  });

  // Закрытие модальных окон при клике вне их содержимого
  window.addEventListener("click", (event) => {
    if (event.target.classList.contains("modal")) {
      event.target.style.display = "none";
    }
  });

  // Обработчик отправки формы
  const form = document.querySelector("#modalCalForm form");
  form.addEventListener("submit", (event) => {
    event.preventDefault(); // Предотвращаем отправку формы
    modalCalForm.style.display = "none"; // Закрываем форму
    modalThnx.style.display = "block"; // Открываем modalThnx
  });

  // Обработчик отправки формы в секции contact-form
  const contactForm = document.querySelector("#contact-form form");
  contactForm.addEventListener("submit", (event) => {
    event.preventDefault(); // Предотвращаем отправку формы
    modalThnx.style.display = "block"; // Открываем modalThnx
  });

  // Обработчик отправки формы консультации
  const consultForm = document.querySelector("#modalConsult form");
  consultForm.addEventListener("submit", (event) => {
    event.preventDefault();
    modalConsult.style.display = "none";
    modalThnx.style.display = "block";
  });

  // Закрытие modalThnx при нажатии кнопки "Хорошо"
  const closeThnxButton = modalThnx.querySelector("button.close-thnx");
  closeThnxButton.addEventListener("click", () => {
    modalThnx.style.display = "none";
  });  
});