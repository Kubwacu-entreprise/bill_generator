<header>
    <div class="header_content">
        <div><h1>Bill generator (nombre de factures créés: <?= $bills_number ?>)</h1></div>
        <div><i class="fas fa-plus" id="show_invoice_form"></i></div>
    </div>
</header>

<script>
    var show_invoice_form = document.getElementById("show_invoice_form");
    var create_invoice_overlay = document.getElementById('create_invoice_overlay');

    show_invoice_form.addEventListener('click', function(){
        create_invoice_overlay.style.display = 'block';
        console.log("clicked");
    });
</script>