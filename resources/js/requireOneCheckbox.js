(() => {
    if (!document.getElementById("edit-user-form")) {
        return;
    }
    const form = document.getElementById("edit-user-form");
    const checkboxes = form.querySelectorAll("input[type=checkbox]");
    const checkboxLength = checkboxes.length;
    const firstCheckbox = checkboxLength > 0 ? checkboxes[0] : null;

    function init() {
        if (firstCheckbox) {
            for (let i = 0; i < checkboxLength; i++) {
                checkboxes[i].addEventListener("change", checkValidity);
            }
        }
    }

    function isChecked() {
        for (let i = 0; i < checkboxLength; i++) {
            if (checkboxes[i].checked) return true;
        }

        return false;
    }

    function checkValidity() {
        const errorMessage = !isChecked()
            ? "At least one checkbox must be selected."
            : "";
        firstCheckbox.setCustomValidity(errorMessage);
    }

    init();
})();
