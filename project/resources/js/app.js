window.addEventListener("load", () => {
    $deletes = document.querySelectorAll(".delete");
    $deletes.forEach(element => {
        element.addEventListener("click", (event) => {
            if (!confirm("Are you sure to delete the element from the database?")) {
                event.preventDefault();
                console.log("OK")
            }
        });
    });
})
