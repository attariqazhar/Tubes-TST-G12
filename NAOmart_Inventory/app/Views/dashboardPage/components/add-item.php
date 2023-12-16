<div class="mx-5 mt-5 rounded-[15px] flex bg-white shadow-xl w-[300px] h-[440px] flex flex-col">
    <div class="flex justify-center">
        <h1 class="text-[30px] text-[#123D6A] mt-10 font-extrabold">Add Item</h1>
    </div>
    <div class="mt-5 mx-5">
        <form action="<?= base_url('/addItem') ?>" id="addItemForm" method="post">
            <div class="flex flex-col">
                <label class="text-sm font-medium" >Item Name</label>
                <input
                    class="px-4 py-2 text-sm rounded-md border border-[#242220]/[0.4]" type="text" id="itemName" name="itemName"
                />
            </div>
            <div class="flex flex-col w-[150px]">
                <label class="text-sm font-medium mt-3" htmlFor="password">Category</label>
                <select name="category" id="category" required
                    class="px-4 py-2 text-sm rounded-md border border-[#242220]/[0.4] ">
                    <option value=""></option>
                    <option value="Food & Drinks">Food & Drinks</option>
                    <option value="Stationary">Stationary</option>
                    <option value="Households">Households</option>
                    <option value="Toys">Toys</option>
                </select>
            </div>
            <div class="flex flex-col">
                <label class="text-sm font-medium mt-3">Price</label>
                <input class="px-4 py-2 text-sm rounded-md border border-[#242220]/[0.4]" type="number" id="price"
                    name="price" required />
            </div>
            <div class="flex flex-col">
                <label class="text-sm font-medium mt-3">Stock</label>
                <input class="px-4 py-2 text-sm rounded-md border border-[#242220]/[0.4]" type="number" id="stock"
                    name="stock" required />
            </div>
            <div class="flex">
                <button
                    type="submit"
                    class="ml-auto mt-5 w-[75px] h-[30px] bg-[#123D6A] text-white rounded-md "
                >
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const itemNameInput = document.getElementById("itemName");
        const addItemForm = document.getElementById("addItemForm");

        // Extract existing item names from PHP variable $items
        const existingItemNames = <?= json_encode(array_column($items, 'itemName')) ?>;

        addItemForm.addEventListener("submit", function (event) {
            // Perform custom validation before submitting the form
            if (!isItemNameUnique(itemNameInput.value)) {
                alert("Item name must be unique. Please choose a different name.");
                event.preventDefault(); // Prevent form submission
            }
        });

        // Function to check if the item name is unique
        function isItemNameUnique(itemName) {
            // Check if the new item name is not in the existing names
            return !existingItemNames.includes(itemName);
        }
    });
</script>