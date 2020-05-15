<?php 
//if the var pages set on employees is greater than 0 means that the query has returned results
//then creates the pagination using the var current that is the actual page of pagination that the user is checking
if ($pages > 0) { ?>
    <ul class="pagination">
        <?php if ($current == 1) { ?>
            <li class="page-item disabled"><a class="page-link">First</a></li>
        <?php } else { ?>
            <li class="page-item"><a class="page-link" href="<?php echo $path ?>index.php?page=1&search=<?php echo $searching ?>">First</a></li>
        <?php } 
            $j = $current > 5 ? $current - 4 : 1;
            if ($j !== 1) { ?>
            <li class="page-item disabled"><a class="page-link">...</a></li>
        <?php } 
            for ($i=$j; $i <= $current + 4 && $i <= $pages; $i++) { 
                if ($i == $current) { ?>
                <li class="page-item active"><a class="page-link"><?php echo $i ?></a></li>
            <?php } else { ?>
                <li class="page-item"><a class="page-link" href="<?php echo $path ?>index.php?page=<?php echo $i ?>&search=<?php echo $searching ?>"><?php echo $i ?></a></li>
            <?php } 
                if ($i == $current + 4 && $i < $pages) { ?>
                <li class="page-item disabled"><a class="page-link">...</a></li>
            <?php } 
            } 
            if ($current == $pages) { ?>
                <li class="page-item disabled"><a class="page-link">Last</a></li>
    <?php   } else { ?>
            <li class="page-item"><a class="page-link" href="<?php echo $path ?>index.php?page=<?php echo $pages ?>&search=<?php echo $searching ?>">Last</a></li>
        <?php } ?>
    </ul>
<?php } ?> 