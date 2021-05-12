var create_invoice_overlay = document.getElementById("create_invoice_overlay"),
    add_item_overlay = document.getElementById("add_item_overlay"),
    create_invoice_button = document.getElementById("create_invoice_button"),
    close_create_invoice_overlay = document.getElementById("close_create_invoice_overlay"),
    close_add_item_overlay = document.getElementById("close_add_item_overlay");


create_invoice_button.addEventListener('click', function () {
    create_invoice_overlay.style.display = "block";
});

close_create_invoice_overlay.addEventListener('click', function () {
    create_invoice_overlay.style.display = "none";
});

close_add_item_overlay.addEventListener('click', function () {
    add_item_overlay.style.display = "none";
});