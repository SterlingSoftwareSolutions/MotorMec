const filterDropdown = document.getElementById("filter-dropdown");
const dataTable = document.getElementById("data-table");

filterDropdown.addEventListener("change", function() {
    const selectedValue = filterDropdown.value;
    const rows = dataTable.getElementsByTagName("tr");

    for (let i = 0; i < rows.length; i++) {
        const cells = rows[i].getElementsByTagName("td");
        const option = cells[1].textContent;

        if (selectedValue === "all" || option === selectedValue) {
            rows[i].style.display = "";
        } else {
            rows[i].style.display = "none";
        }
    }
});