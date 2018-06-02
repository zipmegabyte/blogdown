<?php

namespace Swiftmade\Blogdown\Modifiers;

use Swiftmade\Blogdown\Contracts\ModifierInterface;

class TableModifier implements ModifierInterface
{

    public function apply($html): string 
    {
        return str_replace('<table>', '<table class="table table-bordered">', $html);
    }

}
