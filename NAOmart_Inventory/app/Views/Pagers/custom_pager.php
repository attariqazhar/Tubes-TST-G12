<?php

use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */
$pager->setSurroundCount(0);
?>

<style>
    .pager {
        list-style: none;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .pager li {
        margin: -10px 10px; /* Adjust margin for spacing between elements */
		font-size: 18px;
    }

    .pager-text {
        font-size: 18px; /* Adjust the font size as needed */
    }
</style>

<nav>
	<ul class="pager flex">
		<li <?= $pager->hasPrevious() ? '' : 'class="disabled"' ?>>
			<a href="<?= $pager->getPrevious() ?? '#' ?>" aria-label="<?= lang('Pager.previous') ?>">
				<div class="w-[100px] h-[30px] bg-[#123D6A] text-white rounded-md flex justify-center items-center">
					<span aria-hidden="true"><?= lang('Pager.previous') ?></span>
				</div>
			</a>
			
		</li>
		<li>
            <span class="pager-text">
                <?= $pager->getCurrentPageNumber() ?> of <?= $pager->getPageCount() ?> 
            </span>
        </li>
		<li <?= $pager->hasNext() ? '' : 'class="disabled"' ?>>
			<a href="<?= $pager->getnext() ?? '#' ?>" aria-label="<?= lang('Pager.next') ?>">
				<div class="w-[100px] h-[30px] bg-[#123D6A] text-white rounded-md flex justify-center items-center">
					<span aria-hidden="true"><?= lang('Pager.next') ?></span>
				</div>
			</a>

		</li>
	</ul>
</nav>
