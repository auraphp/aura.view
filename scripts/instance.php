<?php
namespace Aura\View;
require_once dirname(__DIR__) . '/src.php';
return new Template(new EscaperFactory, new TemplateFinder, new HelperLocator([
    'anchor'        =>  function () { return new Helper\Anchor; },
    'attribs'       =>  function () { return new Helper\Attribs; },
    'base'          =>  function () { return new Helper\Base; },
    'datetime'      =>  function () { return new Helper\Datetime; },
    'escape'        =>  function () { return new Helper\Escape(new EscaperFactory); },
    'field'         =>  function () {
        return new Helper\Form\Field([
            'button'         => function () { return new Helper\Form\Input\Button; },
            'checkbox'       => function () { return new Helper\Form\Input\Checked; },
            'color'          => function () { return new Helper\Form\Input\Value; },
            'date'           => function () { return new Helper\Form\Input\Value; },
            'datetime'       => function () { return new Helper\Form\Input\Value; },
            'datetime-local' => function () { return new Helper\Form\Input\Value; },
            'email'          => function () { return new Helper\Form\Input\Value; },
            'file'           => function () { return new Helper\Form\Input\Button; },
            'hidden'         => function () { return new Helper\Form\Input\Value; },
            'image'          => function () { return new Helper\Form\Input\Button; },
            'month'          => function () { return new Helper\Form\Input\Value; },
            'number'         => function () { return new Helper\Form\Input\Value; },
            'password'       => function () { return new Helper\Form\Input\Value; },
            'radio'          => function () { return new Helper\Form\Input\Checked; },
            'range'          => function () { return new Helper\Form\Input\Value; },
            'reset'          => function () { return new Helper\Form\Input\Button; },
            'search'         => function () { return new Helper\Form\Input\Value; },
            'submit'         => function () { return new Helper\Form\Input\Button; },
            'tel'            => function () { return new Helper\Form\Input\Value; },
            'text'           => function () { return new Helper\Form\Input\Value; },
            'time'           => function () { return new Helper\Form\Input\Value; },
            'url'            => function () { return new Helper\Form\Input\Value; },
            'week'           => function () { return new Helper\Form\Input\Value; },
            'radios'         => function () { return new Helper\Form\Radios(new Helper\Form\Input\Checked); },
            'select'         => function () { return new Helper\Form\Select; },
            'textarea'       => function () { return new Helper\Form\Textarea; },
        ]);
    },
    'image'         =>  function () { return new Helper\Image; },
    'input'         =>  function () {
        return new Helper\Form\Input([
            'button'         => function () { return new Helper\Form\Input\Button; },
            'checkbox'       => function () { return new Helper\Form\Input\Checked; },
            'color'          => function () { return new Helper\Form\Input\Value; },
            'date'           => function () { return new Helper\Form\Input\Value; },
            'datetime'       => function () { return new Helper\Form\Input\Value; },
            'datetime-local' => function () { return new Helper\Form\Input\Value; },
            'email'          => function () { return new Helper\Form\Input\Value; },
            'file'           => function () { return new Helper\Form\Input\Button; },
            'hidden'         => function () { return new Helper\Form\Input\Value; },
            'image'          => function () { return new Helper\Form\Input\Button; },
            'month'          => function () { return new Helper\Form\Input\Value; },
            'number'         => function () { return new Helper\Form\Input\Value; },
            'password'       => function () { return new Helper\Form\Input\Value; },
            'radio'          => function () { return new Helper\Form\Input\Checked; },
            'range'          => function () { return new Helper\Form\Input\Value; },
            'reset'          => function () { return new Helper\Form\Input\Button; },
            'search'         => function () { return new Helper\Form\Input\Value; },
            'submit'         => function () { return new Helper\Form\Input\Button; },
            'tel'            => function () { return new Helper\Form\Input\Value; },
            'text'           => function () { return new Helper\Form\Input\Value; },
            'time'           => function () { return new Helper\Form\Input\Value; },
            'url'            => function () { return new Helper\Form\Input\Value; },
            'week'           => function () { return new Helper\Form\Input\Value; },
        ]);
    },
    'links'         =>  function () { return new Helper\Links; },
    'metas'         =>  function () { return new Helper\Metas; },
    'ol'            =>  function () { return new Helper\Ol; },
    'radios'        =>  function () { return new Helper\Form\Radios(new Helper\Form\Input\Checked); },
    'scripts'       =>  function () { return new Helper\Scripts; },
    'scriptsFoot'   =>  function () { return new Helper\Scripts; },
    'select'        =>  function () { return new Helper\Form\Select; },
    'styles'        =>  function () { return new Helper\Styles; },
    'tag'           =>  function () { return new Helper\Tag; },
    'title'         =>  function () { return new Helper\Title; },
    'textarea'      =>  function () { return new Helper\Form\Textarea; },
    'ul'            =>  function () { return new Helper\Ul; },
]));
