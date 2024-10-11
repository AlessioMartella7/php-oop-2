<?php 

trait Discountable{
    public $discount;

    public function applyDiscount($discountAmount){
        if ($discountAmount >= 0 && $discountAmount <= 100) {
            $discountedPrice = $this->price * ((100 - $discountAmount) / 100);
           return $discountedPrice;
        }
    }
}

?>