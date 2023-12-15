


<div class="mt-20 flex">
    <div class="flex flex-col my-2 mx-5">
        <div class="">

            <form action="" method="get" class=" flex items-center bg-white rounded-lg border-2 py-1 px-1 md:px-2 w-[200px]">
                <div>

                    <CiSearch className="text-xl mr-2" />
                    <input type="text" name="keyword" id="default-search" class="text-sm md:px-2 flex-grow focus:outline-none" placeholder="Search" />
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
        <div class="text-[20px] overflow-x-auto">
            <table>
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
                    <?php foreach ($items as $item) : ?>
                        <tr class="border-b-2 border-[#9F9F9F] whitespace-nowrap text-center">
                            <td class="py-5"><?= $item["itemId"] ?></td>
                            <td class=""><?= $item["itemName"] ?></td>
                            <td class=""><?= $item["category"] ?></td>
                            <td><?php echo 'Rp' . number_format($item["price"], 0, ',', '.'); ?></td>
                            <td class="">  
                                <input disabled type="number" value="<?= $item["stock"] ?>" id="stockInput<?= $item["itemId"] ?>" class="w-[100px] text-center rounded-[6px] bg-[#F2DFD8]">                              
                            </td>
                            <td class="flex justify-center mt-5 space-x-3">
                                <!-- Edit Button -->
                                <button id="editbutton<?= $item['itemId'] ?>" onclick="toggleEditMode(<?= $item['itemId'] ?>)" class="bg-[#123D6A] p-2 rounded-[6px]">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 12.24L0.5 13.5L1.76 9.00002L10 0.800021C10.0931 0.704775 10.2044 0.629096 10.3271 0.577429C10.4499 0.525761 10.5818 0.499146 10.715 0.499146C10.8482 0.499146 10.9801 0.525761 11.1029 0.577429C11.2256 0.629096 11.3369 0.704775 11.43 0.800021L13.2 2.58002C13.2937 2.67298 13.3681 2.78359 13.4189 2.90544C13.4697 3.0273 13.4958 3.15801 13.4958 3.29002C13.4958 3.42203 13.4697 3.55274 13.4189 3.6746C13.3681 3.79646 13.2937 3.90706 13.2 4.00002L5 12.24Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>

                                <form id="deletebutton<?= $item['itemId'] ?>" action="/delete/<?= $item['itemId']; ?>" method="ost">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button id="deletebutton" action="/delete/<?= $item['itemId']; ?>" class="bg-[#AB3B61] p-2 rounded-[6px]">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 3.5H13" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M2.5 3.5H11.5V12.5C11.5 12.7652 11.3946 13.0196 11.2071 13.2071C11.0196 13.3946 10.7652 13.5 10.5 13.5H3.5C3.23478 13.5 2.98043 13.3946 2.79289 13.2071C2.60536 13.0196 2.5 12.7652 2.5 12.5V3.5Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M4.5 3.5V3C4.5 2.33696 4.76339 1.70107 5.23223 1.23223C5.70107 0.763392 6.33696 0.5 7 0.5C7.66304 0.5 8.29893 0.763392 8.76777 1.23223C9.23661 1.70107 9.5 2.33696 9.5 3V3.5" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M5.5 5.5V11" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8.5 5.5V11" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </form>

                                <!-- Cancel Button -->
                                <button hidden id="cancelbutton<?= $item['itemId'] ?>" onclick="toggleEditMode(<?= $item['itemId'] ?>)" class="bg-[#AB3B61] p-2 rounded-[6px]">
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

                                <!-- Save Button -->
                                <button hidden id="savebutton<?= $item['itemId'] ?>" onclick="saveUpdate(<?= $item['itemId'] ?>)" class="bg-[#32E039] p-2 rounded-[6px]">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.5 8.55005L3.23 12.06C3.32212 12.1797 3.44016 12.277 3.57525 12.3446C3.71034 12.4121 3.85898 12.4482 4.01 12.45C4.15859 12.4518 4.3057 12.4203 4.44063 12.3581C4.57555 12.2958 4.6949 12.2042 4.79 12.09L13.5 1.55005" stroke="#000001" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <script> 

            
            function toggleEditMode(itemId) {
                var stockInput = document.getElementById('stockInput' + itemId);
                stockInput.disabled = !stockInput.disabled;
                stockInput.classList.toggle('bg-[#F2DFD8]');

                var editButton = document.getElementById('editbutton' + itemId);
                editButton.hidden = !editButton.hidden;

                var deletebutton = document.getElementById('deletebutton' + itemId);
                deletebutton.hidden = !deletebutton.hidden;
                
                var cancelbutton = document.getElementById('cancelbutton' + itemId);
                cancelbutton.hidden = !cancelbutton.hidden;

                var savebutton = document.getElementById('savebutton' + itemId);
                savebutton.hidden = !savebutton.hidden;
            }

            function getStockValue(itemId) {
                var stockInput = document.getElementById('stockInput' + itemId);
                return stockInput.value;
            }

            function saveUpdate(itemId) {
                // Get the updated stock value
                var updatedStock = getStockValue(itemId);

                // Make an AJAX request to update the item in the database
                fetch(`/item/updateStock/${itemId}/${updatedStock}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                })
                .then(response => response.json())
                .then(data => {
                    // Handle the response (e.g., show a success message)
                    console.log(data);

                    // Toggle back to non-edit mode
                    toggleEditMode(itemId);

                    // Reload the page to reflect the updated stock
                    location.reload();
                })
                .catch(error => {
                    // Handle errors
                    console.error('Error:', error);

                    // Optionally, handle errors and provide user feedback
                });
                

                // // Toggle back to non-edit mode
                // toggleEditMode(itemId);

                // location.reload();
            }


            </script>
            
            <div class="mt-8 py-5 text-[15px] flex">
                
                <?=$pager->simpleLinks()?>
                
            </div>

        </div>
    </div>
</div>
