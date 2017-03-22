<?php

if(isset($_POST))

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Vytvoriť záznam</h3>
            <!--  <a href="generate-invoice.php">Zoznam faktúr</a>-->

            <!-- FORM -->
            <form>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="company">Spoločnosť</label>
                            <input type="text" class="form-control" name="company" placeholder="">
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Meno</label>
                            <input type="text" class="form-control" name="name" placeholder="">
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="surname">Priezvisko</label>
                            <input type="text" class="form-control" name="surname" placeholder="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="street">Ulica</label>
                            <input type="text" class="form-control" name="street" placeholder="">
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="city">Mesto</label>
                            <input type="text" class="form-control" name="city" placeholder="">
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="zip">PSČ</label>
                            <input type="text" class="form-control" name="zip" placeholder="">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="country">Krajina</label>
                    <input type="text" class="form-control" name="country" placeholder="">
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="var_symbol">Variabilný symbol</label>
                            <input type="text" class="form-control" name="var_symbol" placeholder="">
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="kont_symbol">Konštantný symbol</label>
                            <input type="text" class="form-control" name="kont_symbol" placeholder="">
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="spec_symbol">Špecifický symbol</label>
                            <input type="text" class="form-control" name="spec_symbol" placeholder="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cislo_faktury">Č. faktúry</label>
                            <input type="text" class="form-control" name="cislo_faktury" placeholder="">
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="datum_splatnosti">Dátum vystavenia</label>
                            <input type="text" class="form-control" name="datum_splatnosti" placeholder="">
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="datum_vystavenia">Dátum splatnosti</label>
                            <input type="text" class="form-control" name="datum_vystavenia" placeholder="">
                        </div>
                    </div>
                </div>

                <h4>Položky</h4>

                <div class="row" data-number="0" id="item-0">
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="datum_vystavenia">#</label>
                            <input type="text" class="form-control" name="id[]" placeholder="">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="datum_vystavenia">Názov</label>
                            <input type="text" class="form-control" name="nazov[]" placeholder="">
                        </div>
                    </div>

                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="datum_vystavenia">Počet</label>
                            <input type="text" class="form-control" name="pocet[]" placeholder="">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="datum_vystavenia">Jed. cena s DPH</label>
                            <input type="text" class="form-control" name="jednotkova_cena[]" placeholder="">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="datum_vystavenia">Cena bez DPH</label>
                            <input type="text" class="form-control" name="cena_bez_dph[]" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="datum_vystavenia">Cena s DPH</label>
                            <input type="text" class="form-control" name="cena_s_dph[]" placeholder="">
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-12">
                        <a id="add_row" class="btn btn-success pull-left">Pridať položku</a><a id='delete_row' class="pull-right btn btn-danger">Odobrať položku</a>
                    </div>
                </div>

                <hr>
                <button type="submit" class="btn btn-primary">Odoslať formulár</button>
            </form>
        </div>
    </div>
</div>