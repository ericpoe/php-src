--TEST--
Bug #55157 ArrayIterator always skips the second element in the array when calling offsetUnset()
--FILE--
<?php
$nums = range(0, 3);
$numIt = new ArrayIterator($nums);

for ($numIt->rewind(); $numIt->valid();) {
    echo "{$numIt->key()} => {$numIt->current()}\n";
    $numIt->offsetUnset($numIt->key());
}
?>
--EXPECT--
0 => 0
1 => 1
2 => 2
3 => 3