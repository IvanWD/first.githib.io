<?php
$rows = 10;
$cols = 10;
$color = 'yellow';
/**
 * [
 *  [color => '', rows=>'', cols=>'']
 *  [color => '', rows=>'', cols=>'']
 *  [color => '', rows=>'', cols=>'']
 *  [color => '', rows=>'', cols=>'']
 *  [color => '', rows=>'', cols=>'']
 *  [color => '', rows=>'', cols=>'']
 * ]
 */
$history = getCookie('history', []);
if(is_string($history)){
    $history = unserialize($history);
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $rows = getData('rows', 10);
    $cols = getData('cols', 10);
    $color = getData('color', 'yellow');



    array_unshift($history, [
        'color' => $color,
        'rows'  => $rows,
        'cols'  => $cols
    ]);

    setcookie('history', serialize($history), 0x7FFFFFFF);
}
?>
<form class="form-inline" method="post" action="<?= $_SERVER['REQUEST_URI'] ?>">
    <div class="form-group">
        <label for="rows">Ряды</label>
        <input type="text" class="form-control" id="rows" placeholder="Ряды" name="rows">
    </div>
    <div class="form-group">
        <label for="cols">Колонки</label>
        <input type="text" class="form-control" id="cols" name="cols" placeholder="Колонки">
    </div>
    <div class="form-group">
        <label for="cols">Цвет</label>
        <input type="color" name="color" class="form-control" id="cols" placeholder="Колонки">
    </div>
    <button type="submit" class="btn btn-default">Нарисовать</button>
</form>
<?php
table($rows, $cols, $color);
?>

<?php if(is_array($history) && count($history)): ?>
    <table class="table table-bordered">
        <tr>
            <th>Ряды</th>
            <th>Колонки</th>
            <th>Цвет</th>
        </tr>

        <?php foreach($history as $item): ?>
            <tr>
                <td><?= $item['rows'] ?></td>
                <td><?= $item['cols'] ?></td>
                <td>
                    <div style="width: 20px;height: 20px;background-color: <?=$item['color']?>;"></div>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
