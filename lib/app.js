var create_invoice_overlay = document.getElementById("create_invoice_overlay"),
    add_item_overlay = document.getElementById("add_item_overlay"),
    create_invoice_button = document.getElementById("create_invoice_button"),
    close_create_invoice_overlay = document.getElementById("close_create_invoice_overlay"),
    close_add_item_overlay = document.getElementById("close_add_item_overlay"),
    loader_container = document.querySelector('.loader_container'),
    bills_list = document.getElementById('bills_list'),
    create_invoice_button_menu = document.getElementById("create_invoice_button_menu");

if (create_invoice_button != null) {
    create_invoice_button.addEventListener('click', function () {
        create_invoice_overlay.style.display = "block";
    });
}
create_invoice_button_menu.addEventListener('click', function () {
    create_invoice_overlay.style.display = "block";
});


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
            loader_container.style.display = 'none';
            var bills = JSON.parse(xhr.responseText);
            chargeBills(bills);
        }
    }

    xhr.send(null);
}

function chargeBills(bills) {
    var html_code = '<tr class="table_header"><th class="number_colum">N°</th><th>Nom du client</th><th>Date</th><th>Montant (Fbu)</th></tr>'

    for (let i = 0; i < bills.length; i++) {
         html_code +=
        '<tr class="table_row"><td>'+ bills[i].id+'</td><td>'+bills[i].client_name+'</td>'+
        '<td>'+bills[i].created_at+'</td><td>2 500 000</td></tr>';
    }
    bills_list.innerHTML = html_code;


}

getBills()