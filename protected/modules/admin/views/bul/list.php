<legend>Selenggara::Pengurusan Artikel</legend>

<a href='index.php?r=admin/bul/form'>
    <button class='btn btn-success'>+ Tambah Artikel Baru</button>
</a>
<p/>
<table class='table table-bordered table-striped table-hover'>
    <tr>
        <th>#</th>
        <th>Tajuk</th>
        <th>Status</th>
        <th>Kategori</th>
        <th>Akses</th>
        <th>Dihasilkan Oleh</th>
        <th>Tarikh</th>
        <th>Hits</th>
        <th width="30"></th>
    </tr>
<?php
    $i = $page;
    foreach ($rows as $row) { ?>
        <tr>
            <td><?=$i++?>.</td>
            <td><?=$row['title']?></td>
            <td><?=$row['status']?></td>
            <td><?=$row->pub_cat?></td>
            <td><?=$row['create_by']?></td>
            <td><?=$row['update_dt']?></td>
            <td></td>
            <td></td>
            <td nowrap>
                <a href='index.php?r=admin/bul/form&id=<?=$row['id']?>' title="Kemaskini"><span class="glyphicon glyphicon-pencil"/></a>
                <a href='index.php?r=admin/bul/delete&id=<?=$row['id'] ?>' title="Hapus"><span class="glyphicon glyphicon-trash"/></a>
            </td>
        </tr>
<?php  
    } ?>
</table>

<?php
$this->widget('CLinkPager', array('pages'=>$pages));