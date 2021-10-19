<h3>Danh sách hoá đơn</h3>
<table class="table table-bordered list-bill">
    <thead class="thead-dark">
    <tr>
        <th>STT</th>
        <th>Mã hoá đơn</th>
        <th>Người mua</th>

        <th>
            Ngày mua
        </th>
        <th>Trạng thái đơn hàng</th>
    </tr>
    </thead>
    <?php foreach ($bills as $index => $bill): ?>
        <tr>
            <td><?php echo $index + 1 ?></td>
            <td>
                <a href="index.php?page=bills&action=show-detail&id=<?php echo $bill['orderNumber'] ?>"><?php echo $bill['orderNumber'] ?></a>
            </td>
            <td><?php echo $bill['customerName'] ?></td>

            <td><?php echo \Carbon\Carbon::parse($bill['orderDate'])->format('d-m-Y') ?></td>

            <?php if ($bill['status'] == 'Shipped'): ?>
                <td class="text-primary">
                    <?php echo $bill['status'] ?>
                </td>
            <?php elseif ($bill['status'] == 'Shipping'): ?>
                <td class="text-info">
                    <?php echo $bill['status'] ?>
                </td>
            <?php endif; ?>


        </tr>
    <?php endforeach; ?>
</table>