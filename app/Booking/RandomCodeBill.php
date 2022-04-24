<?php
namespace App\Booking;
use App\Models\Booking;
class RandomCodeBill {
    public function getRandomCodeBill(){
        $code = "";
        $characters = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $charactersLength = strlen($characters);
        for ($i = 0; $i < 6; $i++) {
            $code .= $characters[rand(0, $charactersLength - 1)];
        }
        if(Booking::where('bill_code', $code)->exists()){
            $this->getRandomCodeBill();
        }
        return $code;
    }
}

?>
