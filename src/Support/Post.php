<?php
namespace Swiftmade\Blogdown\Support;

use stdClass;

class Post extends stdClass
{
    private $_author;

    public static function fromHtml($html, $meta)
    {
        $instance = new self;
        $instance->html = $html;
        $instance->meta = $meta;

        return $instance;
    }
}
