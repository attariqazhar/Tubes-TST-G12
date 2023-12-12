<div class="mt-20 flex">
    <div class="flex flex-col my-2 mx-5">
        <div class="">
        <form onSubmit={handleSearch} class=" flex items-center bg-white rounded-lg border-2 py-1 px-1 md:px-2 w-[200px]">
            <svg width="20" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.98338 17.5C14.3556 17.5 17.9 13.9556 17.9 9.58335C17.9 5.2111 14.3556 1.66669 9.98338 1.66669C5.61112 1.66669 2.06671 5.2111 2.06671 9.58335C2.06671 13.9556 5.61112 17.5 9.98338 17.5Z" stroke="#4C4C4C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M18.7334 18.3334L17.0667 16.6667" stroke="#4C4C4C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

            <CiSearch className="text-xl mr-2"/>
            <input
                type="text"
                id="default-search"
                class="text-sm md:px-2 flex-grow focus:outline-none"
                placeholder="Search"
            />
        </form>
        </div>
        <div class="text-[20px] overflow-x-auto">
            <table >
                <thead>
                    <tr class="border-b-2 border-[#9F9F9F] whitespace-nowrap">
                        <th class="w-[100px] py-5">ID</th>
                        <th class="w-[200px]">Item Name</th>
                        <th class="w-[200px]">Category</th>
                        <th class="w-[150px]">Price</th>
                        <th class="w-[100px]">#Stock</th>
                        <th class="w-[150px]">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b-2 border-[#9F9F9F] whitespace-nowrap text-center">
                        <td class="py-5">1423</td>
                        <td class="">Dodol</td>
                        <td class="">Food & Drinks</td>
                        <td class="">Rp30.000</td>
                        <td class="">133</td>
                        <td class="">
                            <button class="bg-[#123D6A] p-2 rounded-[6px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12.24L0.5 13.5L1.76 9.00002L10 0.800021C10.0931 0.704775 10.2044 0.629096 10.3271 0.577429C10.4499 0.525761 10.5818 0.499146 10.715 0.499146C10.8482 0.499146 10.9801 0.525761 11.1029 0.577429C11.2256 0.629096 11.3369 0.704775 11.43 0.800021L13.2 2.58002C13.2937 2.67298 13.3681 2.78359 13.4189 2.90544C13.4697 3.0273 13.4958 3.15801 13.4958 3.29002C13.4958 3.42203 13.4697 3.55274 13.4189 3.6746C13.3681 3.79646 13.2937 3.90706 13.2 4.00002L5 12.24Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            </button>
                            <button class="bg-[#AB3B61] p-2 rounded-[6px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 3.5H13" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2.5 3.5H11.5V12.5C11.5 12.7652 11.3946 13.0196 11.2071 13.2071C11.0196 13.3946 10.7652 13.5 10.5 13.5H3.5C3.23478 13.5 2.98043 13.3946 2.79289 13.2071C2.60536 13.0196 2.5 12.7652 2.5 12.5V3.5Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4.5 3.5V3C4.5 2.33696 4.76339 1.70107 5.23223 1.23223C5.70107 0.763392 6.33696 0.5 7 0.5C7.66304 0.5 8.29893 0.763392 8.76777 1.23223C9.23661 1.70107 9.5 2.33696 9.5 3V3.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M5.5 5.5V11" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8.5 5.5V11" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            </button>
                        </td>
                    </tr>
                    <tr class="border-b-2 border-[#9F9F9F] whitespace-nowrap text-center">
                        <td class="py-5">1423</td>
                        <td class="">Dodol</td>
                        <td class="">Food & Drinks</td>
                        <td class="">Rp30.000</td>
                        <td class="">133</td>
                        <td class="">
                            <button class="bg-[#123D6A] p-2 rounded-[6px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12.24L0.5 13.5L1.76 9.00002L10 0.800021C10.0931 0.704775 10.2044 0.629096 10.3271 0.577429C10.4499 0.525761 10.5818 0.499146 10.715 0.499146C10.8482 0.499146 10.9801 0.525761 11.1029 0.577429C11.2256 0.629096 11.3369 0.704775 11.43 0.800021L13.2 2.58002C13.2937 2.67298 13.3681 2.78359 13.4189 2.90544C13.4697 3.0273 13.4958 3.15801 13.4958 3.29002C13.4958 3.42203 13.4697 3.55274 13.4189 3.6746C13.3681 3.79646 13.2937 3.90706 13.2 4.00002L5 12.24Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            </button>
                            <button class="bg-[#AB3B61] p-2 rounded-[6px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 3.5H13" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2.5 3.5H11.5V12.5C11.5 12.7652 11.3946 13.0196 11.2071 13.2071C11.0196 13.3946 10.7652 13.5 10.5 13.5H3.5C3.23478 13.5 2.98043 13.3946 2.79289 13.2071C2.60536 13.0196 2.5 12.7652 2.5 12.5V3.5Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4.5 3.5V3C4.5 2.33696 4.76339 1.70107 5.23223 1.23223C5.70107 0.763392 6.33696 0.5 7 0.5C7.66304 0.5 8.29893 0.763392 8.76777 1.23223C9.23661 1.70107 9.5 2.33696 9.5 3V3.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M5.5 5.5V11" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8.5 5.5V11" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            </button>
                        </td>
                    </tr>
                    <tr class="border-b-2 border-[#9F9F9F] whitespace-nowrap text-center">
                        <td class="py-5">1423</td>
                        <td class="">Dodol</td>
                        <td class="">Food & Drinks</td>
                        <td class="">Rp30.000</td>
                        <td class="">133</td>
                        <td class="">
                            <button class="bg-[#123D6A] p-2 rounded-[6px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12.24L0.5 13.5L1.76 9.00002L10 0.800021C10.0931 0.704775 10.2044 0.629096 10.3271 0.577429C10.4499 0.525761 10.5818 0.499146 10.715 0.499146C10.8482 0.499146 10.9801 0.525761 11.1029 0.577429C11.2256 0.629096 11.3369 0.704775 11.43 0.800021L13.2 2.58002C13.2937 2.67298 13.3681 2.78359 13.4189 2.90544C13.4697 3.0273 13.4958 3.15801 13.4958 3.29002C13.4958 3.42203 13.4697 3.55274 13.4189 3.6746C13.3681 3.79646 13.2937 3.90706 13.2 4.00002L5 12.24Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            </button>
                            <button class="bg-[#AB3B61] p-2 rounded-[6px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 3.5H13" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2.5 3.5H11.5V12.5C11.5 12.7652 11.3946 13.0196 11.2071 13.2071C11.0196 13.3946 10.7652 13.5 10.5 13.5H3.5C3.23478 13.5 2.98043 13.3946 2.79289 13.2071C2.60536 13.0196 2.5 12.7652 2.5 12.5V3.5Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4.5 3.5V3C4.5 2.33696 4.76339 1.70107 5.23223 1.23223C5.70107 0.763392 6.33696 0.5 7 0.5C7.66304 0.5 8.29893 0.763392 8.76777 1.23223C9.23661 1.70107 9.5 2.33696 9.5 3V3.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M5.5 5.5V11" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8.5 5.5V11" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            </button>
                        </td>
                    </tr>
                    <tr class="border-b-2 border-[#9F9F9F] whitespace-nowrap text-center">
                        <td class="py-5">1423</td>
                        <td class="">Dodol</td>
                        <td class="">Food & Drinks</td>
                        <td class="">Rp30.000</td>
                        <td class="">133</td>
                        <td class="">
                            <button class="bg-[#123D6A] p-2 rounded-[6px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12.24L0.5 13.5L1.76 9.00002L10 0.800021C10.0931 0.704775 10.2044 0.629096 10.3271 0.577429C10.4499 0.525761 10.5818 0.499146 10.715 0.499146C10.8482 0.499146 10.9801 0.525761 11.1029 0.577429C11.2256 0.629096 11.3369 0.704775 11.43 0.800021L13.2 2.58002C13.2937 2.67298 13.3681 2.78359 13.4189 2.90544C13.4697 3.0273 13.4958 3.15801 13.4958 3.29002C13.4958 3.42203 13.4697 3.55274 13.4189 3.6746C13.3681 3.79646 13.2937 3.90706 13.2 4.00002L5 12.24Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            </button>
                            <button class="bg-[#AB3B61] p-2 rounded-[6px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 3.5H13" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2.5 3.5H11.5V12.5C11.5 12.7652 11.3946 13.0196 11.2071 13.2071C11.0196 13.3946 10.7652 13.5 10.5 13.5H3.5C3.23478 13.5 2.98043 13.3946 2.79289 13.2071C2.60536 13.0196 2.5 12.7652 2.5 12.5V3.5Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4.5 3.5V3C4.5 2.33696 4.76339 1.70107 5.23223 1.23223C5.70107 0.763392 6.33696 0.5 7 0.5C7.66304 0.5 8.29893 0.763392 8.76777 1.23223C9.23661 1.70107 9.5 2.33696 9.5 3V3.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M5.5 5.5V11" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8.5 5.5V11" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            </button>
                        </td>
                    </tr>
                    <tr class="border-b-2 border-[#9F9F9F] whitespace-nowrap text-center">
                        <td class="py-5">1423</td>
                        <td class="">Dodol</td>
                        <td class="">Food & Drinks</td>
                        <td class="">Rp30.000</td>
                        <td class="">133</td>
                        <td class="">
                            <button class="bg-[#123D6A] p-2 rounded-[6px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12.24L0.5 13.5L1.76 9.00002L10 0.800021C10.0931 0.704775 10.2044 0.629096 10.3271 0.577429C10.4499 0.525761 10.5818 0.499146 10.715 0.499146C10.8482 0.499146 10.9801 0.525761 11.1029 0.577429C11.2256 0.629096 11.3369 0.704775 11.43 0.800021L13.2 2.58002C13.2937 2.67298 13.3681 2.78359 13.4189 2.90544C13.4697 3.0273 13.4958 3.15801 13.4958 3.29002C13.4958 3.42203 13.4697 3.55274 13.4189 3.6746C13.3681 3.79646 13.2937 3.90706 13.2 4.00002L5 12.24Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            </button>
                            <button class="bg-[#AB3B61] p-2 rounded-[6px]">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 3.5H13" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2.5 3.5H11.5V12.5C11.5 12.7652 11.3946 13.0196 11.2071 13.2071C11.0196 13.3946 10.7652 13.5 10.5 13.5H3.5C3.23478 13.5 2.98043 13.3946 2.79289 13.2071C2.60536 13.0196 2.5 12.7652 2.5 12.5V3.5Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4.5 3.5V3C4.5 2.33696 4.76339 1.70107 5.23223 1.23223C5.70107 0.763392 6.33696 0.5 7 0.5C7.66304 0.5 8.29893 0.763392 8.76777 1.23223C9.23661 1.70107 9.5 2.33696 9.5 3V3.5" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M5.5 5.5V11" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8.5 5.5V11" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            </button>
                        </td>
                    </tr>
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
        </div>
    </div>
</div>