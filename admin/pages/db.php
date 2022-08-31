<?php 

$pages_all = function (){
    //buscar todas as páginas
};

$pages_one = function ($id){
    // buscar uma única página
    
};

$pages_create = function (){
    //cadastra uma página
    flash('Registro criado com sucesso!', 'success');
};

$pages_edit = function (){
    // atualiza uma página
    flash('Registro alterado com sucesso!', 'success');
};

$pages_delete = function (){
    //remove uma página
    flash('Registro removido com sucesso!', 'success');
};