// Main JavaScript file


document.addEventListener("DOMContentLoaded", function () {

    const rows = document.querySelectorAll(".clickable-row");

    rows.forEach(row => {
        row.addEventListener("click", function () {
            const cells = this.getElementsByTagName("td");
            document.getElementById("id").value       = cells[0].innerText;
            document.getElementById("last_name").value  = cells[1].innerText;
            document.getElementById("first_name").value = cells[2].innerText;
            document.getElementById("email").value      = cells[3].innerText;
            document.getElementById("address").value    = cells[4].innerText;
            document.getElementById("gender").value     = cells[5].innerText;
        });
    });

    document.getElementById("last_name").form.addEventListener("submit", function (e) {
        const submitBtn = e.submitter.name;
        
        if (submitBtn === "add_record") {
            this.action = "pages/insert.php";
        } else if (submitBtn === "update_record") {
            this.action = "pages/update.php";
        } else if (submitBtn === "delete_record") {
            this.action = "pages/delete.php";
        }
    });

});
