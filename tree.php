<?php

namespace CodeInBB;
// Associative arrays

function tree(int $size, string $treeChar = '*'): string
{
    if ($size <= 0) {
        throw new \LengthException('Invalid tree length');
    }

    $tree = '';
    $baseSize = 2 * $size - 1;

    for ($i = 1; $i <= $size; ++$i) {
        $levelWidth = 2 * $i - 1;
        $space = ($baseSize - $levelWidth) / 2;

        $tree .= str_repeat(' ', $space);
        $tree .= str_repeat($treeChar, $levelWidth);
        $tree .= "\n";
    }

    return $tree;
}

echo tree(4);
echo tree(4, '+');
