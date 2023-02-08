<?php 
if ($valorGrupo == "3" || $valorGrupo == "4" || $valorGrupo == "5" || $valorGrupo == "6") { ?>
        <label class="col-lg-3 control-label" for="">Capacitación: <em>*</em></label>
        <div class="col-lg-9">
            <select name="claves" id="CCAClave"  class="form-control">
                <option value="">-Elige una Opción-</option>
                <?php foreach ($capacitaciones as $key => $listCap) { ?>
                    <option value="<?= $listCap['FIdFormacion'] ?>"><?= $listCap['FNombre'] ?></option>                    
                <?php } ?>
            </select>
        </div> 
    <?php } else { ?>
            <input type="hidden" id="CCAClave" name="claves" value="" class="form-group">
<?php }  ?>