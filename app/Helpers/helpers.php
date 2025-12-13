<?php

if (!function_exists('formatRupiah')) {
    function formatRupiah($amount)
    {
        return 'Rp' . number_format($amount, 0, ',', '.');
    }
}

if (!function_exists('generateInvoiceNumber')) {
    function generateInvoiceNumber()
    {
        return 'INV-' . date('Ymd') . '-' . strtoupper(\Illuminate\Support\Str::random(6));
    }
}

if (!function_exists('calculateDiscount')) {
    function calculateDiscount($price, $discount)
    {
        return $price - ($price * $discount / 100);
    }
}
