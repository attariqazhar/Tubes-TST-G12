<div class="mx-5 mt-5 rounded-[15px] flex bg-white shadow-xl w-[300px] h-[440px] flex flex-col">
    <div class="flex justify-center">
        <h1 class="text-[30px] text-[#123D6A] mt-10 font-extrabold">Add Item</h1>
    </div>
    <div class="mt-5 mx-5">
        <form onSubmit={handleSearch} class="">
            <div class="flex flex-col">
                <label class="text-sm font-medium" >Item Name</label>
                <input
                    class="px-4 py-2 text-sm rounded-md border border-[#242220]/[0.4]"
                />
            </div>
            <div class="flex flex-col w-[150px]">
                <label class="text-sm font-medium mt-3" htmlFor="password">Category</label>
                <select name="cars" id="cars" class="px-4 py-2 text-sm rounded-md border border-[#242220]/[0.4] ">
                    <option value=""></option>
                    <option value="volvo">Food & Drinks</option>
                    <option value="saab">Stationary</option>
                    <option value="mercedes">Households</option>
                    <option value="audi">Toys</option>
                </select>
            </div>
            <div class="flex flex-col">
                <label class="text-sm font-medium mt-3" >Price</label>
                <input
                    class="px-4 py-2 text-sm rounded-md border border-[#242220]/[0.4]"
                />
            </div>
            <div class="flex flex-col">
                <label class="text-sm font-medium mt-3" >Stock</label>
                <input
                    class="px-4 py-2 text-sm rounded-md border border-[#242220]/[0.4]"
                />
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