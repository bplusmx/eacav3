<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Muestra Nav Tabs de Bootstrap de una lista de categorias
 * 
 * @see eaca_nav_list_terms() Para opciones de la variable $options
 * 
 * @param object[] $term_list   Lista de taxonomias
 * @param array    $options     Opciones de eaca_nav_list_terms()
 */
function eaca_nav_tabs_terms($term_list, $options)
{
    $required_class = 'nav nav-tabs';
    
    if (!empty($options['class'])) {
        $options['class'] = $required_class . ' ' . $options['class'];
    }
    
    eaca_nav_list_terms($term_list, $options);
}

/**
 * Crea un tab-pane sin contenido
 * 
 * @param object $term
 * @param bool $active
 */
function eaca_tab_pane_empty_from_term($term, $active = false)
{
    eaca_tab_pane_from_term($term, $active, false);
}

/**
 * Crea un tab-pane a partir de una categoría (term), utiliza el "slug" como identificador (id) 
 * del panel para poder ser activada por la pestaña con una referencia.
 * 
 * Opcionalmente puede crearlo sin contenido.
 * 
 * @param object $term
 * @param bool $active
 * @param bool $show_content
 */
function eaca_tab_pane_from_term($term, $active = false, $show_content = true)
{
    // Buscamos solo los de la categoría
    $query_args = array(
        'cat' => $term->term_id
    );
    
    // Opciones para mostrar
    $options = array(
        'id'            => $term->slug,
        'active'        => $active,
        'show_more_url' => get_term_link($term),  // Enlace a la categoría      
        'show_content'  => $show_content
    );
    
    eaca_tab_pane_from_query($query_args, $options);
}

/**
 * Genera pestañas y sus contenidos a partir de una lista de categorías (terms)
 * 
 * @param object[]  $term_list  Lista de categorias
 * @param array     $options    Opciones de eaca_nav_list_terms()
 * @see eaca_nav_list_terms()
 */
function eaca_tab_component_from_terms($term_list, $options)
{
    eaca_nav_tabs_terms($term_list, $options);
    eaca_tab_content_from_terms($term_list, $options);
}

/**
 * Crea el contenido de una pestaña (tab-pane) a partir de una consulta.
 * 
 * $default_args = array(
 *     'active'         => false,
 *     'show_content'   => true,
 *     'show_more_url'  => '',
 *     'show_more_text' => 'Ver más',
 *     'layout'         => '1x2'
 * );
 * 
 * @param array $query_args
 * @param array $options {
 *  @type bool      $active             Agrega la clase active si es true
 *  @type bool      $show_content       Muestra contenido dentro del tab-pane
 *  @type string    $show_more_url      URL del enlace
 *  @type string    $show_more_text     Texto del enlace a "Ver más"
 *  @type string    $layout             Nombre del layout (1x2 o 1x4)
 * }
 */
function eaca_tab_pane_from_query($query_args, $options)
{
    $default_args = array(
        'id'             => 'tab-' . rand(),
        'active'         => false,
        'show_content'   => true,
        'show_more_url'  => '',
        'show_more_text' => 'Ver más',
        'layout'         => '1x2'
    );
    
    $options = wp_parse_args($options, $default_args);
    
    $layout_file = get_stylesheet_directory() . '/partials/featured-box-content-' . $options['layout'] . '.php';
    
    ChromePhp::log('eaca_tab_pane_from_query::$layout_file -> ' . $layout_file);
    ?>
    <div class="tab-pane<?php if ($options['active']): ?> active<?php endif ?>" id="<?php echo $options['id'] ?>">
    <?php
    if ($options['show_content']) {
        $featured_box_query_args = $query_args;
        include $layout_file;
    }
    ?>
    <?php if (!empty($options['show_more_url'])): ?>
        <p>
            <a href="<?php echo $options['show_more_url'] ?>"><?php echo $options['show_more_text'] ?></a>
        </p>
    <?php endif ?>
    </div>    
    <?php
}

/**
 * Crea una lista UL > LI con categorias
 * 
 * $default_args = array(
 *     'class'               => '',
 *     'title'               => '',
 *     'active_index'        => 1,
 *     'content_first_only'  => false,
 *     'show_dropdown_after' => 5,
 *     'dropdown_title'      => 'Ver más'
 * );
 * 
 * @param object[]  $term_list              Lista de taxonomias (terms)
 * @param array     $options {              Opciones por defecto.
 *  @type string    $class                  Clase agregada al UL
 *  @type string    $title                  Título de la lista
 *  @type int       $active_index           Pestaña activa, por defecto la 1
 *  @type bool      $content_first_only     Mostrar contenido solo en la primer pestaña
 *  @type bool      $show_dropdown_after    Cantidad de pestañas antes de mostrar un dropdown con el resto de pestañas.
 *  @type string    $dropdown_title         Texto del botón para mostrar el dropdown.
 * }
 */
function eaca_nav_list_terms($term_list, $options)
{
    // Bandera para saber si ya se está usando el dropdown
    $in_dropdown = false;
    
    $default_args = array(
        'class'                 => '',
        'title'                 => '',
        'active_index'          => 1, // Primer tab
        'content_first_only'    => false,
        'show_dropdown_after'   => 5,
        'dropdown_title'        => ''
    );
    
    $options = wp_parse_args($options, $default_args);
    
    $i = 0;
    ?>
    <ul class="<?php echo $options['class'] ?><?php if (!empty($options['title'])): ?> has-title<?php endif ?>">
        <?php if (!empty($options['title'])): ?>
        <strong><?php echo $options['title'] ?></strong>
        <?php endif ?>
        <?php foreach ($term_list as $item): $i++; ?>
        <?php if ($i > $options['show_dropdown_after'] && !$in_dropdown): ?>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <?php echo $options['dropdown_title'] ?> <i class="fa fa-chevron-down"></i>
            </a>
            <ul class="dropdown-menu">
        <?php 
        $in_dropdown = true;
        ChromePhp::log('eaca_nav_list_terms::$in_dropdown -> ' . $in_dropdown);
        
        endif ?>

        <li<?php if ($i == $options['active_index']): ?> class="active"<?php endif ?>>
            <a href="#<?php echo $item->slug ?>" data-toggle="tab"><?php echo $item->name ?></a>
        </li>                                        
        <?php endforeach ?>                            
            </ul>
        </li>
    </ul>
    <?php
}

/**
 * Crea el contenido de las pestañas
 * 
 * @param object[] $term_list           Lista de categorias
 * @param bool     $content_only_first  Contenido solo en la primer pestaña
 */
function eaca_tab_content_from_terms($term_list, $options)
{
    $i = 0;
    $active = false;
    
    ChromePhp::log('eaca_tab_content_from_terms::is_array($term_list) -> ' . is_array($term_list));
    ?>
    <!-- Tab panes -->
    <div class="tab-content featured-box">
    <?php foreach ($term_list as $term): ?>
    <?php
        $i++;
        $active = false;
        $show = true;

        if ($i == $options['active_index']) {
            $active = true;
        }
        
        // vamos en la segunda tab y el mostrar solo primera está activo
        if ($options['content_first_only'] && $i > 1) {
            $show = false;
        }

        ChromePhp::log('eaca_tab_content_from_terms::foreach() / $term: ' . $term->name . ' / $active: ' . $active . ' / $show: ' . $show);
        eaca_tab_pane_from_term($term, $active, $show);
    ?>
    <?php endforeach ?>
    </div>
    <?php
}