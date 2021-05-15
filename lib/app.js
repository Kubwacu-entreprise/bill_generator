var create_invoice_overlay = document.getElementById("create_invoice_overlay"),
    add_item_overlay = document.getElementById("add_item_overlay"),
    create_invoice_button = document.getElementById("create_invoice_button"),
    close_create_invoice_overlay = document.getElementById("close_create_invoice_overlay"),
    close_add_item_overlay = document.getElementById("close_add_item_overlay"),
    loader_container = document.querySelector('.loader_container'),
    bills_list = document.getElementById('bills_list'),
    add_product = document.getElementById('add_product'),
    sells_table = document.getElementById('sells_table'),
    sells_data = document.getElementById('sells_data'),
    show_invoice_form = document.getElementById("show_invoice_form");


var sells = [
    {
        "description": "product for test",
        "quantite": 1,
        "prix_unitaire": 5000,
        "tva": 500,
        "montant": 1000
    }
];

if (create_invoice_button != null) {
    create_invoice_button.addEventListener('click', function () {
        create_invoice_overlay.style.display = "block";
        sells_table.innerHTML = generateProductTable(sells);
    });
}

show_invoice_form.addEventListener('click', function(){
    create_invoice_overlay.style.display = 'block';
    sells_table.innerHTML = generateProductTable(sells);
});

close_create_invoice_overlay.addEventListener('click', function () {
    create_invoice_overlay.style.display = "none";
});

close_add_item_overlay.addEventListener('click', function () {
    add_item_overlay.style.display = "none";
    
});

if (add_product != null) {
    add_product.addEventListener('click', function () {
        add_item_overlay.style.display = "block";
    });
}

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

function generateProductTable(sells) {
    sells_data.value = JSON.stringify(sells);

    var html_code = '<tr class="table_header"><th>Description</th><th>Quantité</th><th>Prix unitaire</th><th>TVA</th><th>Montant</th></tr>';

    for (var i = 0; i<sells.length; i++){
        html_code += '<tr class="table_row">' +
            '<td>' + sells[i].description + '</td><td>' +
            sells[i].quantite + '</td><td>' + sells[i].prix_unitaire + '</td><td>' +
            sells[i].tva + '</td><td>'+sells[i].montant+'</td></tr>'
    }

    return html_code;
}

getBills();

