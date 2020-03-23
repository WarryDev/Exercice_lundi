<?php // view/app/article/listing.php ?>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>content</th>
            <th>created_at</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($articles as $article) { ?>
        <tr>
            <td><?= $article->id; ?></td>
            <td><?= $article->title; ?></td>
            <td><?= nl2br($article->content); ?></td>
            <td><?= date('d/m/Y',strtotime($article->created_at)); ?></td>
            <td>
                <a href="<?= $view->path('detailarticle',array($article->id)); ?>">Voir</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
