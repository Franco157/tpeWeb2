<?php
/* Smarty version 3.1.39, created on 2021-11-24 14:24:28
  from 'D:\xampp\htdocs\projects\web2\templates\formNotebook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619e3d0cc59119_99771481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '899c44d3e2f04603b547c30ec172637c6c32e050' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projects\\web2\\templates\\formNotebook.tpl',
      1 => 1637759170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619e3d0cc59119_99771481 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <form class="form-general" action="addNotebook" method="POST" enctype="multipart/form-data">
        <label for="procesador">Procesador </label>
        <input type="text" name="F_procesador" placeholder="Intel i3 7100u" required />
        <label for="ram">Memoria Ram</label>
        <input type="text" name="F_ram" placeholder="8gb" required  />
        <label for="placa">Placa de Video</label>
        <input type="text" name="F_placa" placeholder="GTX 1050 ti"/>
        <label for="disco">Disco</label>
        <input type="text" name="F_disco" placeholder="500gb" required  />
        <label for="marcas">Marca:</label>
        <select name="F_marca">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaMarcas']->value, 'marca');
$_smarty_tpl->tpl_vars['marca']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
$_smarty_tpl->tpl_vars['marca']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['marca']->value->id_marca;?>
"> <?php echo $_smarty_tpl->tpl_vars['marca']->value->nombre;?>

                </option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <label for="img">Imagen:</label>
        <input type="file" name="F_imagen" id="note-img">
        <br>

        <button>Confirmar</button>
    </form>
</div>
<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
    <div class="alert alert-danger" role="alert">
        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    </div>
<?php }
$_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
