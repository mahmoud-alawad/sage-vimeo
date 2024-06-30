<?php

namespace Mahmoud\SageVimeo;

class SageVimeo
{
    /**
     * Config
     *
     * @var array
     */
    protected $config = [
        'path' => '',
        'class' => '',
        'directives' => '',
        'attributes' => [],
    ];

    /**
     * Initialize Vimeo
     *
     * @param  array $config
     * @return void
     */
    public function __construct($config = [])
    {
        $this->config = collect($this->config)->merge($config);
    }
}
