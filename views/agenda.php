<!-- css da página -->
<link rel="stylesheet" href="assets/css/agenda.css">

<section>
    <div class="col-md-6 mx-auto mt-5">
        <h2> Agenda medica </h2>

        <!-- Formulário -->
        <form id="formagenda">

            <!-- Nome -->
            <div class="mb-3">
                <label for="crmMedico"> Crm medico </label>
                <input type="text" id="crmMedico" name="crmMedico" class="form-control">
            </div>

            <!-- CPF -->
            <div class="mb-3">
                <label for="cpfCliente"> CPF cliente </label>
                <input type="text" id="cpfCliente" name="cpfCliente" class="form-control">
            </div>

            <!-- e-mail -->
            <div class="mb-3">
                <label for="data"> Data </label>
                <input type="text" id="data" name="data" class="form-control">
            </div>

            <!-- telefone -->
            <div class="mb-3">
                <label for="horario"> Horario </label>
                <input type="text" id="horario" name="horario" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary w-100">
                Cadastrar
            </button>

        </form>

        <!-- Mensagem de Retorno -->
        <div id="mensagem" class="alert d-none mt-3"> </div>
                
    </div>


</section>

<!-- script da página -->
<script src="assets/js/agenda.js"></script>