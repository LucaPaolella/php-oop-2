<?php
trait DiscountTrait
{
    public function applyDiscount($amount, $discountPercent)
    {
        $discountedAmount = $amount * (1 - ($discountPercent / 100));
        return $discountedAmount;
    }
}
