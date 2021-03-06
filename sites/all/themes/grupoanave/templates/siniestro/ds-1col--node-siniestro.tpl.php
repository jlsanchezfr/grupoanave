<?php

/**
 * @file
 * Display Suite 1 column template.
 */
 $cabina_uid = $elements['author']['#object']->uid;
 $cabina = user_load($cabina_uid);
 $cabina_name = "{$cabina->field_first_name[LANGUAGE_NONE][0]['safe_value']} {$cabina->field_last_name[LANGUAGE_NONE][0]['safe_value']}";
 //print_r(array_keys($elements));exit;
?>
<<?php print $ds_content_wrapper; print $layout_attributes; ?> class="ds-1col <?php print $classes;?> clearfix">

  <h1><?php print $title;?></h1>

  <table class="print">
    <thead>
      <tr>
        <th>Datos Generales</th>
        <th>Lugar de Siniestro</th>
        <th>Agentes</th>
      </tr>
    </thead>
    <tbody><tr>
      <td class="table-generales">
        <table class="print-child">
          <tbody>
            <tr><td>
              <strong>Numero de Contrato:</strong>
              <?php if(isset($elements['field_poliza'])):?>
              <div>
              <?php print render($elements['field_poliza']);?>
              </div>
              <?php endif;?>
            </td></tr>
            
            <tr><td>
              <strong>Fecha de Siniestro:</strong>
              <div>
              <?php print render($elements['post_date']);?>
              </div>
            </td></tr>
            
            <tr class="last"><td>
              <strong>Asegurado:</strong>
              <div>
              <?php print render($elements['asegurado']);?>
              </div>
            </td></tr>
            
          </tbody>
        </table>
      </td>
      
      <td class="table-generales">
        <table class="print-child">
          <tbody>
            <tr><td>
              <strong>Poblaci&oacute;n:</strong>
              <?php if(isset($elements['field_poblacion'])):?>
              <div>
              <?php print render($elements['field_poblacion']);?>
              </div>
              <?php endif;?>
            </td></tr>
            
            <tr><td>
              <strong>Estado:</strong>
              <?php if(isset($elements['field_poblacion'])):?>
              <div>
              <?php print render($elements['field_estado_single']);?>
              </div>
              <?php endif;?>
            </td></tr>
            
            <tr><td>
              <strong>Referencias del Lugar:</strong>
              <?php if(isset($elements['field_lugar_referencias'])):?>
              <div>
              <?php print render($elements['field_lugar_referencias']);?>
              </div>
              <?php endif;?>
            </td></tr>
            
          </tbody>
        </table>
      </td>
      
      <td class="table-agentes">
        <table class="print-child">
          <tbody>
            <tr>
              <td>
                <strong>Cabina:</strong>
                <div>
                <?php print $cabina_name;?>
                </div>
              </td>
            </tr>
            
            <tr>
              <td>
                <strong>Ajustador:</strong>
                <?php if(isset($elements['field_ajustador'])):?>
                <div>
                <?php print render($elements['field_ajustador']);?>
                </div>
                <?php endif;?>
              </td>
            </tr>
            
            <tr>
              <td>
                <strong>Abogado:</strong>
                <?php if(isset($elements['field_abogado'])):?>
                <?php print render($elements['field_abogado']);?>
                <?php endif;?>
              </td>
            </tr>
            
            <tr>
              <td>
                <strong>Hospital:</strong>
                <?php if(isset($elements['field_hospital'])):?>
                <?php print render($elements['field_hospital']);?>
                <?php endif;?>
              </td>
            </tr>
            
            <tr class="last">
              <td>
                <strong>Taller:</strong>
                <?php if(isset($elements['field_taller'])):?>
                <?php print render($elements['field_taller']);?>
                <?php endif;?>
              </td>
            </tr>
            
                        
          </tbody>
        </table>
      </td>
    </tr></tbody>
  </table>
  
  <?php if(isset($elements['poliza_datos_del_vehiculo'])):?>
  <?php print render($elements['poliza_datos_del_vehiculo']);?>
  <?php endif;?>
  
  <?php if(isset($elements['poliza_riesgos_amparados'])):?>
  <?php print render($elements['poliza_riesgos_amparados']);?>
  <?php endif;?>
  
  <?php if(isset($elements['field_conductor'])):?>
  <?php print render($elements['field_conductor']);?>
  <?php endif;?>

  <?php if (isset($elements['field_siniestro_archivo'])):?>
  <table class="print archivos">
    <thead>
      <tr>
        <th width="120" nowrap="nowrap">Fecha</th>
        <th width="70%">Archivo</th>
        <th width="30%">Autor</th>
        <th width="150">Categor&iacute;a</th>
        <th width="120">Operaciones</th>
      </tr>
    </thead>
    <tbody>
      <?php print render($elements['field_siniestro_archivo']);?>
    </tbody>
  </table>
  <?php endif; ?>
  
  <?php if(isset($elements['field_vehiculo_tercero'])):?>
  <?php print render($elements['field_vehiculo_tercero']);?>
  <?php endif;?>
  
  <?php if(isset($elements['field_lesionado'])):?>
  <?php print render($elements['field_lesionado']);?>
  <?php endif;?>
  
  <?php if(isset($elements['links'])):?>
  <?php print render($elements['links']);?>
  <?php endif;?>
</<?php print $ds_content_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
