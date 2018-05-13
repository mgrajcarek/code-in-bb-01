<?php

namespace CodeInBB;

function halfOfTree(int $size): string
{
    if ($size <= 0) {
        throw new \LengthException('Invalid tree length');
    }

    $tree = '';

    for ($i = 1; $i <= $size; ++$i) {
        $tree .= str_repeat('*', $i);
        $tree .= "\n";
    }

    return $tree;
}

echo halfOfTree(4);