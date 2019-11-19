{include file="headerEditorial.tpl"}
    <div class="col">
        <div class="card text-white bg-dark mb-3" style="max-width: 100rem;">
            <div class="card-header">Ingresar los nuevos datos de la EDITORIAL</div>
            
            <form class="bg-danger p-3 w-100" method="POST" action="actualizar_editorial/{$editorial->id_editorial}">
              
                <div class="form-group row">
                    <label class="col-2 col-form-label">nombre:</label>
                    <div class="col-10">
                        <input class="input ListaCatalogo form-control" type="text" name="nombre" value="{$editorial->nombre}" />
                    </div>
                </div>
               
					<div>
						<button class="btn btn-success" id="enviarCatalogo" type="submit">Actualizar Editorial</button>   
					</div>
                
            </form>
        </div>
    </div>
{include file="footer.tpl"}