<style>
    h3 {
        text-align: center;
        color: white;
    }

    table th {
        width: 70% !important;
        border: 1px solid black !important;
    }

    td {
        width: 25% !important;
        border: 1px solid black !important;
    }
    .print-btn {
        float: right;
    }
    @media print {
        .navbar {
            display: none !important;
        }
        .print-btn {
            display: none !important;
        }
    }

</style>

<div class="comtainer">
    <div class="card">
        <div class="card-header bg-danger">
            <h3><i style="font-size:24px" class="fa fa-calendar-check-o"></i> Werkbon</h3>
            <button class="btn btn-dark print-btn" id="print" onclick="print"><i class="fa fa-print"></i> Print werkbon</button>
        </div>
        <div class="card-body">
            <div class="col-12 p-2 ">

                <div class="card">
                    <div class="card-header">
                        <h5>Gegevens</h5>
                    </div>
                    <div class="card-body">

                        <table class="table">
                            <tr>
                                <td style="border:none !important"><b>Klantgegevens</b></td>
                                <td style="border:none !important"></td>
                                <td style="border:none !important"><b>Machinegegevens</b></td>
                                <td style="border:none !important"></td>
                            </tr>
                            <tr>
                                <td class="bg-secondary">Klantnummer</td>
                                <td class="w-25">3002</td>
                                <td class="bg-secondary">Model</td>
                                <td class="w-25">Ricoh SP 4210</td>
                            </tr>
                            <tr>
                                <td class="bg-secondary">Bedrijfsnaam</td>
                                <td class="w-25">Keus Schoonmaak</td>
                                <td class="bg-secondary">Serienummer</td>
                                <td class="w-25">W795235145</td>
                            </tr>
                            <tr>
                                <td class="bg-secondary">Adres</td>
                                <td class="w-25">Tweedestraat 10, Apeldoorn</td>
                                <td class="bg-secondary">Tellerstand</td>
                                <td class="w-25">12 002</td>
                            </tr>
                            <tr>
                                <td class="bg-secondary">Telefoon</td>
                                <td class="w-25">055 9865412</td>
                                <td class="bg-secondary">Contractnummer</td>
                                <td class="w-25">1412</td>
                            </tr>
                            <tr>
                                <td class="bg-secondary">E-mail</td>
                                <td class="w-25">info@keuschoonmaak.nl</td>
                                <td class="bg-secondary">Storing</td>
                                <td class="w-25">Foutcode 554</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header">
                        <h5>Uitgevoerde werkzaamheden</h5>
                    </div>
                    <div class="card-body">
                        <textarea rows="6" class="form-control"></textarea>
                    </div>
                </div>
                
                <hr>

                <table>
                    <tr>
                        <td class="bg-secondary">Naam medewerker</td>
                        <td><input type="text" class="form-control" /></td>
                        <td class="bg-secondary">Tijd aankomst bij klant</td>
                        <td><input type="text" class="form-control" /></td>
                    </tr>
                    <tr>
                        <td class="bg-secondary">Plaats</td>
                        <td><input type="text" class="form-control"></td>
                        <td class="bg-secondary">Datum</td>
                        <td><input type="date" class="form-control"></td>
                    </tr>
                    <tr>
                        <td class="bg-secondary">Handtekening klant</td>
                        <td style="height:90px !important;"></td>
                        
                    </td>
                    </tr>
                </table>

            </div>
        </div>
    </div>

</div>

<script>
    document.getElementById('print').onclick = (e) =>{
        e.preventDefault();
        window.print();
    }
</script>