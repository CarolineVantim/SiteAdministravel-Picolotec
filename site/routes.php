<?php

if (resolve('/')){
    render('site/home', 'site');
}elseif (resolve('/contato')){
    render('site/contato', 'site');
}else {
    echo 'Pagina não encontrada';
}