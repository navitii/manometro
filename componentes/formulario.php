<main>
    <div class="container">
        <div class="row">
            <div class="col s12 margin">
                <div class="card horizontal">
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title">Ingresar datos al Manometro</span>
                            <form method="POST" >
                                <div class="input-field col s6">
                                    <input id="responsable" name="responsable" type="text" class="validate">
                                    <label for="responsable">Responsable</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="psi" name="psi" type="number" class="validate">
                                    <label for="psi">PSI</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="fecha_registro" name="fecha_registro" type="date" class="validate">
                                </div>
                                <div class="input-field col s6">
                                    <select name="numero_pozo">
                                        <option value="" disabled selected>Elige un pozo</option>
                                        <option value="1">Pozo 1</option>
                                        <option value="2">Pozo 2</option>
                                        <option value="3">Pozo 3</option>
                                    </select>
                                    <label>Selecciona numero de pozo</label>
                                </div>
                        </div>
                        <div class="card-action">
                            <button class="btn waves-effect waves-light light-blue darken-2"  type="submit">Guardar</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
