<div class="mb-10">
    <div class="flex justify-between items-center mt-4">
        <div class="ml-5 mt-8">
            <form action="search" method="get" class=" flex items-center bg-white rounded-lg border-2 py-1 px-1 md:px-2 w-[200px]">
                <div>
                    <CiSearch className="text-xl mr-2" />
                    <input type="text" name="keyword" id="default-search" class="text-sm md:px-2 flex-grow focus:outline-none" placeholder="Find your items" />
                </div>
                <div>
                    <button type="submit">
                        <svg width="20" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.98338 17.5C14.3556 17.5 17.9 13.9556 17.9 9.58335C17.9 5.2111 14.3556 1.66669 9.98338 1.66669C5.61112 1.66669 2.06671 5.2111 2.06671 9.58335C2.06671 13.9556 5.61112 17.5 9.98338 17.5Z" stroke="#4C4C4C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M18.7334 18.3334L17.0667 16.6667" stroke="#4C4C4C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
        <div class="flex justify-center w-screen mr-[160px]">
            <div class="font-maven text-[50px] italic font-extrabold text-[#017FCC] flex justify-center space-x-5">
                <a href="/">NAOmart</a>
                <a href="/">
                    <svg class="mt-2" width="51" height="55" viewBox="0 0 51 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M36.3333 24.7917V13.9583C36.3333 7.97525 31.4831 3.125 25.5 3.125C19.5169 3.125 14.6667 7.97525 14.6667 13.9583V24.7917M6.54168 19.375H44.4583L47.1667 51.875H3.83334L6.54168 19.375Z" stroke="#FFC220" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="justify-end mr-5 mt-8">
            <a href="/profile-and-transaction" >
                <svg width="40" height="40" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M37.3333 20.125C37.3333 22.733 36.2973 25.2341 34.4532 27.0782C32.6091 28.9223 30.1079 29.9584 27.5 29.9584C24.892 29.9584 22.3908 28.9223 20.5467 27.0782C18.7026 25.2341 17.6666 22.733 17.6666 20.125C17.6666 17.5171 18.7026 15.0159 20.5467 13.1718C22.3908 11.3277 24.892 10.2917 27.5 10.2917C30.1079 10.2917 32.6091 11.3277 34.4532 13.1718C36.2973 15.0159 37.3333 17.5171 37.3333 20.125ZM32.4166 20.125C32.4166 21.429 31.8986 22.6796 30.9766 23.6016C30.0545 24.5237 28.8039 25.0417 27.5 25.0417C26.196 25.0417 24.9454 24.5237 24.0234 23.6016C23.1013 22.6796 22.5833 21.429 22.5833 20.125C22.5833 18.821 23.1013 17.5705 24.0234 16.6484C24.9454 15.7264 26.196 15.2084 27.5 15.2084C28.8039 15.2084 30.0545 15.7264 30.9766 16.6484C31.8986 17.5705 32.4166 18.821 32.4166 20.125Z" fill="black"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M27.5 0.458344C12.5656 0.458344 0.458313 12.5656 0.458313 27.5C0.458313 42.4344 12.5656 54.5417 27.5 54.5417C42.4344 54.5417 54.5417 42.4344 54.5417 27.5C54.5417 12.5656 42.4344 0.458344 27.5 0.458344ZM5.37498 27.5C5.37498 32.6379 7.12777 37.3678 10.0655 41.1241C12.1286 38.4148 14.7902 36.2191 17.8423 34.7086C20.8944 33.1981 24.2544 32.4137 27.6598 32.4167C31.0211 32.4135 34.3389 33.1776 37.3602 34.6508C40.3815 36.1239 43.0267 38.2673 45.0943 40.9176C47.2243 38.124 48.6585 34.8633 49.2781 31.4053C49.8977 27.9473 49.685 24.3915 48.6576 21.0321C47.6302 17.6727 45.8176 14.6062 43.3697 12.0864C40.9219 9.56654 37.9092 7.66583 34.5809 6.54151C31.2527 5.41719 27.7045 5.10157 24.2301 5.62078C20.7556 6.13998 17.4547 7.47908 14.6005 9.52727C11.7464 11.5755 9.42093 14.2739 7.81667 17.3992C6.21241 20.5245 5.37542 23.987 5.37498 27.5ZM27.5 49.625C22.4209 49.6326 17.4952 47.8854 13.5563 44.6789C15.1418 42.4092 17.252 40.556 19.7075 39.2771C22.1631 37.9982 24.8912 37.3314 27.6598 37.3334C30.3938 37.3312 33.089 37.9813 35.5213 39.2298C37.9537 40.4782 40.0531 42.289 41.6452 44.5117C37.6758 47.8223 32.6688 49.6323 27.5 49.625Z" fill="black"/>
                </svg>
            </a>
        </div>
        
    </div>

    <hr class="h-1 my-4 mx-5 bg-[#C0BDBD] ">
    <div id="recommended" class="mt-3">
        <div class="ml-5 text-[40px] font-extrabold text-[#F16B44]">
            Recommended Products
        </div>
        <div class="flex flex-wrap space-x-5">
            <!-- ini best seller -->
            <?php foreach ($bestSellerItems as $bestSellerItem):?>
                <?php if ($bestSellerItem['stock'] > 0): ?>
                    <div class="ml-5 mt-3 h-[325px] w-[300px] border border-[#6C6C6C] rounded-[15px] shadow-xl">
                        <div class="flex justify-center my-5">
                            <?php if ($bestSellerItem['category'] == "Toys"): ?>
                                <img src="https://i.imgur.com/cl1RPTQ.jpg" title="source: imgur.com" class="w-[150px] h-[150px]]" />
                            <?php elseif ($bestSellerItem['category'] == "Food & Drinks"): ?>
                                <img src="https://imgur.com/UyXPCpN.jpg" title="source: imgur.com" class="w-[150px] h-[150px]" />
                            <?php elseif ($bestSellerItem['category'] == "Households"): ?>
                                <img src="https://i.imgur.com/usbw5zM.jpg" title="source: imgur.com" class="w-[150px] h-[150px]" />
                            <?php elseif ($bestSellerItem['category'] == "Stationary"): ?>
                                <img src="https://imgur.com/cVFmMml.jpg" title="source: imgur.com" class="w-[150px] h-[150px]" />
                            <?php endif; ?>
                        </div>
                        <div class="ml-3 flex justify-between">
                            <div>
                            <p class="text-[20px]"><?=$bestSellerItem['itemName']?></p>
                            <p class="text-sm"><?=$bestSellerItem['category']?></p>
                            <p><?php echo 'Rp' . number_format($bestSellerItem["price"], 0, ',', '.'); ?></p>
                            </div>
                            <div class="mr-5">
                                <p class="text-sm">Stock: <?=$bestSellerItem['stock']?></p>
                            </div>
                        </div>
                        <div class="flex justify-end mx-3 mt-3">
                            <!-- Buy Button -->
                            <button id="buybuttonbestseller<?= $bestSellerItem['itemId'] ?>" onclick="toggleEditModeBestSeller(<?= $bestSellerItem['itemId'] ?>)" class="bg-[#017FCC] rounded-[6px] my-2 text-white font-bold w-[96px]">
                                Order
                            </button>     
                            <div hidden id="checkoutcancelbestseller" class="flex justify-center items-center space-x-2">
                                <!-- Input Form -->
                                <input hidden type="number" placeholder="Input amount" id="orderInputbestseller<?= $bestSellerItem["itemId"] ?>" class="w-[125px] h-[24px] rounded-[6px] border border-[#6C6C6C] mr-5 pl-2" min="1" max="<?=$bestSellerItem['stock']?>">    

                                <!-- Cancel Button -->
                                <button hidden id="cancelbuttonbestseller<?= $bestSellerItem['itemId'] ?>" onclick="toggleEditModeBestSeller(<?= $bestSellerItem['itemId'] ?>)" class="rounded-[6px] w-[24px] h-[24px] bg-[#AB3B61] pl-[5px]">
                                    <svg width="14" height="14" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_2345_42)">
                                        <path d="M6.44482 7.06018L14.322 14.9374" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6.06055 14.5551L13.9397 6.67586" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_2345_42">
                                        <rect width="12" height="15.2308" fill="white" transform="translate(0.372559 9.47314) rotate(-45)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </button>

                                <!-- Checkout Button -->
                                <button hidden id="checkoutbuttonbestseller<?= $bestSellerItem['itemId'] ?>" onclick="checkoutBestSeller(<?= $bestSellerItem['itemId'] ?>)" class="bg-[#017FCC] rounded-[6px] my-2 text-white font-bold w-[96px]">
                                    Checkout
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach;?>
        </div>
    </div>
    <div class="mt-3">
        <div id="catalogue"  class="ml-5 text-[35px] text-[#5E81D1]">
            Catalogue
        </div>
        <div class="flex flex-wrap">
            <?php foreach ($itemsData as $item):?>
                <?php if ($item['stock'] > 0):?>
                    <div class="ml-5 mt-3 h-[325px] w-[300px] border border-[#6C6C6C] rounded-[15px] shadow-xl">
                        <?php if ($item['stock'] < 10):?>
                            <div class="absolute ml-[230px] ">
                                <svg width="70" height="70" viewBox="0 0 108 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_d_2311_2)">
                                    <circle cx="54" cy="50" r="50" fill="#64EA89"/>
                                    </g>
                                    <path d="M32.2545 18.4897C31.5783 18.3704 31.0233 18.1202 30.5896 17.7391C30.157 17.3515 29.8563 16.8686 29.6874 16.2905C29.5197 15.7058 29.4978 15.0622 29.6217 14.3597C29.7456 13.6572 29.9863 13.06 30.3438 12.5679C30.7014 12.0758 31.1497 11.7216 31.6888 11.5053C32.2279 11.289 32.8355 11.2404 33.5117 11.3597C34.339 11.5055 34.9788 11.8316 35.4311 12.3378C35.8834 12.844 36.1086 13.4862 36.1068 14.2644L34.6689 14.0109C34.6484 13.6282 34.5215 13.3113 34.2882 13.0603C34.0561 12.8028 33.7234 12.6358 33.2901 12.5594C32.8961 12.4899 32.5374 12.5282 32.2138 12.6742C31.8979 12.8148 31.6332 13.0491 31.4197 13.377C31.2073 13.6984 31.0577 14.1052 30.9709 14.5976C30.8852 15.0835 30.8866 15.517 30.9751 15.8981C31.0636 16.2793 31.2322 16.5899 31.481 16.8301C31.7363 17.0715 32.0609 17.2268 32.4548 17.2963C32.8881 17.3727 33.2529 17.3389 33.5491 17.1948C33.853 17.0453 34.0816 16.8047 34.2348 16.4729L35.6726 16.7264C35.4152 17.4189 34.9879 17.9224 34.3909 18.2368C33.7939 18.5512 33.0818 18.6355 32.2545 18.4897ZM36.4844 19.1137L37.7 12.22L39.0295 12.4544L37.9962 18.314L41.0196 18.8471L40.8373 19.8812L36.4844 19.1137ZM42.0624 20.0972L43.278 13.2036L47.8179 14.0041L47.6287 15.0775L44.4182 14.5114L44.1004 16.3136L47.0154 16.8276L46.8331 17.8617L43.9181 17.3477L43.5812 19.2582L46.7917 19.8243L46.6024 20.8977L42.0624 20.0972ZM47.3887 21.0364L51.1254 14.5873L52.6321 14.8529L53.9278 22.1894L52.5196 21.9411L51.5965 16.2341L48.7773 21.2812L47.3887 21.0364ZM48.7776 19.6668L49.3145 18.6952L52.8204 19.3134L52.9828 20.4082L48.7776 19.6668ZM54.8823 22.3577L56.0978 15.464L58.678 15.919C59.2295 16.0162 59.669 16.1919 59.9965 16.446C60.3306 16.7012 60.5579 17.0053 60.6785 17.3582C60.8002 17.7046 60.8269 18.0715 60.7585 18.4589C60.6937 18.8265 60.5443 19.1556 60.3103 19.446C60.0841 19.7311 59.7697 19.9397 59.3673 20.0718C58.9727 20.1985 58.4897 20.2115 57.9185 20.1108L56.6875 19.8937L56.2117 22.5921L54.8823 22.3577ZM58.4571 22.988L57.5738 19.7048L59.0116 19.9583L59.9737 23.2554L58.4571 22.988ZM56.8577 18.9286L58.0198 19.1335C58.4268 19.2053 58.7429 19.1595 58.9681 18.9961C59.1932 18.8327 59.3341 18.5902 59.3908 18.2685C59.4476 17.9468 59.3969 17.6772 59.2389 17.4598C59.0821 17.2358 58.8002 17.088 58.3931 17.0162L57.2311 16.8113L56.8577 18.9286ZM60.6798 23.3799L64.4164 16.9308L65.9232 17.1965L67.2189 24.533L65.8106 24.2847L64.8876 18.5777L62.0683 23.6248L60.6798 23.3799ZM62.0687 22.0103L62.6056 21.0388L66.1115 21.657L66.2738 22.7518L62.0687 22.0103ZM68.1733 24.7013L69.3888 17.8076L70.7183 18.042L73.049 23.3676L73.8894 18.6012L75.2189 18.8356L74.0034 25.7293L72.6739 25.4948L70.3415 20.1791L69.5028 24.9357L68.1733 24.7013ZM78.4366 26.6328C77.7604 26.5136 77.2054 26.2634 76.7717 25.8823C76.3391 25.4946 76.0384 25.0117 75.8695 24.4336C75.7018 23.849 75.6799 23.2054 75.8038 22.5029C75.9277 21.8004 76.1684 21.2031 76.5259 20.7111C76.8835 20.219 77.3318 19.8648 77.8709 19.6485C78.4099 19.4321 79.0176 19.3836 79.6938 19.5028C80.5211 19.6487 81.1609 19.9747 81.6132 20.4809C82.0655 20.9872 82.2907 21.6294 82.2889 22.4076L80.851 22.154C80.8305 21.7713 80.7036 21.4545 80.4703 21.2035C80.2382 20.9459 79.9055 20.7789 79.4721 20.7025C79.0782 20.6331 78.7195 20.6714 78.3959 20.8174C78.08 20.958 77.8153 21.1923 77.6018 21.5202C77.3894 21.8415 77.2398 22.2484 77.153 22.7408C77.0673 23.2266 77.0687 23.6601 77.1572 24.0413C77.2457 24.4224 77.4143 24.7331 77.6631 24.9733C77.9184 25.2146 78.243 25.37 78.6369 25.4395C79.0702 25.5159 79.435 25.482 79.7312 25.3379C80.0351 25.1884 80.2637 24.9478 80.4169 24.616L81.8547 24.8696C81.5973 25.562 81.17 26.0655 80.573 26.3799C79.976 26.6944 79.2639 26.7787 78.4366 26.6328ZM82.6665 27.2568L83.8821 20.3631L88.422 21.1637L88.2327 22.2371L85.0223 21.671L84.7045 23.4732L87.6195 23.9872L87.4372 25.0213L84.5222 24.5073L84.1853 26.4178L87.3958 26.9839L87.2065 28.0573L82.6665 27.2568ZM47.9279 34.4538C47.429 34.3659 46.9976 34.2018 46.6337 33.9616C46.2765 33.7226 46.0119 33.4187 45.84 33.05C45.6746 32.6823 45.6298 32.2649 45.7054 31.7976L47.1137 32.0459C47.0844 32.2506 47.1045 32.4437 47.174 32.6252C47.2436 32.8066 47.355 32.9617 47.5083 33.0903C47.6694 33.2134 47.8714 33.2964 48.1143 33.3393C48.3244 33.3763 48.5107 33.3753 48.6733 33.3363C48.8436 33.2919 48.9824 33.2148 49.0898 33.1051C49.1971 32.9954 49.2658 32.8552 49.2959 32.6845C49.3272 32.5073 49.3084 32.3449 49.2397 32.1974C49.1775 32.051 49.0757 31.918 48.9343 31.7983C48.7941 31.672 48.6227 31.5504 48.4199 31.4334C48.2237 31.3176 48.0111 31.1988 47.782 31.0772C47.2356 30.7981 46.8445 30.482 46.6089 30.1291C46.3732 29.7761 46.2983 29.3568 46.3839 28.8709C46.4569 28.4573 46.6179 28.1201 46.8669 27.8594C47.116 27.5987 47.4317 27.4208 47.814 27.3258C48.1963 27.2307 48.6139 27.2231 49.067 27.303C49.5331 27.3852 49.9257 27.539 50.2447 27.7645C50.5715 27.9846 50.81 28.2636 50.9602 28.6015C51.1171 28.9405 51.1662 29.3148 51.1075 29.7241L49.6796 29.4723C49.6996 29.3202 49.6786 29.1709 49.6164 29.0246C49.5619 28.8728 49.4694 28.7448 49.3388 28.6405C49.2094 28.5297 49.0463 28.4569 48.8493 28.4222C48.6798 28.3855 48.5176 28.384 48.3627 28.4176C48.2144 28.4524 48.0905 28.522 47.9908 28.6262C47.8924 28.724 47.8281 28.8582 47.798 29.0289C47.769 29.193 47.7841 29.3378 47.8432 29.4633C47.9023 29.5888 47.9966 29.707 48.126 29.8178C48.2565 29.9221 48.4139 30.0277 48.5981 30.1346C48.7835 30.235 48.9847 30.3416 49.2018 30.4543C49.5289 30.6338 49.8192 30.8305 50.0725 31.0445C50.3336 31.253 50.527 31.5003 50.6525 31.7864C50.7781 32.0726 50.8038 32.4258 50.7297 32.8459C50.666 33.207 50.5118 33.5251 50.267 33.8001C50.0287 34.0762 49.7123 34.2777 49.3176 34.4044C48.9229 34.5311 48.4597 34.5476 47.9279 34.4538ZM51.1228 34.8953L54.8595 28.4462L56.3662 28.7119L57.662 36.0484L56.2537 35.8001L55.3307 30.0931L52.5114 35.1402L51.1228 34.8953ZM52.5118 33.5257L53.0486 32.5542L56.5545 33.1724L56.7169 34.2672L52.5118 33.5257ZM58.6164 36.2167L59.8319 29.323L61.1614 29.5574L60.1282 35.417L63.1516 35.9501L62.9692 36.9842L58.6164 36.2167ZM64.1944 37.2002L65.4099 30.3066L69.9499 31.1071L69.7606 32.1805L66.5501 31.6144L66.2324 33.4166L69.1474 33.9306L68.9651 34.9647L66.05 34.4507L65.7132 36.3612L68.9236 36.9273L68.7344 38.0007L64.1944 37.2002Z" fill="black"/>
                                    <g clip-path="url(#clip0_2311_2)">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M32.4471 79.6177C32.8467 77.3515 35.0078 75.8383 37.274 76.2379C39.5402 76.6375 41.0534 78.7986 40.6539 81.0648C40.2543 83.331 38.0932 84.8442 35.827 84.4446C33.5607 84.045 32.0475 81.8839 32.4471 79.6177Z" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M55.0156 83.5971C55.4152 81.3309 57.5763 79.8177 59.8425 80.2173C62.1087 80.6169 63.6219 82.778 63.2223 85.0442C62.8227 87.3104 60.6617 88.8236 58.3954 88.424C56.1292 88.0244 54.616 85.8634 55.0156 83.5971Z" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25.3207 36.0517C25.5205 34.9186 26.601 34.162 27.7341 34.3618L35.9408 35.8088C36.9187 35.9813 37.639 36.8199 37.6619 37.8126L37.867 46.7258L71.0623 52.5791C71.6738 52.6869 72.2053 53.0618 72.512 53.6016C72.8186 54.1415 72.8686 54.79 72.6481 55.3704L66.3246 72.0201C65.7933 73.3873 64.798 74.5242 63.513 75.2316C62.2345 75.9355 60.7501 76.1696 59.3173 75.8938L39.4104 72.3836C37.9697 72.1528 36.6549 71.4251 35.6942 70.3264C34.729 69.2226 34.1827 67.8146 34.1507 66.3488C34.1507 66.3482 34.1507 66.3494 34.1507 66.3488L33.7428 48.6201C33.7389 48.561 33.7375 48.5014 33.7387 48.4414L33.5356 39.6157L27.0106 38.4651C25.8775 38.2653 25.1209 37.1848 25.3207 36.0517ZM37.9647 50.974L38.3164 66.2572C38.3269 66.7461 38.509 67.2156 38.8309 67.5837C39.1527 67.9518 39.5938 68.1949 40.0768 68.2706L40.1162 68.2771L60.0586 71.7935L60.0978 71.8008C60.5776 71.8949 61.0752 71.8173 61.5036 71.5815C61.9299 71.3468 62.2605 70.9703 62.4382 70.5174L67.8588 56.2451L37.9647 50.974Z" fill="black"/>
                                    </g>
                                    <defs>
                                    <filter id="filter0_d_2311_2" x="0" y="0" width="108" height="108" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="4"/>
                                    <feGaussianBlur stdDeviation="2"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2311_2"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2311_2" result="shape"/>
                                    </filter>
                                    <clipPath id="clip0_2311_2">
                                    <rect width="50" height="50" fill="white" transform="translate(25.6824 34) rotate(10)"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        <?php endif;?>
                        
                        <div class="flex justify-center my-5">
                            <?php if ($item['category'] == "Toys"):?>
                                <img src="https://i.imgur.com/cl1RPTQ.jpg" title="source: imgur.com" class="w-[150px] h-[150px]" />
                            <?php elseif ($item['category'] == "Food & Drinks"): ?>
                                <img src="https://imgur.com/UyXPCpN.jpg" title="source: imgur.com" class="w-[150px] h-[150px]" />
                            <?php elseif ($item['category'] == "Households"): ?>
                                <img src="https://i.imgur.com/usbw5zM.jpg" title="source: imgur.com" class="w-[150px] h-[150px]" />
                            <?php elseif ($item['category'] == "Stationary"): ?>
                                <img src="https://imgur.com/cVFmMml.jpg" title="source: imgur.com" class="w-[150px] h-[150px]" />               
                            <?php endif;?>
                        </div>  
                        <div class="ml-3 flex justify-between">
                            <div>
                            <p class="text-[20px]"><?=$item['itemName']?></p>
                            <p class="text-sm"><?=$item['category']?></p>
                            <p><?php echo 'Rp' . number_format($item["price"], 0, ',', '.'); ?></p>
                            </div>
                            <div class="mr-5">
                                <p class="text-sm">Stock: <?=$item['stock']?></p>
                            </div>
                        </div>
                        <div class="flex justify-end mx-3 mt-3">
                            <!-- Buy Button -->
                            <button id="buybutton<?= $item['itemId'] ?>" onclick="toggleEditMode(<?= $item['itemId'] ?>)" class="bg-[#017FCC] rounded-[6px] my-2 text-white font-bold w-[96px]">
                                Order
                            </button>     
                            <div hidden id="checkoutcancel" class="flex justify-center items-center space-x-2">
                                <!-- Input Form -->
                               
                                <input hidden type="number" placeholder="Input amount" id="orderInput<?= $item["itemId"] ?>" class="w-[125px] h-[24px] rounded-[6px] border border-[#6C6C6C] mr-5 pl-2" min="1" max="<?=$item['stock']?>">    
                                
                                <!-- Cancel Button -->
                                <button hidden id="cancelbutton<?= $item['itemId'] ?>" onclick="toggleEditMode(<?= $item['itemId'] ?>)" class="rounded-[6px] w-[24px] h-[24px] bg-[#AB3B61] pl-[5px]">
                                    <svg width="14" height="14" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_2345_42)">
                                        <path d="M6.44482 7.06018L14.322 14.9374" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6.06055 14.5551L13.9397 6.67586" stroke="#FBFBFB" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_2345_42">
                                        <rect width="12" height="15.2308" fill="white" transform="translate(0.372559 9.47314) rotate(-45)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </button>

                                <!-- Checkout Button -->
                                <button hidden id="checkoutbutton<?= $item['itemId'] ?>" onclick="checkout(<?= $item['itemId'] ?>)" action='' class="bg-[#017FCC] rounded-[6px] my-2 text-white font-bold w-[96px]">
                                    Checkout
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endif;?>
            <?php endforeach;?>     
        </div>
    </div>

    <script>
        function getAmount(itemId) {
            var orderAmount = document.getElementById("orderInput" + itemId);
            return orderAmount.value;
        }
        function getAmountBestSeller(itemId) {
            var orderAmount = document.getElementById("orderInputbestseller" + itemId);
            return orderAmount.value;
        }
        function checkout(itemId) {
            // Get the updated stock value
            var updatedStock = getAmount(itemId);

            // Make an AJAX request to update the item in the database
            fetch(`/makeTransaction/${itemId}/${updatedStock}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
            })
            .then(response => response.json())
            .then(data => {
                // Handle the response (e.g., show a success message)
                console.log(data);
            })
            .catch(error => {
                // Handle errors
                console.error('Error:', error);

                // Optionally, handle errors and provide user feedback
            });
            // Toggle back to non-edit mode
            toggleEditMode(itemId);

            // Reload the page to reflect the updated stock
            location.reload();
        }
        function checkoutBestSeller(itemId) {
            // Get the updated stock value
            var updatedStock = getAmountBestSeller(itemId);

            // Make an AJAX request to update the item in the database
            fetch(`/makeTransaction/${itemId}/${updatedStock}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
            })
            .then(response => response.json())
            .then(data => {
                // Handle the response (e.g., show a success message)
                console.log(data);

        
            })
            .catch(error => {
                // Handle errors
                console.error('Error:', error);

                // Optionally, handle errors and provide user feedback
            });
            // Toggle back to non-edit mode
            toggleEditModeBestSeller(itemId);

            // Reload the page to reflect the updated stock
            location.reload();
        }
        function toggleEditModeBestSeller(itemId) {
            var buybutton = document.getElementById("buybuttonbestseller" + itemId);
            buybutton.hidden = !buybutton.hidden;

            var orderInput = document.getElementById("orderInputbestseller" + itemId);
            orderInput.hidden = !orderInput.hidden;

            var checkoutcancel = document.getElementById("checkoutcancelbestseller");
            checkoutcancel.hidden = !checkoutcancel.hidden;

            var cancelbutton = document.getElementById("cancelbuttonbestseller" + itemId);
            cancelbutton.hidden = !cancelbutton.hidden;

            var checkoutbutton = document.getElementById("checkoutbuttonbestseller" + itemId);
            checkoutbutton.hidden = !checkoutbutton.hidden;
        }
        function toggleEditMode(itemId) {
            var buybutton = document.getElementById("buybutton" + itemId);
            buybutton.hidden = !buybutton.hidden;

            var orderInput = document.getElementById("orderInput" + itemId);
            orderInput.hidden = !orderInput.hidden;

            var checkoutcancel = document.getElementById("checkoutcancel");
            checkoutcancel.hidden = !checkoutcancel.hidden;

            var cancelbutton = document.getElementById("cancelbutton" + itemId);
            cancelbutton.hidden = !cancelbutton.hidden;

            var checkoutbutton = document.getElementById("checkoutbutton" + itemId);
            checkoutbutton.hidden = !checkoutbutton.hidden;
        }
        // function getOrderAmount(itemId) {
        //     var orderAmount = document.getElementById("orderInput", + itemId);
        //     return orderAmount.value;
        // }

        // function getTotalPrice(itemId) {
        //     var orderAmount =getOrderAmount(itemId);
        //     var price = document.getElementById("price", + itemId);
        //     var TotalPrice = orderAmount * price.value;
        //     return 

        // }

        // fuction getCurrentStock($itemId,$itemsData)
        // {
        //     foreach ($itemsData as $item)
        //     {
        //         if ($itemId == $item['itemId'])
        //         {
        //             return item['stock'];
        //         }
        //     }
        // }

        // function checkoutOrder(itemId)
        // {
        //     var updatedStock = getCurrentStock(itemId) -getOrderAmount(itemId);
        //     fetch (`/makeTransaction/$itemId/$updatedStock`)
            
        // }

    </script>

</div>