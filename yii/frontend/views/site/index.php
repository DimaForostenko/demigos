<?php

/** @var yii\web\View $this */


use yii\helpers\Html as HelpersHtml;

$this->title = 'My Yii Application';
?>
<div class="site-index">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-active">
      <th scope="row">Active</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>
        <span><?= HelpersHtml::a('View') ?></span>
        <span><?= HelpersHtml::a('Update') ?></span>
        <span><?= HelpersHtml::a('delete') ?></span>
      </td>
    </tr>
  </tbody>
</table>
</div>