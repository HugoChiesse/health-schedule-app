<fieldset class="scheduler-border" style="background-color: #4C9BD8;">
    <legend class="scheduler-border"></legend>

    <div class="row mt-4">
        <div class="col-2 d-flex justify-content-center align-items-center">
            <label for="specialties" class="col-form-label text-white"
                style="font-size: 1.3em; font-weight: bolder;">Consultas de:</label>
        </div>
        <div class="col-10 d-flex justify-content-center align-items-center">
            <select name="specialties" id="specialties" class="form-control">
                <option value="" disabled selected>Selecione a especialidade</option>
                @foreach ($data->content as $data)
                    <option value="{{ $data->especialidade_id }}">{{ $data->nome }}</option>
                @endforeach
            </select>
        </div>
    </div>

</fieldset>
