<fieldset class="scheduler-border">
    <legend class="scheduler-border">Preencha os seus dados</legend>

    <div class="row">

        <input type="hidden" name="specialty_id" id="specialty_id" value="{{ $specialty_id }}">
        <input type="hidden" name="professional_id" id="professional_id" value="{{ $professional_id }}">

        <div class="col-sm-12 col-md-6 col-lg-6 mt-2">
            <input type="text" name="name" id="patient" class="form-control" placeholder="Nome completo">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 mt-2">
            <select name="source_id" id="source_id" class="form-control">
                <option value="" disabled selected>Como conheceu?</option>
                @foreach ($data_source->content as $data)
                    <option value="{{ $data->origem_id }}">{{ $data->nome_origem }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 mt-2">
            <input type="text" name="birthdate" id="birthdate" class="form-control" placeholder="Nascimento"
                onfocus="(this.type = 'date')" id="date">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 mt-2 ">
            <input type="text" name="cpf" id="cpf" class="form-control" placeholder="CPF">
        </div>

    </div>
    <br>
    <div class="row">
        <div class="col-12">
            <button type="submit" class="btn btn-success">Solicitar Horário</button>
        </div>
    </div>

</fieldset>
