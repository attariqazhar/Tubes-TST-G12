<div>
    <div class="flex justify-between items-center mt-4">
        <div class="ml-5 mt-8">
            <form onSubmit={handleSearch} class=" flex items-center bg-white rounded-lg border-2 py-1 px-1 md:px-2 w-[300px]">
                <svg width="20" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.98338 17.5C14.3556 17.5 17.9 13.9556 17.9 9.58335C17.9 5.2111 14.3556 1.66669 9.98338 1.66669C5.61112 1.66669 2.06671 5.2111 2.06671 9.58335C2.06671 13.9556 5.61112 17.5 9.98338 17.5Z" stroke="#4C4C4C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M18.7334 18.3334L17.0667 16.6667" stroke="#4C4C4C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <CiSearch className="text-xl mr-2"/>
                <input
                    type="text"
                    id="default-search"
                    class="text-sm md:px-2 flex-grow focus:outline-none"
                    placeholder="Find your item"
                />
            </form>
        </div>
        <div class="flex justify-center w-screen mr-[260px]">
            <div  class="font-maven text-[50px] italic font-extrabold text-[#017FCC] flex justify-center space-x-5">
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
    <div class="mt-3">
        <div class="ml-5 text-[40px] font-extrabold text-[#F16B44]">
            Recommended Products
        </div>
        <div class="flex space-x-5">
            <!-- ini template card -->
            <div class="ml-5 mt-3 h-[325px] w-[300px] border border-[#6C6C6C] rounded-[15px] shadow-2xl">
                <div class="flex justify-center my-5">
                    <img src="https://i.imgur.com/cl1RPTQ.jpg" title="source: imgur.com" class="w-[165px]" />
                </div>
                <div class="ml-3">
                    <p class="text-[20px]">Lego Star Wars</p>
                    <p class="text-sm">Toys</p>
                    <p class="text-[15px]">Rp 1.000.000</p>
                </div>
                <div class="flex justify-between mx-3 mt-3">
                    <div class="flex border border-[#FFC220] h-[30px]">
                        <button class="border border-[#FFC220] w-[30px] h-[30px] flex justify-center items-center">
                            <svg width="13" height="2" viewBox="0 0 13 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.0416 1.74847H0.958313V0.248474H12.0416V1.74847Z" fill="black"/>
                            </svg>
                        </button>
                        <div class="flex justify-center items-center border border-[#FFC220] w-[30px] h-[30px]">
                            <p>0</p>
                        </div>
                        <button class="border border-[#FFC220] w-[30px] h-[30px] flex justify-center items-center">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 5.71429H5.71429V10H4.28571V5.71429H0V4.28571H4.28571V0H5.71429V4.28571H10V5.71429Z" fill="black"/>
                            </svg>

                        </button>
                    </div>
                    <button class="bg-[#017FCC] rounded-[6px] my-2 text-white font-bold w-[96px]">Order</button>
                </div>
            </div>
            <!-- ini template card -->

        </div>
    </div>
    <div class="mt-3">
        <div class="ml-5 text-[35px] text-[#5E81D1]">
            Catalogue
        </div>
        <div class="flex flex-wrap">
            <!-- Card Biasa -->
            <div class="ml-5 mt-3 h-[325px] w-[300px] border border-[#6C6C6C] rounded-[15px] shadow-2xl">
                <div class="flex justify-center my-5">
                    <img src="https://i.imgur.com/cl1RPTQ.jpg" title="source: imgur.com" class="w-[165px]" />
                </div>
                <div class="ml-3">
                    <p class="text-[20px]">Lego Star Wars</p>
                    <p class="text-sm">Toys</p>
                    <p class="text-[15px]">Rp 1.000.000</p>
                </div>
                <div class="flex justify-between mx-3 mt-3">
                    <div class="flex border border-[#FFC220] h-[30px]">
                        <button class="border border-[#FFC220] w-[30px] h-[30px] flex justify-center items-center">
                            <svg width="13" height="2" viewBox="0 0 13 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.0416 1.74847H0.958313V0.248474H12.0416V1.74847Z" fill="black"/>
                            </svg>
                        </button>
                        <div class="flex justify-center items-center border border-[#FFC220] w-[30px] h-[30px]">
                            <p>0</p>
                        </div>
                        <button class="border border-[#FFC220] w-[30px] h-[30px] flex justify-center items-center">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 5.71429H5.71429V10H4.28571V5.71429H0V4.28571H4.28571V0H5.71429V4.28571H10V5.71429Z" fill="black"/>
                            </svg>

                        </button>
                    </div>
                    <button class="bg-[#017FCC] rounded-[6px] my-2 text-white font-bold w-[96px]">Order</button>
                </div>
            </div>

            <!-- Card Cuci Gudang -->
            <div class="ml-5 mt-3 h-[325px] w-[300px] border border-[#6C6C6C] rounded-[15px] shadow-2xl">
                <div class="flex justify-center my-5">
                    <img src="https://i.imgur.com/cl1RPTQ.jpg" title="source: imgur.com" class="w-[165px]" />
                </div>
                <div class="ml-3">
                    <div>
                        <p class="text-[20px]">Lego Star Wars</p>
                        <p class="text-sm">Toys</p>
                        <p class="text-[15px]">Rp 1.000.000</p>
                    </div>
                    <div>
                </div>
                <div class="flex justify-between mx-3 mt-3">
                    <div class="flex border border-[#FFC220] h-[30px]">
                        <button class="border border-[#FFC220] w-[30px] h-[30px] flex justify-center items-center">
                            <svg width="13" height="2" viewBox="0 0 13 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.0416 1.74847H0.958313V0.248474H12.0416V1.74847Z" fill="black"/>
                            </svg>
                        </button>
                        <div class="flex justify-center items-center border border-[#FFC220] w-[30px] h-[30px]">
                            <p>0</p>
                        </div>
                        <button class="border border-[#FFC220] w-[30px] h-[30px] flex justify-center items-center">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 5.71429H5.71429V10H4.28571V5.71429H0V4.28571H4.28571V0H5.71429V4.28571H10V5.71429Z" fill="black"/>
                            </svg>

                        </button>
                    </div>
                    <button class="bg-[#017FCC] rounded-[6px] my-2 text-white font-bold w-[96px]">Order</button>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3" hidden>
        <div class="ml-5 text-[35px] text-black">
            Search result for "Chicken"
        </div>
        <div class="flex flex-wrap">
            <div class="ml-5 mt-3 h-[325px] w-[300px] border border-black">
                <div class="flex justify-center my-5">
                    <img src="https://i.imgur.com/cl1RPTQ.jpg" title="source: imgur.com" class="w-[165px]" />
                </div>
                <div class="ml-3">
                    <p class="text-[20px]">Lego Star Wars</p>
                    <p class="text-sm">Toys</p>
                    <p class="text-[15px]">Rp 1.000.000</p>
                </div>
                <div class="flex justify-between mx-3 mt-3">
                    <div class="flex border border-[#FFC220] h-[30px]">
                        <button class="border border-[#FFC220] w-[30px] h-[30px] flex justify-center items-center">
                            <svg width="13" height="2" viewBox="0 0 13 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.0416 1.74847H0.958313V0.248474H12.0416V1.74847Z" fill="black"/>
                            </svg>
                        </button>
                        <div class="flex justify-center items-center border border-[#FFC220] w-[30px] h-[30px]">
                            <p>0</p>
                        </div>
                        <button class="border border-[#FFC220] w-[30px] h-[30px] flex justify-center items-center">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 5.71429H5.71429V10H4.28571V5.71429H0V4.28571H4.28571V0H5.71429V4.28571H10V5.71429Z" fill="black"/>
                            </svg>

                        </button>
                    </div>
                    <button class="bg-[#017FCC] rounded-[6px] my-2 text-white font-bold w-[96px]">Order</button>
                </div>
            </div>

        </div>
    </div>
</div>