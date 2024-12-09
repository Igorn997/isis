document.addEventListener("DOMContentLoaded", function () {
  const closeModal = document.querySelectorAll(".close-modal");

  document.querySelectorAll(".certifications-list-item").forEach((item) => {
    item.addEventListener("click", function () {
      const id = this.dataset.id;
      const modal = document.getElementById(`certificationModal-${id}`);

      if (modal) {
        modal.style.display = "flex";
      }
    });
  });

  closeModal.forEach((close) => {
    close.addEventListener("click", function () {
      const modal = this.closest(".modal");
      if (modal) {
        modal.style.display = "none";
      }
    });
  });

  window.addEventListener("click", function (event) {
    const modals = document.querySelectorAll(".modal");
    modals.forEach((modal) => {
      if (event.target === modal) {
        modal.style.display = "none";
      }
    });
  });
});
