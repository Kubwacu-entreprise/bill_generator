<div class="overlay" id="create_invoice_overlay">
    <div class="invoice_form_container">
        <div class="header">
            <span id="close_create_invoice_overlay"><i class="fas fa-times"></i></span>
        </div>
        <form action="" method="POST">
            <h1>A propos du vendeur</h1>
            <div class="form_group">
                
                <div class="input_container">
                    <label for="">Nom du vendeur</label>
                    <input type="text" placeholder="Entrer le nom du vendeur" required>
                </div>
                <div class="input_container">
                    <label for="">Téléphone du vendeur</label>
                    <input type="text" placeholder="Entrer le numero du vendeur" required>
                </div>
                <div class="input_container">
                    <label for="">Date d'expiration</label>
                    <input type="date" placeholder="Entrer la date d'expiration" required>
                </div>
                <div class="input_container">
                    <label for="">Condition</label>
                    <input type="text" placeholder="Entrer la condition" required>
                </div>
                <div class="input_container">
                    <label for="">Modalité</label>
                    <input type="text" placeholder="Entrer la modalité" required>
                </div>
            </div>
            <h1>A propos du client</h1>
            <div class="form_group">
                
                <div class="input_container">
                    <label for="">Nom et Prénom</label>
                    <input type="text" placeholder="Entrer le nom et prénom du client" required>
                </div>
                <div class="input_container">
                    <label for="">Entreprise</label>
                    <input type="text" placeholder="Entrer l'entreprise client" required>
                </div>
                <div class="input_container">
                    <label for="">Adresse</label>
                    <input type="text" placeholder="Entrer l'adresse du client" required>
                </div>
                <div class="input_container">
                    <label for="">Ville/Etat</label>
                    <input type="text" placeholder="Entrer la ville et l'état du client" value="Bujumbura/Burundi" required>
                </div>
                <div class="input_container">
                    <label for="">Téléphone</label>
                    <input type="text" placeholder="Entrer le numero du client" required>
                </div>
            </div>
            <h1>Produits ou Services</h1>
            <table>
                <tr class="table_header">
                    <th>Description</th>
                    <th>Quantité</th>
                    <th>Prix unitaire</th>
                    <th>TVA</th>
                    <th>Montant</th>
                </tr>
                <tr class="table_row">
                    <td>Payment Netflix</td>
                    <td>1</td>
                    <td>15000</td>
                    <td>1000</td>
                    <td>151000</td>
                </tr>
            </table>
            <div class="invoice_form_add_button">
                <button class="button"><i class="fas fa-plus"></i> Ajouter </button>
            </div>
            <div class="submit_button">
                <button class="button" type="submit"><i class="fas fa-plus"></i> Enregistrer la facture </button>
            </div>
        </form>
    </div>
</div>