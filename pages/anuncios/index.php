<?php 
global $tag;

$tag->tdiv('class="bs-example"');
	$tag->ul('class="nav nav-tabs"');
        $tag->li('class="active"');
        	$tag->a('data-toggle="tab" href="#sectionA"');
        		$tag->imprime('Cadastrar');
        	$tag->a;
        $tag->li;
        
        $tag->li();
        	$tag->a('data-toggle="tab" href="#sectionB"');
        		$tag->imprime('Listar');
        	$tag->a;
        $tag->li;
    $tag->ul;
    
    $tag->div('class="tab-content"');
        $tag->div('id="sectionA" class="tab-pane fade in active"');
           	require_once 'cadastro.php';
        $tag->div;
        $tag->div('id="sectionB" class="tab-pane fade"');
            $tag->h3();
            	$tag->imprime('Listar');
            $tag->h3;
            $tag->p();
            	$tag->imprime('Vestibulum nec erat eu nulla rhoncus fringilla ut non neque.');
            $tag->p;
        $tag->div;
    $tag->div;
$tag->div;
