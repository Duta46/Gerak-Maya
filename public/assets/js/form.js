document.addEventListener("DOMContentLoaded", function () {
    const checkboxes = document.querySelectorAll(".issue-checkbox");

    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener("change", function () {
            let name = this.name;

            if (this.checked) {
                checkboxes.forEach((cb) => {
                    if (cb !== this && cb.name === name) {
                        cb.checked = false;
                    }
                });
            }
        });
    });
});
