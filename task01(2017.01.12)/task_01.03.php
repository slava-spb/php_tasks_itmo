<?php

$A = [0, 3];
$B = [-2, 0];
$C = [0, 0];

$AB2 = ($B[0] - $A[0])**2 + ($B[1] - $A[1])**2;
$BC2 = ($C[0] - $B[0])**2 + ($C[1] - $B[1])**2;
$CA2 = ($A[0] - $C[0])**2 + ($A[1] - $C[1])**2;

if ($A == $B || $B == $C || $A == $C) {
    echo 'Это не треугольник';
} else {
    $maxSide = max($AB2, $BC2, $CA2);

    if ($AB2 == $maxSide) {
        if ($AB2 == $BC2 + $CA2) {
            echo 'Треугольник прямоугольный';
        } else {
            echo 'Треугольник не прямоугольный';
        }
    } elseif ($BC2 == $maxSide) {
        if ($BC2 == $AB2 + $CA2) {
            echo 'Треугольник прямоугольный';
        } else {
            echo 'Треугольник не прямоугольный';
        }
    } elseif ($CA2 == $maxSide) {
        if ($CA2 == $AB2 + $BC2) {
            echo 'Треугольник прямоугольный';
        } else {
            echo 'Треугольник не прямоугольный';
        }
    } else echo 'Треугольник не прямоугольный';
}



