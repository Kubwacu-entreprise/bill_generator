var create_invoice_overlay = document.getElementById("create_invoice_overlay"),
    add_item_overlay = document.getElementById("add_item_overlay"),
    create_invoice_button = document.getElementById("create_invoice_button"),
    close_create_invoice_overlay = document.getElementById("close_create_invoice_overlay"),
    close_add_item_overlay = document.getElementById("close_add_item_overlay"),
    loader_container = document.querySelector('.loader_container');

if (create_invoice_button != null) {
    create_invoice_button.addEventListener('click', function () {
        create_invoice_overlay.style.display = "block";
    });
}


close_create_invoice_overlay.addEventListener('click', function () {
    create_invoice_overlay.style.display = "none";
});

close_add_item_overlay.addEventListener('click', function () {
    add_item_overlay.style.display = "none";
});

function getBills() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'lib/get_bills.php');

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
        }
    }

    xhr.send(null);
}

getBills()