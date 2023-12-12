

<div class="pl-72 pt-10">
    <div class="flex">
        <div class="flex flex-col">
            <div class="flex space-x-4"> 
                <?php
                include 'components/income.php';
                ?>
                <?php
                include 'components/best-selling.php';
                ?>
            </div>
            <?php
            include ('components/table.php');
            ?>
        </div>
        <div class="flex flex-col"> 
            <?php
            include 'components/low-stock.php';
            ?>
            <?php
            include 'components/add-item.php';
            ?>
        </div>
    </div>
</div>
