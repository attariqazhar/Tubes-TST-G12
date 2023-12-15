
<div class="mx-5 rounded-[15px] flex bg-[#BBB2B5] shadow-xl w-[300px] h-[440px] flex flex-col items-center">
    <h1 class="text-[30px] text-[#AB3B61] mt-10 font-extrabold">Low Stock</h1>
    <div class="text-[20px] overflow-x-auto overflow-y-auto">
        <table >
            <thead>
                <tr class="border-b-2 border-[#9F9F9F] whitespace-nowrap">
                    <th class="w-[100px] py-3">ID</th>
                    <th class="w-[100px]">#Stock</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($lowStockItems as $lowStockItem):?>
                    <tr class="border-b-2 border-[#9F9F9F] whitespace-nowrap text-center">
                        <td class="py-3"><?=$lowStockItem['itemId']?></td>
                        <td class=""><?=$lowStockItem['stock']?></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
                <?php foreach ($lowStockItems as $lowStockItem):?>
                    <tr class="border-b-2 border-[#9F9F9F] whitespace-nowrap text-center">
                        <td class="py-3"><?=$lowStockItem['itemId']?></td>
                        <td class=""><?=$lowStockItem['stock']?></td>
                    </tr>
                <?php endforeach;?>
        </table>
    </div>
</div>