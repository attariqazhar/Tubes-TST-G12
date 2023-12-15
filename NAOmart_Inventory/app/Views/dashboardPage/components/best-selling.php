

<div class="rounded-[15px] flex bg-[#EDC8B8] text-[#AB3B61] shadow-xl w-[500px]">
    <div class="flex items-center mx-5">
        <svg class="mx-5 my-5" width="60" height="60" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M3.25 3.25H10.75L12.25 10.75M18.25 40.75H55.75L70.75 10.75H12.25M18.25 40.75L12.25 10.75M18.25 40.75L9.65165 49.3483C7.28928 51.7107 8.96241 55.75 12.3033 55.75H55.75M55.75 55.75C51.6079 55.75 48.25 59.1079 48.25 63.25C48.25 67.3921 51.6079 70.75 55.75 70.75C59.8921 70.75 63.25 67.3921 63.25 63.25C63.25 59.1079 59.8921 55.75 55.75 55.75ZM25.75 63.25C25.75 67.3921 22.3921 70.75 18.25 70.75C14.1079 70.75 10.75 67.3921 10.75 63.25C10.75 59.1079 14.1079 55.75 18.25 55.75C22.3921 55.75 25.75 59.1079 25.75 63.25Z" stroke="#AB3B61" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </div>
    <div class="flex flex-col justify-center items-center my-2 mx-5">
        <h1 class="text-[25px]">Best Selling</h1>
        <div>
            <p class="text-[30px] font-extrabold"><?php echo isset($bestSellers[0]['itemName'], $bestSellers[0]['totalAmount']) ? '1. ' . $bestSellers[0]['itemName'] . " (". $bestSellers[0]['totalAmount'] . ")"
    : '1. N/A'; ?></p>
            <p class="text-[30px] font-extrabold"><?php echo isset($bestSellers[1]['itemName'], $bestSellers[1]['totalAmount']) ? '2. ' . $bestSellers[1]['itemName'] . " (". $bestSellers[1]['totalAmount'] . ")"
    : '2. N/A'; ?></p>
            <p class="text-[30px] font-extrabold"><?php echo isset($bestSellers[2]['itemName'], $bestSellers[2]['totalAmount']) ? '3. ' . $bestSellers[2]['itemName'] . " (". $bestSellers[2]['totalAmount'] . ")"
    : '3. N/A'; ?></p>
        </div>
    </div>
</div>