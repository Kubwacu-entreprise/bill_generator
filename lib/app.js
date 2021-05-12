var create_invoice_overlay = document.getElementById("create_invoice_overlay"),
    add_item_overlay = document.getElementById("add_item_overlay"),
    create_invoice_button = document.getElementById("create_invoice_button");


create_invoice_button.addEventListener('click', function () {
    create_invoice_overlay.style.display = "block";
});