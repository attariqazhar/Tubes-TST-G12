<div class="">
    <div class="flex justify-center items-center mt-4">
        <div class="flex justify-center w-screen">
            <div  class="font-maven text-[50px] italic font-extrabold text-[#017FCC] flex justify-center space-x-5">
                <a href="/">NAOmart</a>
                <a href="/">
                    <svg class="mt-2" width="51" height="55" viewBox="0 0 51 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M36.3333 24.7917V13.9583C36.3333 7.97525 31.4831 3.125 25.5 3.125C19.5169 3.125 14.6667 7.97525 14.6667 13.9583V24.7917M6.54168 19.375H44.4583L47.1667 51.875H3.83334L6.54168 19.375Z" stroke="#FFC220" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div> 
    </div>
    <hr class="h-1 my-4 mx-5 bg-[#C0BDBD] ">

    <div class="ml-20">
        <div class="flex">
            <svg class="m-10" width="200" height="200" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M37.3333 20.125C37.3333 22.733 36.2973 25.2341 34.4532 27.0782C32.6091 28.9223 30.1079 29.9584 27.5 29.9584C24.892 29.9584 22.3908 28.9223 20.5467 27.0782C18.7026 25.2341 17.6666 22.733 17.6666 20.125C17.6666 17.5171 18.7026 15.0159 20.5467 13.1718C22.3908 11.3277 24.892 10.2917 27.5 10.2917C30.1079 10.2917 32.6091 11.3277 34.4532 13.1718C36.2973 15.0159 37.3333 17.5171 37.3333 20.125ZM32.4166 20.125C32.4166 21.429 31.8986 22.6796 30.9766 23.6016C30.0545 24.5237 28.8039 25.0417 27.5 25.0417C26.196 25.0417 24.9454 24.5237 24.0234 23.6016C23.1013 22.6796 22.5833 21.429 22.5833 20.125C22.5833 18.821 23.1013 17.5705 24.0234 16.6484C24.9454 15.7264 26.196 15.2084 27.5 15.2084C28.8039 15.2084 30.0545 15.7264 30.9766 16.6484C31.8986 17.5705 32.4166 18.821 32.4166 20.125Z" fill="black"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M27.5 0.458344C12.5656 0.458344 0.458313 12.5656 0.458313 27.5C0.458313 42.4344 12.5656 54.5417 27.5 54.5417C42.4344 54.5417 54.5417 42.4344 54.5417 27.5C54.5417 12.5656 42.4344 0.458344 27.5 0.458344ZM5.37498 27.5C5.37498 32.6379 7.12777 37.3678 10.0655 41.1241C12.1286 38.4148 14.7902 36.2191 17.8423 34.7086C20.8944 33.1981 24.2544 32.4137 27.6598 32.4167C31.0211 32.4135 34.3389 33.1776 37.3602 34.6508C40.3815 36.1239 43.0267 38.2673 45.0943 40.9176C47.2243 38.124 48.6585 34.8633 49.2781 31.4053C49.8977 27.9473 49.685 24.3915 48.6576 21.0321C47.6302 17.6727 45.8176 14.6062 43.3697 12.0864C40.9219 9.56654 37.9092 7.66583 34.5809 6.54151C31.2527 5.41719 27.7045 5.10157 24.2301 5.62078C20.7556 6.13998 17.4547 7.47908 14.6005 9.52727C11.7464 11.5755 9.42093 14.2739 7.81667 17.3992C6.21241 20.5245 5.37542 23.987 5.37498 27.5ZM27.5 49.625C22.4209 49.6326 17.4952 47.8854 13.5563 44.6789C15.1418 42.4092 17.252 40.556 19.7075 39.2771C22.1631 37.9982 24.8912 37.3314 27.6598 37.3334C30.3938 37.3312 33.089 37.9813 35.5213 39.2298C37.9537 40.4782 40.0531 42.289 41.6452 44.5117C37.6758 47.8223 32.6688 49.6323 27.5 49.625Z" fill="black"/>
            </svg>
            <div class="flex flex-col ml-20 my-3 justify-center space-y-3 text-[25px] text-[#017FCC] font-bold">
                <p>Name</p>
                <p>Username</p>
                <p>Email</p>
                <p>Gender</p>
            </div>
            <div class="flex flex-col ml-20 my-3 justify-center space-y-3 text-[25px]">
                <p><?php echo (session("name"));?></p>
                <p><?php echo (session("username"));?>
                <p><?php echo (session("email"));?></p>
                <p><?php echo (session("gender"));?></p>
            </div>
            <div>
                <a href="/logout">
                    <div class="bg-[#AB3B61] ml-10 mt-[250px] flex justify-center items-center space-x-2 rounded-[10px] text-white font-bold w-[120px] h-[40px]">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.5715 14.9999V17.8571C13.5715 18.236 13.421 18.5993 13.1531 18.8672C12.8852 19.1352 12.5218 19.2857 12.1429 19.2857H2.14293C1.76405 19.2857 1.40068 19.1352 1.13277 18.8672C0.864865 18.5993 0.714355 18.236 0.714355 17.8571V2.1428C0.714355 1.76392 0.864865 1.40056 1.13277 1.13265C1.40068 0.864743 1.76405 0.714233 2.14293 0.714233H12.1429C12.5218 0.714233 12.8852 0.864743 13.1531 1.13265C13.421 1.40056 13.5715 1.76392 13.5715 2.1428V4.99995" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9.28589 10H19.2859" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16.4287 7.14282L19.2859 9.99997L16.4287 12.8571" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div>Log Out</div>
                    </div>
                </a>
            </div>
        </div>

        <h1 class="text-[35px] font-bold text-[#F16B44]">Your Transaction History</h1>
        <div class="text-[20px] overflow-x-auto">
            <?php if (!empty($transactions)): ?>
                <table>
                    <thead>
                        <tr class="border-b-2 border-[#9F9F9F] whitespace-nowrap">
                            <th class="w-[100px] py-5">Transaction ID</th>
                            <th class="w-[200px] py-5">Item Name</th>
                            <th class="w-[100px] py-5">Amount</th>
                            <th class="w-[200px] py-5">Total Price</th>
                            <th class="w-[100px] py-5">Transaction Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($transactions as $transaction): ?>
                            <tr class="border-b-2 border-[#9F9F9F] whitespace-nowrap text-center">
                                <td class="py-5"><?php echo esc($transaction['transactionId']); ?></td>
                                <td><?php echo esc($transaction['itemName']); ?></td>
                                <td><?php echo esc($transaction['amount']); ?></td>
                                <td><?php echo 'Rp' . number_format($transaction['totalPrice'], 0, ',', '.'); ?></td>
                                <td><?php echo date('d-m-Y', strtotime($transaction['transactionDate'])); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="mt-8 py-5 text-[15px]">
                    <button class="px-5">
                        Previous page
                    </button>
                    
                    <button class="px-5">
                        Next page
                    </button>
                </div>
            <?php else: ?>
                <p>You haven't bought anything...</p>
            <?php endif; ?>
        </div>
    </div>
</div>

