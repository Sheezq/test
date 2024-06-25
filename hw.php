<?php
function mergeSegments($segments) {
    $n = count($segments);

    $mergedSegments = [];
    $currentSegment = $segments[0];

    for ($i = 1; $i < $n; $i++) {
        $nextSegment = $segments[$i];

        if ($nextSegment[0] <= $currentSegment[1]) {
            $currentSegment[1] = max($currentSegment[1], $nextSegment[1]);
        } else {
            $mergedSegments[] = $currentSegment;
            $currentSegment = $nextSegment;
        }
    }

    $mergedSegments[] = $currentSegment;

    return $mergedSegments;
}

$segments = [[1, 4], [3, 6], [8, 10]];
$result = mergeSegments($segments);
print_r($result);
?>
